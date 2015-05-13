$(init);

var showing = false;
var wrapped = false;

function init() {
    $("#content").hide();
    $("#show").click(showContent);
    $("#hide").click(hideContent);
    $("#toggle").click(toggleContent);
    $("#slideDown").click(slideDown);
    $("#slideUp").click(slideUp);
    $("#fadeIn").click(fadeIn);
    $("#fadeOut").click(fadeOut);
    $("#wrap").click(wrapImage);
    $("#unwrap").click(unwrapImage);
}

function showContent()
{
    $("#content").show();
    showing = true;
} 

function hideContent()
{
    $("#content").hide();
    showing = false;
} 

function toggleContent()
{
    $("#content").toggle();
    showing = !showing;
} 

function slideDown()
{
    $("#content").slideDown("medium");
    showing = true;
} 

function slideUp()
{
    $("#content").slideUp(500);
    showing = false;
} 

function fadeIn()
{
    $("#content").fadeIn(1000, meow);
    showing = true;
} 

function fadeOut()
{
    $("#content").fadeOut("fast");
    showing = false;
}

function meow()
{
    alert("MEOW!");
} 

function wrapImage()
{
    if (showing) {
        $("#image").wrap("<div class='wrapped'></div>");
        wrapped = true;
    }
}

function unwrapImage()
{
    if (showing && wrapped) {
        var image = $("#image").clone();
        $(".wrapped").remove();
        $("#content").append(image);
        wrapped = false;
    }
}