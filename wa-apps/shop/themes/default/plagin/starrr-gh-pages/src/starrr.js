// Generated by CoffeeScript 1.6.3
(function() {
  var __slice = [].slice;

  (function($, window) {
    var Starrr;
    window.Starrr = Starrr = (function() {
      Starrr.prototype.defaults = {
        rating: void 0,
        max: 5,
        readOnly: false,
        emptyClass: 'fa fa-star-o',
        fullClass: 'fa fa-star',
        change: function(e, value) {}
      };

      function Starrr($el, options) {
        var _this = this;
        this.options = $.extend({}, this.defaults, options);
        this.$el = $el;
        this.createStars();
        this.syncRating();
        if (this.options.readOnly) {
          return;
        }
        this.$el.on('mouseover.starrr', 'a', function(e) {
          return _this.syncRating(_this.getStars().index(e.currentTarget) + 1);
        });
        this.$el.on('mouseout.starrr', function() {
          return _this.syncRating();
        });
        this.$el.on('click.starrr', 'a', function(e) {
          e.preventDefault();
          return _this.setRating(_this.getStars().index(e.currentTarget) + 1);
        });
        this.$el.on('starrr:change', this.options.change);
      }

      Starrr.prototype.getStars = function() {
        return this.$el.find('a');
      };

      Starrr.prototype.createStars = function() {
        var _i, _ref, _results;
        _results = [];
        for (_i = 1, _ref = this.options.max; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
          _results.push(this.$el.append("<a href='#' />"));
        }
        return _results;
      };

      Starrr.prototype.setRating = function(rating) {
        if (this.options.rating === rating) {
          rating = void 0;
        }
        this.options.rating = rating;
        this.syncRating();
        return this.$el.trigger('starrr:change', rating);
      };

      Starrr.prototype.getRating = function() {
        return this.options.rating;
      };

      Starrr.prototype.syncRating = function(rating) {
        var $stars, i, _i, _ref, _results;
        rating || (rating = this.options.rating);
        $stars = this.getStars();
        _results = [];
        for (i = _i = 1, _ref = this.options.max; 1 <= _ref ? _i <= _ref : _i >= _ref; i = 1 <= _ref ? ++_i : --_i) {
          _results.push($stars.eq(i - 1).removeClass(rating >= i ? this.options.emptyClass : this.options.fullClass).addClass(rating >= i ? this.options.fullClass : this.options.emptyClass));
        }
        return _results;
      };

      return Starrr;

    })();
    return $.fn.extend({
      starrr: function() {
        var args, option;
        option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
        return this.each(function() {
          var data;
          data = $(this).data('starrr');
          if (!data) {
            $(this).data('starrr', (data = new Starrr($(this), option)));
          }
          if (typeof option === 'string') {
            return data[option].apply(data, args);
          }
        });
      }
    });
  })(window.jQuery, window);

}).call(this);