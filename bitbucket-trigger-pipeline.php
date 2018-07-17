<?php
/*
Plugin Name: BitBucket Trigger Pipeline
Plugin URI: https://github.com/kmturley/wordpress-bitbucket-trigger-pipeline
Description: Wordpress Plugin triggers a BitBucket Pipeline when user publishes a post (using environment variables BITBUCKET_PROJECT, BITBUCKET_USERNAME and BITBUCKET_PASSWORD)
Version: 0.1
Author: Kim T
Author URI: https://github.com/kmturley
License: GPL
Copyright: Kim T
*/

add_action('publish_page', 'publish_static_hook');
add_action('publish_post', 'publish_static_hook');

function publish_static_hook($id) {
  $bitbucket_project = getenv('BITBUCKET_PROJECT');
  $bitbucket_username = getenv('BITBUCKET_USERNAME');
  $bitbucket_password = getenv('BITBUCKET_PASSWORD');
  // if environment variables are set, then trigger static build
  if ($bitbucket_project && $bitbucket_username && $bitbucket_password) {
    $data = array(
      'target' => array(
        'ref_type' => 'branch',
        'type' => 'pipeline_ref_target',
        'ref_name' => 'production'
      )
    );
    $response = wp_remote_post('https://api.bitbucket.org/2.0/repositories/'.$bitbucket_project.'/pipelines/', array(
      'body' => json_encode($data),
      'headers' => array(
        'Authorization' => 'Basic '.base64_encode($bitbucket_username.':'.$bitbucket_password),
        'Content-Type' => 'application/json'
      ),
    ));
    // for debugging
    // echo '<pre>https://api.bitbucket.org/2.0/repositories/'.$bitbucket_project.'/pipelines</pre>';
    // echo '<pre>'.print_r($data, true).'</pre>';
    // echo '<pre>'.print_r($response, true).'</pre>';
  }
}
?>