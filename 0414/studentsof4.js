$(init);

function init() {
  $("#teachermenu").selectmenu();
  // $("#teachermenu").on("selectmenuchange", showStudents);
  $.get("teachers.php", null, loadMenu);
}

/**
 * Load the select menu options as returned by AJAX.
 * @param data the options to load
 * @param status the request status
 */
function loadMenu(data, status) {
  $("#teachermenu").html(data);

}

/**
 * Generate the student-subject table via AJAX
 * based on the teacher selection.
 * @param event the event that occurred
 * @param ui the jQuery object
 */
function showStudents(event, ui)
{
    teacherId = $("#teachermenu").val();
    $.post("students.php", {"id": teacherId}, loadTable);
}

/**
 * Load the student-subject table as returned by AJAX.
 * @param data the table to load
 * @param status the request status
 */
function loadTable(data, status)
{
    $("#output").html(data);
}
