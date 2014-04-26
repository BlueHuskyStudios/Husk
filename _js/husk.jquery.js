//var oldload = window.onload; // save the old onload scripts so we don't override them
//window.onload =

if (window.addEventListener) // standard
	window.addEventListener ("load", huskLoadHandler, false);
else if (window.attachEvent) // IE
	window.attachEvent('onload', huskLoadHandler);
else // dunno, but might as well have it
{
	var oldload = window.onload;
	window.onload = function()
	{
		if (oldload) oldload(); // respect the old onload scripts
		huskLoadHandler();
	}
}

function huskLoadHandler()
{
	//if (oldload) oldload(); // respect the old onload scripts
	try{fixJSDisplays();}catch(e){console.log(e)}
	try{fixySticky();}catch(e){console.log(e)}
}

function fixySticky()
{
	$clones = [];
	$elements = [];
	$('.sticky-top').each(
		function (index, element)
		{
			// element.dataset.name = 'sticky-top_' + tops.length;
			// if(!element.dataset.height) element.dataset.height = $(element).height();
			// if(!element.dataset.width) element.dataset.width = $(element).width();
			
			$elements[index] = $(element);
			$elements[index].data("top", $elements[index].offset().top);
			
			// keep a clone in the original position so the flow isn't changed, and to monitor size and offset
			$clones[index] = $elements[index].clone().addClass("sticky-clone").removeClass("stuck");
			$elements[index].after($clones[index]);
			
			$window = $(window);
			var handler = function(event)
			{
				if ($window.scrollTop() > $elements[index].data("top"))
				{
					$elements[index].addClass("stuck");
					$elements[index].data("top", $clones[index].offset().top); // make sure the top didn't change
					if ($window.scrollTop() <= $elements[index].data("top")) // if we were wrong
						return handler(event); // go home and rethink our life
					$elements[index].width($clones[index].width()); // make sure the width is proper
					$elements[index].css("left", $clones[index].offset().left); // make sure the left offset is proper
				}
				else
				{
					$elements[index].removeClass("stuck");
					$elements[index].width("");
					$elements[index].css("left", "");
					$elements[index].data("top", $elements[index].offset().top);
				}
			};
			$window.scroll(handler);
			$window.resize(handler);
			handler(); // now check in case the page is already scrolled past
		}
	);
}

function fixJSDisplays()
{
	var elements = document.getElementsByClassName('show-when-js');
	for(e = 0; e < elements.length; e++)
	{
		try{elements[e].className = elements[e].className.replace('show-when-js','');}catch(e){console.log(e)}
	}
	elements = document.getElementsByClassName('hide-when-js');
	for(e = 0; e < elements.length; e++)
	{
		try
		{
			$(elements[e]).remove(); // guaranteed to work
		}
		catch(ex)
		{
			console.log(ex);
			if(elements[e])
				elements[e].parentNode.removeChild(elements[e]); // should work, but not guaranteed
		}
	}
	
	$('.show-when-jquery').removeClass('show-when-jquery');
}