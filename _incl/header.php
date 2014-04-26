<?PHP

$title = isset($_GET['title']) && $_GET['title'];
$breakpoint = $title ? 'medium' : 'tiny';

?><HEADER CLASS="row flush   flex-row flex-horiz-space-between flex-vert-stretch flex-wrap">
	<A HREF="/husk/" CLASS="brand flex-column text-center <?PHP echo $breakpoint ; ?>-12">
		<H1>Husk</H1>
		<SMALL>A CSS framework for designers</SMALL>
	</A><?PHP
	if($title)
	{
		?>

	<H2 CLASS="plain flex-row flex-vert-center flex-horiz-center <?PHP echo $breakpoint; ?>-12"><SPAN><?PHP echo htmlspecialchars($_GET['title'] , ENT_HTML5 | ENT_QUOTES); ?></SPAN></H2>
		<?PHP
	}
	?>

	<NAV CLASS="flex-row flex-vert-stretch flex-horiz-center <?PHP echo $breakpoint; ?>-12">
		<MENU TYPE="toolbar" CLASS="text-center flex-row flex-vert-stretch">
			<LI CLASS="dropdown-holder flex-row flex-vert-stretch">
				<A HREF="#" CLASS="flex-row flex-vert-bottom">Docs</A>
				<MENU TYPE="context" CLASS="dropdown flex-column flex-horiz-stretch">
					<LI CLASS="flex-column flex-horiz-stretch"><A HREF="/husk/docs/css">CSS</A></LI>
					<LI CLASS="flex-column flex-horiz-stretch"><A HREF="/husk/docs/js">JS</A></LI>
					<!--LI CLASS="flex-column flex-horiz-stretch"><A HREF="/husk/docs/css">The Rest</A></LI-->
				</MENU>
			</LI>
			<LI CLASS="dropdown-holder flex-row flex-vert-stretch">
				<A HREF="#" CLASS="flex-row flex-vert-bottom">Demos</A>
				<MENU TYPE="context" CLASS="dropdown flex-column flex-horiz-stretch">
					<LI CLASS="flex-column flex-horiz-stretch"><A HREF="/husk/demo/grid">Grid</A></LI>
					<LI CLASS="flex-column flex-horiz-stretch"><A HREF="/husk/demo/shiv">Shiv</A></LI>
					<LI CLASS="flex-column flex-horiz-stretch"><A HREF="/husk/demo/sticky">Sticky</A></LI>
				</MENU>
			</LI>
			<LI CLASS="flex-row flex-vert-bottom"><A HREF="/husk/get" CLASS="green button"><I CLASS="fa fa-download"></I> Download</A></LI>
		</MENU>
	</NAV>
</HEADER>

<DIV CLASS="hide-when-husk-supported severe alert">
	Your browser does not support Husk. Sorry!<BR/>
	<A HREF="/husk/support">Click here for more information</A>
</DIV>
<DIV CLASS="hide-when-js warning alert">
	Husk enjoys JavaScript's company. If you can, turn it on for a better experience!<BR/>
	<A HREF="/husk/support">Click here for more information</A>
</DIV>
<SCRIPT TYPE="text/javascript">fixJSDisplays()</SCRIPT><!-- Destroy the above warning immediately if we can -->