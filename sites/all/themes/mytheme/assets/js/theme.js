
/* Override the default value if empty with "Search...". */

(function ($) {
  Drupal.behaviors.searchChangeDefaultValue = {
    attach: function (context, settings) {
      $('#search-block-form input.form-text', context).once(function () {
        $(this).val('Search...');
        $(this).addClass('change-color');
        var default_value = this.value;
        $(this).focus(function () {
          if ($(this).val() === default_value) {
            $(this).val('');
            $(this).removeClass('change-color');
          }
        });
        $(this).blur(function () {
          if ($(this).val() === '') {
            $(this).val(default_value);
            $(this).addClass('change-color');
          }
        });
      });
    }
  };
}(jQuery));
