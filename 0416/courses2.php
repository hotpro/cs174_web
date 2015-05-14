<?php
$xml = simplexml_load_file("courses.xml");
foreach ($xml->course as $course) {
    echo "<div><h2>$course->title</h2>";
    echo "<p>$course->description</p>";

	if (isset($course->topics)) {
	    echo "<ul>";

	    $topics = $course->topics;
	    foreach ($topics->topic as $topic) {
			echo "<li>$topic</li>";
        }

        echo "</ul>";
    }

    echo "<dl><dt>Prerequisites</dt><dd>$course->prequisites</dd></dl>";
    echo "</div><hr />";
}
?>
