$(init);

function init() 
{
	$("li").hover(highlight, plain);
}

function highlight() 
{
	$(this).css(
		{	"background"	: 	"red",
			"color" 		: 	"yellow"}
		);
}

function plain() 
{
	$(this).css(
		{	"background"	: 	"white",
			"color" 		: 	"black"}
		);
}