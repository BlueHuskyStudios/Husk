//var oldload = window.onload; // save the old onload scripts so we don't override them
//window.onload =

if (window.addEventListener)
	window.addEventListener ("load", huskLoadHandler, false);
else
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
	$('.sticky-top').each(
		function (index, element)
		{
			// element.dataset.name = 'sticky-top_' + tops.length;
			element.dataset.top = $(element).position().top;
			// if(!element.dataset.height) element.dataset.height = $(element).height();
			// if(!element.dataset.width) element.dataset.width = $(element).width();
			
			$(element).after($(element).clone().addClass("sticky-clone").removeClass("stuck"));
			
			var handler = function(event)
			{
				if ($(window).scrollTop() > element.dataset.top)
					$(element).addClass("stuck");
				else
					$(element).removeClass("stuck");
			};
			document.addEventListener ("scroll", handler, false);
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
		try{$(elements[e]).remove();}catch(e){console.log(e)}
	}
	
	$('.show-when-jquery').removeClass('show-when-jquery');
}