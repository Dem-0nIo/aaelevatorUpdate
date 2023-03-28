<?php 
 /* 
 Plugin Name: App AAElevator
 Plugin URI: https://apps.aaelevator.net 
 Description: Plugin con las funciones personalizadas para la web de https://apps.aaelevator.net 
 Version: 1.0.0 
 Author: DMFS 
 Author URI: https://apps.aaelevator.net  
 License: GPL 2+ 
 License URI: https://apps.aaelevator.net  
 */ 

//Añade capa de personalización al login de WordPress

function ews_login_logo() { 
?>
 <style type="text/css">
 #login h1 a, .login h1 a {
 display: none;
 margin-bottom: 0;
 background-size: 300px;
 width: 300px;
 margin-left: auto;
 margin-right: auto;
 }
 .login form {
	 border-radius: 20px;
 }

 #login {
    width: 320px !important;
    padding: 14% 0 0 !important;
    margin: auto !important;
    margin: 1% 1% 8% 70% !important;
 }
 .wp-core-ui .button-primary {
	 background: #04528B !important;
	 border-color: #0A5E50 !important;
	 box-shadow: 0 1px 0 #04528B !important;
	 /*text-shadow: 0 -1px 1px #0A5E50, 1px 0 1px #0A5E50, 0 1px 1px #0A5E50, -1px 0 1px #0A5E50 !important;*/
     color: #012 !important;
     text-decoration: none;
     text-shadow: none;
     text-transform: uppercase !important;
     font-weight: bold;
 }
 .wp-core-ui .button, .wp-core-ui .button-secondary {
    color: #FFF !important;
}
 body.login {
     background-color: #04528B;
     background-image: url('http://localhost:8888/newAA/wp-content/uploads/2023/03/background.jpg');
} 
.login #backtoblog a, .login #nav a {
    color: #fff !important
}

.login #login_error {
    border-left-color: #04528B !important;
}

input[type="text"]:focus, input[type="password"]:focus, select:focus, textarea:focus {
    border-color: #012450 !important;
    box-shadow: 0 0 0 1px #012450 !important;
    outline: 2px solid transparent;
}
 </style>
<?php }
add_action( 'login_enqueue_scripts', 'ews_login_logo' );


function ews_login_logo_url_title() {
    return 'Pon aquí el texto que quieras';
}
add_filter( 'login_headertitle', 'ews_logo_url_title' );


function ews_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'ews_login_logo_url' );


function ews_no_wordpress_errors(){
  return 'Please check your username and password';
}
add_filter( 'login_errors', 'ews_no_wordpress_errors' );


function ews_eliminar_vibracion_login() {
	remove_action('login_head', 'wp_shake_js', 12);
}
add_action('login_head', 'ews_eliminar_vibracion_login');