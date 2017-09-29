<?php
/**
  * Performed when user clicks action button on request page in backend.
  *
  * For actions with form, returns form HTML.
  * For actions without form, performs action and returns <script> tag to reload request page.
  * For actions that cannot be performed by backend users, throws an excepton.
  */
class shopWorkflowPrepareController extends waController
{
    public function execute() {
        if (! ( $order_id = waRequest::post('id', 0, 'int'))) {
            throw new waException('No order id given.');
        }
        if (! ( $action_id = waRequest::post('action_id'))) {
            throw new waException('No action id given.');
        }

        $workflow = new shopWorkflow();
        // @todo: check action availablity in state
        $action = $workflow->getActionById($action_id);

        try {
            $html = $action->getHTML($order_id);
        } catch (SmartyCompilerException $e) {
            $msg = 'Syntax Error in template "c819a6f6e20c401f73bc5bf68f3e0857f76eec24" on line 1 "{foreach {$order.items}}{/foreach}" missing "item" attribute';
            preg_match('/^Syntax Error in template ".*?" on line ([\d+]) "(.*?)" (.*?)$/i', $msg, $m);
            if ($m) {
                str_replace($m[0], '', $msg);
                $msg = sprintf(_w("Syntax Error in template for action \"%s\" in line %s \"%s\". Reason: %s. "), $action->getName(), $m[1], $m[2], $m[3]);
            }
            $msg .= sprintf(_w("You can edit template <a href=\"?action=settings#/orderStates/\">order states settings</a>"));
            die("<script>$.shop.alertError('{$msg}');</script>");
        }

        if ($html) {
            // display html
            echo $html;
        } else {

            // perform action and reload
            $result = $action->run($order_id);

            // counters
            $order_model = new shopOrderModel();
            $state_counters = $order_model->getStateCounters();
            $pending_counters =
                (!empty($state_counters['new']) ? $state_counters['new'] : 0) +
                (!empty($state_counters['processing']) ? $state_counters['processing'] : 0) +
                (!empty($state_counters['paid']) ? $state_counters['paid'] : 0);

            // update app coutner
            wa('shop')->getConfig()->setCount($state_counters['new']);

            echo "<script>";
            echo "$.order_list.updateCounters(".json_encode(array(
                'state_counters'  => $state_counters,
                'common_counters' => array(
                    'pending_counters' => $pending_counters
                )
            )).");";
            echo "$.order.reload();</script>";
        }
    }
}
