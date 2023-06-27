(function(){
  var searchTerm, panelContainerId;
  // Create a new contains that is case insensitive
  jQuery.expr[':'].containsCaseInsensitive = function (n, i, m) {
    return jQuery(n).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
  };
  
  jQuery('#accordion_search_bar').on('change keyup paste click', function () {
    searchTerm = jQuery(this).val();
    if (searchTerm.length >= 3) {
      jQuery('#accordion > .panel').each(function () {
        panelContainerId = '#' + jQuery(this).attr('id');
        jQuery(panelContainerId + ':not(:containsCaseInsensitive(' + searchTerm + '))').hide();
        jQuery(panelContainerId + ':containsCaseInsensitive(' + searchTerm + ')').show().find(".panel-collapse").collapse("show");
      });
    }
    else {
      jQuery(".panel-group > div").show();
      jQuery(".panel-group > div").find(".panel-collapse").collapse("hide");
    }
  });
  }());