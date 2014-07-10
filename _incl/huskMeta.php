<?PHP
/*ini_set("log_errors", 1);
ini_set("error_log", "/tmp/php-error.log");
error_log( "Hello, errors!" );*/

class ReleaseNames
{
	const STABLE  = 'stable';
	const CURRENT = 'now';   // not to be used. If found on a page, replace with STABLE
	const BETA    = 'beta';
	const ALPHA   = 'alpha';
	const LAMBDA  = 'lambda';
	
	/**
	 * Return the name of the current release
	 */
	static function current()
	{
		$now = new DateTime();
		//echo '<!-- $now is ' . $now->format('Y-m-d') . ' -->';
		
		//echo '<!-- current is ' . $now->diff(getHuskReleaseDate(ReleaseNames::STABLE), false)->invert . ' -->';
		if ($now->diff(getHuskReleaseDate(ReleaseNames::STABLE))->invert)
			return ReleaseNames::STABLE;
			
		//echo '<!-- beta is ' . $now->diff(getHuskReleaseDate(ReleaseNames::BETA), false)->invert . ' -->';
		if ($now->diff(getHuskReleaseDate(ReleaseNames::BETA))->invert)
			return ReleaseNames::BETA;
			
		//echo '<!-- alpha is ' . $now->diff(getHuskReleaseDate(ReleaseNames::ALPHA), false)->invert . ' -->';
		if ($now->diff(getHuskReleaseDate(ReleaseNames::ALPHA))->invert)
			return ReleaseNames::ALPHA;
			
		//echo '<!-- lambda is ' . $now->diff(getHuskReleaseDate(ReleaseNames::LAMBDA), false)->invert . ' -->';
		return ReleaseNames::LAMBDA;
	}
	
	/**
	 * Alias of current()
	 */
	static function getReleaseName()
	{
		return "&nbsp;&emsp;<SPAN CLASS='font-3qx'>ReleaseNames::current()</SPAN>&emsp;&nbsp;";
	}
	
	static function next()
	{
		$now = new DateTime();
		
		if ($now->diff(getHuskReleaseDate(ReleaseNames::LAMBDA))->invert)
			if ($now->diff(getHuskReleaseDate(ReleaseNames::ALPHA))->invert)
				if ($now->diff(getHuskReleaseDate(ReleaseNames::BETA))->invert)
					return ReleaseNames::STABLE;
				else
					return ReleaseNames::BETA;
			else
				return ReleaseNames::ALPHA;
		return ReleaseNames::LAMBDA;
	}
}

class VersionFormat
{
	const NAKED   = -1;
	const ASCII   = 0;
	const Unicode = 1;
	const HTML    = 2;
}

function getHuskVersion($release = null, $format = VersionFormat::ASCII)
{
	if ($release === null)
		$release = ReleaseNames::STABLE;
	$vNum = '1.0.0';
	switch ($release)
	{
		case ReleaseNames::STABLE:
		default:
			return $vNum;
		case ReleaseNames::ALPHA:
			$vNum = '1.1.0';
			switch ($format)
			{
				case VersionFormat::NAKED:
					return $vNum;
				case VersionFormat::ASCII:
					return $vNum . 'a';
				case VersionFormat::Unicode:
					return $vNum . 'α';
				case VersionFormat::HTML:
					return $vNum . '&alpha;';
			}
		case ReleaseNames::BETA:
			$vNum = '1.1.0';
			switch ($format)
			{
				case VersionFormat::NAKED:
					return $vNum;
				case VersionFormat::ASCII:
					return $vNum . 'b';
				case VersionFormat::Unicode:
					return $vNum . 'β';
				case VersionFormat::HTML:
					return $vNum . '&beta;';
			}
		case ReleaseNames::LAMBDA:
			$vNum = '1.1.0';
			switch ($format)
			{
				case VersionFormat::NAKED:
					return $vNum;
				case VersionFormat::ASCII:
					return $vNum . 'l';
				case VersionFormat::Unicode:
					return $vNum . 'λ';
				case VersionFormat::HTML:
					return $vNum . '&lambda;';
			}
	}
}

function getHuskReleaseDate($release = null)
{
	if ($release === null)
		$release = ReleaseNames::next();
	
	switch ($release)
	{
		case ReleaseNames::STABLE:
		default:
			return new DateTime('2014-07-01');
		case ReleaseNames::LAMBDA:
			return new DateTime('2014-07-15');
		case ReleaseNames::ALPHA:
			return new DateTime('2014-08-01');
		case ReleaseNames::BETA:
			return new DateTime('2014-08-15');
	}
}

function getHuskTaglines()
{
	/* Removed:
	Nunquam Melior
	Neniam pli bonan
	*/
	$taglines = <<<taglines
We provide the layout, you provide the styles
12-column grid and more, engineered as the W3C intended
Your layout assistant
Never override a framework style again
There when you need it, not when you don't.
No wrapping, no compromising.
We provide the Husk, you add the filling
taglines;
	return explode("\n", $taglines);
}

function getHuskTagline($index = -1)
{
	$quotes = getHuskTaglines();
	return $quotes[$index < 0 ? array_rand($quotes) : $index];
}

function getHTMLTagClasses()
{
	return "animate-all husktype";
}

class HTMLHeader
{
	static function buildDoctype()
	{
		?><!DOCTYPE HTML>
<?PHP
	}
	
	static function buildMetaData($title = '', $description = '', $keywords = '')
	{
		?>

	<TITLE><?PHP
	$parsedTitle = 'Husk Framework';
	if (is_array($title))
		foreach($title as $subtitle)
			$parsedTitle = "$subtitle &emdash; $parsedTitle";
	else
		$parsedTitle = "$title &emdash; $parsedTitle";
	
	echo $parsedTitle;
	?></TITLE>
	<META NAME="description" CONTENT="<?PHP echo $description ? "$description
	
	" : ''; ?>Husk - the barebones layout framework." PROPERTY="og:description"/>
	<META NAME="keywords"    CONTENT="Blue Husky Studios,Blue Husky,Programming,Web,Framework,CSS,JS,Flex,Flexbox,12-Column<?PHP echo $keywords ? ",$keywords" : '' ?>"/>



	<!-- BEGIN General sharing (http://ogp.me/) -->
	<META PROPERTY="og:type"                CONTENT="website" /> <!-- maybe profile is more accurate? -->
	<META PROPERTY="og:title"               CONTENT="<?PHP echo $parsedTitle; ?>" />
	<META PROPERTY="og:url"                 CONTENT="<?PHP 
		require_once $_SERVER['DOCUMENT_ROOT'].'/_incl/getURL.php';
		echo getCurrentURL();
	?>" />
	<META PROPERTY="og:image"               CONTENT="/_img/thumbnail.php" />
	<META PROPERTY="og:image"               CONTENT="/_img/thumbnail.php?w=710" />
	<META PROPERTY="og:image"               CONTENT="/_img/thumbnail.php?w=426" />
	<META PROPERTY="og:image"               CONTENT="/_img/thumbnail.php?w=346" />
	<META PROPERTY="og:image"               CONTENT="/_img/Kyli-thumbnail.png" />
	<META PROPERTY="article:published_time" CONTENT="2013-02-20" />
	<META PROPERTY="article:modified_time"  CONTENT="2014-03-24" />
	<META PROPERTY="article:tag"            CONTENT="Kyli Rouge" />
	<META PROPERTY="article:tag"            CONTENT="Kyli" />
	<META PROPERTY="article:tag"            CONTENT="Rouge" />
	<META PROPERTY="article:tag"            CONTENT="programmer" />
	<META PROPERTY="article:tag"            CONTENT="artist" />
	<META PROPERTY="article:tag"            CONTENT="developer" />
	<META PROPERTY="article:tag"            CONTENT="graphic artist" />
	<META PROPERTY="article:tag"            CONTENT="programming" />
	<META PROPERTY="article:tag"            CONTENT="enthusiast" />
	<META PROPERTY="article:tag"            CONTENT="professional" />
	<META PROPERTY="article:tag"            CONTENT="resume" />
	<META PROPERTY="article:tag"            CONTENT="cv" />
	<META PROPERTY="article:section"        CONTENT="Resume" />
	<META PROPERTY="article:author"         CONTENT="Kyli Rouge" />
	<!-- END General sharing -->
	
	<!-- BEGIN Twitter sharing -->
	<META NAME="twitter:card"        CONTENT="summary_large_image" />
	<META NAME="twitter:creator"     CONTENT="@Supuhstar">
	<META NAME="twitter:site"        CONTENT="@Supuhstar">
	<META NAME="twitter:title"       CONTENT="Kyli Rouge's Online R&eacute;sum&eacute;" />
	<META NAME="twitter:description" CONTENT="Kyli Rouge is an enthusiastic programmer and artist who does everything she does to a degree both you and she can be proud of." />
	<META NAME="twitter:image:src"   CONTENT="http://Kyli.BHStudios.org/_img/Kyli-thumbnail.png" />
	<!-- END Twitter sharing -->
<!-- END Metadata -->

<?PHP
	}
}
?>