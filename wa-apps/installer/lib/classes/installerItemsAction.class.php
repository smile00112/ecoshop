<?php

abstract class installerItemsAction extends waViewAction
{
    protected $module = null;
    protected $redirect = false;
    protected $update_counter = 0;

    protected function getAppOptions()
    {
        return array(
            'installed' => true,
        );
    }

    protected function getExtrasOptions()
    {
        return array(
            'local'  => false,
            'apps'   => false,
            'filter' => (array)waRequest::get('filter'),
        );
    }

    protected function extendApplications(&$applications)
    {
        $apps = wa()->getApps();
        foreach ($applications as $app_id => &$app) {
            if (isset($apps[$app_id])) {
                $app['name'] = $apps[$app_id]['name'];
            } else {
                $app['name'] = _wd($app_id, $app['name']);
            }
            unset($app);
        }
    }

    protected function getTags()
    {
        return array();
    }

    public function execute()
    {
        if (!waRequest::get('_') && false) {
            $this->setLayout(new installerBackendLayout());
        }
        $this->view->assign('action', 'update');

        $this->view->assign('error', false);
        $messages = installerMessage::getInstance()->handle(waRequest::get('msg'));
        $filter = array();
        if ($this->module) {
            if ($this->module != 'widgets') {
                $filter['extras'] = $this->module;
            }
        }


        $app_options = $this->getAppOptions();

        try {

            $applications = installerHelper::getInstaller()->getApps($app_options, $filter);
            $this->extendApplications($applications);
            $subject = waRequest::get('subject');

            if (empty($subject)) {
                $extras = array();
                $search = array();

                $options = $this->getExtrasOptions();


                $slug = waRequest::get('slug');
                if (!empty($options['filter']['slug'])) {
                    $slug = $options['filter']['slug'];
                    unset($options['filter']['slug']);
                }

                if ($slug === 'all') {
                    $search['slug'] = array_keys($applications);
                } else {
                    $search['slug'] = array_filter(array_map('trim', explode(',', $slug)), 'strlen');
                }

                if (in_array($this->module, array('themes', 'widgets'))) {
                    if (empty($search['slug'])) {
                        $search['slug'] = array_keys($applications);
                    }
                } else {
                    foreach ($search['slug'] as $id) {
                        if (isset($applications[$id]) && !empty($applications[$id]['system_plugins'])) {
                            $search['slug'] = array_unique(array_merge($search['slug'], $applications[$id]['system_plugins']));
                        }
                    }
                }

                if ((!$this->redirect || !empty($search['slug']))
                    &&
                    (($keys = installerHelper::search($applications, $search, true)) !== null)
                ) {
                    $slug = array();
                    foreach ($keys as $id => $key) {
                        $slug[$id] = $applications[$key]['slug'];
                    }
                    $vendor_name = null;
                    foreach ((array)$this->module as $module) {

                        $extras = installerHelper::getInstaller()->getExtras($slug, $module, $options);

                        foreach ($extras as $app_id => $app_item) {

                            if (!empty($app_item[$module])) {
                                foreach ($app_item[$module] as $extras_id => $extras_item) {
                                    if (!empty($extras_item['vendor_name']) && !empty($options['filter']['vendor']) && empty($vendor_name)) {
                                        $vendor_name = $extras_item['vendor_name'];
                                    }

                                    if (in_array($app_id, $keys) !== false) {
                                        $app = &$applications[$app_id];
                                        if (!isset($app[$module])) {
                                            $app[$module] = array();
                                        }
                                        $app[$module][$extras_id] = $extras_item;
                                        unset($app);

                                    } elseif (!empty($extras_item['inherited'])) {
                                        foreach (array_keys($extras_item['inherited']) as $app_id) {
                                            if (in_array($app_id, $keys) !== false) {
                                                $app = &$applications[$app_id];
                                                if (!isset($app[$module])) {
                                                    $app[$module] = array();
                                                }
                                                $app[$module][$extras_id] = $extras_item;
                                                unset($app);
                                            }
                                        }
                                    } elseif ($app_id == 'webasyst') {
                                        $alias_id = 'installer';
                                        $app = &$applications[$alias_id];

                                        if (!isset($app[$module])) {
                                            $app[$module] = array();
                                            $app['slug'] = 'webasyst';
                                        }
                                        $app[$module][$extras_id] = $extras_item;
                                        unset($app);
                                    }
                                }
                            }
                        }

                    }

                    foreach ($keys as $id => $key) {
                        $empty = true;
                        foreach ((array)$this->module as $module) {
                            if (!empty($applications[$key][$module])) {
                                $empty = false;

                            }
                        }
                        if ($empty) {
                            unset($slug[$id]);
                        }
                    }


                    $this->view->assign('vendor_name', $vendor_name);
                } else {
                    reset($applications);
                    $app = current($applications);
                    if ($app) {
                        $redirect = array(
                            'module' => $this->module,
                            'slug'   => $app['slug'],
                            'vendor' => $app['vendor'],
                        );
                        $this->redirect($redirect);
                    }

                }


                $this->view->assign('slug', $search['slug']);
                //$this->view->assign('vendor', $search['vendor']);
                $this->view->assign('extras', $extras);
            }

            $this->view->assign('tags', $this->getTags());
            $this->view->assign('apps', $applications);
        } catch (Exception $ex) {
            $message = $ex->getMessage();
            waLog::log($message, 'installer.log');
            if (preg_match('@\b(https?://[^\s]+)\b@', $message, $matches)) {
                $message = str_replace($matches[1], parse_url($matches[1], PHP_URL_HOST), $message);
            }
            $messages[] = array('text' => $message, 'result' => 'fail');
        }

        installerHelper::checkUpdates($messages);
        $model = new waAppSettingsModel();
        $this->view->assign('update_counter', $model->get($this->getApp(), 'update_counter'));
        $this->view->assign('messages', $messages);
        $this->view->assign('title', _w('Installer'));
    }
}
