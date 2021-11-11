<?php
//admin.php
//Frontend 23
//ftp m
/*-----------------------------------------------------------------------------------*/
//     defines
/*-----------------------------------------------------------------------------------*/
$GLOBALS['THEME_MLM_PATH'] 	= get_template_directory_uri();
$GLOBALS['THEME_MLM_VER'] 	= '1.1.6'; //If you have problem with cache update the ver
$GLOBALS['THEME_MLM_ENV'] = '';


//ERROR Error while fetching an original source: request failed with status 404
//DEBERIA DE IRSE EN UN SERVER NO LOCAL


/*-----------------------------------------------------------------------------------*/
//     Variables LOCAL OR DIST
/*-----------------------------------------------------------------------------------*/
// Get the hostname
$http_host      = $_SERVER['HTTP_HOST'];
$local          = 'cleantheme.local';
$staging        = 'clean.sitecr.com';
$production     = 'betfrancom.com';

$environments = array(
  'local'       => $local,
  'staging'     => $staging,
  'production'  => $production
);

// Compare $hhphost and set the enviroment
foreach($environments as $environment => $hostname) {
  if (stripos($http_host, $hostname) !== FALSE) {
    //     Set Enviroment
    if($environment === 'local' ){
      $GLOBALS['THEME_MLM_ENV'] 	= 'src';
    }else{
      $GLOBALS['THEME_MLM_ENV'] 	= 'dist';
    }
    break;
  }
}


/*-----------------------------------------------------------------------------------*/
//     1) Array of files to include.
/*-----------------------------------------------------------------------------------*/

// UnderStrap's includes directory.
$understrap_inc_dir = get_template_directory() ;

$understrap_includes = array(
  '/inc/functions/cleanup.php', // clean all website code elements from wp
  '/inc/functions/enqueue.php', // Enqueue scripts and styles.
  '/inc/functions/add_menus.php', // define menus
  '/inc/functions/dashboard.php', // add new look to dashboad
  '/inc/functions/dashboad_menu.php', // add my menu for client use to dashboar
  '/inc/functions/custom_login_look.php', // re look the loging
  '/inc/functions/theme_support.php', // add wp supporth has thumbnails ect
  '/inc/functions/user_role.php', // add wp supporth has thumbnails ect
  '/inc/functions/remove_menu_from_user.php', // add wp supporth has thumbnails ect
  '/inc/functions/theme_setting_menu.php', // save acf data and load it
  '/inc/functions/acfToJson.php', // save acf data and load it
  '/inc/functions/add_widgets.php', // widgets support
  '/inc/functions/block_register.php', // widgets support
  // '/inc/functions/add_sidebar.php', // Sidebar support
   '/inc/functions/shortcuts.php', 
  
   

);

foreach ($understrap_includes as $file) {
 require_once $understrap_inc_dir . $file;
}

////////STYLES FOR THE THEME ARE IN SHORTCUTS
