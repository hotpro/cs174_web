$(init);

function init() {
  $("#teachermenu").selectmenu().load("teachers.php");
  // $("#teachermenu").on("selectmenuchange", showStudents);
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
    $("#output").load("students.php", {"id": teacherId});
}
