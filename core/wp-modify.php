<?php
//Remove admin bar user
function hide_admin_bar(){ return false; }
add_filter( 'show_admin_bar', 'hide_admin_bar' );

//Remover versão do WordPress do rodapé
function change_footer_version() {
	return 'ARC';
}
add_filter( 'update_footer', 'change_footer_version', 9999 );

//Remover ajuda no admin
function hide_help() {
echo '<style type="text/css">
		#contextual-help-link-wrap { display: none !important; }
</style>';
}
add_action('admin_head', 'hide_help');

//Mudar o texto de rodapé no painel de admin
function remove_footer_admin () {
echo 'Visite: <a href="https://agenciaarc.com.br/"> AGÊNCIA ARC</a>';
}
add_filter('admin_footer_text', 'remove_footer_admin');


// Função de configuração do Tema
// Adiciona metabox de imagem de destaque nos posts
function site_config() {
	add_theme_support( 'post-thumbnails'); // Adiciona a metabox de imagem destacada no editor de Posts
	add_theme_support('title-tag'); // Carrega os dados Title do Site em todas as páginas

}

// Dispara o Hook com os Menus e a customização do Gutemberg
add_action('after_setup_theme','site_config', 0 );


function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
}

//Remove logo com links do wordpress
add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );

// Desabilita o box "Bem-vindo ao WordPress!" no painel administrativo
remove_action('welcome_panel', 'wp_welcome_panel');

//Habilita suporte a miniatura e logo
function img_settings_theme(){
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'img_settings_theme' );

// Customização do logo no Login
function custom_login_logo() {
	echo '<style type="text/css">
						h1 a { 	width: 100% !important;
										height:120px !important;
										background-image: url(' . get_template_directory_uri().'/assets/img/logoClient.svg) !important;
										background-size: contain !important;
									}
				</style>';
}

add_action('login_head', 'custom_login_logo');


// Função de configuração dos Menus
function theme_menu_config() {
	// Registrando nossos menus
	register_nav_menus(
		array(
			'main_menu' => 'Main Menu',
		)
	);
}

// Dispara o Hook com os Menus e a customização do Gutemberg
add_action('after_setup_theme','theme_menu_config', 0 );


/* Mostra opção no painel admin ACF */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
			'page_title' 	=> 'Configurações ekho',
			'menu_title'	=> 'Config ekho',
			'menu_slug' 	=> 'conf-ekho',
			'icon_url' 		=> 'dashicons-editor-kitchensink',
			'position' 		=> '2',
	));
}