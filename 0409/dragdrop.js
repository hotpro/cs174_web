$(init);

function init() {
  cloneDragMe();
  $(".dragMe").draggable();
  $("#target").droppable();

  $("#target").bind("drop",    highlightTarget);
  $("#target").bind("dropout", resetTarget);
}

function highlightTarget(event, ui)
{
    $("#target").addClass("ui-state-highlight")
                .html("Dropped")
                .append(ui.draggable.text());
}

function resetTarget(event, ui)
{
    $("#target").removeClass("ui-state-highlight")
                .html("Drop on me");
}

function cloneDragMe()
{
    for (i = 1; i <= 4; i++){
        zValue = 101 + i;
        yPos = 80 + 20*i + "px";
        $("div:first").clone()
                      .insertAfter("div:last")
                      .css("top", yPos)
                      .css("zIndex", zValue)
                      .append(" #" + i);
    }
}
