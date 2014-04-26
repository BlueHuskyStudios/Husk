<!DOCTYPE HTML>
<?PHP include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/huskMeta.php'; ?>
<HTML CLASS="<?PHP echo getHTMLTagClasses(); ?>">
<HEAD>
<TITLE>Semantics &ndash; Features &ndash; Husk Framework</TITLE>
<?PHP
include $_SERVER['DOCUMENT_ROOT'].'/_incl/responsive-meta-tags.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/meta-tags.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/css.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/js.htm';
?>
</HEAD>



<BODY>
<?PHP $_GET['title'] = 'Semantics'; include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/header.php'; ?>

<MAIN>
<ASIDE CLASS="big centered sticky-top" STYLE="width:100%;left:0">You are viewing this in the
	<B CLASS="show-tiny hide-small">Tiny</B>
	<B CLASS="hide-tiny show-small">Small</B>
	<B CLASS="show-medium">Medium</B>
	<B CLASS="show-large hide-huge">Large</B>
	<B CLASS="hide-large show-huge">Huge</B>
	size
</ASIDE>
</MAIN>

<?PHP
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/footer.php';
?>
</BODY>
</HTML>