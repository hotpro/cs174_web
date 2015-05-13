$(init);

function init() {
	
	$("#header").load("parts/header.html");

	var files = new Array("CS149.html", "CS153.html", "CS174.html", "CS235.html");

	var nameItems = "<ul>\n" + courseName(files[0]);
	var course = $(".course");
	course.load("courses/" + files[0]);

	for (var i = 1; i < files.length; i++) {
		course = course.clone().insertAfter(course);
		course.load("courses/" + files[i]);
		nameItems += courseName(files[i]);
	}

	nameItems += "</ul>\n";
	$("#names").html(nameItems);


	$("#footer").load("parts/footer.html");
}

function courseName(name) {
	return "    <li><a href=''>" + name.split(".")[0] + "</a></li>";
}