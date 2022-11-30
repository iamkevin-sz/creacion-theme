<?php 
/*
    plugin Name:Gym Fitness - Post Type
    Plugin URI:
    Description: Anade post types al sitio gymfitness
    Version: 1.0.0
    Author:Kevin Salazar
    Author URI:
    Text Domain: gymfitness
*/
// esta linea quierer decir si alguien intenta abrir la ruta completa de este plugin este codigo no le mostrara nada
if(!defined('ABSPATH')) die();

function gymfitness_clases_post_type() {
        $labels = array(
        'name' => _x( 'Clases', 'post type general name', 'gymfitness' ),
        'singular_name' => _x( 'Clases', 'post type singular name', 'gymfitness' ),
        'menu_name' => __( 'Clases', 'gymfitness'),
        'name_admin_bar' => __('Clases', 'gymfitness'),
        'archives' => __('Archivos', 'gymfitness'),
        'atributes' => __('Atributos', 'gymfitness'),
        'parent_item_colon' => __('Clase Padre', 'gymfitness'),
        'all_items' => __( 'Todas Las Clases', 'gymfitness'),
        'add_new_item' => __( 'Agregar Clase', 'gymfitness' ),
        'add_new' => __( 'Agregar Clase', 'gymfitness' ),
        'new_item' => __( 'Agregar Clase', 'gymfitness' ),
        'edit_item' => __( 'Agregar Clase', 'gymfitness' ),
        'update_item' => __( 'Actualizar Clase', 'gymfitness'),
        'view_item' => __( 'Ver Clase', 'gymfitness'),
        'view_items' => __( 'Ver Clases', 'gymfitness'),
        'search_items' => __( 'Buscar Clases', 'gymfitness'),
        'not_found' =>  __( 'No Encontrando', 'gymfitness'),
        'not_found_in_trash' => __( 'No encontrado en la papelera', 'gymfitness'),
        'featured_image' => __( 'Imagen Destacada', 'gymfitness'),
        'set_featured_image' => __('Subir Imagen Destacada','gymfitness'),
        'remove_featured_image' => __( 'Eliminar Imagen Destacada', 'gymfitness'),
        'Use_featured_image' => __( 'Utilizar como imagen Destacada','gymfitness'),
        'insert_into_item' => __( 'Insertar en Clase', 'gymfitness'),
        'uploaded_to_this_item' => __('Agregado en Clase ', 'gymfitness ' ),
        'items_list' => __( 'Lista de Clases', 'gymfitness'),
        'items_list_navigation' => __('Navegacion de Clases', 'gymfitness'),
        'filter_items_list' => __('filtar Clases', 'gymfitness'),
    );

     // Creamos un array para $args
    $args = array( 
        'label' => __('Clase', 'gymfitness'),
        'description' => __('Clases para el Sitio Web', 'gymfitness'),
        'labels' => $labels,
        'supports' => array('title','editor', 'thumbnail'),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' =>  true,  
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        // 'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
 
    register_post_type( 'gymfitness_clases', $args ); 
}
add_action( 'init', 'gymfitness_clases_post_type', 0 );