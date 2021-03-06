<?PHP
header("Content-type: text/css");                                    // Identify as a CSS file
header('Content-Transfer-Encoding: binary');                         // Transfer this file as binary
header('Expires: ' . date('D, j M Y H:i:s e', strtotime('+1 day'))); // This file expires one day from now
header('Cache-Control: max-age=' . 60*60*24);                        // Recommend one-day cache. This should help with server load
header('Pragma: public');                                            // Everyone can see this

$cols = $_GET['cols'];
if ($cols)
	$cols = intval($cols);
if (!$cols) // instead of else, in case intval returns a 0
	$cols = 12;

$smallMin = $_GET['smallMin'];
if ($smallMin)
	$smallMin = intval($smallMin);
if (!$smallMin)
	$smallMin = 480;

$mediumMin = $_GET['mediumMin'];
if ($mediumMin)
	$mediumMin = intval($mediumMin);
if (!$mediumMin)
	$mediumMin = 768;

$largeMin = $_GET['largeMin'];
if ($largeMin)
	$largeMin = intval($largeMin);
if (!$largeMin)
	$largeMin = 1024;

$hugeMin = $_GET['hugeMin'];
if ($hugeMin)
	$hugeMin = intval($hugeMin);
if (!$hugeMin)
	$hugeMin = 1440;

$tinyMax = $smallMin - 1;
$smallMax = $mediumMin - 1;
$mediumMax = $largeMin - 1;
$largeMax = $hugeMin - 1;


?>/* Husk framework 1.0.1 basic CSS - http://prog.BHStudios.org/husk
 * Copyright Blue Husky Programming ©2013 GPLv3
 * Custom sheet ID: <?PHP

echo base_convert("$cols", 10 , 64);
echo base_convert("$smallMin", 10 , 64);
echo base_convert("$mediumMin", 10 , 64);
echo base_convert("$largeMin", 10 , 64);
echo base_convert("$hugeMin", 10 , 64);

?>

 * 
 * Requires that the browser has full CSS3 support.
 * 
 * Sizes are:
 * 		- Tiny: 0px - <?PHP echo $tinyMax; ?>px
 * 		- Small: (<?PHP echo $smallMin; ?>px) - <?PHP echo $smallMax; ?>px
 * 		- Medium: (<?PHP echo $mediumMin; ?>px) - <?PHP echo $mediumMax; ?>px
 * 		- Large: <?PHP echo $largeMin; ?>px - (<?PHP echo $largeMax; ?>px)
 * 		- Huge: <?PHP echo $hugeMin; ?>px+
 * Middle sizes (Small, Medium, and Large) propagate down; when one is not set, but another is, it defaults to the largest set one.
 * Huge and tiny sizes are optional; if not set then large and small sizes (respectively) are used.
 */



/************************* BEGIN HTML5 Compatibility **************************/
ARTICLE,
MAIN,
SECTION {
	display: block; /* Because IE displays new elements as inline by default */
}
/************************** END HTML5 Compatibility ***************************/



/************************ BEGIN Standard HTML Styling *************************/
.pretty PRE,
PRE.pretty {
	overflow-x: auto;
}
/************************* END Standard HTML Styling **************************/



/******************************** BEGIN Inputs ********************************/
.button.big,
BUTTON.big,
INPUT[type="button"].big,
INPUT[type="submit"].big,
INPUT[type="reset"].big {
	font-size: 1.5em;
	padding: .5em 1em;
}
/********************************* END Inputs *********************************/



/********************************* BEGIN Hero *********************************/
.hero {
	margin: 1em;
	padding: 3em;
	} @media (max-width: <?PHP echo $tinyMax; ?>px) { .hero {
		padding: 1em;
	}
}
/********************************** END Hero **********************************/



/****************************** BEGIN Animations ******************************/
.animate-all *,
.animate-all *::before,
.animate-all *::after {
	animation-timing-function: ease-in-out;
	-o-animation-timing-function: ease-in-out;
	-ms-animation-timing-function: ease-in-out;
	-moz-animation-timing-function: ease-in-out;
	-webkit-animation-timing-function: ease-in-out;

	transition-property: none;
	transition-duration: .25s;
	transition-timing-function: ease-in-out;
	-o-transition-property: none;
	-o-transition-duration: .25s;
	-o-transition-timing-function: ease-in-out;
	-ms-transition-property: none;
	-ms-transition-duration: .25s;
	-ms-transition-timing-function: ease-in-out;
	-moz-transition-property: none;
	-moz-transition-duration: .25s;
	-moz-transition-timing-function: ease-in-out;
	-webkit-transition-property: none;
	-webkit-transition-duration: .25s;
	-webkit-transition-timing-function: ease-in-out;
}
@media (max-width: <?PHP echo $tinyMax; ?>px) { /* Tiny */
	.animate-tiny *,
	.animate-tiny *::before,
	.animate-tiny *::after {
		animation-timing-function: ease-in-out;
		-o-animation-timing-function: ease-in-out;
		-ms-animation-timing-function: ease-in-out;
		-moz-animation-timing-function: ease-in-out;
		-webkit-animation-timing-function: ease-in-out;

		transition-property: none;
		transition-duration: .25s;
		transition-timing-function: ease-in-out;
		-o-transition-property: none;
		-o-transition-duration: .25s;
		-o-transition-timing-function: ease-in-out;
		-ms-transition-property: none;
		-ms-transition-duration: .25s;
		-ms-transition-timing-function: ease-in-out;
		-moz-transition-property: none;
		-moz-transition-duration: .25s;
		-moz-transition-timing-function: ease-in-out;
		-webkit-transition-property: none;
		-webkit-transition-duration: .25s;
		-webkit-transition-timing-function: ease-in-out;
	}
}
@media (min-width: <?PHP echo $smallMin; ?>px) and (max-width: <?PHP echo $smallMax; ?>px) { /* Small */
	.animate-small *,
	.animate-small *::before,
	.animate-small *::after {
		animation-timing-function: ease-in-out;
		-o-animation-timing-function: ease-in-out;
		-ms-animation-timing-function: ease-in-out;
		-moz-animation-timing-function: ease-in-out;
		-webkit-animation-timing-function: ease-in-out;

		transition-property: none;
		transition-duration: .25s;
		transition-timing-function: ease-in-out;
		-o-transition-property: none;
		-o-transition-duration: .25s;
		-o-transition-timing-function: ease-in-out;
		-ms-transition-property: none;
		-ms-transition-duration: .25s;
		-ms-transition-timing-function: ease-in-out;
		-moz-transition-property: none;
		-moz-transition-duration: .25s;
		-moz-transition-timing-function: ease-in-out;
		-webkit-transition-property: none;
		-webkit-transition-duration: .25s;
		-webkit-transition-timing-function: ease-in-out;
	}
}
@media (min-width: <?PHP echo $mediumMin; ?>px) and (max-width: <?PHP echo $mediumMax; ?>px) { /* Medium */
	.animate-medium *,
	.animate-medium *::before,
	.animate-medium *::after {
		animation-timing-function: ease-in-out;
		-o-animation-timing-function: ease-in-out;
		-ms-animation-timing-function: ease-in-out;
		-moz-animation-timing-function: ease-in-out;
		-webkit-animation-timing-function: ease-in-out;

		transition-property: none;
		transition-duration: .25s;
		transition-timing-function: ease-in-out;
		-o-transition-property: none;
		-o-transition-duration: .25s;
		-o-transition-timing-function: ease-in-out;
		-ms-transition-property: none;
		-ms-transition-duration: .25s;
		-ms-transition-timing-function: ease-in-out;
		-moz-transition-property: none;
		-moz-transition-duration: .25s;
		-moz-transition-timing-function: ease-in-out;
		-webkit-transition-property: none;
		-webkit-transition-duration: .25s;
		-webkit-transition-timing-function: ease-in-out;
	}
}
@media (min-width: <?PHP echo $largeMin; ?>px) and (max-width: <?PHP echo $largeMax; ?>px) { /* Large */
	.animate-large *,
	.animate-large *::before,
	.animate-large *::after {
		animation-timing-function: ease-in-out;
		-o-animation-timing-function: ease-in-out;
		-ms-animation-timing-function: ease-in-out;
		-moz-animation-timing-function: ease-in-out;
		-webkit-animation-timing-function: ease-in-out;

		transition-property: none;
		transition-duration: .25s;
		transition-timing-function: ease-in-out;
		-o-transition-property: none;
		-o-transition-duration: .25s;
		-o-transition-timing-function: ease-in-out;
		-ms-transition-property: none;
		-ms-transition-duration: .25s;
		-ms-transition-timing-function: ease-in-out;
		-moz-transition-property: none;
		-moz-transition-duration: .25s;
		-moz-transition-timing-function: ease-in-out;
		-webkit-transition-property: none;
		-webkit-transition-duration: .25s;
		-webkit-transition-timing-function: ease-in-out;
	}
}
@media (min-width: <?PHP echo $hugeMin; ?>px) { /* Huge */
	.animate-huge *,
	.animate-huge *::before,
	.animate-huge *::after {
		animation-timing-function: ease-in-out;
		-o-animation-timing-function: ease-in-out;
		-ms-animation-timing-function: ease-in-out;
		-moz-animation-timing-function: ease-in-out;
		-webkit-animation-timing-function: ease-in-out;

		transition-property: none;
		transition-duration: .25s;
		transition-timing-function: ease-in-out;
		-o-transition-property: none;
		-o-transition-duration: .25s;
		-o-transition-timing-function: ease-in-out;
		-ms-transition-property: none;
		-ms-transition-duration: .25s;
		-ms-transition-timing-function: ease-in-out;
		-moz-transition-property: none;
		-moz-transition-duration: .25s;
		-moz-transition-timing-function: ease-in-out;
		-webkit-transition-property: none;
		-webkit-transition-duration: .25s;
		-webkit-transition-timing-function: ease-in-out;
	}
}
/******************************* END Animations *******************************/



/************************* BEGIN Visibility Controls **************************/
@media (max-width: <?PHP echo $tinyMax; ?>px) { /* Tiny */
	.hide-tiny,
	.hide-small:not(.show-tiny),
	.show-medium,
	.show-large,
	.show-huge {
		display: none;
	}
}
@media (min-width: <?PHP echo $smallMin; ?>px) and (max-width: <?PHP echo $smallMax; ?>px) { /* Small */
	.show-tiny,
	.hide-small,
	.show-medium,
	.show-large,
	.show-huge {
		display: none;
	}
}
@media (min-width: <?PHP echo $mediumMin; ?>px) and (max-width: <?PHP echo $mediumMax; ?>px) { /* Medium */
	.show-tiny,
	.show-small,
	.hide-medium,
	.show-large,
	.show-huge {
		display: none;
	}
}
@media (min-width: <?PHP echo $largeMin; ?>px) and (max-width: <?PHP echo $largeMax; ?>px) { /* Large */
	.show-tiny,
	.show-small,
	.show-medium,
	.hide-large,
	.show-huge {
		display: none;
	}
}
@media (min-width: <?PHP echo $hugeMin; ?>px) { /* Huge */
	.show-tiny,
	.show-small,
	.show-medium,
	.hide-large:not(.show-huge),
	.hide-huge {
		display: none;
	}
}
/************************** END Visibility Controls ***************************/



/****************************** BEGIN Grid Rows *******************************/
.row {
	/*display: block;
	font-size: 0;*/
	
	/* Start flex layout */
    display:     -webkit-box;
    display:        -moz-box;
    display:     -ms-flexbox;
    display: -webkit-flex;
    display:         flex;
	
	/* .flex-row */
	-webkit-box-orient: horizontal;
	   -moz-box-orient: horizontal;
	-webkit-flex-direction: row;
	    -ms-flex-direction: row;
	        flex-direction: row;
	
	/* .flex-wrap */
	-webkit-flex-wrap: wrap;
	    -ms-flex-wrap: wrap;
	        flex-wrap: wrap;
}
	ol.row,
	ul.row {
		padding: 0;
	}
.row:not(.flush) {
	margin: .5em; /* Margin to space out right and bottom of.row>*/
}
.row.centered {
	/* .flex-center */
	       -webkit-box-pack: center;
	          -moz-box-pack: center;
	          -ms-flex-pack: center;
	-webkit-justify-content: center;
	        justify-content: center;
}
	.row:not(.flush)>* /*,
	.row>[class^="all-"],    .row>[class*=" all-"],
	.row>[class^="tiny-"],   .row>[class*=" tiny-"],
	.row>[class^="small-"],  .row>[class*=" small-"],
	.row>[class^="medium-"], .row>[class*=" medium-"],
	.row>[class^="large-"],  .row>[class*=" large-"],
	.row>[class^="huge-"],   .row>[class*=" huge-"]*/ {
		-webkit-box-sizing: border-box;
		   -moz-box-sizing: border-box;
		        box-sizing: border-box;
		-ms-flex-preferred-size: auto !important; /* Because IE doesn't apply border-box sizing to flex-basis */
	}
	.row:not(.flush)>* /*,
	.row:not(.flush)>[class^="all-"],    .row:not(.flush)>[class*=" all-"],
	.row:not(.flush)>[class^="tiny-"],   .row:not(.flush)>[class*=" tiny-"],
	.row:not(.flush)>[class^="small-"],  .row:not(.flush)>[class*=" small-"],
	.row:not(.flush)>[class^="medium-"], .row:not(.flush)>[class*=" medium-"],
	.row:not(.flush)>[class^="large-"],  .row:not(.flush)>[class*=" large-"],
	.row:not(.flush)>[class^="huge-"],   .row:not(.flush)>[class*=" huge-"]*/ {
		margin: .5em;
	}
	.row>* {
		vertical-align: top;
		flex: 0 0 0;
	}
	/* This and subsequent calculations with ".01px" are to account for errors from browsers using quarter-precision floating-point calculations */
	.row>.all-1	{ -webkit-flex-basis: calc((100% / <?PHP echo $cols; ?>)      - 1em - .01px);
	           	          flex-basis: calc((100% / <?PHP echo $cols; ?>)      - 1em - .01px);
	           	               width: calc((100% / <?PHP echo $cols; ?>)      - 1em - .01px); }<?PHP
	
	
	
	for($i = 2; $i < $cols; $i++)
	{
	?>

	.row>.all-<?PHP echo $i; ?>	{ -webkit-flex-basis: calc((100% / <?PHP echo "$cols) * $i"; ?>  - 1em - .01px); 
	           	          flex-basis: calc((100% / <?PHP echo "$cols) * $i"; ?>  - 1em - .01px);
	           	               width: calc((100% / <?PHP echo "$cols) * $i"; ?>  - 1em - .01px); }<?PHP
	}
	
	?>

	.row>.all-<?PHP echo $cols; ?>	{ -webkit-flex: none; flex: none; display: block; width: calc(100% - 1em - .01px); }
	
	.row.flush>.all-1	{ -webkit-flex-basis: calc((100% / <?PHP echo $cols; ?>)      - .01px);
	                 	          flex-basis: calc((100% / <?PHP echo $cols; ?>)      - .01px);
	                 	               width: calc((100% / <?PHP echo $cols; ?>)      - .01px); }<?PHP
	
	
	for($i = 2; $i < $cols; $i++)
	{
	?>

	.row.flush>.all-<?PHP echo $i; ?>	{ -webkit-flex-basis: calc((100% / <?PHP echo "$cols) * $i"; ?>  - .01px);
	                 	          flex-basis: calc((100% / <?PHP echo "$cols) * $i"; ?>  - .01px);
	                 	               width: calc((100% / <?PHP echo "$cols) * $i"; ?>  - .01px); }<?PHP
	}
	
	?>

	.row.flush>.all-<?PHP echo $cols; ?> { -webkit-flex: none; flex: none; display: block; width: calc(100% - .01px); }
	
	.row>.offset-all-1  { margin-left: calc((100% / <?PHP echo $cols; ?>)      + (.5em - .01px)) !important; }
	.row>.offset-all-2  { margin-left: calc((100% / 12) * 2  + (.5em - .01px)) !important; }
	.row>.offset-all-3  { margin-left: calc((100% / 12) * 3  + (.5em - .01px)) !important; }
	.row>.offset-all-4  { margin-left: calc((100% / 12) * 4  + (.5em - .01px)) !important; }
	.row>.offset-all-5  { margin-left: calc((100% / 12) * 5  + (.5em - .01px)) !important; }
	.row>.offset-all-6  { margin-left: calc((100% / 12) * 6  + (.5em - .01px)) !important; }
	.row>.offset-all-7  { margin-left: calc((100% / 12) * 7  + (.5em - .01px)) !important; }
	.row>.offset-all-8  { margin-left: calc((100% / 12) * 8  + (.5em - .01px)) !important; }
	.row>.offset-all-9  { margin-left: calc((100% / 12) * 9  + (.5em - .01px)) !important; }
	.row>.offset-all-10 { margin-left: calc((100% / 12) * 10 + (.5em - .01px)) !important; }
	.row>.offset-all-11 { margin-left: calc((100% / 12) * 11 + (.5em - .01px)) !important; }
	
	.row.flush>.offset-all-1  { margin-left: calc((100% / 12)      - .01px) !important; }
	.row.flush>.offset-all-2  { margin-left: calc((100% / 12) * 2  - .01px) !important; }
	.row.flush>.offset-all-3  { margin-left: calc((100% / 12) * 3  - .01px) !important; }
	.row.flush>.offset-all-4  { margin-left: calc((100% / 12) * 4  - .01px) !important; }
	.row.flush>.offset-all-5  { margin-left: calc((100% / 12) * 5  - .01px) !important; }
	.row.flush>.offset-all-6  { margin-left: calc((100% / 12) * 6  - .01px) !important; }
	.row.flush>.offset-all-7  { margin-left: calc((100% / 12) * 7  - .01px) !important; }
	.row.flush>.offset-all-8  { margin-left: calc((100% / 12) * 8  - .01px) !important; }
	.row.flush>.offset-all-9  { margin-left: calc((100% / 12) * 9  - .01px) !important; }
	.row.flush>.offset-all-10 { margin-left: calc((100% / 12) * 10 - .01px) !important; }
	.row.flush>.offset-all-11 { margin-left: calc((100% / 12) * 11 - .01px) !important; }
	
	@media (max-width: <?PHP echo $largeMax; ?>px) { /* Large devices */
		.row>.large-1  { -webkit-flex-basis: calc((100% / 12)      - 1em - .01px); }
		.row>.large-2  { -webkit-flex-basis: calc((100% / 12) * 2  - 1em - .01px); }
		.row>.large-3  { -webkit-flex-basis: calc((100% / 12) * 3  - 1em - .01px); }
		.row>.large-4  { -webkit-flex-basis: calc((100% / 12) * 4  - 1em - .01px); }
		.row>.large-5  { -webkit-flex-basis: calc((100% / 12) * 5  - 1em - .01px); }
		.row>.large-6  { -webkit-flex-basis: calc((100% / 12) * 6  - 1em - .01px); }
		.row>.large-7  { -webkit-flex-basis: calc((100% / 12) * 7  - 1em - .01px); }
		.row>.large-8  { -webkit-flex-basis: calc((100% / 12) * 8  - 1em - .01px); }
		.row>.large-9  { -webkit-flex-basis: calc((100% / 12) * 9  - 1em - .01px); }
		.row>.large-10 { -webkit-flex-basis: calc((100% / 12) * 10 - 1em - .01px); }
		.row>.large-11 { -webkit-flex-basis: calc((100% / 12) * 11 - 1em - .01px); }
		.row>.large-12 { -webkit-flex-basis: calc( 100%            - 1em - .01px); }
		.row>.large-1  { flex-basis: calc((100% / 12)      - 1em - .01px); width: calc((100% / 12)      - 1em - .01px); }
		.row>.large-2  { flex-basis: calc((100% / 12) * 2  - 1em - .01px); width: calc((100% / 12) * 2  - 1em - .01px); }
		.row>.large-3  { flex-basis: calc((100% / 12) * 3  - 1em - .01px); width: calc((100% / 12) * 3  - 1em - .01px); }
		.row>.large-4  { flex-basis: calc((100% / 12) * 4  - 1em - .01px); width: calc((100% / 12) * 4  - 1em - .01px); }
		.row>.large-5  { flex-basis: calc((100% / 12) * 5  - 1em - .01px); width: calc((100% / 12) * 5  - 1em - .01px); }
		.row>.large-6  { flex-basis: calc((100% / 12) * 6  - 1em - .01px); width: calc((100% / 12) * 6  - 1em - .01px); }
		.row>.large-7  { flex-basis: calc((100% / 12) * 7  - 1em - .01px); width: calc((100% / 12) * 7  - 1em - .01px); }
		.row>.large-8  { flex-basis: calc((100% / 12) * 8  - 1em - .01px); width: calc((100% / 12) * 8  - 1em - .01px); }
		.row>.large-9  { flex-basis: calc((100% / 12) * 9  - 1em - .01px); width: calc((100% / 12) * 9  - 1em - .01px); }
		.row>.large-10 { flex-basis: calc((100% / 12) * 10 - 1em - .01px); width: calc((100% / 12) * 10 - 1em - .01px); }
		.row>.large-11 { flex-basis: calc((100% / 12) * 11 - 1em - .01px); width: calc((100% / 12) * 11 - 1em - .01px); }
		.row>.large-12 { flex-basis: calc( 100%            - 1em - .01px); width: calc( 100%            - 1em - .01px); }
		
		.row.flush>.large-1  { -webkit-flex-basis: calc((100% / 12)      - .01px); }
		.row.flush>.large-2  { -webkit-flex-basis: calc((100% / 12) * 2  - .01px); }
		.row.flush>.large-3  { -webkit-flex-basis: calc((100% / 12) * 3  - .01px); }
		.row.flush>.large-4  { -webkit-flex-basis: calc((100% / 12) * 4  - .01px); }
		.row.flush>.large-5  { -webkit-flex-basis: calc((100% / 12) * 5  - .01px); }
		.row.flush>.large-6  { -webkit-flex-basis: calc((100% / 12) * 6  - .01px); }
		.row.flush>.large-7  { -webkit-flex-basis: calc((100% / 12) * 7  - .01px); }
		.row.flush>.large-8  { -webkit-flex-basis: calc((100% / 12) * 8  - .01px); }
		.row.flush>.large-9  { -webkit-flex-basis: calc((100% / 12) * 9  - .01px); }
		.row.flush>.large-10 { -webkit-flex-basis: calc((100% / 12) * 10 - .01px); }
		.row.flush>.large-11 { -webkit-flex-basis: calc((100% / 12) * 11 - .01px); }
		.row.flush>.large-12 { -webkit-flex-basis: calc( 100%            - .01px); }
		.row.flush>.large-1  { flex-basis: calc((100% / 12)      - .01px); width: calc((100% / 12)      - .01px); }
		.row.flush>.large-2  { flex-basis: calc((100% / 12) * 2  - .01px); width: calc((100% / 12) * 2  - .01px); }
		.row.flush>.large-3  { flex-basis: calc((100% / 12) * 3  - .01px); width: calc((100% / 12) * 3  - .01px); }
		.row.flush>.large-4  { flex-basis: calc((100% / 12) * 4  - .01px); width: calc((100% / 12) * 4  - .01px); }
		.row.flush>.large-5  { flex-basis: calc((100% / 12) * 5  - .01px); width: calc((100% / 12) * 5  - .01px); }
		.row.flush>.large-6  { flex-basis: calc((100% / 12) * 6  - .01px); width: calc((100% / 12) * 6  - .01px); }
		.row.flush>.large-7  { flex-basis: calc((100% / 12) * 7  - .01px); width: calc((100% / 12) * 7  - .01px); }
		.row.flush>.large-8  { flex-basis: calc((100% / 12) * 8  - .01px); width: calc((100% / 12) * 8  - .01px); }
		.row.flush>.large-9  { flex-basis: calc((100% / 12) * 9  - .01px); width: calc((100% / 12) * 9  - .01px); }
		.row.flush>.large-10 { flex-basis: calc((100% / 12) * 10 - .01px); width: calc((100% / 12) * 10 - .01px); }
		.row.flush>.large-11 { flex-basis: calc((100% / 12) * 11 - .01px); width: calc((100% / 12) * 11 - .01px); }
		.row.flush>.large-12 { flex-basis: calc( 100%            - .01px); }
		
		.row>.offset-large-1  { margin-left: calc((100% / 12)      - .5em - .01px) !important; }
		.row>.offset-large-2  { margin-left: calc((100% / 12) * 2  - .5em - .01px) !important; }
		.row>.offset-large-3  { margin-left: calc((100% / 12) * 3  - .5em - .01px) !important; }
		.row>.offset-large-4  { margin-left: calc((100% / 12) * 4  - .5em - .01px) !important; }
		.row>.offset-large-5  { margin-left: calc((100% / 12) * 5  - .5em - .01px) !important; }
		.row>.offset-large-6  { margin-left: calc((100% / 12) * 6  - .5em - .01px) !important; }
		.row>.offset-large-7  { margin-left: calc((100% / 12) * 7  - .5em - .01px) !important; }
		.row>.offset-large-8  { margin-left: calc((100% / 12) * 8  - .5em - .01px) !important; }
		.row>.offset-large-9  { margin-left: calc((100% / 12) * 9  - .5em - .01px) !important; }
		.row>.offset-large-10 { margin-left: calc((100% / 12) * 10 - .5em - .01px) !important; }
		.row>.offset-large-11 { margin-left: calc((100% / 12) * 11 - .5em - .01px) !important; }
		
		.row.flush>.offset-large-1  { margin-left: calc((100% / 12)      - .01px) !important; }
		.row.flush>.offset-large-2  { margin-left: calc((100% / 12) * 2  - .01px) !important; }
		.row.flush>.offset-large-3  { margin-left: calc((100% / 12) * 3  - .01px) !important; }
		.row.flush>.offset-large-4  { margin-left: calc((100% / 12) * 4  - .01px) !important; }
		.row.flush>.offset-large-5  { margin-left: calc((100% / 12) * 5  - .01px) !important; }
		.row.flush>.offset-large-6  { margin-left: calc((100% / 12) * 6  - .01px) !important; }
		.row.flush>.offset-large-7  { margin-left: calc((100% / 12) * 7  - .01px) !important; }
		.row.flush>.offset-large-8  { margin-left: calc((100% / 12) * 8  - .01px) !important; }
		.row.flush>.offset-large-9  { margin-left: calc((100% / 12) * 9  - .01px) !important; }
		.row.flush>.offset-large-10 { margin-left: calc((100% / 12) * 10 - .01px) !important; }
		.row.flush>.offset-large-11 { margin-left: calc((100% / 12) * 11 - .01px) !important; }
		
		
		
		.hidden-large { display: none !important; }
	}
	@media (min-width: <?PHP echo $hugeMin; ?>px) { /* Huge devices */
		/* "Huge" comes after "Large" to ensure its styles cascade properly */
		.row>.huge-1 , .row>.large-1:not( [class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12)      - 1em - .01px); }
		.row>.huge-2 , .row>.large-2:not( [class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12) * 2  - 1em - .01px); }
		.row>.huge-3 , .row>.large-3:not( [class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12) * 3  - 1em - .01px); }
		.row>.huge-4 , .row>.large-4:not( [class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12) * 4  - 1em - .01px); }
		.row>.huge-5 , .row>.large-5:not( [class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12) * 5  - 1em - .01px); }
		.row>.huge-6 , .row>.large-6:not( [class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12) * 6  - 1em - .01px); }
		.row>.huge-7 , .row>.large-7:not( [class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12) * 7  - 1em - .01px); }
		.row>.huge-8 , .row>.large-8:not( [class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12) * 8  - 1em - .01px); }
		.row>.huge-9 , .row>.large-9:not( [class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12) * 9  - 1em - .01px); }
		.row>.huge-10, .row>.large-10:not([class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12) * 10 - 1em - .01px); }
		.row>.huge-11, .row>.large-11:not([class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12) * 11 - 1em - .01px); }
		.row>.huge-12, .row>.large-12:not([class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc( 100%            - 1em - .01px); }
		.row>.huge-1 , .row>.large-1:not( [class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12)      - 1em - .01px); width: calc((100% / 12)      - 1em - .01px); }
		.row>.huge-2 , .row>.large-2:not( [class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12) * 2  - 1em - .01px); width: calc((100% / 12) * 2  - 1em - .01px); }
		.row>.huge-3 , .row>.large-3:not( [class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12) * 3  - 1em - .01px); width: calc((100% / 12) * 3  - 1em - .01px); }
		.row>.huge-4 , .row>.large-4:not( [class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12) * 4  - 1em - .01px); width: calc((100% / 12) * 4  - 1em - .01px); }
		.row>.huge-5 , .row>.large-5:not( [class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12) * 5  - 1em - .01px); width: calc((100% / 12) * 5  - 1em - .01px); }
		.row>.huge-6 , .row>.large-6:not( [class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12) * 6  - 1em - .01px); width: calc((100% / 12) * 6  - 1em - .01px); }
		.row>.huge-7 , .row>.large-7:not( [class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12) * 7  - 1em - .01px); width: calc((100% / 12) * 7  - 1em - .01px); }
		.row>.huge-8 , .row>.large-8:not( [class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12) * 8  - 1em - .01px); width: calc((100% / 12) * 8  - 1em - .01px); }
		.row>.huge-9 , .row>.large-9:not( [class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12) * 9  - 1em - .01px); width: calc((100% / 12) * 9  - 1em - .01px); }
		.row>.huge-10, .row>.large-10:not([class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12) * 10 - 1em - .01px); width: calc((100% / 12) * 10 - 1em - .01px); }
		.row>.huge-11, .row>.large-11:not([class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12) * 11 - 1em - .01px); width: calc((100% / 12) * 11 - 1em - .01px); }
		.row>.huge-12, .row>.large-12:not([class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc( 100%            - 1em - .01px); width: calc( 100%            - 1em - .01px); }
		
		.row.flush>.huge-1 , .row.flush .large-1:not( [class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12)      - .01px); }
		.row.flush>.huge-2 , .row.flush .large-2:not( [class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12) * 2  - .01px); }
		.row.flush>.huge-3 , .row.flush .large-3:not( [class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12) * 3  - .01px); }
		.row.flush>.huge-4 , .row.flush .large-4:not( [class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12) * 4  - .01px); }
		.row.flush>.huge-5 , .row.flush .large-5:not( [class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12) * 5  - .01px); }
		.row.flush>.huge-6 , .row.flush .large-6:not( [class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12) * 6  - .01px); }
		.row.flush>.huge-7 , .row.flush .large-7:not( [class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12) * 7  - .01px); }
		.row.flush>.huge-8 , .row.flush .large-8:not( [class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12) * 8  - .01px); }
		.row.flush>.huge-9 , .row.flush .large-9:not( [class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12) * 9  - .01px); }
		.row.flush>.huge-10, .row.flush .large-10:not([class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12) * 10 - .01px); }
		.row.flush>.huge-11, .row.flush .large-11:not([class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc((100% / 12) * 11 - .01px); }
		.row.flush>.huge-12, .row.flush .large-12:not([class^="huge-"]):not([class*=" huge-"]) { -webkit-flex-basis: calc( 100%            - .01px); }
		.row.flush>.huge-1 , .row.flush .large-1:not( [class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12)      - .01px); width: calc((100% / 12)      - .01px); }
		.row.flush>.huge-2 , .row.flush .large-2:not( [class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12) * 2  - .01px); width: calc((100% / 12) * 2  - .01px); }
		.row.flush>.huge-3 , .row.flush .large-3:not( [class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12) * 3  - .01px); width: calc((100% / 12) * 3  - .01px); }
		.row.flush>.huge-4 , .row.flush .large-4:not( [class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12) * 4  - .01px); width: calc((100% / 12) * 4  - .01px); }
		.row.flush>.huge-5 , .row.flush .large-5:not( [class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12) * 5  - .01px); width: calc((100% / 12) * 5  - .01px); }
		.row.flush>.huge-6 , .row.flush .large-6:not( [class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12) * 6  - .01px); width: calc((100% / 12) * 6  - .01px); }
		.row.flush>.huge-7 , .row.flush .large-7:not( [class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12) * 7  - .01px); width: calc((100% / 12) * 7  - .01px); }
		.row.flush>.huge-8 , .row.flush .large-8:not( [class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12) * 8  - .01px); width: calc((100% / 12) * 8  - .01px); }
		.row.flush>.huge-9 , .row.flush .large-9:not( [class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12) * 9  - .01px); width: calc((100% / 12) * 9  - .01px); }
		.row.flush>.huge-10, .row.flush .large-10:not([class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12) * 10 - .01px); width: calc((100% / 12) * 10 - .01px); }
		.row.flush>.huge-11, .row.flush .large-11:not([class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc((100% / 12) * 11 - .01px); width: calc((100% / 12) * 11 - .01px); }
		.row.flush>.huge-12, .row.flush .large-12:not([class^="huge-"]):not([class*=" huge-"]) { flex-basis: calc( 100%            - .01px); }
		
		.row>.offset-huge-1,  .row.flush .offset-large-1:not( [class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12)      - .5em - .01px) !important; }
		.row>.offset-huge-2,  .row.flush .offset-large-2:not( [class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12) * 2  - .5em - .01px) !important; }
		.row>.offset-huge-3,  .row.flush .offset-large-3:not( [class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12) * 3  - .5em - .01px) !important; }
		.row>.offset-huge-4,  .row.flush .offset-large-4:not( [class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12) * 4  - .5em - .01px) !important; }
		.row>.offset-huge-5,  .row.flush .offset-large-5:not( [class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12) * 5  - .5em - .01px) !important; }
		.row>.offset-huge-6,  .row.flush .offset-large-6:not( [class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12) * 6  - .5em - .01px) !important; }
		.row>.offset-huge-7,  .row.flush .offset-large-7:not( [class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12) * 7  - .5em - .01px) !important; }
		.row>.offset-huge-8,  .row.flush .offset-large-8:not( [class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12) * 8  - .5em - .01px) !important; }
		.row>.offset-huge-9,  .row.flush .offset-large-9:not( [class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12) * 9  - .5em - .01px) !important; }
		.row>.offset-huge-10, .row.flush .offset-large-10:not([class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12) * 10 - .5em - .01px) !important; }
		.row>.offset-huge-11, .row.flush .offset-large-11:not([class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12) * 11 - .5em - .01px) !important; }
		
		.row.flush>.offset-huge-1,  .row.flush .offset-large-1:not( [class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12)      - .01px) !important; }
		.row.flush>.offset-huge-2,  .row.flush .offset-large-2:not( [class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12) * 2  - .01px) !important; }
		.row.flush>.offset-huge-3,  .row.flush .offset-large-3:not( [class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12) * 3  - .01px) !important; }
		.row.flush>.offset-huge-4,  .row.flush .offset-large-4:not( [class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12) * 4  - .01px) !important; }
		.row.flush>.offset-huge-5,  .row.flush .offset-large-5:not( [class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12) * 5  - .01px) !important; }
		.row.flush>.offset-huge-6,  .row.flush .offset-large-6:not( [class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12) * 6  - .01px) !important; }
		.row.flush>.offset-huge-7,  .row.flush .offset-large-7:not( [class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12) * 7  - .01px) !important; }
		.row.flush>.offset-huge-8,  .row.flush .offset-large-8:not( [class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12) * 8  - .01px) !important; }
		.row.flush>.offset-huge-9,  .row.flush .offset-large-9:not( [class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12) * 9  - .01px) !important; }
		.row.flush>.offset-huge-10, .row.flush .offset-large-10:not([class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12) * 10 - .01px) !important; }
		.row.flush>.offset-huge-11, .row.flush .offset-large-11:not([class^="offset-huge-"]):not([class*=" offset-huge-"]) { margin-left: calc((100% / 12) * 11 - .01px) !important; }
		
		
		
		.hidden-huge { display: none !important; }
	}
	@media (max-width: <?PHP echo $mediumMax; ?>px) { /* Medium devices */
		.row>.medium-1  { -webkit-flex-basis: calc((100% / 12)      - 1em - .01px); }
		.row>.medium-2  { -webkit-flex-basis: calc((100% / 12) * 2  - 1em - .01px); }
		.row>.medium-3  { -webkit-flex-basis: calc((100% / 12) * 3  - 1em - .01px); }
		.row>.medium-4  { -webkit-flex-basis: calc((100% / 12) * 4  - 1em - .01px); }
		.row>.medium-5  { -webkit-flex-basis: calc((100% / 12) * 5  - 1em - .01px); }
		.row>.medium-6  { -webkit-flex-basis: calc((100% / 12) * 6  - 1em - .01px); }
		.row>.medium-7  { -webkit-flex-basis: calc((100% / 12) * 7  - 1em - .01px); }
		.row>.medium-8  { -webkit-flex-basis: calc((100% / 12) * 8  - 1em - .01px); }
		.row>.medium-9  { -webkit-flex-basis: calc((100% / 12) * 9  - 1em - .01px); }
		.row>.medium-10 { -webkit-flex-basis: calc((100% / 12) * 10 - 1em - .01px); }
		.row>.medium-11 { -webkit-flex-basis: calc((100% / 12) * 11 - 1em - .01px); }
		.row>.medium-12 { -webkit-flex-basis: calc( 100%            - 1em - .01px); }
		.row>.medium-1  { flex-basis: calc((100% / 12)      - 1em - .01px); width: calc((100% / 12)      - 1em - .01px); }
		.row>.medium-2  { flex-basis: calc((100% / 12) * 2  - 1em - .01px); width: calc((100% / 12) * 2  - 1em - .01px); }
		.row>.medium-3  { flex-basis: calc((100% / 12) * 3  - 1em - .01px); width: calc((100% / 12) * 3  - 1em - .01px); }
		.row>.medium-4  { flex-basis: calc((100% / 12) * 4  - 1em - .01px); width: calc((100% / 12) * 4  - 1em - .01px); }
		.row>.medium-5  { flex-basis: calc((100% / 12) * 5  - 1em - .01px); width: calc((100% / 12) * 5  - 1em - .01px); }
		.row>.medium-6  { flex-basis: calc((100% / 12) * 6  - 1em - .01px); width: calc((100% / 12) * 6  - 1em - .01px); }
		.row>.medium-7  { flex-basis: calc((100% / 12) * 7  - 1em - .01px); width: calc((100% / 12) * 7  - 1em - .01px); }
		.row>.medium-8  { flex-basis: calc((100% / 12) * 8  - 1em - .01px); width: calc((100% / 12) * 8  - 1em - .01px); }
		.row>.medium-9  { flex-basis: calc((100% / 12) * 9  - 1em - .01px); width: calc((100% / 12) * 9  - 1em - .01px); }
		.row>.medium-10 { flex-basis: calc((100% / 12) * 10 - 1em - .01px); width: calc((100% / 12) * 10 - 1em - .01px); }
		.row>.medium-11 { flex-basis: calc((100% / 12) * 11 - 1em - .01px); width: calc((100% / 12) * 11 - 1em - .01px); }
		.row>.medium-12 { flex-basis: calc( 100%            - 1em - .01px); width: calc( 100%            - 1em - .01px); }
		
		.row.flush>.medium-1  { -webkit-flex-basis: calc((100% / 12)      - .01px); }
		.row.flush>.medium-2  { -webkit-flex-basis: calc((100% / 12) * 2  - .01px); }
		.row.flush>.medium-3  { -webkit-flex-basis: calc((100% / 12) * 3  - .01px); }
		.row.flush>.medium-4  { -webkit-flex-basis: calc((100% / 12) * 4  - .01px); }
		.row.flush>.medium-5  { -webkit-flex-basis: calc((100% / 12) * 5  - .01px); }
		.row.flush>.medium-6  { -webkit-flex-basis: calc((100% / 12) * 6  - .01px); }
		.row.flush>.medium-7  { -webkit-flex-basis: calc((100% / 12) * 7  - .01px); }
		.row.flush>.medium-8  { -webkit-flex-basis: calc((100% / 12) * 8  - .01px); }
		.row.flush>.medium-9  { -webkit-flex-basis: calc((100% / 12) * 9  - .01px); }
		.row.flush>.medium-10 { -webkit-flex-basis: calc((100% / 12) * 10 - .01px); }
		.row.flush>.medium-11 { -webkit-flex-basis: calc((100% / 12) * 11 - .01px); }
		.row.flush>.medium-12 { -webkit-flex-basis: calc( 100%            - .01px); }
		.row.flush>.medium-1  { flex-basis: calc((100% / 12)      - .01px); width: calc((100% / 12)      - .01px); }
		.row.flush>.medium-2  { flex-basis: calc((100% / 12) * 2  - .01px); width: calc((100% / 12) * 2  - .01px); }
		.row.flush>.medium-3  { flex-basis: calc((100% / 12) * 3  - .01px); width: calc((100% / 12) * 3  - .01px); }
		.row.flush>.medium-4  { flex-basis: calc((100% / 12) * 4  - .01px); width: calc((100% / 12) * 4  - .01px); }
		.row.flush>.medium-5  { flex-basis: calc((100% / 12) * 5  - .01px); width: calc((100% / 12) * 5  - .01px); }
		.row.flush>.medium-6  { flex-basis: calc((100% / 12) * 6  - .01px); width: calc((100% / 12) * 6  - .01px); }
		.row.flush>.medium-7  { flex-basis: calc((100% / 12) * 7  - .01px); width: calc((100% / 12) * 7  - .01px); }
		.row.flush>.medium-8  { flex-basis: calc((100% / 12) * 8  - .01px); width: calc((100% / 12) * 8  - .01px); }
		.row.flush>.medium-9  { flex-basis: calc((100% / 12) * 9  - .01px); width: calc((100% / 12) * 9  - .01px); }
		.row.flush>.medium-10 { flex-basis: calc((100% / 12) * 10 - .01px); width: calc((100% / 12) * 10 - .01px); }
		.row.flush>.medium-11 { flex-basis: calc((100% / 12) * 11 - .01px); width: calc((100% / 12) * 11 - .01px); }
		.row.flush>.medium-12 { flex-basis: calc( 100%            - .01px); }
		
		.row>.offset-medium-1  { margin-left: calc((100% / 12)      - .5em - .01px) !important; }
		.row>.offset-medium-2  { margin-left: calc((100% / 12) * 2  - .5em - .01px) !important; }
		.row>.offset-medium-3  { margin-left: calc((100% / 12) * 3  - .5em - .01px) !important; }
		.row>.offset-medium-4  { margin-left: calc((100% / 12) * 4  - .5em - .01px) !important; }
		.row>.offset-medium-5  { margin-left: calc((100% / 12) * 5  - .5em - .01px) !important; }
		.row>.offset-medium-6  { margin-left: calc((100% / 12) * 6  - .5em - .01px) !important; }
		.row>.offset-medium-7  { margin-left: calc((100% / 12) * 7  - .5em - .01px) !important; }
		.row>.offset-medium-8  { margin-left: calc((100% / 12) * 8  - .5em - .01px) !important; }
		.row>.offset-medium-9  { margin-left: calc((100% / 12) * 9  - .5em - .01px) !important; }
		.row>.offset-medium-10 { margin-left: calc((100% / 12) * 10 - .5em - .01px) !important; }
		.row>.offset-medium-11 { margin-left: calc((100% / 12) * 11 - .5em - .01px) !important; }
		
		.row.flush>.offset-medium-1  { margin-left: calc((100% / 12)      - .01px) !important; }
		.row.flush>.offset-medium-2  { margin-left: calc((100% / 12) * 2  - .01px) !important; }
		.row.flush>.offset-medium-3  { margin-left: calc((100% / 12) * 3  - .01px) !important; }
		.row.flush>.offset-medium-4  { margin-left: calc((100% / 12) * 4  - .01px) !important; }
		.row.flush>.offset-medium-5  { margin-left: calc((100% / 12) * 5  - .01px) !important; }
		.row.flush>.offset-medium-6  { margin-left: calc((100% / 12) * 6  - .01px) !important; }
		.row.flush>.offset-medium-7  { margin-left: calc((100% / 12) * 7  - .01px) !important; }
		.row.flush>.offset-medium-8  { margin-left: calc((100% / 12) * 8  - .01px) !important; }
		.row.flush>.offset-medium-9  { margin-left: calc((100% / 12) * 9  - .01px) !important; }
		.row.flush>.offset-medium-10 { margin-left: calc((100% / 12) * 10 - .01px) !important; }
		.row.flush>.offset-medium-11 { margin-left: calc((100% / 12) * 11 - .01px) !important; }
		
		
		
		.hidden-medium { display: none !important; }
	}
	@media (max-width: <?PHP echo $smallMax; ?>px) { /* Small devices */
		.row>.small-1  { -webkit-flex-basis: calc((100% / 12)      - 1em - .01px); }
		.row>.small-2  { -webkit-flex-basis: calc((100% / 12) * 2  - 1em - .01px); }
		.row>.small-3  { -webkit-flex-basis: calc((100% / 12) * 3  - 1em - .01px); }
		.row>.small-4  { -webkit-flex-basis: calc((100% / 12) * 4  - 1em - .01px); }
		.row>.small-5  { -webkit-flex-basis: calc((100% / 12) * 5  - 1em - .01px); }
		.row>.small-6  { -webkit-flex-basis: calc((100% / 12) * 6  - 1em - .01px); }
		.row>.small-7  { -webkit-flex-basis: calc((100% / 12) * 7  - 1em - .01px); }
		.row>.small-8  { -webkit-flex-basis: calc((100% / 12) * 8  - 1em - .01px); }
		.row>.small-9  { -webkit-flex-basis: calc((100% / 12) * 9  - 1em - .01px); }
		.row>.small-10 { -webkit-flex-basis: calc((100% / 12) * 10 - 1em - .01px); }
		.row>.small-11 { -webkit-flex-basis: calc((100% / 12) * 11 - 1em - .01px); }
		.row>.small-12 { -webkit-flex-basis: calc( 100%            - 1em - .01px); }
		.row>.small-1  { flex-basis: calc((100% / 12)      - 1em - .01px); width: calc((100% / 12)      - 1em - .01px); }
		.row>.small-2  { flex-basis: calc((100% / 12) * 2  - 1em - .01px); width: calc((100% / 12) * 2  - 1em - .01px); }
		.row>.small-3  { flex-basis: calc((100% / 12) * 3  - 1em - .01px); width: calc((100% / 12) * 3  - 1em - .01px); }
		.row>.small-4  { flex-basis: calc((100% / 12) * 4  - 1em - .01px); width: calc((100% / 12) * 4  - 1em - .01px); }
		.row>.small-5  { flex-basis: calc((100% / 12) * 5  - 1em - .01px); width: calc((100% / 12) * 5  - 1em - .01px); }
		.row>.small-6  { flex-basis: calc((100% / 12) * 6  - 1em - .01px); width: calc((100% / 12) * 6  - 1em - .01px); }
		.row>.small-7  { flex-basis: calc((100% / 12) * 7  - 1em - .01px); width: calc((100% / 12) * 7  - 1em - .01px); }
		.row>.small-8  { flex-basis: calc((100% / 12) * 8  - 1em - .01px); width: calc((100% / 12) * 8  - 1em - .01px); }
		.row>.small-9  { flex-basis: calc((100% / 12) * 9  - 1em - .01px); width: calc((100% / 12) * 9  - 1em - .01px); }
		.row>.small-10 { flex-basis: calc((100% / 12) * 10 - 1em - .01px); width: calc((100% / 12) * 10 - 1em - .01px); }
		.row>.small-11 { flex-basis: calc((100% / 12) * 11 - 1em - .01px); width: calc((100% / 12) * 11 - 1em - .01px); }
		.row>.small-12 { flex-basis: calc( 100%            - 1em - .01px); width: calc( 100%            - 1em - .01px); }
		
		.row.flush>.small-1  { -webkit-flex-basis: calc((100% / 12)      - .01px); }
		.row.flush>.small-2  { -webkit-flex-basis: calc((100% / 12) * 2  - .01px); }
		.row.flush>.small-3  { -webkit-flex-basis: calc((100% / 12) * 3  - .01px); }
		.row.flush>.small-4  { -webkit-flex-basis: calc((100% / 12) * 4  - .01px); }
		.row.flush>.small-5  { -webkit-flex-basis: calc((100% / 12) * 5  - .01px); }
		.row.flush>.small-6  { -webkit-flex-basis: calc((100% / 12) * 6  - .01px); }
		.row.flush>.small-7  { -webkit-flex-basis: calc((100% / 12) * 7  - .01px); }
		.row.flush>.small-8  { -webkit-flex-basis: calc((100% / 12) * 8  - .01px); }
		.row.flush>.small-9  { -webkit-flex-basis: calc((100% / 12) * 9  - .01px); }
		.row.flush>.small-10 { -webkit-flex-basis: calc((100% / 12) * 10 - .01px); }
		.row.flush>.small-11 { -webkit-flex-basis: calc((100% / 12) * 11 - .01px); }
		.row.flush>.small-12 { -webkit-flex-basis: calc( 100%            - .01px); }
		.row.flush>.small-1  { flex-basis: calc((100% / 12)      - .01px); width: calc((100% / 12)      - .01px); }
		.row.flush>.small-2  { flex-basis: calc((100% / 12) * 2  - .01px); width: calc((100% / 12) * 2  - .01px); }
		.row.flush>.small-3  { flex-basis: calc((100% / 12) * 3  - .01px); width: calc((100% / 12) * 3  - .01px); }
		.row.flush>.small-4  { flex-basis: calc((100% / 12) * 4  - .01px); width: calc((100% / 12) * 4  - .01px); }
		.row.flush>.small-5  { flex-basis: calc((100% / 12) * 5  - .01px); width: calc((100% / 12) * 5  - .01px); }
		.row.flush>.small-6  { flex-basis: calc((100% / 12) * 6  - .01px); width: calc((100% / 12) * 6  - .01px); }
		.row.flush>.small-7  { flex-basis: calc((100% / 12) * 7  - .01px); width: calc((100% / 12) * 7  - .01px); }
		.row.flush>.small-8  { flex-basis: calc((100% / 12) * 8  - .01px); width: calc((100% / 12) * 8  - .01px); }
		.row.flush>.small-9  { flex-basis: calc((100% / 12) * 9  - .01px); width: calc((100% / 12) * 9  - .01px); }
		.row.flush>.small-10 { flex-basis: calc((100% / 12) * 10 - .01px); width: calc((100% / 12) * 10 - .01px); }
		.row.flush>.small-11 { flex-basis: calc((100% / 12) * 11 - .01px); width: calc((100% / 12) * 11 - .01px); }
		.row.flush>.small-12 { flex-basis: calc( 100%            - .01px); }
		
		.row>.offset-small-1  { margin-left: calc((100% / 12)      - .5em - .01px) !important; }
		.row>.offset-small-2  { margin-left: calc((100% / 12) * 2  - .5em - .01px) !important; }
		.row>.offset-small-3  { margin-left: calc((100% / 12) * 3  - .5em - .01px) !important; }
		.row>.offset-small-4  { margin-left: calc((100% / 12) * 4  - .5em - .01px) !important; }
		.row>.offset-small-5  { margin-left: calc((100% / 12) * 5  - .5em - .01px) !important; }
		.row>.offset-small-6  { margin-left: calc((100% / 12) * 6  - .5em - .01px) !important; }
		.row>.offset-small-7  { margin-left: calc((100% / 12) * 7  - .5em - .01px) !important; }
		.row>.offset-small-8  { margin-left: calc((100% / 12) * 8  - .5em - .01px) !important; }
		.row>.offset-small-9  { margin-left: calc((100% / 12) * 9  - .5em - .01px) !important; }
		.row>.offset-small-10 { margin-left: calc((100% / 12) * 10 - .5em - .01px) !important; }
		.row>.offset-small-11 { margin-left: calc((100% / 12) * 11 - .5em - .01px) !important; }
		
		.row.flush>.offset-small-1  { margin-left: calc((100% / 12)      - .01px) !important; }
		.row.flush>.offset-small-2  { margin-left: calc((100% / 12) * 2  - .01px) !important; }
		.row.flush>.offset-small-3  { margin-left: calc((100% / 12) * 3  - .01px) !important; }
		.row.flush>.offset-small-4  { margin-left: calc((100% / 12) * 4  - .01px) !important; }
		.row.flush>.offset-small-5  { margin-left: calc((100% / 12) * 5  - .01px) !important; }
		.row.flush>.offset-small-6  { margin-left: calc((100% / 12) * 6  - .01px) !important; }
		.row.flush>.offset-small-7  { margin-left: calc((100% / 12) * 7  - .01px) !important; }
		.row.flush>.offset-small-8  { margin-left: calc((100% / 12) * 8  - .01px) !important; }
		.row.flush>.offset-small-9  { margin-left: calc((100% / 12) * 9  - .01px) !important; }
		.row.flush>.offset-small-10 { margin-left: calc((100% / 12) * 10 - .01px) !important; }
		.row.flush>.offset-small-11 { margin-left: calc((100% / 12) * 11 - .01px) !important; }
		
		
		
		.hidden-small { display: none !important; }
	}
	@media (max-width: <?PHP echo $tinyMax; ?>px) { /* Tiny devices */
		.row>.tiny-1  { -webkit-flex-basis: calc((100% / 12)      - 1em - .01px); }
		.row>.tiny-2  { -webkit-flex-basis: calc((100% / 12) * 2  - 1em - .01px); }
		.row>.tiny-3  { -webkit-flex-basis: calc((100% / 12) * 3  - 1em - .01px); }
		.row>.tiny-4  { -webkit-flex-basis: calc((100% / 12) * 4  - 1em - .01px); }
		.row>.tiny-5  { -webkit-flex-basis: calc((100% / 12) * 5  - 1em - .01px); }
		.row>.tiny-6  { -webkit-flex-basis: calc((100% / 12) * 6  - 1em - .01px); }
		.row>.tiny-7  { -webkit-flex-basis: calc((100% / 12) * 7  - 1em - .01px); }
		.row>.tiny-8  { -webkit-flex-basis: calc((100% / 12) * 8  - 1em - .01px); }
		.row>.tiny-9  { -webkit-flex-basis: calc((100% / 12) * 9  - 1em - .01px); }
		.row>.tiny-10 { -webkit-flex-basis: calc((100% / 12) * 10 - 1em - .01px); }
		.row>.tiny-11 { -webkit-flex-basis: calc((100% / 12) * 11 - 1em - .01px); }
		.row>.tiny-12 { -webkit-flex-basis: calc( 100%            - 1em - .01px); }
		.row>.tiny-1  { flex-basis: calc((100% / 12)      - 1em - .01px); width: calc((100% / 12)      - 1em - .01px); }
		.row>.tiny-2  { flex-basis: calc((100% / 12) * 2  - 1em - .01px); width: calc((100% / 12) * 2  - 1em - .01px); }
		.row>.tiny-3  { flex-basis: calc((100% / 12) * 3  - 1em - .01px); width: calc((100% / 12) * 3  - 1em - .01px); }
		.row>.tiny-4  { flex-basis: calc((100% / 12) * 4  - 1em - .01px); width: calc((100% / 12) * 4  - 1em - .01px); }
		.row>.tiny-5  { flex-basis: calc((100% / 12) * 5  - 1em - .01px); width: calc((100% / 12) * 5  - 1em - .01px); }
		.row>.tiny-6  { flex-basis: calc((100% / 12) * 6  - 1em - .01px); width: calc((100% / 12) * 6  - 1em - .01px); }
		.row>.tiny-7  { flex-basis: calc((100% / 12) * 7  - 1em - .01px); width: calc((100% / 12) * 7  - 1em - .01px); }
		.row>.tiny-8  { flex-basis: calc((100% / 12) * 8  - 1em - .01px); width: calc((100% / 12) * 8  - 1em - .01px); }
		.row>.tiny-9  { flex-basis: calc((100% / 12) * 9  - 1em - .01px); width: calc((100% / 12) * 9  - 1em - .01px); }
		.row>.tiny-10 { flex-basis: calc((100% / 12) * 10 - 1em - .01px); width: calc((100% / 12) * 10 - 1em - .01px); }
		.row>.tiny-11 { flex-basis: calc((100% / 12) * 11 - 1em - .01px); width: calc((100% / 12) * 11 - 1em - .01px); }
		.row>.tiny-12 { flex-basis: calc( 100%            - 1em - .01px); width: calc( 100%            - 1em - .01px); }
		
		.row.flush>.tiny-1  { -webkit-flex-basis: calc((100% / 12)      - .01px); }
		.row.flush>.tiny-2  { -webkit-flex-basis: calc((100% / 12) * 2  - .01px); }
		.row.flush>.tiny-3  { -webkit-flex-basis: calc((100% / 12) * 3  - .01px); }
		.row.flush>.tiny-4  { -webkit-flex-basis: calc((100% / 12) * 4  - .01px); }
		.row.flush>.tiny-5  { -webkit-flex-basis: calc((100% / 12) * 5  - .01px); }
		.row.flush>.tiny-6  { -webkit-flex-basis: calc((100% / 12) * 6  - .01px); }
		.row.flush>.tiny-7  { -webkit-flex-basis: calc((100% / 12) * 7  - .01px); }
		.row.flush>.tiny-8  { -webkit-flex-basis: calc((100% / 12) * 8  - .01px); }
		.row.flush>.tiny-9  { -webkit-flex-basis: calc((100% / 12) * 9  - .01px); }
		.row.flush>.tiny-10 { -webkit-flex-basis: calc((100% / 12) * 10 - .01px); }
		.row.flush>.tiny-11 { -webkit-flex-basis: calc((100% / 12) * 11 - .01px); }
		.row.flush>.tiny-12 { -webkit-flex-basis: calc( 100%            - .01px); }
		.row.flush>.tiny-1  { flex-basis: calc((100% / 12)      - .01px); width: calc((100% / 12)      - .01px); }
		.row.flush>.tiny-2  { flex-basis: calc((100% / 12) * 2  - .01px); width: calc((100% / 12) * 2  - .01px); }
		.row.flush>.tiny-3  { flex-basis: calc((100% / 12) * 3  - .01px); width: calc((100% / 12) * 3  - .01px); }
		.row.flush>.tiny-4  { flex-basis: calc((100% / 12) * 4  - .01px); width: calc((100% / 12) * 4  - .01px); }
		.row.flush>.tiny-5  { flex-basis: calc((100% / 12) * 5  - .01px); width: calc((100% / 12) * 5  - .01px); }
		.row.flush>.tiny-6  { flex-basis: calc((100% / 12) * 6  - .01px); width: calc((100% / 12) * 6  - .01px); }
		.row.flush>.tiny-7  { flex-basis: calc((100% / 12) * 7  - .01px); width: calc((100% / 12) * 7  - .01px); }
		.row.flush>.tiny-8  { flex-basis: calc((100% / 12) * 8  - .01px); width: calc((100% / 12) * 8  - .01px); }
		.row.flush>.tiny-9  { flex-basis: calc((100% / 12) * 9  - .01px); width: calc((100% / 12) * 9  - .01px); }
		.row.flush>.tiny-10 { flex-basis: calc((100% / 12) * 10 - .01px); width: calc((100% / 12) * 10 - .01px); }
		.row.flush>.tiny-11 { flex-basis: calc((100% / 12) * 11 - .01px); width: calc((100% / 12) * 11 - .01px); }
		.row.flush>.tiny-12 { flex-basis: calc( 100%            - .01px); }
		
		.row>.offset-tiny-1  { margin-left: calc((100% / 12)      - .5em - .01px) !important; }
		.row>.offset-tiny-2  { margin-left: calc((100% / 12) * 2  - .5em - .01px) !important; }
		.row>.offset-tiny-3  { margin-left: calc((100% / 12) * 3  - .5em - .01px) !important; }
		.row>.offset-tiny-4  { margin-left: calc((100% / 12) * 4  - .5em - .01px) !important; }
		.row>.offset-tiny-5  { margin-left: calc((100% / 12) * 5  - .5em - .01px) !important; }
		.row>.offset-tiny-6  { margin-left: calc((100% / 12) * 6  - .5em - .01px) !important; }
		.row>.offset-tiny-7  { margin-left: calc((100% / 12) * 7  - .5em - .01px) !important; }
		.row>.offset-tiny-8  { margin-left: calc((100% / 12) * 8  - .5em - .01px) !important; }
		.row>.offset-tiny-9  { margin-left: calc((100% / 12) * 9  - .5em - .01px) !important; }
		.row>.offset-tiny-10 { margin-left: calc((100% / 12) * 10 - .5em - .01px) !important; }
		.row>.offset-tiny-11 { margin-left: calc((100% / 12) * 11 - .5em - .01px) !important; }
		
		.row.flush>.offset-tiny-1  { margin-left: calc((100% / 12)      - .01px) !important; }
		.row.flush>.offset-tiny-2  { margin-left: calc((100% / 12) * 2  - .01px) !important; }
		.row.flush>.offset-tiny-3  { margin-left: calc((100% / 12) * 3  - .01px) !important; }
		.row.flush>.offset-tiny-4  { margin-left: calc((100% / 12) * 4  - .01px) !important; }
		.row.flush>.offset-tiny-5  { margin-left: calc((100% / 12) * 5  - .01px) !important; }
		.row.flush>.offset-tiny-6  { margin-left: calc((100% / 12) * 6  - .01px) !important; }
		.row.flush>.offset-tiny-7  { margin-left: calc((100% / 12) * 7  - .01px) !important; }
		.row.flush>.offset-tiny-8  { margin-left: calc((100% / 12) * 8  - .01px) !important; }
		.row.flush>.offset-tiny-9  { margin-left: calc((100% / 12) * 9  - .01px) !important; }
		.row.flush>.offset-tiny-10 { margin-left: calc((100% / 12) * 10 - .01px) !important; }
		.row.flush>.offset-tiny-11 { margin-left: calc((100% / 12) * 11 - .01px) !important; }
		
		
		
		.hidden-tiny { display: none !important; }
	}
/******************************* END Grid Rows ********************************/


/*************************** BEGIN Aesthetic Sizing ***************************/
.widest-tiny   { max-width:  <?PHP echo $tinyMax; ?>px; }
.widest-small  { max-width:  <?PHP echo $smallMax; ?>px; }
.widest-medium { max-width: <?PHP echo $mediumMax; ?>px; }
.widest-large  { max-width: <?PHP echo $largeMax; ?>px; }
.widest-huge   { max-width: <?PHP echo $hugeMin; ?>px; }

IMG {
	max-width: 100%;
}
MAIN.widest-huge {
	margin-left: auto;
	margin-right: auto;
	} @media (max-width: calc(<?PHP echo $hugeMin; ?>px - 1em)) { MAIN.widest-huge {
		margin-left: 1em;
		margin-right: 1em;
	}
}
/**************************** END Aesthetic Sizing ****************************/


/*************************** BEGIN.dropdown-holder Toolbar ***************************/
.dropdown-holder,
MENU[type="toolbar"].dropdown-holder,
.toolbar.dropdown-holder {
	position: relative;
}
		.dropdown-holder>MENU[type="context"],
		.dropdown-holder>.dropdown {
			overflow: hidden;
			position: absolute;
			right: 0;
			top: 100%;
			width: 100%;
			z-index: 1000;
		}
			.dropdown-holder:not(:hover):not(:focus) MENU[type="context"]:not(:hover):not(:focus),
			.dropdown-holder:not(:hover):not(:focus) .dropdown:not(:hover):not(:focus) {
				max-height: 0%;
			}
/**************************** END.dropdown-holder Toolbar ****************************/


/*.top-bar {
	max-width: 100%;
	width: 100%;
	padding: 0 0 0.25em;
}
	.top-bar>* {
		line-height: 1;
	}
	.top-bar H1,
	.top-bar H2,
	.top-bar H3,
	.top-bar H4,
	.top-bar H5,
	.top-bar H6 {
		margin: .4em 1em 0;
	}*/

.centered {
	margin-left: auto;
	margin-right: auto;
	text-align: center;
	vertical-align: middle;
}
	.row.centered>*,
	.centered .row>* {
		text-align: left;
		text-align: initial;
		text-align: start; /* Obeys text-direction */
	}

.text-right,
.row.centered>.text-right,
.centered .row>.text-right {
	text-align: right;
}
.text-left,
.row.centered>.text-left,
.centered .row>.text-left {
	text-align: left;
}
.text-start,
.text-native,
.text-local {
	text-align: left;
	text-align: initial;
	text-align: start; /* Obeys text-direction */
}
.text-end,
.text-reverse {
	text-align: right;
	text-align: end;   /* Reverse of text-direction */
}
.text-center,
.text-centered,
.row.centered>.text-center,
.centered .row>.text-center {
	text-align: center;
}

.text-nowrap {
	white-space: nowrap;
}


/******************************** BEGIN Lists *********************************/
MENU.horiz, MENU.plain,
OL.horiz, OL.plain,
UL.horiz, UL.plain {
	list-style-type: none;
	margin: 0;
	padding: 0;
}
	MENU.horiz>LI,
	OL.horiz>LI,
	UL.horiz>LI {
		display: inline-block;
		list-style-type: none;
	}
/********************************* END Lists **********************************/



/******************************* BEGIN Displays *******************************/
.display-inline             { display: inline             !important }
.display-inline-block       { display: inline-block       !important }
.display-block              { display: block              !important }
.display-pre                { display: pre                !important }
.display-list-item          { display: list-item          !important }
.display-inline-table       { display: inline-table       !important }
.display-table              { display: table              !important }
.display-table-cell         { display: table-cell         !important }
.display-table-column       { display: table-column       !important }
.display-table-column-group { display: table-column-group !important }
.display-table-footer-group { display: table-footer-group !important }
.display-table-header-group { display: table-header-group !important }
.display-table-row          { display: table-row          !important }
.display-table-row-group    { display: table-row-group    !important }
.display-flex               { display: flex               !important }
.display-inline-flex        { display: inline-flex        !important }
.display-grid               { display: grid               !important }
.display-inline-grid        { display: inline-grid        !important }
.display-run-in             { display: run-in             !important }

.show-when-husk-supported {
	display: none !important;
}
@supports (
	((display: -webkit-box) or (display: -moz-box) or (display: -ms-flexbox) or (display: -webkit-flex) or (display: flex)) and
	((-webkit-box-orient: horizontal) or (-moz-box-orient: horizontal) or (-webkit-flex-direction: row) or (-ms-flex-direction: row) or (flex-direction: row)) and
	((-webkit-flex-wrap: wrap) or (-ms-flex-wrap: wrap) or (flex-wrap: wrap))
	) {
	.hide-when-husk-supported {
		display: none !important;
	}
	.show-when-husk-supported {
		display: block !important;
		display: initial !important;
	}
	@media all and (min-width: 0px) {
		.hide-when-husk-supported:not(FAKEELEMENT) {
			display: none !important;
		}
		.show-when-husk-supported:not(FAKEELEMENT) {
			display: block !important;
			display: initial !important;
		}
	}
}

.show-when-js,
.show-when-jquery {
	display: none !important;
}
/*.show-when-css3 {
	display: none !important;
}*/
	.hide-when-css3:not(FAKEELEMENT) {
		display: none !important;
	}

:not(:target).show-when-target,
:not(:target)>.show-when-parent-target,
:target.hide-when-target,
:target>.hide-when-parent-target {
	display: none !important;
}
/******************************** END Displays ********************************/




/******************************** BEGIN Positions ********************************/
.position-static { position: static; }
.position-relative { position: relative; }
.position-absolute { position: absolute; }
.position-fixed { position: fixed; }
/******************************** END Positions ********************************/



/********************************* BEGIN Sticky ********************************/
.sticky-top,
.sticky-bottom {
	position: relative;
	z-index: 2;
}
	.sticky-top.stuck {
		top: 0;
	}
	.sticky-top.stuck,
	.sticky-bottom.stuck {
		margin: 0 !important;
		position: fixed;
	}
	.sticky-bottom.stuck {
		bottom: 0;
	}

.sticky-clone {
	visibility: hidden;
}
	.sticky-top:not(.stuck)+.sticky-clone,
	.sticky-bottom:not(.stuck)+.sticky-clone {
		display: none !important; /* made !important 2014-09-03 (1.0.1) by Kyli - since we made flexes important */
	}



@media (max-width: <?PHP echo $tinyMax; ?>px) { /* Tiny */
	.unstuck-tiny,
	.unstuck-small:not(.stuck-tiny),
	.stuck-medium,
	.stuck-large,
	.stuck-huge {
		position: static !important;
	}
}
@media (min-width: <?PHP echo $smallMin; ?>px) and (max-width: <?PHP echo $smallMax; ?>px) { /* Small */
	.stuck-tiny,
	.unstuck-small,
	.stuck-medium,
	.stuck-large,
	.stuck-huge {
		position: static !important;
	}
}
@media (min-width: <?PHP echo $mediumMin; ?>px) and (max-width: <?PHP echo $mediumMax; ?>px) { /* Medium */
	.stuck-tiny,
	.stuck-small,
	.unstuck-medium,
	.stuck-large,
	.stuck-huge {
		position: static !important;
	}
}
@media (min-width: <?PHP echo $largeMin; ?>px) and (max-width: <?PHP echo $largeMax; ?>px) { /* Large */
	.stuck-tiny,
	.stuck-small,
	.stuck-medium,
	.unstuck-large,
	.stuck-huge {
		position: static !important;
	}
}
@media (min-width: <?PHP echo $hugeMin; ?>px) { /* Huge */
	.stuck-tiny,
	.stuck-small,
	.stuck-medium,
	.unstuck-large:not(.stuck-huge),
	.unstuck-huge {
		position: static !important;
	}
}
/********************************** END Sticky *********************************/
