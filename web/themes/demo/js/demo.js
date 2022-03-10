/**
 * @file
 * demo behaviors.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Behavior description.
   */
  Drupal.behaviors.demo = {
    attach: function (context, settings) {

     // console.log('It works!');

    }
  }; 
  
  jQuery('.rmbtn').click(function(e){ e.preventDefault();  });
	
  var baseUrl = drupalSettings.path.baseUrl;

  $(document).on("click", ".reg-btn", function() {
    var nid = $('#get_nid').attr('data-nid');    
    $.ajax({
        url:  baseUrl + "updateprofiles",
        type: 'post', 
        dataType: "json", 
        data:  {nid:nid},          
        success: function (response) {
          location.reload();
        },
    });
});

} (jQuery, Drupal));
