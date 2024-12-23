<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="<?= get_template_directory_uri() ?>/src/tailwind.css" rel="stylesheet">


  <?php wp_head(); ?>

</head>

<body <?php body_class('font-body text-p'); ?>>

  <?php

  do_action('after_body');

  get_template_part('partials/header');
