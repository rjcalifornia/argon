<?php
/**
 * Elgg pageshell
 * The standard HTML page shell that everything else fits into
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['head']        Parameters for the <head> element
 * @uses $vars['body_attrs']  Attributes of the <body> tag
 * @uses $vars['body']        The main content of the page
 * @uses $vars['sysmessages'] A 2d array of various message registers, passed from system_messages()
 */
$site_url = elgg_get_site_url();



$test = $site_url . 'mod/argon/bootstrap.php';
require_once (__DIR__.'/../../../bootstrap.php');


//echo $test;
// backward compatability support for plugins that are not using the new approach
// of routing through admin. See reportedcontent plugin for a simple example.
if (elgg_get_context() == 'admin' && elgg_is_admin_logged_in()) {
	_elgg_admin_add_plugin_settings_menu();
	elgg_unregister_css('elgg');
	echo elgg_view('page/admin', $vars);
	return true;
}

// render content before head so that JavaScript and CSS can be loaded. See #4032

$user_logged_in = elgg_is_logged_in();
$admin_logged_in = elgg_is_admin_logged_in();


$user = elgg_get_logged_in_user_entity();
//var_dump($user->toObject());
$menu = elgg()->menus->getUnpreparedMenu('site', [
	'sort_by' => 'name',
]);
    
$menu_items = $menu->getItems();

$site = elgg_get_site_entity();


$content = elgg_view('page/elements/body', $vars);

$data['logged_user'] = $user_logged_in;
$data['logged_admin'] = $admin_logged_in;

$data['site_url'] = $site_url;

$data['messages'] = $vars['sysmessages'];

$data['header'] = elgg_view('page/elements/head', $vars['head']);

$data['user'] = $user->toObject();

$data['site_info'] = $site->toObject();
 
$data['footer'] = elgg_view('page/elements/foot', $vars);

$data['content'] = new \Twig\Markup($content, 'UTF-8');

$data['menu'] = $menu_items;

echo $twig->render('main/index.html.twig', 
        [
            'data' => $data,
        ]);



//echo elgg_view("page/elements/html", $params);

