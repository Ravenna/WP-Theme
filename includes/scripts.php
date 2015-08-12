<?php 


function fonts(){
	wp_enqueue_style( 'FontAwesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
}
function styles(){
	wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css');
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/style.css');
}

function scripts() {

    if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
	function my_jquery_enqueue() {
		wp_deregister_script('jquery');
		wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
		wp_enqueue_script('jquery');
	}

    wp_enqueue_script( 'bootstrapjs', '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'velocity', get_template_directory_uri() . '/assets/js/velocity.js', array('jquery'), '', true );
    wp_enqueue_script( 'velocity_ui', get_template_directory_uri() . '/assets/js/velocity.ui.js', array('jquery'), '', true );   
    wp_enqueue_script( 'my-ajax-request', get_template_directory_uri() . '/assets/js/dom-ready.js', array('jquery'), '', true );
	wp_localize_script( 'my-ajax-request', 'MyAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

}
 
add_action( 'wp_enqueue_scripts', 'fonts' );
add_action( 'wp_enqueue_scripts', 'styles' );
add_action( 'wp_enqueue_scripts', 'scripts' );
