<?php

// CONFIG FILE FOR SITEWIDE-NAMING AND SESSIONS //
//
// WHEN SESSIONS QUERIES THE DATA BASE AT LOGIN A SESSIONS START CAN BE INSTALLED HERE//
// SESSIONS COMPARES THE VALUE YOU TYPED IN AT LOGIN WITH THE DATA IN THE DATABASE FOR NAME AND OR ID OR BOTH//
//


/* SITEWIDE NAMING IS DONE BY ASIGNING NAMES TO VARIABLES AND PLACING THE VARIABLES ECHOED ON EVERY PAGE TO ALLOW YOU TO ONLY HAVE TO CHANGE THE ACTUAL NAMES HERE. THINGS LIKE SITENAME,TITLES FOR HEADERS, FOOTER LINKS,MENU LINKS, AND ANYTHING YOU WISH AS LONG AS THE NAMES DO NOT MATCH ANY ASIGNED VARIABLES WITHIN YOUR PHP SCRIPTS VARIABLES. */

// V1 STATIC ACTUAL PAGE NAMES SHOWN IN THE HTML INSIDE THE NAV1 MENU //
/* $url_home='what-shows'; if used as follows-->
changes this name anywhere this php short tag "<a href="index.php?page=home"><?php echo $pn_home;?></a> can be used on your site anywhere you wish to show the name asigned to it. Makes it easy for site wide naming of things then all you have to do is change them here in one file instead of on every page.
The config page has to be placed at the very top of the index.php page for them to work.
THIS WILL NOT MESS WITH YOUR INDEXER */

//CHANGE PAGE NAMES IN THE STATIC HORIZONTAL MENU SITE WIDE FROM HERE//
//v1 public module page names//
$v1pn1='Home';
$v1pn2='About';
$v1pn3='Samples';
$v1pn4='Support';
$v1pn5='Contact';
$v1pn6='Login';
//v2 protected module page names//
$v2pn1='Profile';
$v2pn2='Blog';
$v2pn3='Groups';
$v2pn4='Pages';
$v2pn5='Account';
$v2pn6='Settings';
//v3 private ADMIN module page names//
$v3pn1='Admin';
$v3pn2='Users';
$v3pn3='Pages';
$v3pn4='Notifications';
$v3pn5='Emailer';
$v3pn6='Data';

/* THESE ARE THE ACTUAL PATH TO FILE NAMES IF YOU WISH TO CHANGE LINKS TO FILES TO ANOTHER FILE-NAME. AND CAN BE CHANGED TO POINT AT A DIFFERENT FILE NAME OR REPLACEMENT PAGE WITHOUT HAVING TO CHANGE IT IN EVERY PAGE IN YOUR SITE---CAN CHANGE THEM ALL HERE AS NEEDED. BE CAREFULL WITH THESE. THESE HAVE TO MATCH THE NAME IN THE INDEXER . example-->  <a href=" <?php echo $url_home;?> "><?php echo $pn_home;?></a>  */

// horizontal menu link file changer
$url1='index.php?page=home';
$url2='index.php?page=about';
$url3='index.php?page=samples';
$url4='index.php?page=support';
$url5='index.php?page=contact';
$url6='index.php?page=login';

//LEFT MENU LINK NAMES//
$lft1='index.php?page=home';
$lft2='index.php?page=about';
$lft3='index.php?page=samples';
$lft4='index.php?page=support';
$lft5='index.php?page=contact';
$lft6='index.php?page=login';
//LEFT MENU LINK PATHS ACTUAL//
$lnk1='index.php?page=home';
$lnk2='index.php?page=about';
$lnk3='index.php?page=samples';
$lnk4='index.php?page=support';
$lnk5='index.php?page=contact';
$lnk6='index.php?page=login';
//RIGHT MENU LINK NAMES//

//RIGHT MENU LINK PATHS ACTUAL//


//TEMPLATING ENGINE--here change your style.css styles//

$temp1='s1/style.css';
$temp2='s1/style2.css';

//MODULES LISTED BY SUBS----------ALL SITES PATHS CAN BE RE-ROUTED HERE//
//LISTED PAGE PARTS PUBLIC -----STATIC MODULE v1//
$v1a='v1/head1.php';
$v1b='v1/header1.php';
$v1c='v1/hzmenu1.php';
$v1d='v1/leftmenu1.php';
//pages content by list static//
$home='v1/home.php';
$about='v1/about.php';
$samples='v1/samples.php';
$support='v1/support.php';
$contact='v1/contact.php';
$ajaxer='v1/ajaxer.php';

//last two below content//
$v1f='v1/rightmenu1.php';
$v1g='v1/footer1.php';


//LISTED PAGE PARTS PROTECTED --MEMBERS MODULE v2//
$c2auth='c2/authuser.php';
$v2a='v2/head2.php';
$v2b='v2/header2.php';
$v2c='v2/hzmenu2.php';
$v2d='v2/leftmenu2.php';
//page content by list for members module//
$profile='v2/profile.php';
$blog='v2/blog.php';
$albums='v2/albums.php';
$groups='v2/groups.php';
$friends='v2/friends.php';
//last two below content//
$v2f='v2/rightmenu2.php';
$v2g='v2/footer2.php';


//LISTED PRIVATE ---------------ADMIN MODULE v3//
$v3auth='c3/authadmin.php';
$v3a='v3/head3.php';
$v3b='v3/header3.php';
$v3c='v3/hzmenu3.php';
$v3d='v3/leftmenu3.php';
//page content by list for admin module//
$admin='v3/admin.php';
$banuser='v3/banuser.php';
$pagecreate='v3/pager.php';
$editor='v3/editor.php';
$adduser='v3/adduser.php';

//last two below content//
$v3f='v3/rightmenu3.php';
$v3g='v3/footer3.php';
//LISTED CONTROLLERS//

//LISTED RESOURCES//

//LISTED

//SEO/META DATA FOR HEADERS F YOU WISH THEM TO ECHO INTO YOUR HEADER'S YOU MAY CREATE MORE HEADERS//
//TO IMPLEMENT THEM JUST ECHO THE VARIABLES BELOW INTO THE HEAD SECTIONS OF OYOUR PAGE'S//
$meta_title='EssenceOne Php Framework';
$meta_descr='Easy And Fast Way To Create Dynamic Php Websites And Applications.';
$meta_bot='True';
?>