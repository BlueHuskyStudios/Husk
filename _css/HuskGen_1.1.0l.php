<?PHP
header("Content-type: text/css");                                    // Identify as a CSS file
header('Content-Transfer-Encoding: binary');                         // Transfer this file as binary
header('Expires: ' . date('D, j M Y H:i:s e', strtotime('+1 day'))); // This file expires one day from now
header('Cache-Control: max-age=' . 60*60*24);                        // Recommend one-day cache. This should help with server load
header('Pragma: public');                                            // Everyone can see this

include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/huskMeta.php';

global $cols;
global $spacing;
global $tinyMax;
global $smallMin;
global $smallMax;
global $mediumMin;
global $mediumMax;
global $largeMin;
global $largeMax;
global $hugeMin;

$cols = $_GET['cols'];
if ($cols)
	$cols = intval($cols);
if (!$cols) // instead of else, in case intval returns a 0
	$cols = 12;


$spacing = $_GET['spacing'];
if ($spacing)
	$spacing = intval($spacing);
if (!$spacing) // instead of else, in case intval returns a 0
	$spacing = 1;


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


?>/* Husk framework 1.1.0l basic CSS - http://prog.BHStudios.org/husk
 * Copyright Blue Husky Programming ©2014 GPLv3
 * Custom sheet ID: <?PHP

echo base_convert("$cols", 10 , 26) . '-';
echo base_convert("$smallMin", 10 , 26) . '-';
echo base_convert("$mediumMin", 10 , 26) . '-';
echo base_convert("$largeMin", 10 , 26) . '-';
echo base_convert("$hugeMin", 10 , 26);

?>

 * 
 * Husk REQUIRES that the browser has full CSS3 support.
 * 
 * This sheet specifies <?PHP echo $cols; ?> columns in the grid
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
	
	
	
	
	
	/* This and subsequent calculations with ".01px" are to account for errors from browsers using quarter-precision floating-point calculations */<?PHP
	
	
	function buildCols($name, $other = false)
	{
		global $cols;
		
		////////////////////////////////////////////////////////////////////////
		/////////////////////////// STANDARD COLUMNS ///////////////////////////
		////////////////////////////////////////////////////////////////////////
		
		/////////////////////////////////////////////////////////////// COLUMN 1
		?>

		.row>.<?PHP echo $name; ?>-1<?PHP if ($other) echo ", .row>.$other-1:not([class^=\"$name-\"]):not([class*=\" $name-\"])"; ?>	{ -webkit-flex-basis: calc((100% / <?PHP echo $cols; ?>)      - <?PHP echo $spacing; ?>em - .01px);
		           	          flex-basis: calc((100% / <?PHP echo $cols; ?>)      - <?PHP echo $spacing; ?>em - .01px);
		           	               width: calc((100% / <?PHP echo $cols; ?>)      - <?PHP echo $spacing; ?>em - .01px); }<?PHP
		
		
		////////////////////////////////////////////////// COLUMNS 2 THROUGH N-1
		for($i = 2; $i < $cols; $i++)
		{
			?>

		.row>.<?PHP echo "$name-$i"; if ($other) echo ", .row>.$other-$i:not([class^=\"$name-\"]):not([class*=\" $name-\"])"; ?>	{ -webkit-flex-basis: calc((100% / <?PHP echo "$cols) * $i"; ?>  - <?PHP echo $spacing; ?>em - .01px); 
		           	          flex-basis: calc((100% / <?PHP echo "$cols) * $i"; ?>  - <?PHP echo $spacing; ?>em - .01px);
		           	               width: calc((100% / <?PHP echo "$cols) * $i"; ?>  - <?PHP echo $spacing; ?>em - .01px); }<?PHP
		}
		
		
		/////////////////////////////////////////////////////////////// COLUMN N
		?>

		.row>.<?PHP echo "$name-$cols"; if ($other) echo ", .row>.$other-$cols:not([class^=\"$name-\"]):not([class*=\" $name-\"])"; ?>	{ -webkit-flex: none; flex: none; display: block; width: calc(100% - <?PHP echo $spacing; ?>em - .01px); }<?PHP
		
		
		////////////////////////////////////////////////////////////////////////
		///////////////////////////// FLUSH COLUMNS ////////////////////////////
		////////////////////////////////////////////////////////////////////////
		
		///////////////////////////////////////////////////////// FLUSH COLUMN 1
		?>

		.row.flush>.<?PHP echo $name; ?>-1<?PHP if ($other) echo ", .row.flush>.$other-1:not([class^=\"$name-\"]):not([class*=\" $name-\"])"; ?>	{ -webkit-flex-basis: calc((100% / <?PHP echo $cols; ?>)      - .01px);
		                 	          flex-basis: calc((100% / <?PHP echo $cols; ?>)      - .01px);
		                 	               width: calc((100% / <?PHP echo $cols; ?>)      - .01px); }<?PHP
		
		
		//////////////////////////////////////////// FLUSH COLUMNS 2 through N-1
		for($i = 2; $i < $cols; $i++)
		{
			?>

		.row.flush>.<?PHP echo "$name-$i"; if ($other) echo ", .row.flush>.$other-$i:not([class^=\"$name-\"]):not([class*=\" $name-\"])"; ?>	{ -webkit-flex-basis: calc((100% / <?PHP echo "$cols) * $i"; ?>  - .01px);
		                 	          flex-basis: calc((100% / <?PHP echo "$cols) * $i"; ?>  - .01px);
		                 	               width: calc((100% / <?PHP echo "$cols) * $i"; ?>  - .01px); }<?PHP
		}
		
		
		/////////////////////////////////////////////////////////////// COLUMN N
		?>

		.row.flush>.<?PHP echo "$name-$cols"; if ($other) echo ", .row.flush>.$other-$cols:not([class^=\"$name-\"]):not([class*=\" $name-\"])"; ?> { -webkit-flex: none; flex: none; display: block; width: calc(100% - .01px); }<?PHP
		
		
		////////////////////////////////////////////////////////////////////////
		//////////////////////////// COLUMN OFFSETS ////////////////////////////
		////////////////////////////////////////////////////////////////////////
	
		/////////////////////////////////////////////////////////////// OFFSET 1
		?>

		.row>.offset-<?PHP echo $name; ?>-1<?PHP if ($other) echo ", .row>.offset-$other-1:not([class^=\"$name-\"]):not([class*=\" $name-\"])"; ?>  { margin-left: calc((100% / <?PHP echo "$cols) + (" . ($spacing / 2.0); ?>em - .01px)) !important; }
		<?PHP
		
		
		/////////////////////////////////////////////////// OFFSET 2 through N-1
		for($i = 2; $i < $cols; $i++)
		{
			?>

		.row>.offset-<?PHP echo "$name-$i"; if ($other) echo ", .row>.offset-$other-$i:not([class^=\"$name-\"]):not([class*=\" $name-\"])"; ?>  { margin-left: calc((100% / <?PHP echo "$cols) * $i + (" . ($spacing / 2.0); ?>em - .01px)) !important; }<?PHP
		}
		
		
		////////////////////////////////////////////////////////////////////////
		///////////////////////// FLUSH COLUMN OFFSETS /////////////////////////
		////////////////////////////////////////////////////////////////////////
		
		///////////////////////////////////////////////////////// FLUSH OFFSET 1
		?>

		.row.flush>.offset-<?PHP echo $name; ?>-1<?PHP if ($other) echo ", .row>.$other-1:not([class^=\"$name-\"]):not([class*=\" $name-\"])"; ?>  { margin-left: calc((100% / <?PHP echo $cols; ?>)      - .01px) !important; }<?PHP
		
		///////////////////////////////////////////// FLUSH OFFSET 2 through N-1
		for($i = 2; $i < $cols; $i++)
		{
			?>

		.row.flush>.offset-<?PHP echo "$name-$i"; if ($other) echo ", .row.flush>.offset-$other-$i:not([class^=\"$name-\"]):not([class*=\" $name-\"])"; ?>  { margin-left: calc((100% / <?PHP echo "$cols) * $i"; ?>  - .01px) !important; }<?PHP
		}
	}
	
	
	
	buildCols("all");
	?>

	
	
	@media (max-width: <?PHP echo $largeMax; ?>px) { /* Large devices */<?PHP
	buildCols("large");
	?>

	}
	
	
	@media (min-width: <?PHP echo $hugeMin; ?>px) { /* Huge devices */
		/* "Huge" comes after "Large" to ensure its styles cascade properly */<?PHP
	buildCols("huge", "large");
	?>

	}
	
	
	@media (max-width: <?PHP echo $mediumMax; ?>px) { /* Medium devices */<?PHP
	buildCols("medium");
	?>

	}
	
	
	@media (max-width: <?PHP echo $smallMax; ?>px) { /* Small devices */<?PHP
	buildCols("small");
	?>

	}
	
	
	@media (max-width: <?PHP echo $tinyMax; ?>px) { /* Tiny devices */<?PHP
	buildCols("tiny");
	?>

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




/******************************* BEGIN Positions ******************************/
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
