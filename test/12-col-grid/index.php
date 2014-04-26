<!DOCTYPE HTML>
<?PHP include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/huskMeta.php'; ?>
<HTML CLASS="<?PHP echo getHTMLTagClasses(); ?>">
<HEAD>
<TITLE>12-Column Grid test &ndash; Husk Framework</TITLE>
<?PHP include $_SERVER['DOCUMENT_ROOT'].'/_incl/responsive-meta-tags.htm'; ?>
<?PHP include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/css.htm'; ?>
<STYLE TYPE="text/css">
.row>* {
	background-color: #27B;
}
.row>*:nth-child(odd) {
	background-color: #BBB;
}

.mario-bg    { background-color: transparent     !important; }
.mario-red   { background-color: rgb(189,68 ,0 ) !important; }
.mario-tan   { background-color: rgb(255,160,68) !important; }
.mario-brown { background-color: rgb(172,124,0 ) !important; }

}
</STYLE>
</HEAD>



<BODY>
<?PHP $_GET['title'] = '12-Column Grid Test'; include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/header.php'; ?>

<MAIN>
<P>You are viewing this in the
	<B CLASS="show-tiny hide-small">Tiny</B>
	<B CLASS="hide-tiny show-small">Small</B>
	<B CLASS="show-medium">Medium</B>
	<B CLASS="show-large hide-huge">Large</B>
	<B CLASS="hide-large show-huge">Huge</B>
	size
</P>
<SECTION CLASS="row stripes spaced">
	<!--DIV CLASS="all-12">Always <B>12</B></DIV>
	
	<DIV CLASS="all-6">Always <B>6</B></DIV>
	<DIV CLASS="all-6">Always <B>6</B></DIV-->
	
	<?PHP
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
	
	
	for ($i = 0; $i < 12; $i++)
	{
		?>

	<DIV CLASS="tiny-12 small-6 medium-3 large-2 huge-1"><B>12</B> tiny, <B>6</B> small, <B>3</B> medium, <B>2</B> large, <B>1</B> huge</DIV><?PHP
	}
	
	for($i = 1; $i < 12; $i++)
	{
		?>

	
	<DIV CLASS="all-<?PHP echo $i; ?>">Always <B><?PHP echo $i; ?></B></DIV>
	<DIV CLASS="all-<?PHP echo 12 - $i; ?>">Always <B><?PHP echo 12 - $i; ?></B></DIV><?PHP
	}
	?>
</SECTION>

<SECTION CLASS="row flush centered">
	<HEADER CLASS="all-12"><H1><B>Mario</B> stress test</H1></HEADER>
	<DIV CLASS="tiny-12 small-6 medium-4 large-3 huge-2 mario-bg">
		<SECTION CLASS="row flush">
			<DIV CLASS="all-2 mario-bg">BG</DIV><DIV CLASS="all-6 mario-red">Hat</DIV><DIV CLASS="all-4 mario-bg">BG</DIV>
			<DIV CLASS="all-1 mario-bg">BG</DIV><DIV CLASS="all-10 mario-red">Hat</DIV><DIV CLASS="all-1 mario-bg">BG</DIV>
			<DIV CLASS="all-1 mario-bg">BG</DIV><DIV CLASS="all-4 mario-brown">Hair</DIV><DIV CLASS="all-2 mario-tan">Face</DIV><DIV CLASS="all-1 mario-brown">Eye</DIV><DIV CLASS="all-1 mario-tan">Forehead</DIV><DIV CLASS="all-3 mario-bg">BG</DIV>
			<DIV CLASS="all-2 mario-brown">Hair</DIV><DIV CLASS="all-1 mario-tan">Ear</DIV><DIV CLASS="all-1 mario-brown">Sideburn</DIV><DIV CLASS="all-3 mario-tan">Face</DIV><DIV CLASS="all-1 mario-brown">Eye</DIV><DIV CLASS="all-3 mario-tan">Nose</DIV><DIV CLASS="all-1 mario-bg">BG</DIV>
			<DIV CLASS="all-2 mario-brown">Hair</DIV><DIV CLASS="all-1 mario-tan">Ear</DIV><DIV CLASS="all-2 mario-brown">Sideburn</DIV><DIV CLASS="all-3 mario-tan">Face</DIV><DIV CLASS="all-1 mario-brown">Stache</DIV><DIV CLASS="all-3 mario-tan">Nose</DIV>
			<DIV CLASS="all-3 mario-brown">Hair</DIV><DIV CLASS="all-4 mario-tan">Face</DIV><DIV CLASS="all-4 mario-brown">Stache</DIV><DIV CLASS="all-1 mario-bg">BG</DIV>
			<DIV CLASS="all-2 mario-bg">BG</DIV><DIV CLASS="all-8 mario-tan">Jaw</DIV><DIV CLASS="all-2 mario-bg">BG</DIV>
			
			<DIV CLASS="all-1 mario-bg">BG</DIV><DIV CLASS="all-3 mario-brown">Shirt</DIV><DIV CLASS="all-1 mario-red">Overalls</DIV><DIV CLASS="all-3 mario-brown">Shirt</DIV><DIV CLASS="all-4 mario-bg">BG</DIV>
			<DIV CLASS="all-4 mario-brown">Shirt</DIV><DIV CLASS="all-1 mario-red">Overalls</DIV><DIV CLASS="all-1 mario-brown">Shirt</DIV><DIV CLASS="all-1 mario-red">Overalls</DIV><DIV CLASS="all-3 mario-brown">Shirt</DIV><DIV CLASS="all-1 mario-bg">BG</DIV>
			<DIV CLASS="all-2 mario-tan">Hand</DIV><DIV CLASS="all-1 mario-brown">Shirt</DIV><DIV CLASS="all-1 mario-red">Overalls</DIV><DIV CLASS="all-1 mario-tan">Button</DIV><DIV CLASS="all-2 mario-red">Overalls</DIV><DIV CLASS="all-1 mario-tan">Button</DIV><DIV CLASS="all-1 mario-red">Overalls</DIV><DIV CLASS="all-1 mario-brown">Shirt</DIV><DIV CLASS="all-2 mario-tan">Hand</DIV>
			<DIV CLASS="all-3 mario-tan">Hand</DIV><DIV CLASS="all-6 mario-red">Overalls</DIV><DIV CLASS="all-3 mario-tan">Hand</DIV>
			<DIV CLASS="all-2 mario-tan">Hand</DIV><DIV CLASS="all-8 mario-red">Overalls</DIV><DIV CLASS="all-2 mario-tan">Hand</DIV>
			
			<DIV CLASS="all-1 mario-bg">BG</DIV><DIV CLASS="all-4 mario-red">Overalls</DIV><DIV CLASS="all-1 mario-bg">BG</DIV><DIV CLASS="all-4 mario-red">Overalls</DIV><DIV CLASS="all-2 mario-bg">BG</DIV>
			<DIV CLASS="all-1 mario-bg">BG</DIV><DIV CLASS="all-4 mario-brown">Boot</DIV><DIV CLASS="all-2 mario-bg">BG</DIV><DIV CLASS="all-4 mario-brown">Boot</DIV><DIV CLASS="all-1 mario-bg">BG</DIV>
			<DIV CLASS="all-5 mario-brown">Boot</DIV><DIV CLASS="all-2 mario-bg">BG</DIV><DIV CLASS="all-5 mario-brown">Boot</DIV>
		</SECTION>
	</DIV>
</SECTION>
</MAIN>

<?PHP
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/footer.php';
?>
</BODY>
</HTML>