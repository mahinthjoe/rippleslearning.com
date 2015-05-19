<?php 
/**
 * Tiny PHP Framework for Static Pages
 * Author:  Aravindan Ve
 * Company: Ripples Research
 */

$TINY_FW    = true;
$fw_pages   = 'pages/';
$fw_base    = '_base.php';
$fw_header  = '_header.php';
$fw_footer  = '_footer.php';
$fw_404     = '__notfound.php';
$fw_403     = '__forbidden.php';
$fw_home    = '__home.php';

// must end with a forward slash /
$BASE_URL       = 'https://www.ripplesresearch.com/chrmp.com/';
$STATIC_PATH    = 'static/';

// static files version
$VERSION        = '0.2';

// page variables
$PAGE_TITLE     = "CHRMP";

/* 
--------------------------------------------------------------------------------
do not modify below this line  */

// import local settings
$IMPORT_LOCAL_SETTINGS = true;
if (file_exists('_local.php')) include '_local.php';

// define static path
$static = function($url) use (&$BASE_URL, &$STATIC_PATH, &$VERSION) 
{
    return $BASE_URL.$STATIC_PATH.$url.(
        preg_match('#\?#i', $url)? '':'?').'&v='.$VERSION;
};

// modify base url
$BASE_URL = preg_replace(
    '#^https?:\/\/#i', 
    'http'.(isset($_SERVER['HTTPS'])?'s':'').'://', 
    $BASE_URL, 1);
    
// get url
$url = 'http'.(isset($_SERVER['HTTPS'])? 's':'').'://'.
    "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

// process request uri  
$request_uri = preg_replace('#'.preg_quote($BASE_URL).'#i', '', $url);

// route
if ($request_uri == '') {
    // home
    $INCLUDE_PAGE = $fw_home;
}
elseif (substr($request_uri, 0, 1) == '_') {
    // forbidden
    $INCLUDE_PAGE = $fw_403;
}
else {
    // pages
    $INCLUDE_PAGE = '__'.preg_replace(
        '#\/$#i', '', $request_uri);
    if (!file_exists($fw_pages.$INCLUDE_PAGE))
        $INCLUDE_PAGE .= '.php';
    if (!file_exists($fw_pages.$INCLUDE_PAGE))
        $INCLUDE_PAGE = $fw_404;
}

// load base template
include $fw_pages.$fw_base;

/* eof */