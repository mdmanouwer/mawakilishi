var allowClickRefresh = true;
Drupal.behaviors.facebookStatus = function (context) {
  var initialLoad = false;
  //Drupal passes document as context on page load.
  if (context == document) {
    initialLoad = true;
  }
  //Make sure we can run context.find().
  if (!(context instanceof jQuery)) {
    context = $(context);
  }
  facebook_status_submit_disabled = false;
  var $facebook_status_field = context.find('.facebook_status_text:first');
  var facebook_status_original_value = $facebook_status_field.val();
  var fbss_maxlen = Drupal.settings.facebook_status.maxlength;
  var refreshIDs = Drupal.settings.facebook_status.refreshIDs;
  var lang_prefix = Drupal.settings.facebook_status.lang_prefix;
  if ($.fn.autogrow && $facebook_status_field) {
    //jQuery Autogrow plugin integration.
    $facebook_status_field.autogrow({expandTolerance: 2});
  }
  if (Drupal.settings.facebook_status.autofocus) {
    $facebook_status_field.focus();
  }
  if (Drupal.settings.facebook_status.noautoclear || Drupal.settings.facebook_status.autofocus) {
    if ($facebook_status_field.val().length != 0) {
      fbss_print_remaining(fbss_maxlen - facebook_status_original_value.length, $facebook_status_field.parent().next());
    }
  }
  else {
    $.each(context.find('.facebook_status_text_main'), function(i, val) {
      $(this).addClass('facebook_status_faded');
    });
    //Clear the status field the first time it's in focus if it hasn't been changed.
    context.find('.facebook_status_text_main').one('focus', function() {
      if ($(this).val() == facebook_status_original_value) {
        $(this).val('');
        fbss_print_remaining(fbss_maxlen, $(this).parent().next());
      }
      $(this).removeClass('facebook_status_faded');
    });
  }
  //React when a status is submitted.
  context.find('#facebook_status_replace').bind('ahah_success', function(context) {
    if ($(context.target).html() != $(this).html()) {
      return;
    }
    if (Drupal.heartbeat) {
      Drupal.heartbeat.pollMessages();
    }
    //Refresh elements by re-loading the current page and replacing the old version with the updated version.
    var loaded = {};
    if (refreshIDs && refreshIDs != undefined) {
      var loaded2 = {};
      $.each(refreshIDs, function(i, val) {
        if (val && val != undefined) {
          if ($.trim(val) && loaded2[val] !== true) {
            loaded2[val] = true;
            var element = $(val);
            element.before('<div class="fbss-remove-me ahah-progress ahah-progress-throbber" style="display: block; clear: both; float: none;"><div class="throbber">&nbsp;</div></div>');
          }
        }
      });
      //IE will cache the result unless we add an identifier (in this case, the time).
      $.get(window.location.pathname +"?ts="+ (new Date()).getTime(), function(data, textStatus) {
        //From load() in jQuery source. We already have the scripts we need.
        var new_data = data.replace(/<script(.|\s)*?\/script>/g, "");
        //From ahah.js. Apparently Safari crashes with just $().
        var new_content = $('<div></div>').html(new_data);
        if (textStatus != 'error' && new_content) {
          //Replace relevant content in the viewport with the updated version.
          $.each(refreshIDs, function(i, val) {
            if (val && val != undefined) {
              if ($.trim(val) != '' && loaded[val] !== true) {
                var element = $(val);
                var insert = new_content.find(val);
                if (insert.get() != element.get()) {
                  element.replaceWith(insert);
                  Drupal.attachBehaviors(insert);
                }
                loaded[val] = true;
              }
            }
          });
        }
        $('.fbss-remove-me').remove();
      });
    }
    else {
      $('.fbss-remove-me').remove();
    }
  });
  //On document load, add a refresh link where applicable.
  if (initialLoad && refreshIDs && Drupal.settings.facebook_status.refreshLink) {
    var loaded = {};
    $.each(refreshIDs, function(i, val) {
      if (val && val != undefined) {
        if ($.trim(val) && loaded[val] !== true) {
          loaded[val] = true;
          var element = $(val);
          element.wrap('<div></div>');
          var rlink = '<a href="'+ window.location.href +'">'+ Drupal.t('Refresh') +'</a>';
          element.parent().after('<div class="facebook_status_refresh_link">'+ rlink +'</div>');
        }
      }
    });
  }
  //Refresh views appropriately.
  context.find('.facebook_status_refresh_link a').click(function() {
    if (allowClickRefresh) {
      allowClickRefresh = false;
      setTimeout('allowRefresh()', 2000);
      $(this).after('<div class="fbss-remove-me ahah-progress ahah-progress-throbber"><div class="throbber">&nbsp;</div></div>');
      $('#facebook_status_replace').trigger('ahah_success', {target: '#facebook_status_replace'});
    }
    return false;
  });
  //Restore original status text if the field is blank and the slider is clicked.
  context.find('.facebook_status_slider').click(function() {
    if ($(this).next().find('.facebook_status_text').val() == '') {
      $(this).next().find('.facebook_status_text').val(facebook_status_original_value);
      fbss_print_remaining(fbss_maxlen - facebook_status_original_value.length, $(this).next().next());
    }
  });
  //Count remaining characters.
  context.find('.facebook_status_text').keypress(function(fbss_key) {
    var th = $(this);
    setTimeout(function() {
      var fbss_remaining = fbss_maxlen - th.val().length;
      if (Drupal.settings.facebook_status.ttype == 'textfield' && fbss_remaining < 0) {
        fbss_remaining = 0;
      }
      fbss_print_remaining(fbss_remaining, th.parent().next());
    }, 10);
  });
}
//Change remaining character count.
function fbss_print_remaining(fbss_remaining, where) {
  if (fbss_remaining >= 0) {
    where.html(Drupal.formatPlural(fbss_remaining, '1 character left', '@count characters left', {}));
    if (facebook_status_submit_disabled) {
      $('.facebook_status_submit').attr('disabled', false);
      facebook_status_submit_disabled = false;
    }
  }
  else {
    where.html('<span class="facebook_status_negative">'+ Drupal.formatPlural(Math.abs(fbss_remaining), '-1 character left', '-@count characters left', {}) +'</span>');
    if (!facebook_status_submit_disabled) {
      $('.facebook_status_submit').attr('disabled', true);
      facebook_status_submit_disabled = true;
    }
  }
}
//Disallow refreshing too often or double-clicking the Refresh link.
function allowRefresh() {
  allowClickRefresh = !allowClickRefresh;
}