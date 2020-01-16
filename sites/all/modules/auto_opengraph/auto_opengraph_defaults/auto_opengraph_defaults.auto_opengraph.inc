<?php
// $Id: $

/**
 * @file
 * Bulk export of auto_opengraph objects generated by Bulk export module.
 */

/**
 * Implementation of hook_default_opengraph_tags()
 */
function auto_opengraph_defaults_default_opengraph_tags() {
  $tagdefs = array();

  $tagdef = new stdClass;
  $tagdef->disabled = FALSE; /* Edit this to true to make a default tagdef disabled initially */
  $tagdef->api_version = 1;
  $tagdef->name = 'default';
  $tagdef->value = array(
    'og:title' => '[current-page-title]',
    'og:type' => 'article',
    'og:url' => '[current-page-url]',
    'og:site_name' => '[site-name]',
    'og:description' => '[description]',
  );
  $tagdefs['default'] = $tagdef;

  $tagdef = new stdClass;
  $tagdef->disabled = FALSE; /* Edit this to true to make a default tagdef disabled initially */
  $tagdef->api_version = 1;
  $tagdef->name = 'front';
  $tagdef->value = array(
    'og:title' => '[site-name]',
    'og:type' => 'website',
  );
  $tagdefs['front'] = $tagdef;

  $tagdef = new stdClass;
  $tagdef->disabled = FALSE; /* Edit this to true to make a default tagdef disabled initially */
  $tagdef->api_version = 1;
  $tagdef->name = 'node';
  $tagdef->value = array(
    'og:title' => '[title]',
  );
  $tagdefs['node'] = $tagdef;

  $tagdef = new stdClass;
  $tagdef->disabled = FALSE; /* Edit this to true to make a default tagdef disabled initially */
  $tagdef->api_version = 1;
  $tagdef->name = 'term';
  $tagdef->value = array(
    'og:title' => '[cat]',
  );
  $tagdefs['term'] = $tagdef;

  $tagdef = new stdClass;
  $tagdef->disabled = FALSE; /* Edit this to true to make a default tagdef disabled initially */
  $tagdef->api_version = 1;
  $tagdef->name = 'user';
  $tagdef->value = array(
    'og:title' => '[user]',
  );
  $tagdefs['user'] = $tagdef;

  return $tagdefs;
}