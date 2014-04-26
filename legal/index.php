<!DOCTYPE HTML>
<?PHP include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/huskMeta.php'; ?>
<HTML CLASS="<?PHP echo getHTMLTagClasses(); ?>">
<HEAD>
<TITLE>Legal &mdash; Husk Framework</TITLE>
<?PHP
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/js.htm';
include $_SERVER['DOCUMENT_ROOT'].'/_incl/responsive-meta-tags.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/meta-tags.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/css.htm';
?>
<STYLE TYPE="text/css">
#LEGAL {
	counter-reset: legal-nums 0;
}
#LEGAL>SECTION {
	counter-increment: legal-nums;
}
#LEGAL>SECTION>H2::before {
	content: counter(legal-nums) ": ";
	font-weight: 300;
}
</STYLE>
</HEAD>



<BODY>
<?PHP include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/header.php'; ?>

<MAIN CLASS="pretty">
	<ARTICLE ID="LEGAL">
		<ASIDE CLASS="text-center">
			Below is all legal information about the <B CLASS="brand">Husk</B> framework, last edited 2014-04-24:
		</ASIDE>
		
		<SECTION>
			<H2>Summary</H2>
			<ASIDE><SMALL>The following summary is not to be used in a court of law, but to express the intent of this document
				in layman's terms:</SMALL></ASIDE>
			<HR/>
			<P><B CLASS="brand">Husk</B> is owned by <B><A HREF="//Prog.BHStudios.org">Blue Husky Programming</A></B>, and is
				released by them under the <A HREF="https://www.gnu.org/licenses/gpl-3.0.html" TARGET="_blank">GNU Public
				Licence version 3</A>, which guarantees your freedom to share and change all versions of <B CLASS="brand">Husk</B>.</P>
			<HR/>
		</SECTION>
		
		<SECTION>
			<H2>Definitions</H2>
			<DL CLASS="numbered inline" TYPE="1">
				<DT>Husk Framework</DT>
					<DD>The collection of files that make up the Husk framework:
						<UL>
							<LI>Husk.css</LI>
							<LI>Flex.css</LI>
							<LI>Type.css</LI>
							<LI>Print.css</LI>
							<LI>Husk.jQuery.js</LI>
						</UL>
					</DD>
				<DT>Blue Husky Programming</DT>
					<DD>The brand which owns Husk Framework, and the person(s) who operate under this brand.</DD>
			</DL>
		</SECTION>
		
		<SECTION>
			<H2>Ownership</H2>
			<P>The copyright for Husk Framework is owned by Blue Husky Programming, and claimed
				in the year 2014 A.D..</P>
		</SECTION>
		
		<SECTION>
			<H2>Copyright</H2>
			<P>All rights to Husk Framework are detailed in the GNU General Public License version 3. The full text of this can
				be found at <A HREF="https://www.gnu.org/licenses/gpl-3.0.html" TARGET="_blank">
				https://www.gnu.org/licenses/gpl-3.0.html</A>.</P>
		</SECTION>
	</ARTICLE>
</MAIN>

<?PHP
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/footer.php';
?>
</BODY>
</HTML>