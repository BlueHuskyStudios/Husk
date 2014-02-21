<!DOCTYPE HTML>
<?PHP include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/huskMeta.php'; ?>
<HTML>
<HEAD>
<TITLE>Support &ndash; Husk Framework</TITLE>
<?PHP
include $_SERVER['DOCUMENT_ROOT'].'/_incl/responsive-meta-tags.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/css.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/js.htm';
?>

</HEAD>



<BODY>
<?PHP $_GET['title'] = 'Support'; include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/header.php'; ?>

<MAIN>
	<ARTICLE ID="GET" CLASS="row flush centered flex-row flex-wrap">
		<SECTION CLASS="hero small-12 medium-8 large-5 text-right">
			Full stable browser support on all post-2007 operating systems at release
		</SECTION>
	</ARTICLE>
	
	<ARTICLE ID="ABOUT" CLASS="row flex-row flex-horiz-center flex-wrap">
		<SECTION ID="WARN" CLASS="tiny-12 large-6">
			<H2>How to warn of an unsupported browser</H2>
			<PRE>
&lt;ASIDE CLASS="hide-when-husk-supported"&gt;
	&lt;STRONG&gt;Warning!&lt;/STRONG&gt; Your browser is not supported. Please upgrade to &lt;A HREF="../support"&gt;a supported browser&lt;/A&gt;.
&lt;/ASIDE&gt;
			</PRE>
			
			<H3>Output:</H3>
			<ASIDE CLASS="hide-when-husk-supported">
				<STRONG>Warning!</STRONG> Your browser is not supported. Please upgrade to <A HREF="../support">a supported browser</A>.
			</ASIDE>
		</SECTION>
	</ARTICLE>
</MAIN>

<?PHP
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/footer.php';
?>
</BODY>
</HTML>