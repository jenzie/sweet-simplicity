var ixf = { 'clock' : null, 'count' : 1 }

ixf.imgs = [
'Photography/Final-Glass',
'Photography/Final-Light',
'Photography/Final-Sunset',
'Photography/Final-Trapped',
'Photography/Final-Water',
'Photography/Final-Wine',
'Photography/Motion-Hurled',
'Photography/Motion-Hypnotic',
'Photography/Motion-Waterv2',
'Photography/Portrait-Album',
'Photography/Portrait-black+white',
'Photography/Portrait-Colored',
'Design Work/Le cafe d\'amour',
'Design Work/La lecca-lecca',
'Design Work/MediaA',
'Design Work/MediaB',
'Design Work/Redbull-FINAL',
'Image Work/Name',
'Image Work/Deity',
'Image Work/City',
'Image Work/Morass',
'Image Work/Phantasma',
];


ixf.imgsLen = ixf.imgs.length;
ixf.cache = [];
for(var i=0; i<ixf.imgsLen; i++)
	{
	ixf.cache[i] = new Image;
	ixf.cache[i].src = ixf.imgs[i];
	}
var index = 0;

function startTimer() 	
	{
	while(window.ref=500){
	myArray = new Array("Final-Glass.png", "Final-Light.png", "Final-Sunset.png", "Final-Trapped.png", "Final-Water.png", "Final-Wine.png", "Motion-Hurled.png", "Motion-Hypnotic.png", "Motion-Waterv2.png", "Portrait-Album.png", "Portrait-black+white.png", "Portrait-Colored.png", "Motion-Hurled.png", "Motion-Hypnotic.png", "Motion-Waterv2.png", "Portrait-Album.png", "Portrait-black+white.png", "Portrait-Colored.png", "Le cafe d'amour.png", "La lecca-lecca.png", "MediaA.png", "MediaB.png", "Redbull-FINAL.png", "Deity.png", "Name'.png", "City.png", "Morass.png", "Phantasma.png");
    	if (window.ind > 5)
		{
		window.ind=0;
	        }
        document.getElementById("test").src = "Photography/" + myArray[window.ind];
	window.ind++;
	crossfade();
	}
}


function start() 
{
	window.ind=0;
        window.ref = setInterval("startTimer()", 500);
	startTimer();
}







function crossfade()
{
	if(ixf.clock == null)
{
ixf.obj = arguments[0];
ixf.src = arguments[1];
if(typeof ixf.obj.style.opacity != 'undefined')
	{
		ixf.type = 'w3c';
	}
	else if(typeof ixf.obj.style.MozOpacity != 'undefined')
	{
		ixf.type = 'moz';
	}
	else if(typeof ixf.obj.style.KhtmlOpacity != 'undefined')
	{
		ixf.type = 'khtml';
	}
	else if(typeof ixf.obj.filters == 'object')
	{
		ixf.type = (ixf.obj.filters.length > 0 && typeof ixf.obj.filters.alpha == 'object' && typeof ixf.obj.filters.alpha.opacity == 'number') ? 'ie' : 'none';
	}
else
{
	ixf.type = 'none';
}

if(typeof arguments[3] != 'undefined' && arguments[3] != '')
{
	ixf.obj.alt = arguments[3];
}
if(ixf.type != 'none')
{
	ixf.newimg = document.getElementsByTagName('body')[0].appendChild((typeof document.createElementNS != 'undefined') ? document.createElementNS('http://www.w3.org/1999/xhtml', 'img') : document.createElement('img'));
	ixf.newimg.className = 'idupe';
	ixf.newimg.src = ixf.src
	ixf.newimg.style.left = ixf.getRealPosition(ixf.obj, 'x') + 'px';
	ixf.newimg.style.top = ixf.getRealPosition(ixf.obj, 'y') + 'px';
	ixf.length = parseInt(arguments[2], 10) * 1000;
	ixf.resolution = parseInt(arguments[2], 10) * 20;
	ixf.clock = setInterval('ixf.crossfade()', ixf.length/ixf.resolution);
}
else
	{
	ixf.obj.src = ixf.src;
	}

}
};

ixf.crossfade = function()
	{
	ixf.count -= (1 / ixf.resolution);
	if(ixf.count < (1 / ixf.resolution))
		{
		clearInterval(ixf.clock);
		ixf.clock = null;
		ixf.count = 1;
		ixf.obj.src = ixf.src;
		}
	switch(ixf.type)
		{
		case 'ie' :
		ixf.obj.filters.alpha.opacity = ixf.count * 100;
		ixf.newimg.filters.alpha.opacity = (1 - ixf.count) * 100;
		break;
		case 'khtml' :
		ixf.obj.style.KhtmlOpacity = ixf.count;
		ixf.newimg.style.KhtmlOpacity = (1 - ixf.count);
		break;
		case 'moz' : 
		ixf.obj.style.MozOpacity = (ixf.count == 1 ? 0.9999999 : ixf.count);
		ixf.newimg.style.MozOpacity = (1 - ixf.count);
		break;
		default : 
		ixf.obj.style.opacity = (ixf.count == 1 ? 0.9999999 : ixf.count);
		ixf.newimg.style.opacity = (1 - ixf.count);
		}
	ixf.newimg.style.visibility = 'visible';
	ixf.newimg.style.left = ixf.getRealPosition(ixf.obj, 'x') + 'px';
	ixf.newimg.style.top = ixf.getRealPosition(ixf.obj, 'y') + 'px';
	if(ixf.count == 1)
		{
		ixf.newimg.parentNode.removeChild(ixf.newimg);
		}
	};
	ixf.getRealPosition = function()
	{
	this.pos = (arguments[1] == 'x') ? arguments[0].offsetLeft : arguments[0].offsetTop;
	this.tmp = arguments[0].offsetParent;
	while(this.tmp != null)
		{
		this.pos += (arguments[1] == 'x') ? this.tmp.offsetLeft : this.tmp.offsetTop;
		this.tmp = this.tmp.offsetParent;
		}
	return this.pos;
	};