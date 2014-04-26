<!DOCTYPE HTML>
<?PHP include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/huskMeta.php'; ?>
<HTML CLASS="<?PHP echo getHTMLTagClasses(); ?>">
<HEAD>
<TITLE>Husk Framework</TITLE>
<META NAME="description" CONTENT="Husk is a barebones layout framework designed to give professional developers a quick and easy platform with which to develop websites." PROPERTY="og:description"/>
<META NAME="keywords"    CONTENT="Blue Husky Studios,Blue Husky,Programming,Web,Framework,CSS,JS,Flex,Flexbox,12-Column,Homepage"/>
<?PHP
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/js.htm';
include $_SERVER['DOCUMENT_ROOT'].'/_incl/responsive-meta-tags.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/meta-tags.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/css.htm';
?>

</HEAD>



<BODY>
<?PHP include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/header.php'; ?>

<MAIN CLASS="pretty">
	<ARTICLE ID="GET" CLASS="row flush centered flex-row flex-wrap">
		<SECTION CLASS="hero small-12 medium-8 large-5 text-right row flex-row flex-horiz-center">
			<!--H2>Get it!</H2-->
			<BLOCKQUOTE CLASS="all-12 big text-center">
				<?PHP echo getHuskRandomTagline(); ?>

			</BLOCKQUOTE>
			
			<A HREF="/husk/get/" CLASS="big green button">Be part of the alpha with Husk <?PHP echo getHuskVersion(ReleaseNames::ALPHA); ?></A>
			
			<BUTTON CLASS="big blue" DISABLED>Version <?PHP echo getHuskVersion(ReleaseNames::BETA); ?> <BR/><SMALL>coming <SPAN ID="TIME">soon</SPAN></SMALL></BUTTON>
			<SCRIPT TYPE="text/javascript">
				setInterval(timer, 1000);
				var seconds = <?PHP echo getHuskReleaseDate(ReleaseNames::BETA)->diff(new DateTime())->format('(%a * 24 * 60 * 60) + (%h * 60 * 60) + (%i * 60) + %s'); ?>;

				function timer()
				{
					var counter = $("#TIME")[0];
					counter.innerText = parseTime(--seconds);
				}

				function parseTime(seconds)
				{
					var days = seconds / 60 / 60 / 24;
					var hours = (days - (days = parseInt(days))) * 24;
						if(hours == 24) hours = 0;
					var minutes = (hours - (hours = parseInt(hours))) * 60;
						if(minutes == 60) minutes = 0;
					var seconds2 = Math.round((minutes - (minutes = parseInt(minutes))) * 60);
						if(seconds2 == 60) seconds2 = 0;
					var countdown = 
					(
						(days
							? days + 
								(hours || minutes || seconds
									? ":"
									: ""
								)
							: ""
						) +
						(hours || days
							? (hours < 10
									? "0" + hours
									: hours
								) +
								(minutes || seconds
									? ":"
									: ""
								)
							: ""
						) +
						(minutes || hours || days
							? (minutes < 10
									? "0" + minutes
									: minutes
								) + 
								(seconds
									? ":"
									: ""
								)
							: ""
						) +
						(seconds2 || minutes || hours || days
							? (seconds2 < 10
								? "0" + seconds2
								: seconds2
							)
							: ""
						)
					).trim();
					return seconds > 60 ? "in \u223C" + countdown : "soon";
				}
			</SCRIPT>
		</SECTION>
	</ARTICLE>
	
	<ARTICLE ID="ABOUT" CLASS="row flex-row flex-horiz-center flex-wrap">
		<UL CLASS="horiz text-center" DATA-TOOLTIP-BOTTOM="Husk plays with HTML5 and CSS3" DATA-TOOLTIP-POS="bottom">
			<LI><I CLASS="fa fa-html5 fa-4x"></I></LI>
			<LI><SPAN CLASS="font-4x font-thin">&amp;</SPAN></LI>
			<LI><I CLASS="fa fa-css3  fa-4x"></I></LI>
		</UL>
		<SECTION ID="WHAT" CLASS="all-12">
			<H2>What Is <B CLASS="brand">Husk</B>?</H2>
			<P><B CLASS="brand">Husk</B> is a <STRONG>barebones</STRONG> CSS3 layout framework designed to give <STRONG>professional</STRONG> developers a <STRONG>quick and easy</STRONG> platform with which to develop websites. Unlike other frameworks (such as Bootstrap, Foundation, et cetera), <B CLASS="brand">Husk</B> does not add colors, borders, or other non-structural styles to the website, leaving you full creative freedom to design your site as you wish.</P>
			<P>Just like other frameworks, <B CLASS="brand">Husk</B> has a 12-column grid system! It works on the new CSS3 flexbox module, meaning that there won't be any strangeness with unpredictable <CODE>float</CODE> behavior, or <A HREF="https://bugzilla.mozilla.org/show_bug.cgi?id=63895">Firefox's table bugs</A>.</P>
		</SECTION>
		
		
		
		<SECTION ID="OTHERS" CLASS="tiny-12 large-6">
			<H2>Why not another?</H2>
			<P>If you're <STRONG>new to web programming</STRONG>, you might use <A HREF="//wordpress.org/" TARGET="_blank">WordPress</A>, <A HREF="http://www.joomla.org/" TARGET="_blank">Joomla</A>, <A HREF="//tumblr.com" TARGET="_blank">Tumblr</A>, or <A HREF="//www.blogger.com/" TARGET="_blank">Blogger</A> to give your web content style and structure, and this is okay. To get <STRONG>more in-depth</STRONG>, you might choose <A HREF="//getbootstrap.com" TARGET="_blank">Bootstrap</A>, <A HREF="//foundation.zurb.com" TARGET="_blank">Foundation</A>, or another similar CSS/JS framework. The problem with these is that you must take time to override default styles to design your  site properly.</P>
			<P>Also, as mentioned above, other systems use <CODE>float</CODE>, which can lead to unpredictability and sometimes requires <CODE>clear</CODE> to fix things. You'll never have to deal with this using Husk.</P>
		</SECTION>
		
		<SECTION ID="SPECIALIZED" CLASS="tiny-12 large-6">
			<H2>Specialized</H2>
			<P><STRONG><B CLASS="brand">Husk</B> stays naked to let you be the designer!</STRONG> <B CLASS="brand">Husk</B> won't interfere with your design, allowing you to come up with <STRONG>multiple designs</STRONG> while keeping the layout and structure exactly the same!</P>
		</SECTION>
		
		
		
		<SECTION ID="CO-OPERATIVE" CLASS="tiny-12 small-6 large-3">
			<H2>For the People</H2>
			<P>Since <B CLASS="brand">Husk</B> never overrides styles, you can pop it into any existing webpage if you just
				need a couple features.</P>
			<P><STRONG>If you use a reset.css</STRONG>, you'll love <B CLASS="brand">Husk</B>, because it respects most of
				those resets!</P>
		</SECTION>
		
		<SECTION ID="WHO" CLASS="tiny-12 small-6 large-3">
			<H2>By the People</H2>
			<P><B CLASS="brand">Husk</B> was designed by web designers, for web designers. We've set had to design, maintain, and upgrade multiple websites, and used this knowledge to build <B CLASS="brand">Husk</B> for ourselves, if not you, too!</P>
		</SECTION>
		
		<SECTION ID="CALCULATED" CLASS="tiny-12 small-6 large-3">
			<H2>Exactly Calculated</H2>
			<P>Not estimated, not close. <b class="brand">Husk</b> utilizes CSS3 <CODE>calc</CODE> to ensure perfectly-fitting cells and guarantee exact results, the <em>right</em> way</P>
		</SECTION>
		
		<SECTION ID="DEMO" CLASS="tiny-12 small-6 large-3">
			<H2>Demo</H2>
			<UL CLASS="row">
				<LI CLASS="all-12"><A HREF="/husk/demo/grid"   CLASS="button display-block">12-column grid</A></LI>
				<LI CLASS="all-12"><A HREF="/husk/demo/sticky" CLASS="button display-block" DISABLED>Sticky elements</A></LI>
				<LI CLASS="all-12"><A HREF="/husk/demo/shiv"   CLASS="button display-block" DISABLED>Shiv</A></LI>
			</UL>
		</SECTION>
	</ARTICLE>
</MAIN>

<?PHP
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/footer.php';
?>
</BODY>
</HTML>