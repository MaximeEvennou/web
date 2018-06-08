<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div class="container-fluid px-0">
    <header>
        <div class="d-flex">
            <div class="col-md-6 gold d-inline-flex align-items-center">
                <?php dynamic_sidebar('haut-gauche'); ?>
            </div>
            <div class="col-md-6 silver d-inline-flex justify-content-end align-items-center text-dark">
                <?php dynamic_sidebar('haut-droit'); ?>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-sm">
      <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <?php wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'primary'));?>
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav>

    <div class="col-md-12 grey px-0 py-0">
        <?php dynamic_sidebar('entete'); ?>
    </div>

</div>

<div class="container">
    <section>
    
</body>
</html>