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

if(!empty( $vars['title'])){
	$current_page_title =  $vars['title'];
}else{
	$current_page_title = 'Home';
}
// render content before head so that JavaScript and CSS can be loaded. See #4032
$data['page_title'] = $current_page_title;
$user_logged_in = elgg_is_logged_in();
$admin_logged_in = elgg_is_admin_logged_in();


$user = elgg_get_logged_in_user_entity();
$site_notifications = null;
$notification_count = 0;

if(!empty($user)){
$profile_image = $user->getIconURL('small');

$site_notifications = elgg_get_entities_from_metadata(array(
	'type' => 'object',
	'subtype' => 'site_notification',
	'owner_guid' => $user->guid,
	'full_view' => false,
	'metadata_name' => 'read',
	'metadata_value' => false,
));

$notification_count = sizeof($site_notifications);
//var_dump($site_notifications);


}
//var_dump($user->toObject());
$menu = elgg()->menus->getUnpreparedMenu('site', [
	'sort_by' => 'name',
]);
    
$menu_items = $menu->getItems();

$site = elgg_get_site_entity();

if(!empty($site_notifications)){
$data['site_notifications'] = $site_notifications;
$data['notification_count'] = $notification_count;
}

$content = elgg_view('page/elements/body', $vars);

$data['logged_user'] = $user_logged_in;
$data['logged_admin'] = $admin_logged_in;
$data['profile_icon'] = $profile_image;
$data['site_url'] = $site_url;

$data['messages'] = $vars['sysmessages'];

$data['header'] = elgg_view('page/elements/head', $vars['head']);

if(elgg_is_logged_in()){
$data['user'] = $user->toObject();
}else{
	$data['user'] = '';
}

$data['site_info'] = $site->toObject();
 
$data['footer'] = elgg_view('page/elements/foot', $vars);

$data['content'] = new \Twig\Markup($content, 'UTF-8');

$data['menu'] = $menu_items;

echo $twig->render('main/index.html.twig', 
        [
            'data' => $data,
        ]);



//echo elgg_view("page/elements/html", $params);

