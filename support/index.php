<!DOCTYPE HTML>
<?PHP include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/huskMeta.php'; ?>
<HTML CLASS="<?PHP echo getHTMLTagClasses(); ?>">
<HEAD>
<TITLE>Support &ndash; Husk Framework</TITLE>
<META NAME="description" CONTENT="Whta does Husk support? What supports Husk? Whichever way you look at it, this page should help." PROPERTY="og:description"/>
<META NAME="keywords"    CONTENT="Blue Husky Studios,Blue Husky,Programming,Web,Framework,CSS,JS,Flex,Flexbox,12-Column,Browser,Support"/>
<?PHP
include $_SERVER['DOCUMENT_ROOT'].'/_incl/responsive-meta-tags.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/meta-tags.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/css.htm';
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/js.htm';
?>

</HEAD>



<BODY>
<?PHP $_GET['title'] = 'Support'; include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/header.php'; ?>

<MAIN>
	<ARTICLE ID="GET" CLASS="row flush centered flex-row flex-wrap">
		<SECTION CLASS="hero small-12 medium-8 large-5 text-center">
			<SPAN CLASS="big">Full support on all latest current browsers</SPAN>
			<!--A HREF="#BROWSERS" CLASS="blue button">Full browser support list</A-->
		</SECTION>
	</ARTICLE>
	
	<ARTICLE ID="ABOUT" CLASS="row flex-row flex-horiz-center flex-wrap">
		<SECTION ID="WARN" CLASS="medium-12 all-6">
			<H2>Detect &amp; warn of an unsupported browser</H2>
			<P>You can alert the user as to whether or not their browser is supported using the <CODE CLASS="css class">show-when-husk-supported</CODE> <SMALL>(<EM>only</EM> lets the element display when Husk is supported)</SMALL> and <CODE CLASS="css class">hide-when-husk-supported</CODE> <SMALL>(<EM>only</EM> lets the element display when Husk is <EM>not</EM> supported)</SMALL> classes.</P>
			<PRE CLASS="code-HTML">
<B CLASS="tag">&lt;ASIDE <B CLASS="attr">CLASS=<B CLASS="val">"<B CLASS="husk-code">show-when-husk-supported</B>"</B></B>&gt;</B>
	<B CLASS="tag">&lt;STRONG&gt;</B>Congratulations!<B CLASS="tag">&lt;/STRONG&gt;</B> Your browser is supported!
<B CLASS="tag">&lt;/ASIDE&gt;</B>
<B CLASS="tag">&lt;ASIDE <B CLASS="attr">CLASS=<B CLASS="val">"<B CLASS="husk-code">hide-when-husk-supported</B>"</B></B>&gt;</B>
	<B CLASS="tag">&lt;STRONG&gt;</B>Warning!<B CLASS="tag">&lt;/STRONG&gt;</B> Your browser is not supported. Please upgrade to <B CLASS="tag">&lt;A <B CLASS="attr">HREF=<B CLASS="val">"/husk/support</B>"</B>&gt;</B>a supported browser<B CLASS="tag">&lt;/A&gt;</B>.
<B CLASS="tag">&lt;/ASIDE&gt;</B>
			</PRE>
			
			<H3>Output:</H3>
			<ASIDE CLASS="show-when-husk-supported">
				<STRONG>Congratulations!</STRONG> Your browser is supported!
			</ASIDE>
			<ASIDE CLASS="hide-when-husk-supported">
				<STRONG>Warning!</STRONG> Your browser is not supported. Please upgrade to <A HREF="/husk/support">a supported browser</A>.
			</ASIDE>
		</SECTION>
		
		
		<SECTION ID="BROWSERS" CLASS="medium-12 all-6 highlight-when-target position-relative">
			<A HREF="#" CLASS="close-button show-when-parent-target">x</A>
			<H2>Supported browsers</H2>
			<ASIDE>The following represent browsers we have tested Husk on. Older browsers might also offer partial or full support.</ASIDE>
			<?PHP
			class SupportRow
			{
				function __construct($name, $chrome, $firefox, $ie, $opera, $safari)
				{
					global $LATEST_VERS;
					$LATEST_VERS = array(
						'cr' => 34,
						'ff' => 28,
						'ie' => 11,
						'op' => 20,
						'sf' => 7
					);
					
					$this->name = $name;
					$this->cr = $chrome;
					$this->ff = $firefox;
					$this->ie = $ie;
					$this->op = $opera;
					$this->sf = $safari;
					// var_dump($this);
				}
				
				function getThisBrowser($browser)
				{
					switch (strtolower($browser))
					{
						case 'cr':
							return $this->cr;
						case 'ff':
							return $this->ff;
						case 'ie':
							return $this->ie;
						case 'op':
							return $this->op;
						case 'sf':
							return $this->sf;
					}
				}
				
				function css($browser)
				{
					global $LATEST_VERS;
					$thisBrowser = $this->getThisBrowser($browser);
					return
						is_numeric($thisBrowser)
							?
								($thisBrowser <= $LATEST_VERS[$browser]
									? 'good'
									:
										($thisBrowser > $LATEST_VERS[$browser]
											? 'warn'
											: 'bad'
										)
								)
							: $thisBrowser;
				}
				
				function text($browser)
				{
					global $LATEST_VERS;
					$thisBrowser = $this->getThisBrowser($browser);
					return
						is_numeric($thisBrowser)
							?
								($thisBrowser <= $LATEST_VERS[$browser]
									? "$thisBrowser+"
									:
										($thisBrowser > $LATEST_VERS[$browser]
											? "<SPAN CLASS='help display-block bh-tooltip-flip' DATA-TOOLTIP-TOP='This is a future version of the browser'>$thisBrowser+</SPAN>"
											: 'Unsupported'
										)
								)
							: $thisBrowser;
				}

			}
			class SupportTable
			{
				function __construct($rows = array())
				{
					$this->rows = $rows;
				}
				
				function build()
				{
				?>

			<TABLE>
				<COLS>
					<COL WIDTH="30%">
					<COL WIDTH="14%" SPAN="5">
				</COLS>
				<THEAD>
					<TR>
						<TH CLASS="hidden">Feature</TH>
						<TH CLASS="color-chrome">Chrome</TH>
						<TH CLASS="color-firefox">Firefox</TH>
						<TH CLASS="color-ie">Internet Explorer</TH>
						<TH CLASS="color-opera">Opera</TH>
						<TH CLASS="color-safari">Safari</TH>
					</TR>
				</THEAD>

				<TBODY><?PHP
					foreach($this->rows as $row)
					{
						?>

					<TR>
						<TH><?PHP echo $row->name; ?></TH>
						<TD CLASS="<?PHP echo $row->css('cr'); ?>"><?PHP echo $row->text('cr'); ?></TD>
						<TD CLASS="<?PHP echo $row->css('ff'); ?>"><?PHP echo $row->text('ff'); ?></TD>
						<TD CLASS="<?PHP echo $row->css('ie'); ?>"><?PHP echo $row->text('ie'); ?></TD>
						<TD CLASS="<?PHP echo $row->css('op'); ?>"><?PHP echo $row->text('op'); ?></TD>
						<TD CLASS="<?PHP echo $row->css('sf'); ?>"><?PHP echo $row->text('sf'); ?></TD>
					</TR>
						<?PHP
					}
					?>

				</TBODY>
			</TABLE>
					<?PHP
				}
			}
			
			
			
			
			// !!!!!!!!!!!!!!!!! HERE IS WHERE THE CONTENT IS BUILT !!!!!!!!!!!!!!!!!
			
			$supportTable = new SupportTable(
				array(//                                         CR  FF  IE  OPRA  S
					new SupportRow('12-Column Grid',             26, 28, 11, 12.1, 7),
					new SupportRow('HTML5 Details/Summary Shiv', 14, 20,  9,   19, 6),
					new SupportRow('Sticky Elements',            14,  4,  8,   10, 5.1)
				)
			);
			$supportTable->build();
			?>
		</SECTION>
	</ARTICLE>
</MAIN>

<?PHP
include $_SERVER['DOCUMENT_ROOT'].'/prog/husk/_incl/footer.php';
?>
</BODY>
</HTML>