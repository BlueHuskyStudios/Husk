<?PHP
header("Content-type: text/css");                                    // Identify as a CSS file
header('Content-Transfer-Encoding: binary');                         // Transfer this file as binary
header('Expires: ' . date('D, j M Y H:i:s e', strtotime('+1 day'))); // This file expires one day from now
header('Cache-Control: max-age=' . 60*60*24);                        // Recommend one-day cache. This should help with server load
header('Pragma: public');                                            // Everyone can see this

include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/huskMeta.php';

// DECLARE
global $H12_font;      // font family for H1 and H2
global $H36_font;      // font family for H3 through H6
global $H16_ems_above; // top padding for H1 through H6
global $H16_ems_below; // bottom padding for H1 through H6

// ASSIGN & SANITIZE
function sanitizeFontName($fontName)
{
	$match = null;
	preg_match('/((([\w -]+)|("[\w -]+"))( *, *)?)+/', $fontName, $match); // Only get a W3C font list. Proven here: http://refiddle.com/18ql
	return $match[0]; // only one
}

function sanitizeIntInput($int, $default)
{
	if ($int)
		$int = intval($int);
	if (!$int) // instead of else, in case intval returns a 0
		$int = $default;
	return $int;
}


$H12_font = sanitizeFontName($_GET['title1']);
$H36_font = sanitizeFontName($_GET['title2']);
$H16_ems_above = sanitizeIntInput($_GET['H16_ems_above'], 1);
$H16_ems_below = sanitizeIntInput($_GET['H16_ems_below'], .5);




?>/* Husk framework typography CSS - http://prog.BHStudios.org/husk
 * Copyright Blue Husky Programming ©2014 GPLv3
 */

/* WebFonts */
@import url(http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic|Roboto+Condensed:300italic,400italic,700italic,300,700,400|Roboto+Slab:400,100,300,700|Droid+Sans+Mono&subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic);

:root.husktype,
HTML.husktype,
BODY.husktype,
.husktype :root,
.husktype HTML,
.husktype BODY {
	font-family:
		"Roboto",         /* Web */
		"Segoe UI",       /* Windows */
		"Helvetica Neue", /* OS X */
		"Neue Helvetica", /* OS X */
		"Helvetica",      /* OS X */
		"Arial",          /* Windows */
		sans-serif;       /* Generic */
}

.husktype H1, H1.husktype,
.husktype H2, H2.husktype,
.husktype H3, H3.husktype,
.husktype H4, H4.husktype,
.husktype H5, H5.husktype,
.husktype H6, H6.husktype {
	margin: 1em 0 .5em;
}

	.husktype H1:first-child, H1.husktype:first-child,
	.husktype H2:first-child, H2.husktype:first-child,
	.husktype H3:first-child, H3.husktype:first-child,
	.husktype H4:first-child, H4.husktype:first-child,
	.husktype H5:first-child, H5.husktype:first-child,
	.husktype H6:first-child, H6.husktype:first-child {
		margin-top: 0;
	}

.husktype H1, H1.husktype {
	border-bottom: thin solid currentColor;
}
.husktype H1, H1.husktype,
.husktype H2, H2.husktype {
	font-family:
		"Roboto Slab",      /* Web */
		"Roboto Condensed", /* Web */
		"Roboto",           /* Web */
		"Segoe UI",         /* Windows */
		"Helvetica Neue",   /* OS X */
		"Helvetica",        /* OS X */
		"Arial",            /* Windows */
		sans-serif;         /* Generic */
}
.husktype H3, H3.husktype,
.husktype H4, H4.husktype,
.husktype H5, H5.husktype,
.husktype H6, H6.husktype {
	font-family:
		"Roboto Condensed", /* Web */
		"Roboto Slab",      /* Web */
		"Roboto",           /* Web */
		"Segoe UI",         /* Windows */
		"Helvetica Neue",   /* OS X */
		"Helvetica",        /* OS X */
		"Arial",            /* Windows */
		sans-serif;         /* Generic */
	padding: 0 1em;
	/*margin: 1em 0 .5em;*/
}
.husktype H1, H1.husktype, .husktype .row>* H1 { font-size: 3em;    font-weight: 100; }
.husktype H2, H2.husktype, .husktype .row>* H2 { font-size: 2.5em;  font-weight: 200; }
.husktype H3, H3.husktype, .husktype .row>* H3 { font-size: 2em;    font-weight: 300; }
.husktype H4, H4.husktype, .husktype .row>* H4 { font-size: 1.5em;  font-weight: 400; }
.husktype H5, H5.husktype, .husktype .row>* H5 { font-size: 1.3em;  font-weight: 500; }
.husktype H6, H6.husktype, .husktype .row>* H6 { font-size: 1.2em;  font-weight: 600; }

.husktype .brand,
.husktype.brand {
	font-weight: inherit;
	font-family: 'Roboto Slab', fantasy, sans-serif;
}
.husktype .brand H1, .brand H1.husktype,
.husktype .brand H2, .brand H2.husktype,
.husktype .brand H3, .brand H3.husktype,
.husktype .brand H4, .brand H4.husktype,
.husktype .brand H5, .brand H5.husktype,
.husktype .brand H6, .brand H6.husktype {
	border-bottom: none;
	margin: 0 1em;
	text-align: center;
}

.husktype .big { font-size: 1.5em; }

H1.plain, /* stopped developing to question whether this is resonable */
H2.plain,
H3.plain,
H4.plain,
H5.plain,
H6.plain {
	border-bottom: none;
	margin: 0;
}

dl.inline dt {
  float: left;
  clear: left;
  margin-right: .2em;
}
	dl.inline dd {
	  margin-left: 0px;
	}

.font-1qx { font-size: 25% !important; }
.font-1hx,
.font-2qx { font-size: 50% !important; }
.font-3qx { font-size: 75% !important; }
.font-1x  { font-size: 100% !important; }
.font-1-1qx  { font-size: 125% !important; }
.font-1-2qx,
.font-1-1hx  { font-size: 150% !important; }
.font-1-3qx  { font-size: 175% !important; }
.font-2x  { font-size: 200% !important; }
.font-3x  { font-size: 300% !important; }
.font-4x  { font-size: 400% !important; }

.font-smaller  { font-size: smaller  !important; }
.font-xx-small { font-size: xx-small !important; }
.font-x-small  { font-size: x-small  !important; }
.font-small    { font-size: small    !important; }
.font-medium   { font-size: medium   !important; }
.font-large    { font-size: large    !important; }
.font-x-large  { font-size: x-large  !important; }
.font-xx-large { font-size: xx-large !important; }
.font-larger   { font-size: larger   !important; }

.font-ultra-light, .font-100 { font-weight: 100 !important; }
.font-thin,        .font-200 { font-weight: 200 !important; }
.font-light,       .font-300 { font-weight: 300 !important; }
.font-roman, .font-medium,
.font-normal,      .font-400 { font-weight: 400 !important; }
.font-bold,        .font-500 { font-weight: 500 !important; }
.font-heavy,       .font-600 { font-weight: 600 !important; }
.font-black,       .font-700 { font-weight: 700 !important; }

.text-uppercase { text-transform: UPPERCASE; }
.text-lowercase { text-transform: lowercase; }
.text-title,
.text-capitalize { text-transform: capitalize; }

.text-left,    .align-left    { text-align: left }
.text-right,   .align-right   { text-align: right }
.text-center,  .align-center  { text-align: center }
.text-justify, .align-justify { text-align: justify }

.husktype CODE, CODE.husktype,
.husktype PRE,  PRE.husktype {
	font-family:
		"Droid Sans Mono", /* Web */
		"Lucida Console",  /* Windows */
		"Courier New"      /* Windows, OS X */
		monospace;         /* Generic */
}