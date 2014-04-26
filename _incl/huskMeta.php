<?PHP
class ReleaseNames
{
	const CURRENT = 'current';
	const BETA    = 'beta';
	const ALPHA   = 'alpha';
	const LAMBDA  = 'lambda';
}

function getHuskVersion($release = 'current')
{
	switch ($release)
	{
		case ReleaseNames::CURRENT:
		default:
			return '0.0.0';
		case ReleaseNames::BETA:
			return '0.0.0&beta;';
		case ReleaseNames::ALPHA:
			return '0.0.0&alpha;';
		case ReleaseNames::LAMBDA:
			return '0.0.0&lambda;';
	}
}

function getHuskReleaseDate($release = 'current')
{
	switch ($release)
	{
		case ReleaseNames::CURRENT:
		default:
			return new DateTime('2014-07-01');
		case ReleaseNames::BETA:
			return new DateTime('2014-06-01');
		case ReleaseNames::ALPHA:
			return new DateTime('2014-05-01');
		case ReleaseNames::LAMBDA:
			return new DateTime('2014-04-01');
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
Never override a layout style again
There when you need it, not when you don't.
taglines;
	return explode("\n", $taglines);
}

function getHuskRandomTagline()
{
	$quotes = getHuskTaglines();
	return $quotes[array_rand($quotes)];
}

function getHTMLTagClasses()
{
	return "animate-all husktype";
}
?>