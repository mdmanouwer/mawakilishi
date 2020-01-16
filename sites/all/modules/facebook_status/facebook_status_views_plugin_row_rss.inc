<?php

/**
 * @file
 *   Contains the FBSS RSS row style plugin.
 */

/**
 * Formats a status as an RSS item.
 */
class facebook_status_views_plugin_row_rss extends views_plugin_row {
  // Basic properties that let the row style follow relationships.
  var $base_table = 'facebook_status';
  var $base_field = 'sid';

  function render($row) {
    global $base_url;

    $sid = $row->{$this->field_alias};
    if (!is_numeric($sid)) {
      return;
    }

    // Load the specified status:
    $status = facebook_status_load($sid);
    if (empty($status)) {
      return;
    }
    $owner = _facebook_status_user_load($status->uid);
    $poster = _facebook_status_user_load($status->pid);
    $status_text = _facebook_status_run_filter($status->status);
    if (variable_get('facebook_status_nl2br', 0)) {
      $status_text = nl2br($status_text);
    }
    $args = array(
      '@poster' => (module_exists('realname') && !empty($poster->realname)) ? $poster->realname : $poster->name,
      '@owner' => (module_exists('realname') && !empty($owner->realname)) ? $owner->realname : $owner->name,
      '!status' => filter_xss($status->status, array()),
    );

    $item = new stdClass();
    $item->title = ($poster->uid == $owner->uid) ? t('@poster: !status', $args) : t('@poster &raquo; @owner: !status', $args);
    $item->link = url("statuses/$status->sid", array('absolute' => TRUE));
    $item->sid = $status->sid;
    $item->description = $status_text;

    $item->elements = array(
      array('key' => 'pubDate', 'value' => gmdate('r', $status->status_time)),
      array(
        'key' => 'dc:creator',
        'value' => check_plain($poster->name),
        'namespace' => array('xmlns:dc' => 'http://purl.org/dc/elements/1.1/'),
      ),
      array(
        'key' => 'guid',
        'value' => $status->sid . ' at ' . $base_url,
        'attributes' => array('isPermaLink' => 'false')
      ),
    );

    foreach ($item->elements as $element) {
      if (isset($element['namespace'])) {
        $this->view->style_plugin->namespaces = array_merge($this->view->style_plugin->namespaces, $element['namespace']);
      }
    }

    return theme($this->theme_functions(), $this->view, $this->options, $item);
  }
}