<?php
function openElement($p, $element, $attributes) {
  switch ($element) {
    case "COURSE": {
      echo "<div>";
      break;
    }

    case "TITLE": {
      echo "<h2>";
      break;
    }

    case "DESCRIPTION ": {
      echo "<p>";
      break;
    }

    case "PREQUISITES": {
      echo "<dl><dt>Prerequisites</dt><dd>";
      break;
    }

    case "TOPICS": {
      echo "<ul>";
      break;
    }

    case "TOPIC": {
      echo "<li>";
      break;
    }

  }
}

function closeElement($p, $element)
{
    switch ($element) {
            case "COURSE": {
            echo "</div><hr />";
            break;
        }

        case "TITLE": {
            echo "</h2>";
            break;
        }

        case "DESCRIPTION": {
            echo "</p>";
            break;
        }

        case "PREQUISITES": {
            echo "</dd><dl>";
            break;
        }

        case "TOPICS": {
            echo "</ul>";
            break;
        }

        case "TOPIC": {
            echo "</li>";
            break;
        }
    }
}

function characterData($p, $cdata) {
  echo $cdata;
}

$xml_parser = xml_parser_create();
xml_set_element_handler($xml_parser, "openElement", "closeElement");
xml_set_character_data_handler($xml_parser, "characterData");

$file = "courses.xml";
$fp = @fopen($file, "r")
      or die("<p>could not open file '$file'" . "</p>");

while ($data = fread($fp, 4096)) {
  xml_parse($xml_parser, $data, feof($fp));
}

xml_parser_free($xml_parser);
?>
