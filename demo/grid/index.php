<!DOCTYPE HTML>
<?PHP include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/huskMeta.php'; ?>
<HTML CLASS="<?PHP echo getHTMLTagClasses(); ?>">
<HEAD>
<TITLE>12-Column Grid &ndash; Husk Framework</TITLE>
<?PHP
include $_SERVER['DOCUMENT_ROOT'].'/_incl/responsive-meta-tags.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/meta-tags.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/css.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/js.htm';
?>
<STYLE TYPE="text/css">
MAIN .row.stripes>* {
	background-color: #27B;
	color: #FFF;
}
MAIN .row.stripes,
MAIN .row.stripes>* {
	border-radius: .2em;
    box-shadow: 0 1px 2px rgba(0,0,0, .5);
	padding: .2em;
}
MAIN .row.stripes>*:nth-child(odd) {
	background-color: #BBB;
	color: #222;
}

.mario-bg    { background-color: transparent     !important; }
.mario-red   { background-color: rgb(189,68 ,0 ) !important; }
.mario-tan   { background-color: rgb(255,160,68) !important; }
.mario-brown { background-color: rgb(172,124,0 ) !important; }

PRE {
	background: rgba(0,0,0, 0.05);
	border: thin dashed #27B;
}

PRE B.html-tag,
PRE B.html-attr,
PRE B.html-attr-value,
PRE B.html-class-husk {
	font-weight: normal;
}
PRE B.html-tag,
PRE B.html-attr,
PRE B.html-attr-value {
	color: black;
}
PRE B.html-class-husk {
	color: #27B;
}

.sticky-top {
	position: relative;
	width: 100%;
	z-index: 2;
}
.sticky-top.stuck {
	margin: 0 !important;
	position: fixed;
	top: 0;
}
.sticky-top {
	transition-property: box-shadow;
}
.sticky-top.stuck {
	box-shadow: 0 -0.25em .5em .25em rgba(0,0,0, 0.5);
	} @media (min-width: 1440px) { .sticky-top.stuck {
		box-shadow: 0 0.25em .5em -0.25em rgba(0,0,0, 0.5);
	}
}
aside.big {
	padding: .5em 0;
}
.sticky-top:not(.stuck)~.sticky-clone {
	display: none;
}
.sticky-clone {
	visibility: hidden;
}

.sticky-top {
	background: white;
	margin-top: 0;
}
</STYLE>
</HEAD>



<BODY>
<?PHP $_GET['title'] = '12-Column Grid'; include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/header.php'; ?>

<MAIN CLASS="pretty">
<ASIDE CLASS="big centered sticky-top" STYLE="width:100%;left:0">You are viewing this in the
	<B CLASS="show-tiny hide-small">Tiny</B>
	<B CLASS="hide-tiny show-small">Small</B>
	<B CLASS="show-medium">Medium</B>
	<B CLASS="show-large hide-huge">Large</B>
	<B CLASS="hide-large show-huge">Huge</B>
	size
</ASIDE>
<ASIDE>
	Below are the elements and their source code, with styling unique to this page. <B CLASS="brand">Husk</B> will <EM>never</EM> color your
	elements.
</ASIDE>

<HR/>

<P><B CLASS="brand">Husk</B> works on the principle of a <STRONG CLASS="help" DATA-TOOLTIP-TOP="* Husk will come in custom
	sizes in the future">12-column grid *</STRONG>. This means that cells in a row will be sized in units of <STRONG>twelfths
	of their parent</STRONG>. This inherently lets you evenly split a page into 12, 6, 4, 3, 2, or 1 column(s), or any
	combination of mixed sizes.</P>
<P>To create a <B CLASS="brand">Husk</B> row, you need only give an element the class <CODE>row</CODE> and its children sizing
	classes (we'll get to that soon). By default, <B CLASS="brand">Husk</B> rows and their cells have <CODE>.5em</CODE> margins, but these can be
	removed by adding the <CODE>flush</CODE> class to the row.</P>
<SECTION>
	<H2><STRONG>Constant-sized</STRONG> cells</H2>
	<P>Let's start simple. You can set any item to a certain width by using <CODE>all-#</CODE>, but replacing
		the <Q><CODE>#</CODE></Q> with the number of columns you want it to span. <I CLASS="fa fa-info-circle help"
		DATA-TOOLTIP-TOP="Remember: 1 column represents a twelfth of the width of a row"></I></P>
	
	<SECTION CLASS="row stripes"><?PHP
	for ($i = 12; $i >= 1; $i--)
	{
		if ((12 % $i) == 0)
		{
			for ($j = 0; $j < 12 / $i; $j++)
			{
				?>

		<DIV CLASS="all-<?PHP echo $i; ?>"><CODE>all-<B><?PHP echo $i; ?></B></CODE></DIV><?PHP
			}
			?>

		<?PHP
		}
	}
	?>

	</SECTION>

	<PRE CLASS="lang-html">
<B CLASS="html-tag">&lt;SECTION</B> <B CLASS="html-attr">CLASS</B>=<B CLASS="html-attr-value">"<B CLASS="html-class-husk">row</B>"</B>&gt;<?PHP
	for ($i = 12; $i >= 6; $i--)
	{
		if ((12 % $i) == 0)
		{
			for ($j = 0; $j < 12 / $i; $j++)
			{
				?>

	&lt;DIV CLASS="<B CLASS="html-class-husk">all-<?PHP echo $i; ?></B>"&gt;&lt;CODE&gt;all&lt;B&gt;<?PHP echo $i; ?>&lt;/B&gt;&lt;CODE&gt;&lt;/DIV&gt;<?PHP
			}
			?>

<?PHP
		}
	}
	
	?>

	...

&lt;/SECTION>
</PRE>
</SECTION>



<SECTION>
	<H2><STRONG>Responsive-sizing</STRONG> cells</H2>
	<SECTION CLASS="row stripes">
		<DIV CLASS="        small-12 medium-6 large-2 huge-1"><CODE>               small-<B>12</B> medium-<B>6</B> large-<B>2</B> huge-<B>1</B></CODE></DIV>
		<DIV CLASS="tiny-12 small-6  medium-6 large-2 huge-1"><CODE>tiny-<B>12</B> small-<B>6</B>  medium-<B>6</B> large-<B>2</B> huge-<B>1</B></CODE></DIV>
		<DIV CLASS="tiny-12 small-6  medium-3 large-2 huge-1"><CODE>tiny-<B>12</B> small-<B>6</B>  medium-<B>3</B> large-<B>2</B> huge-<B>1</B></CODE></DIV>
		<DIV CLASS="        small-12 medium-3 large-2 huge-1"><CODE>               small-<B>12</B> medium-<B>3</B> large-<B>2</B> huge-<B>1</B></CODE></DIV>
		<DIV CLASS="tiny-12 small-6  medium-3 large-2 huge-1"><CODE>tiny-<B>12</B> small-<B>6</B>  medium-<B>3</B> large-<B>2</B> huge-<B>1</B></CODE></DIV>
		<DIV CLASS="tiny-12 small-6  medium-3 large-2 huge-1"><CODE>tiny-<B>12</B> small-<B>6</B>  medium-<B>3</B> large-<B>2</B> huge-<B>1</B></CODE></DIV>
		<DIV CLASS="        small-12 medium-3 large-4 huge-1"><CODE>               small-<B>12</B> medium-<B>3</B> large-<B>4</B> huge-<B>1</B></CODE></DIV>
		<DIV CLASS="tiny-12 small-6  medium-3 large-4 huge-1"><CODE>tiny-<B>12</B> small-<B>6</B>  medium-<B>3</B> large-<B>4</B> huge-<B>1</B></CODE></DIV>
		<DIV CLASS="tiny-12 small-6  medium-3 large-4 huge-1"><CODE>tiny-<B>12</B> small-<B>6</B>  medium-<B>3</B> large-<B>4</B> huge-<B>1</B></CODE></DIV>
		<DIV CLASS="        small-12 medium-3 large-4 huge-1"><CODE>               small-<B>12</B> medium-<B>3</B> large-<B>4</B> huge-<B>1</B></CODE></DIV>
		<DIV CLASS="tiny-12 small-6  medium-6 large-4 huge-1"><CODE>tiny-<B>12</B> small-<B>6</B>  medium-<B>6</B> large-<B>4</B> huge-<B>1</B></CODE></DIV>
		<DIV CLASS="tiny-12 small-6  medium-6 large-4 huge-1"><CODE>tiny-<B>12</B> small-<B>6</B>  medium-<B>6</B> large-<B>4</B> huge-<B>1</B></CODE></DIV>
	</SECTION>

	<PRE>
&lt;SECTION CLASS="row stripes">
		&lt;DIV CLASS="        small-12 medium-6 large-2 huge-1"&gt;&lt;CODE&gt;               small-&lt;B&gt;12&lt;/B&gt; medium-&lt;B&gt;6&lt;/B&gt; large-&lt;B&gt;2&lt;/B&gt; huge-&lt;B&gt;1&lt;/B&gt;&lt;/CODE&gt;&lt;/DIV&gt;
		&lt;DIV CLASS="tiny-12 small-6  medium-6 large-2 huge-1"&gt;&lt;CODE&gt;tiny-&lt;B&gt;12&lt;/B&gt; small-&lt;B&gt;6&lt;/B&gt;  medium-&lt;B&gt;6&lt;/B&gt; large-&lt;B&gt;2&lt;/B&gt; huge-&lt;B&gt;1&lt;/B&gt;&lt;/CODE&gt;&lt;/DIV&gt;
		&lt;DIV CLASS="tiny-12 small-6  medium-3 large-2 huge-1"&gt;&lt;CODE&gt;tiny-&lt;B&gt;12&lt;/B&gt; small-&lt;B&gt;6&lt;/B&gt;  medium-&lt;B&gt;3&lt;/B&gt; large-&lt;B&gt;2&lt;/B&gt; huge-&lt;B&gt;1&lt;/B&gt;&lt;/CODE&gt;&lt;/DIV&gt;
		&lt;DIV CLASS="        small-12 medium-3 large-2 huge-1"&gt;&lt;CODE&gt;               small-&lt;B&gt;12&lt;/B&gt; medium-&lt;B&gt;3&lt;/B&gt; large-&lt;B&gt;2&lt;/B&gt; huge-&lt;B&gt;1&lt;/B&gt;&lt;/CODE&gt;&lt;/DIV&gt;
		
		...
		
&lt;/SECTION>
</PRE>
</SECTION><?PHP/*


<SECTION CLASS="row stripes">
	<?PHP
	
	for($i = 1; $i < 12; $i++)
	{
		?>

	<DIV CLASS="all-<?PHP echo $i; ?>">Always <B><?PHP echo $i; ?></B></DIV>	<DIV CLASS="all-<?PHP echo 12 - $i; ?>">Always <B><?PHP echo 12 - $i; ?></B></DIV><?PHP
	}
	
	?>
</SECTION>



<SECTION>
	<H2><STRONG>Offset</STRONG> cells</H2>
	<SECTION CLASS="row stripes">
		<DIV CLASS="all-2 offset-all-4">Always <B>2</B>, always offset <B>4</B></DIV> <DIV CLASS="all-1 offset-all-5">Always <B>1</B>, always offset <B>5</B></DIV>
		<DIV CLASS="all-2 offset-all-3">Always <B>2</B>, always offset <B>3</B></DIV> <DIV CLASS="all-2 offset-all-5">Always <B>2</B>, always offset <B>5</B></DIV>
		<DIV CLASS="all-2 offset-all-2">Always <B>2</B>, always offset <B>2</B></DIV> <DIV CLASS="all-3 offset-all-5">Always <B>3</B>, always offset <B>5</B></DIV>
		<DIV CLASS="all-2 offset-all-1">Always <B>2</B>, always offset <B>1</B></DIV> <DIV CLASS="all-4 offset-all-5">Always <B>4</B>, always offset <B>5</B></DIV>
		<DIV CLASS="all-2"             >Always <B>2</B>                        </DIV> <DIV CLASS="all-5 offset-all-5">Always <B>5</B>, always offset <B>5</B></DIV>
		<DIV CLASS="all-1"             >Always <B>1</B>                        </DIV> <DIV CLASS="all-6 offset-all-5">Always <B>6</B>, always offset <B>5</B></DIV>
		                                                                              <DIV CLASS="all-7 offset-all-5">Always <B>7</B>, always offset <B>5</B></DIV>
		                                                                              <DIV CLASS="all-8 offset-all-4">Always <B>8</B>, always offset <B>4</B></DIV>
		                                                                              <DIV CLASS="all-9 offset-all-3">Always <B>9</B>, always offset <B>3</B></DIV>
		                                                                              <DIV CLASS="all-10 offset-all-2">Always <B>10</B>, always offset <B>2</B></DIV>
		                                                                              <DIV CLASS="all-11 offset-all-1">Always <B>11</B>, always offset <B>1</B></DIV>
	</SECTION>

	<PRE>
&lt;SECTION CLASS="<B>row</B> stripes <B>spaced</B>"><?PHP
	
	for($i = 1; $i < 4; $i++)
	{
		?>

	&lt;DIV CLASS="all-<?PHP echo $i; ?> offset-all-<?PHP echo 12 - $i; ?>">Always &lt;B><?PHP echo $i; ?>&lt;/B>, always offset &lt;B><?PHP echo 12 - $i; ?>&lt;/B>&lt;/DIV><?PHP
	}
	
	?>


	...

&lt;/SECTION>
</PRE>
</SECTION>*/?>



<SECTION>
	<H2><STRONG>Offset</STRONG> cells</H2>
	<SECTION CLASS="row stripes">
		<DIV CLASS="all-12">&zwnj;</DIV>
		<DIV CLASS="all-1 ">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-10">&zwnj;</DIV>
		<DIV CLASS="all-1 ">&zwnj;</DIV> <DIV CLASS="all-4 offset-all-3">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-3">&zwnj;</DIV>
		<DIV CLASS="all-1 ">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-2">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-4">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-2">&zwnj;</DIV>
		<DIV CLASS="all-1 ">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-1">&zwnj;</DIV> <DIV CLASS="all-2 offset-all-2">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-2">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-1">&zwnj;</DIV>
		<DIV CLASS="all-1 ">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-1">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-1">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-2">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-1">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-1">&zwnj;</DIV>
		
		<DIV CLASS="all-1 ">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-1">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-1">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-2">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-1">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-1">&zwnj;</DIV>
		<DIV CLASS="all-1 ">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-1">&zwnj;</DIV> <DIV CLASS="all-2 offset-all-2">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-2">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-1">&zwnj;</DIV>
		<DIV CLASS="all-1 ">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-2">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-4">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-2">&zwnj;</DIV>
		<DIV CLASS="all-1 ">&zwnj;</DIV> <DIV CLASS="all-4 offset-all-3">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-3">&zwnj;</DIV>
		<DIV CLASS="all-1 ">&zwnj;</DIV> <DIV CLASS="all-1 offset-all-10">&zwnj;</DIV>
		<DIV CLASS="all-12">&zwnj;</DIV>
	</SECTION>

	<PRE>
&lt;SECTION CLASS="row stripes"&gt;
	
	...
	
	&lt;DIV CLASS="all-1 "&gt;&lt;/DIV&gt; &lt;DIV CLASS="all-1 offset-all-1"&gt;&lt;/DIV&gt; &lt;DIV CLASS="all-1 offset-all-1"&gt;&lt;/DIV&gt; &lt;DIV CLASS="all-1 offset-all-2"&gt;&lt;/DIV&gt; &lt;DIV CLASS="all-1 offset-all-1"&gt;&lt;/DIV&gt; &lt;DIV CLASS="all-1 offset-all-1"&gt;&lt;/DIV&gt;
	
	&lt;DIV CLASS="all-1 "&gt;&lt;/DIV&gt; &lt;DIV CLASS="all-1 offset-all-1"&gt;&lt;/DIV&gt; &lt;DIV CLASS="all-1 offset-all-1"&gt;&lt;/DIV&gt; &lt;DIV CLASS="all-1 offset-all-2"&gt;&lt;/DIV&gt; &lt;DIV CLASS="all-1 offset-all-1"&gt;&lt;/DIV&gt; &lt;DIV CLASS="all-1 offset-all-1"&gt;&lt;/DIV&gt;
	
	...
	
&lt;/SECTION&gt;
</PRE>
</SECTION>



<SECTION>
	<H2><STRONG>Nested</STRONG> rows</H2>
	<SECTION CLASS="row stripes">
		<DIV CLASS="all-4 small-12 row stripes">
			<DIV CLASS="all-4">You can</DIV>
			<DIV CLASS="all-8">nest any cells</DIV>
		</DIV>
		<DIV CLASS="all-8 small-12 row stripes">
			<DIV CLASS="all-8">within any other cells or rows, without any bulky</DIV>
			<DIV CLASS="all-4">surrounding elements</DIV>
		</DIV>
	</SECTION>

	<PRE>
&lt;SECTION CLASS="row stripes"&gt;
	&lt;DIV CLASS="all-4 small-12 row stripes"&gt;
		&lt;DIV CLASS="all-4"&gt;You can&lt;/DIV&gt;
		&lt;DIV CLASS="all-8"&gt;nest any cells&lt;/DIV&gt;
	&lt;/DIV&gt;
	&lt;DIV CLASS="all-8 small-12 row stripes"&gt;
		&lt;DIV CLASS="all-8"&gt;within any other cells or rows, without any bulky&lt;/DIV&gt;
		&lt;DIV CLASS="all-4"&gt;surrounding elements&lt;/DIV&gt;
	&lt;/DIV&gt;
&lt;/SECTION&gt;
</PRE>
</SECTION>

<SECTION CLASS="row flush centered">
	<HEADER CLASS="all-12"><H2><B>Mario</B> stress test</H2></HEADER>
	<DIV CLASS="tiny-12 small-6 medium-4 large-3 huge-2 mario-bg">
		<SECTION CLASS="row flush">
			<DIV CLASS="all-6 offset-all-2 mario-red">Hat</DIV>
		</SECTION>
		<SECTION CLASS="row flush">
			<DIV CLASS="all-10 offset-all-1 mario-red">Hat</DIV>
		</SECTION>
		<SECTION CLASS="row flush">
			<DIV CLASS="all-4 offset-all-1 mario-brown">Hair</DIV><DIV CLASS="all-2 mario-tan">Face</DIV><DIV CLASS="all-1 mario-brown">Eye</DIV><DIV CLASS="all-1 mario-tan">Forehead</DIV>
		</SECTION>
		<SECTION CLASS="row flush">
			<DIV CLASS="all-2 mario-brown">Hair</DIV><DIV CLASS="all-1 mario-tan">Ear</DIV><DIV CLASS="all-1 mario-brown">Sideburn</DIV><DIV CLASS="all-3 mario-tan">Face</DIV><DIV CLASS="all-1 mario-brown">Eye</DIV><DIV CLASS="all-3 mario-tan">Nose</DIV>
		</SECTION>
		<SECTION CLASS="row flush">
			<DIV CLASS="all-2 mario-brown">Hair</DIV><DIV CLASS="all-1 mario-tan">Ear</DIV><DIV CLASS="all-2 mario-brown">Sideburn</DIV><DIV CLASS="all-3 mario-tan">Face</DIV><DIV CLASS="all-1 mario-brown">Stache</DIV><DIV CLASS="all-3 mario-tan">Nose</DIV>
		</SECTION>
		<SECTION CLASS="row flush">
			<DIV CLASS="all-3 mario-brown">Hair</DIV><DIV CLASS="all-4 mario-tan">Face</DIV><DIV CLASS="all-4 mario-brown">Stache</DIV>
		</SECTION>
		<SECTION CLASS="row flush">
			<DIV CLASS="all-8 offset-all-2 mario-tan">Jaw</DIV>
		</SECTION>
			
		<section class="row flush">
			<div class="all-2 offset-all-2 mario-brown">Shirt</div><div class="all-1 mario-red">Overalls</div><div class="all-4 mario-brown">Shirt</div>
		</section>
		<section class="row flush">
			<div class="all-3 offset-all-1 mario-brown">Shirt</div><div class="all-1 mario-red">Overalls</div><div class="all-2 mario-brown">Shirt</div><div class="all-1 mario-red">Overalls</div><div class="all-3 mario-brown">Shirt</div>
		</section>
		<section class="row flush">
			<div class="all-4 mario-brown">Shirt</div><div class="all-4 mario-red">Overalls</div><div class="all-4 mario-brown">Shirt</div>
		</section>
		<SECTION CLASS="row flush">
			<DIV CLASS="all-2 mario-tan">Hand</DIV><DIV CLASS="all-1 mario-brown">Shirt</DIV><DIV CLASS="all-1 mario-red">Overalls</DIV><DIV CLASS="all-1 mario-tan">Button</DIV><DIV CLASS="all-2 mario-red">Overalls</DIV><DIV CLASS="all-1 mario-tan">Button</DIV><DIV CLASS="all-1 mario-red">Overalls</DIV><DIV CLASS="all-1 mario-brown">Shirt</DIV><DIV CLASS="all-2 mario-tan">Hand</DIV>
		</SECTION>
		<SECTION CLASS="row flush">
			<DIV CLASS="all-3 mario-tan">Hand</DIV><DIV CLASS="all-6 mario-red">Overalls</DIV><DIV CLASS="all-3 mario-tan">Hand</DIV>
		</SECTION>
		<SECTION CLASS="row flush">
			<DIV CLASS="all-2 mario-tan">Hand</DIV><DIV CLASS="all-8 mario-red">Overalls</DIV><DIV CLASS="all-2 mario-tan">Hand</DIV>
		</SECTION>
			
		<SECTION CLASS="row flush">
			<DIV CLASS="all-4 offset-all-1 mario-red">Overalls</DIV><DIV CLASS="all-4 offset-all-1 mario-red">Overalls</DIV>
		</SECTION>
		<SECTION CLASS="row flush">
			<DIV CLASS="all-4 offset-all-1 mario-brown">Boot</DIV><DIV CLASS="all-4 offset-all-2 mario-brown">Boot</DIV>
		</SECTION>
		<SECTION CLASS="row flush">
			<DIV CLASS="all-5 mario-brown">Boot</DIV><DIV CLASS="all-5 offset-all-2 mario-brown">Boot</DIV>
		</SECTION>
	</DIV>
</SECTION>
</MAIN>

<?PHP
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/footer.php';
?>
</BODY>
</HTML>