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
	$topClones = [];
	$topElements = [];
	$window = $(window);
	$('.sticky-top').each(
		function (index, element)
		{
			// element.dataset.name = 'sticky-top_' + tops.length;
			// if(!element.dataset.height) element.dataset.height = $(element).height();
			// if(!element.dataset.width) element.dataset.width = $(element).width();
			
			$topElements[index] = $(element);
			$topElements[index].data("top", $topElements[index].offset().top);
			
			// keep a clone in the original position so the flow isn't changed, and to monitor size and offset
			$topClones[index] = $topElements[index].clone().addClass("sticky-clone").removeClass("stuck");
			$topElements[index].after($topClones[index]);
			
			var handler = function(event)
			{
				wTop = $window.scrollTop();
				if (wTop > $topElements[index].data("top"))
				{
					$topElements[index].addClass("stuck");
					$topElements[index].data("top", $topClones[index].offset().top); // make sure the top didn't change
					if (wTop <= $topElements[index].data("top")) // if we were wrong
						return handler(event); // go home and rethink our life
					$topElements[index].width($topClones[index].width()); // make sure the width is proper
					$topElements[index].css("left", $topClones[index].offset().left); // make sure the left offset is proper
				}
				else
				{
					$topElements[index].removeClass("stuck");
					$topElements[index].width("");
					$topElements[index].css("left", "");
					$topElements[index].data("top", $topElements[index].offset().top);
				}
			};
			$window.scroll(handler);
			$window.resize(handler);
			handler(); // now check in case the page is already scrolled past
		}
	);
	
	$bottomClones = [];
	$bottomElements = [];
	$('.sticky-bottom').each(
		function (index, element)
		{
			// element.dataset.name = 'sticky-top_' + tops.length;
			// if(!element.dataset.height) element.dataset.height = $(element).height();
			// if(!element.dataset.width) element.dataset.width = $(element).width();
			
			$bottomElements[index] = $(element);
			$bottomElements[index].data("top", $bottomElements[index].offset().top);
			
			// keep a clone in the original position so the flow isn't changed, and to monitor size and offset
			$bottomClones[index] = $bottomElements[index].clone().addClass("sticky-clone").removeClass("stuck");
			$bottomElements[index].after($bottomClones[index]);
			
			var handler = function(event)
			{
				wTop = $window.scrollTop();
				wBottom = $window.height() + wTop;
				if (wBottom < $bottomElements[index].data("bottom"))
				{
					$bottomElements[index].addClass("stuck");
					$bottomElements[index].data("bottom", $bottomClones[index].offset().top + $bottomClones[index].height()); // now that the bottom element is stuck, its clone is visible, so we measure the clone.
					if (wBottom >= $bottomElements[index].data("bottom")) // if we were wrong
						return handler(event); // go home and rethink our life
					$bottomElements[index].width($bottomClones[index].width()); // make sure the width is proper
					$bottomElements[index].css("left", $bottomClones[index].offset().left); // make sure the left offset is proper
				}
				else
				{
					$bottomElements[index].removeClass("stuck");
					$bottomElements[index].width("");
					$bottomElements[index].css("left", "");
					$bottomElements[index].data("bottom", $bottomElements[index].offset().top + $bottomElements[index].height()); // now that the bottom element is not stuck, its clone is invisible, so we measure the element.
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