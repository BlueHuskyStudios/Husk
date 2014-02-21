<!DOCTYPE HTML>
<HTML CLASS="animate-all">
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
	position: fixed;
	left: 0;
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
.sticky-top:not(.stuck)+.sticky-clone {
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

<MAIN>
<ASIDE CLASS="big centered sticky-top" STYLE="width:100%;left:0">You are viewing this in the
	<B CLASS="show-tiny hide-small">Tiny</B>
	<B CLASS="hide-tiny show-small">Small</B>
	<B CLASS="show-medium">Medium</B>
	<B CLASS="show-large hide-huge">Large</B>
	<B CLASS="hide-large show-huge">Huge</B>
	size
</ASIDE>
<P>Below are the elements and their source code, with styling unique to this page. <B>Husk</B> will <EM>never</EM> color your elements.</P>
<SECTION>
	<H2><STRONG>Constant-sized</STRONG> cells</H2>
	<SECTION CLASS="row spaced stripes"><?PHP
	for ($i = 12; $i >= 1; $i--)
	{
		if ((12 % $i) == 0)
		{
			for ($j = 0; $j < 12 / $i; $j++)
			{
				?>

		<DIV CLASS="all-<?PHP echo $i; ?>">Always <B><?PHP echo $i; ?></B></DIV><?PHP
			}
			?>

		<?PHP
		}
	}
	?>

	</SECTION>

	<PRE CLASS="lang-html">
<B CLASS="html-tag">&lt;SECTION</B> <B CLASS="html-attr">CLASS</B>=<B CLASS="html-attr-value">"<B CLASS="html-class-husk">row spaced</B>"</B>&gt;<?PHP
	for ($i = 12; $i >= 6; $i--)
	{
		if ((12 % $i) == 0)
		{
			for ($j = 0; $j < 12 / $i; $j++)
			{
				?>

	&lt;DIV CLASS="all-<?PHP echo $i; ?>"&gt;Always &lt;B&gt;<?PHP echo $i; ?>&lt;/B&gt;&lt;/DIV&gt;<?PHP
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
	<SECTION CLASS="row stripes spaced"><?PHP
	
	for ($i = 0; $i < 12; $i++)
	{
		?>

		<DIV CLASS="tiny-12 small-6 medium-3 large-2 huge-1"><B>12</B> tiny, <B>6</B> small, <B>3</B> medium, <B>2</B> large, <B>1</B> huge</DIV><?PHP
	}
	?>

	</SECTION>

	<PRE>
&lt;SECTION CLASS="row stripes spaced"><?PHP
	
	for ($i = 0; $i < 3; $i++)
	{
		?>

	&lt;DIV CLASS="tiny-12 small-6 medium-3 large-2 huge-1"><B>12</B> tiny, <B>6</B> small, <B>3</B> medium, <B>2</B> large, <B>1</B> huge</DIV><?PHP
	}
	
	?>


	...

&lt;/SECTION>
</PRE>
</SECTION>


<!--SECTION CLASS="row stripes spaced">
	<?PHP
	
	for($i = 1; $i < 12; $i++)
	{
		?>

	<DIV CLASS="all-<?PHP echo $i; ?>">Always <B><?PHP echo $i; ?></B></DIV>	<DIV CLASS="all-<?PHP echo 12 - $i; ?>">Always <B><?PHP echo 12 - $i; ?></B></DIV><?PHP
	}
	
	?>
</SECTION-->



<SECTION>
	<H2><STRONG>Offset</STRONG> cells</H2>
	<SECTION CLASS="row stripes spaced">
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
			
		<SECTION CLASS="row flush">
			<DIV CLASS="all-3 offset-all-1 mario-brown">Shirt</DIV><DIV CLASS="all-1 mario-red">Overalls</DIV><DIV CLASS="all-3 mario-brown">Shirt</DIV>
		</SECTION>
		<SECTION CLASS="row flush">
			<DIV CLASS="all-4 mario-brown">Shirt</DIV><DIV CLASS="all-1 mario-red">Overalls</DIV><DIV CLASS="all-1 mario-brown">Shirt</DIV><DIV CLASS="all-1 mario-red">Overalls</DIV><DIV CLASS="all-3 mario-brown">Shirt</DIV>
		</SECTION>
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