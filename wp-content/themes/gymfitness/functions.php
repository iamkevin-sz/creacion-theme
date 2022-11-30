<?php   
    //consultas reutilizables
    require get_template_directory() . '/inc/queries.php';
    //cuando el thema esta activo
    function gymfitnes_setup() {
        //habilitar imagenes destacadas 
        add_theme_support('post-thumbnails');

        //agregar tamano de imagenes personalizadas 
        add_image_size( 'square', 350, 350, true );
        add_image_size( 'portrait', 350, 724, true );
        add_image_size( 'cajas', 400, 375, true );
        add_image_size( 'medium', 700, 400, true );
        add_image_size( 'blog', 966, 644, true );

    }

    add_action('after_setup_theme', 'gymfitnes_setup');

    // menu de navegacion, para agregar mas menus, solo agregar al arreglo como menu principal 2, 3, etc
    function gynfitnes_menus(){

        register_nav_menus( array(

            'menu-principal' => __('Menu Principal Usuario', 'gymfitness')

        ));

           
    }

    add_action( 'init', 'gynfitnes_menus' );

    // script y stiles, esto nos permitira cargar archivos css y js

    function gynfitnes_scripts_styles(){
        //la hoja de estilos principal, get_stylesheet_uri nos permite leer la ubicacion de la hoja de estilos y colocar ahi la ruta, como cuando se suba al servidor detectara la ruta del servidor y lo pondra correctamente
        wp_enqueue_style('normalize', get_template_directory_uri(). '/css/normalize.css', array(), '8.0.1');
        
        wp_enqueue_style('slicknavCSS', get_template_directory_uri(). '/css/slicknav.min.css', array(), '1.0.0');

        wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Poppins:wght@100;200;300;400;600;700&family=Raleway:wght@100;200;300;400;500;700&family=Staatliches&display=swap', array(), '1.0.0');

        // hoja de estilos principal
        wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');


        // hoja js
        // wp_enqueue_script('slicknavJS', get_template_directory_uri(). '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);
        // muestra en el header, mas adelante investigar para que muestre en el footer
        wp_enqueue_script ('slicknavJS', get_template_directory_uri (). '/js/jquery.slicknav.min.js',array('jquery'), '6.0.1');

        wp_enqueue_script ('scripts', get_template_directory_uri (). '/js/scripts.js');

        // wp_enqueue_script ('jquery', get_template_directory_uri (). '/js/jquery-3.6.0.min.js');
    }
    

    //wp_enqueue_script este hook quiere decir que cargara hojas de estilos en la parte frontal del sitio web
    add_action('wp_enqueue_scripts', 'gynfitnes_scripts_styles');


    //definir zona de widgets

    function gymfitness_widgets(){
        register_sidebar(array(
            'name' => 'sidebar 1',
            'id' => 'sidebar_1',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' =>'<h3 class= "text-center texto-primario">',
            'after_title' => '</h3>'

        ));

        register_sidebar(array(
            'name' => 'sidebar 2',
            'id' => 'sidebar_2',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' =>'<h3 class="text-center texto-primario">',
            'after_title' => '</h3>'

        ));
        
    }

    add_action('widgets_init', 'gymfitness_widgets');