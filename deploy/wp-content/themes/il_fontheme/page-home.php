<?php get_header(); ?>

<main class="container-fluid p-0">
    <section id="antipastos" class="ancla">
        <div class="jumbotron section-title">
            <h1 class="text-center">Antipastos</h1>
        </div>
        <div class="container">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('antipastos_plato1_imagen'); ?>); ">

                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('antipastos_plato1_titulo'); ?></h2>
                    <p><?php the_field('antipastos_plato1_descripcion'); ?></p>
                    <h3><?php the_field('antipastos_plato1_precio'); ?></h3>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('antipastos_plato2_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('antipastos_plato2_titulo'); ?></h2>
                    <p><?php the_field('antipastos_plato2_descripcion'); ?></p>
                    <h3><?php the_field('antipastos_plato2_precio'); ?></h3>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('antipastos_plato3_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('antipastos_plato3_titulo'); ?></h2>
                    <p><?php the_field('antipastos_plato3_descripcion'); ?></p>
                    <h3><?php the_field('antipastos_plato3_precio'); ?></h3>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('antipastos_plato4_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('antipastos_plato4_titulo'); ?></h2>
                    <p><?php the_field('antipastos_plato4_descripcion'); ?></p>
                    <h3><?php the_field('antipastos_plato4_precio'); ?></h3>
                </div>
            </div>
        </div>
    </section>
    <section id="ensaladas" class="">
        <div class="jumbotron section-title">
            <h1 class="text-center">Ensaladas</h1>
        </div>
        <div class="container">
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('ensaladas_plato1_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('ensaladas_plato1_titulo'); ?></h2>
                    <p><?php the_field('ensaladas_plato1_descripcion'); ?></p>
                    <h3><?php the_field('ensaladas_plato1_precio'); ?></h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('ensaladas_plato2_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('ensaladas_plato2_titulo'); ?></h2>
                    <p><?php the_field('ensaladas_plato2_descripcion'); ?></p>
                    <h3><?php the_field('ensaladas_plato2_precio'); ?></h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('ensaladas_plato3_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('ensaladas_plato3_titulo'); ?></h2>
                    <p><?php the_field('ensaladas_plato3_descripcion'); ?></p>
                    <h3><?php the_field('ensaladas_plato3_precio'); ?></h3>
                </div>
            </div>
        </div>
    </section>
    <section id="sopas" class="">
        <div class="jumbotron section-title">
            <h1 class="text-center">Sopas</h1>
        </div>
        <div class="container">
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('sopas_plato1_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('sopas_plato1_titulo'); ?></h2>
                    <p><?php the_field('sopas_plato1_descripcion'); ?></p>
                    <h3><?php the_field('sopas_plato1_precio'); ?></h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('sopas_plato2_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('sopas_plato2_titulo'); ?></h2>
                    <p><?php the_field('sopas_plato2_descripcion'); ?></p>
                    <h3><?php the_field('sopas_plato2_precio'); ?></h3>
                </div>
            </div>
        </div>
    </section>
    <section id="pizzatradicional" class="">
        <div class="jumbotron section-title">
            <h1 class="text-center">Pizza Tradicional</h1>
        </div>
        <div class="container">
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('pizzatradicional_plato1_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('pizzatradicional_plato1_titulo'); ?></h2>
                    <p><?php the_field('pizzatradicional_plato1_descripcion'); ?></p>
                    <h3><?php the_field('pizzatradicional_plato1_precio'); ?></h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('pizzatradicional_plato2_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('pizzatradicional_plato2_titulo'); ?></h2>
                    <p><?php the_field('pizzatradicional_plato2_descripcion'); ?></p>
                    <h3><?php the_field('pizzatradicional_plato2_precio'); ?></h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('pizzatradicional_plato3_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('pizzatradicional_plato3_titulo'); ?></h2>
                    <p><?php the_field('pizzatradicional_plato3_descripcion'); ?></p>
                    <h3><?php the_field('pizzatradicional_plato3_precio'); ?></h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('pizzatradicional_plato4_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('pizzatradicional_plato4_titulo'); ?></h2>
                    <p><?php the_field('pizzatradicional_plato4_descripcion'); ?></p>
                    <h3><?php the_field('pizzatradicional_plato4_precio'); ?></h3>
                </div>
            </div>
        </div>
    </section>
    <section id="pizzas" class="">
        <div class="jumbotron section-title">
            <h1 class="text-center">Pizzas</h1>
        </div>
        <div class="container">
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('pizza_plato1_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('pizza_plato1_titulo'); ?></h2>
                    <p><?php the_field('pizza_plato1_descripcion'); ?></p>
                    <h3><?php the_field('pizza_plato1_precio'); ?></h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('pizza_plato2_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('pizza_plato2_titulo'); ?></h2>
                    <p><?php the_field('pizza_plato2_descripcion'); ?></p>
                    <h3><?php the_field('pizza_plato2_precio'); ?></h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('pizza_plato3_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('pizza_plato3_titulo'); ?></h2>
                    <p><?php the_field('pizza_plato3_descripcion'); ?></p>
                    <h3><?php the_field('pizza_plato3_precio'); ?></h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('pizza_plato4_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('pizza_plato4_titulo'); ?></h2>
                    <p><?php the_field('pizza_plato4_descripcion'); ?></p>
                    <h3><?php the_field('pizza_plato4_precio'); ?></h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('pizza_plato5_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('pizza_plato5_titulo'); ?></h2>
                    <p><?php the_field('pizza_plato5_descripcion'); ?></p>
                    <h3><?php the_field('pizza_plato5_precio'); ?></h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('pizza_plato6_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('pizza_plato6_titulo'); ?></h2>
                    <p><?php the_field('pizza_plato6_descripcion'); ?></p>
                    <h3><?php the_field('pizza_plato6_precio'); ?></h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('pizza_plato7_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('pizza_plato7_titulo'); ?></h2>
                    <p><?php the_field('pizza_plato7_descripcion'); ?></p>
                    <h3><?php the_field('pizza_plato7_precio'); ?></h3>
                </div>
            </div>
        </div>
    </section>
    <section id="postres" class="">
        <div class="jumbotron section-title">
            <h1 class="text-center">Postres</h1>
        </div>
        <div class="container">
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('postres_plato1_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('postres_plato1_titulo'); ?></h2>
                    <p><?php the_field('postres_plato1_descripcion'); ?></p>
                    <h3><?php the_field('postres_plato1_precio'); ?></h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('postres_plato2_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('postres_plato2_titulo'); ?></h2>
                    <p><?php the_field('postres_plato2_descripcion'); ?></p>
                    <h3><?php the_field('postres_plato2_precio'); ?></h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('postres_plato3_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('postres_plato3_titulo'); ?></h2>
                    <p><?php the_field('postres_plato3_descripcion'); ?></p>
                    <h3><?php the_field('postres_plato3_precio'); ?></h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('postres_plato4_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('postres_plato4_titulo'); ?></h2>
                    <p><?php the_field('postres_plato4_descripcion'); ?></p>
                    <h3><?php the_field('postres_plato4_precio'); ?></h3>
                </div>
            </div>
        </div>
    </section>
    <section id="infusiones" class="">
        <div class="jumbotron section-title">
            <h1 class="text-center">Infusiones</h1>
        </div>
        <div class="container">
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('infusiones_plato1_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('infusiones_plato1_titulo'); ?></h2>
                    <h3><?php the_field('infusiones_plato1_precio'); ?></h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('infusiones_plato2_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('infusiones_plato2_titulo'); ?></h2>
                    <h3><?php the_field('infusiones_plato2_precio'); ?></h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('infusiones_plato3_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('infusiones_plato3_titulo'); ?></h2>
                    <h3><?php the_field('infusiones_plato3_precio'); ?></h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('infusiones_plato4_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('infusiones_plato4_titulo'); ?></h2>
                    <h3><?php the_field('infusiones_plato4_precio'); ?></h3>
                </div>
            </div>
        </div>
    </section>
    <section id="bebidas" class="">
        <div class="jumbotron section-title">
            <h1 class="text-center">Bebidas</h1>
        </div>
        <div class="container">
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('bebidas_plato1_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('bebidas_plato1_titulo'); ?></h2>
                    <h3><?php the_field('bebidas_plato1_precio'); ?></h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 p-0 bgs-cover" style="background-image: url(<?php the_field('bebidas_plato2_imagen'); ?>); ">
                </div>
                <div class="col-lg-6">
                    <h2><?php the_field('bebidas_plato2_titulo'); ?></h2>
                    <h3><?php the_field('bebidas_plato2_precio'); ?></h3>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
