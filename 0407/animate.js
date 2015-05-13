$(init);

var start = {"left": "10px",
             "top":  "120px"};

var end   = {"left": "500px",
             "top":  "300px"};



function init() {
	$("#home").click(home);
	$("#swing").click(swingGlide);
    $("#linear").click(linearGlide);
    $("#left").click(left);
    $("#right").click(right);
}

function home() {
	$("#content").css(start);
}

function swingGlide()
{
    home();
    $("#content").animate(end, 2000);
} 

function linearGlide()
{
    home();
    $("#content").animate(end, 2000, "linear");
} 

function left()
{
    $("#content").css({"left" : "-=10px"}, 100);
} 

function right()
{
    $("#content").animate({"left": "+=10px"}, 100);
}
