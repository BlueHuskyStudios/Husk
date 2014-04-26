<!DOCTYPE HTML>
<?PHP include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/huskMeta.php'; ?>
<HTML CLASS="<?PHP echo getHTMLTagClasses(); ?>">
<HEAD>
<TITLE>Get the Husk Framework</TITLE>
<META NAME="description" CONTENT="Download your own Husk!" PROPERTY="og:description"/>
<META NAME="keywords"    CONTENT="Blue Husky Studios,Blue Husky,Programming,Web,Framework,CSS,JS,Flex,Flexbox,12-Column,Download,Get"/>
<?PHP
include $_SERVER['DOCUMENT_ROOT'].'/_incl/responsive-meta-tags.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/meta-tags.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/css.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/js.htm';
?>
<STYLE TYPE="text/css">
/*#DL_FORM>* {
	margin: 1em 2em;
}*/
#PRESETS {
	margin-bottom: .5em;
}
.black-box {
	background: #222;
	color: #BBB;
	padding: 1em .5em 1em 1em;
}
#DOWNLOAD_BOX {
	padding: 1em 4em;
	border: .5em solid #222;
	border-left-width: .5em;
	position: relative;
}
#DOWNLOAD_BOX::before,
#DOWNLOAD_BOX::after {
    content: " ";
    border-color: #FFF;
    border-left-color: transparent;
    border-width: .25em;
    border-style: solid;
    position: absolute;
    right: -.5em;
}
#DOWNLOAD_BOX::before {
    border-bottom-color: transparent;
    top: -.5em;
}
#DOWNLOAD_BOX::after {
    border-top-color: transparent;
    bottom: -.5em;
}
</STYLE>
</HEAD>



<BODY>
<?PHP $_GET['title'] = 'Get You a Husk'; include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/header.php'; ?>

<MAIN CLASS="pretty">
	<SECTION>
		<H1><B CLASS="brand">Husk</B> is in-stock!</H1>
		<DIV CLASS="hide-when-js">
			<DL CLASS="row flex-row flex-wrap flex-vert-center">
				<DT CLASS="tiny-1 small-3 all-2 text-right"><A HREF="/Husk/_css/Husk.css" CLASS="blue button display-block text-center"><I CLASS="fa fa-download"></I> Husk.css</A></DT>
					<DD CLASS="tiny-12 small-9 all-10">The core features of husk, including the 12-column grid and convenience classes</DD>
				<DT CLASS="tiny-1 small-3 all-2 text-right"><A HREF="/Husk/_js/Husk.jQuery.js" CLASS="blue button display-block text-center"><I CLASS="fa fa-download"></I> Husk.jQuery.css</A></DT>
					<DD CLASS="tiny-12 small-9 all-10">The special features of husk, including sticky elements and hide/show based if JavaScript is enabled</DD>
				<DT CLASS="tiny-1 small-3 all-2 text-right"><A HREF="/Husk/_css/Flex.css" CLASS="green button display-block text-center"><I CLASS="fa fa-download"></I> Flex.css</A></DT>
					<DD CLASS="tiny-12 small-9 all-10">An easy interface to the awesome <SMALL>(yet complex)</SMALL> CSS3 Flexbox module</DD>
				<DT CLASS="tiny-1 small-3 all-2 text-right"><A HREF="/Husk/_css/Type.css" CLASS="green button display-block text-center"><I CLASS="fa fa-download"></I> Type.css</A></DT>
					<DD CLASS="tiny-12 small-9 all-10">The typography of Husk, in the philosophy of Husk: There when you need it, not when you don't.</DD>
				<DT CLASS="tiny-1 small-3 all-2 text-right"><A HREF="/Husk/_css/Print.css" CLASS="green button display-block text-center"><I CLASS="fa fa-download"></I> Print.css</A></DT>
					<DD CLASS="tiny-12 small-9 all-10">A teensy weensy little stylesheet to help you save on printing.</DD>
				<DT CLASS="tiny-1 small-3 all-2 text-right"><A HREF="/Husk/_css/Print.css" CLASS="green button display-block text-center"><I CLASS="fa fa-download"></I> Everything</A></DT>
					<DD CLASS="tiny-12 small-9 all-10">A teensy weensy little stylesheet to help you save on printing.</DD>
			</DL>
		</DIV>
		<FORM CLASS="show-when-js row flush flex-row flex-horiz-center" ID="DL_FORM">
			<DIV CLASS="tiny-12 text-right flex-column black-box" ID="CHECKS">
				<SELECT ID="PRESETS">
					<OPTION SELECTED DISABLED VALUE=''>Select a combo pack&hellip;</OPTION>
					<OPTION VALUE='css-js-Flex-Type-Print'>Everything</OPTION>
					<OPTION VALUE='css-js'>The Old Classic</OPTION>
					<OPTION VALUE='css-Flex'>Dynamic Duo</OPTION>
					<OPTION VALUE='Type-Print'>Typographer Special</OPTION>
				</SELECT>
				<LABEL>Husk.css       <INPUT CHECKED TYPE="checkbox" NAME="css"/></LABEL>
				<LABEL>Husk.jQuery.js <INPUT CHECKED TYPE="checkbox" NAME="js"/></LABEL>
				<LABEL>Flex.css       <INPUT CHECKED TYPE="checkbox" NAME="Flex"/></LABEL>
				<LABEL>Type.css       <INPUT CHECKED TYPE="checkbox" NAME="Type"/></LABEL>
				<LABEL>Print.css      <INPUT CHECKED TYPE="checkbox" NAME="Print"/></LABEL>
			</DIV>
			<DIV CLASS="tiny-12 flex-column flex-vert-center flex-horiz-center" ID="DOWNLOAD_BOX">
				<OUTPUT></OUTPUT>
			</DIV>
			<SCRIPT TYPE="text/javascript">
				$checks = $("#CHECKS INPUT[type=checkbox][name]");
				$presets = $("#PRESETS");
				$presets.change( function() {
					toSelect = this.value.split("-");
					
					for(check = 0; check < $checks.length; check++)
					{
						$checks[check].checked = false;
						
						for(selectName in toSelect)
							if ($checks[check].name == toSelect[selectName])
								$checks[check].checked = true;
					}
					
					checksChange();
				});
				checksChange = function() {
					filename = [];
					for(item in $checks)
					{
						if ($checks[item].checked && $checks[item].name)
							filename.push($checks[item].name);
					}
					$("output").html("<A " + (filename.length ? "HREF=\"Husk_" + filename.join("-") + "_<?PHP echo getHuskVersion() ?>" + ".zip\" TARGET=\"_blank\"" : " DISABLED DATA-TOOLTIP-BOTTOM=\"&laquo; Please select at least one item\"") + " CLASS=\"big green button display-block text-center tooltip-shown\"><I CLASS=\"fa fa-download\"></I> Download</A>");
					checkCount = 0;
					for(i=0; i < $checks.length; i++)
						if ($checks[i].checked)
							checkCount++;
					$presets.val(filename.join("-"));
				}
				$checks.change(checksChange);
				
				checksChange();
			</SCRIPT>
		</FORM>
		
		<H2>Need a custom order?</H2>
		<P>Is your site not quite the 12-column size? Soon, <B CLASS="brand">Husk</B> will be available in custom sizes, because every website is just a little bit different.</P>
	</SECTION>
</MAIN>

<?PHP
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/footer.php';
?>
</BODY>
</HTML>