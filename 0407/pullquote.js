$(init);

function init() {
	$("span.pq").each(pullQuotes);
}

function pullQuotes() {
	var quote = $(this).clone();
	quote.removeClass("pq");
	quote.addClass("pullquote");
	$(this).before(quote);
}

function fadeIn() {
	console.log("fadeIn");
	$("h2").fadeToggle();
}