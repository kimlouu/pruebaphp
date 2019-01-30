<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>
<body>
  <header>
      <nav class="navbar navbar-fixed-top">
          <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">
                      <img class="logo" alt="Brand" src="<?php echo get_theme_file_uri('/assets/img/logo.png'); ?>">
                  </a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                  <ul class="nav navbar-nav navbar-right">
                      <li class="active"><a href="#antipastos" class="">Antipastos<span class="sr-only">(current)</span></a></li>
                      <li><a href="#ensaladas">Ensaladas</a></li>
                      <li><a href="#sopas">Sopas</a></li>

                      <li><a href="#pizzatradicional">Pizza Tradicional</a></li>
                      <li><a href="#pizzas">Pizzas</a></li>

                      <li><a href="#postres">Postres</a></li>
                      <li><a href="#infusiones">Infusiones</a></li>
                      <li><a href="#bebidas">Bebidas</a></li>

                  </ul>

              </div><!-- /.navbar-collapse -->

          </div><!-- /.container-fluid -->
      </nav>
      <div class="cabecera">
          <h1 class="text-center col-lg-6 col-lg-offset-3">Descubre nuestros sabores</h1>
      </div>

  </header>
