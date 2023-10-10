<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> style="background-image: url('<?php echo get_theme_file_uri('/background1.jpg') ?>'); min-height:100vh;">
    <section class="nav">
      <div class="navigation">
       <a href="<?php echo get_home_url();?>"><img  src="<?php echo get_theme_file_uri('/logo.png') ?>" alt="trening EMS" class="navigation_logo" /></a>
        <ul class="navigation_list">
          <li class="navigation_list_li"><a href="<?php echo site_url('/trening'); ?>">Trening EMS</a></li>
          <li class="navigation_list_li"><a href="<?php echo site_url('/kontakt'); ?>">Kontakt</a></li>
          <li class="navigation_list_li-icons">
            <a
              href="https://www.instagram.com/strefa.ems.szczecin/"
              target="_blank"
              ><i class="fa-brands fa-instagram"></i
            ></a>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
          </li>
        </ul>
      </div>
    </section>