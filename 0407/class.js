$(init);

function init() {
	$("li").click(togglehighlight)
}

function togglehighlight() {
	$(this).toggleClass("highlighted");
}