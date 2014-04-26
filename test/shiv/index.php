<!DOCTYPE HTML>
<?PHP include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/huskMeta.php'; ?>
<HTML CLASS="<?PHP echo getHTMLTagClasses(); ?>">
<HEAD>
<TITLE>Shiv test &ndash; Husk Framework</TITLE>
<?PHP
include $_SERVER['DOCUMENT_ROOT'].'/_incl/responsive-meta-tags.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/meta-tags.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/css.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/js.htm';
?>
<STYLE TYPE="text/css">
SMALL.parenthetical::before {
	content: "(";
}
SMALL.parenthetical::after {
	content: ")";
}


bdetails,
bsummary {
	display: block;
}
bdetails>bsummary {
	cursor: inherit;
	position: relative;
}
	bdetails>bsummary::-webkit-bdetails-marker { display:none; }
	bdetails>bsummary::-moz-bdetails-marker    { display:none; }
	bdetails>bsummary::-ms-bdetails-marker     { display:none; }
	bdetails>bsummary::-o-bdetails-marker      { display:none; }
	bdetails>bsummary::bdetails-marker         { display:none; }
	
	bdetails>bsummary::before {
		font-family: monospace;
		font-size: 1.5em;
		vertical-align: middle;
		width: 1em;
		display: inline-block;
	}
		bdetails[OPEN]>bsummary::before/*,
		bdetails:focus>bsummary::before*/ {
			content: "\25BC\00A0"; /* Unicode BLACK DOWN-POINTING TRIANGLE */
		}
		/*bdetails[OPEN]>bsummary::after,
		bdetails:focus>bsummary::after {
			background: red;
			color: transparent;
			content: "|";
			position: absolute;
			width: 100%;
			left: 0;
			height: 100%;
		}*/
</STYLE>
<SCRIPT TYPE="text/javascript">
console.log($.browser);
for(i in $.browser)
	console.log(i + ": " + $.browser[i]);
$(window).ready(function(readiness)
{
	$("<style type='text/css'>bdetails>bsummary { cursor: pointer !important; } bdetails:not([OPEN])/*:not(:focus)*/>:not(bsummary) {	display: none; } bdetails>bsummary::before { content: '\u25B6\u00A0'; /* Unicode BLACK RIGHT-POINTING TRIANGLE */</style>").appendTo("head");
	var allDetails = $('bdetails');
	console.log(allDetails);
	$(allDetails).each(function(i, det)
	{
		console.log("\tgot element " + i);
		$('bsummary', det).click(function(event)
		{
			console.log("details open is " + $(det).attr('open'));
			if ($(det).attr('open'))
				$(det).attr('open', null);
			else
				$(det).attr('open', '');
			
			// hack to force repaint on IE
			var l = $(det).css('left');
			$(det).css('left', 1);
			$(det).css('left', l);
		});
	});
});
</SCRIPT>
</HEAD>



<BODY>
<?PHP $_GET['title'] = 'Shiv Test'; include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/header.php'; ?>

<MAIN>
<SECTION>
	<H1>Cross-browser <CODE>bdetails</CODE> and <CODE>bsummary</CODE> elements</H1>
	<P>The latest versions of Webkit <SMALL CLASS="parenthetical">Safari</SMALL> and Blink <SMALL CLASS="parenthetical">Chrome, Chromium</SMALL> support the <CODE>bdetails</CODE> and <CODE>bsummary</CODE> elements, but Trident <SMALL CLASS="parenthetical">IE</SMALL> and Gecko <SMALL CLASS="parenthetical">Firefox</SMALL> don't. Husk allows these elements to be used in any browser without any fuss!</P>
	
	
	<H2>Demo</H2>
	<bdetails>
		<bsummary>bsummary of content</bsummary>
		<P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget est metus. Fusce hendrerit dolor purus, nec sollicitudin libero rhoncus nec. Suspendisse eleifend, justo et laoreet eleifend, sapien sapien bibendum justo, eu volutpat nunc risus in odio.</P>
	</bdetails>
	
	
	<H2>Code</H2>
	<PRE>
&lt;bdetails&gt;
	&lt;bsummary&gt;bsummary of content&lt;/bsummary&gt;
	&lt;P&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
		eget est metus. Fusce hendrerit dolor purus, nec sollicitudin libero
		rhoncus nec. Suspendisse eleifend, justo et laoreet eleifend, sapien
		sapien bibendum justo, eu volutpat nunc risus in odio.&lt;/P&gt;
&lt;/bdetails&gt;
	</PRE>
</SECTION>
	
<SECTION>
	<H1>Tabbed pane</H1>
	
	<H2>Code</H2>
<PRE>&lt;DIV CLASS="tabbed-pane"&gt;
	&lt;bdetails ID="TAB_1"&gt;
		&lt;bsummary&gt;&lt;A HREF="#TAB_1"&gt;Tab 1 Title&lt;/bsummary&gt;
		&lt;P&gt;Lorem ipsum dolor sit amet&lt;/P&gt;
	&lt;/bdetails&gt;

	&lt;bdetails ID="TAB_2"&gt;
		&lt;bsummary&gt;&lt;A HREF="#TAB_2"&gt;Tab 2 Title&lt;/bsummary&gt;
		&lt;P&gt;consectetur adipiscing elit&lt;/P&gt;
	&lt;/bdetails&gt;
&lt;DIV&gt;</PRE>
</SECTION>

<SECTION>
	<H1>Accordion</H1>
	
	<H2>Code</H2>
<PRE>&lt;DIV CLASS="accordion"&gt;
	&lt;bdetails ID="ACCORD_1"&gt;
		&lt;bsummary&gt;&lt;A HREF="#ACCORD_1"&gt;Tab 1 Title&lt;/bsummary&gt;
		&lt;P&gt;Lorem ipsum dolor sit amet&lt;/P&gt;
	&lt;/bdetails&gt;

	&lt;bdetails ID="ACCORD_2"&gt;
		&lt;bsummary&gt;&lt;A HREF="#ACCORD_2"&gt;Tab 2 Title&lt;/bsummary&gt;
		&lt;P&gt;consectetur adipiscing elit&lt;/P&gt;
	&lt;/bdetails&gt;
&lt;DIV&gt;</PRE>
</SECTION>
</MAIN>

<?PHP
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/footer.php';
?>
</BODY>
</HTML>