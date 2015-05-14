<?php
class Teacher {
  private $id;
  private $first;
  private $last;

  public function getId() {return $this->id;}
  public function getFirst() { return $this->first; }
  public function getLast()  { return $this->last; }
}

try {
    // Connect to the database.
    $con = new PDO("mysql:host=localhost;dbname=school",
                   "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE,
                       PDO::ERRMODE_EXCEPTION);

    // Prepared statement query.
    $query = "SELECT id, first, last FROM teacher ORDER BY last";
    $ps = $con->prepare($query);
    $ps->execute();
    $ps->setFetchMode(PDO::FETCH_CLASS, "Teacher");

    // Construct menu options. Start with a blank option.
    $full = "";
    print "<option value=0>$full</option>";
    while ($teacher = $ps->fetch()) {
        $id    = $teacher->getId();
        $first = $teacher->getFirst();
        $last  = $teacher->getLast();
        $full  = $first . " " . $last;

        print "<option value='$id'>$full</option>";
    }
}
catch(PDOException $ex) {
    print 'ERROR: '.$ex->getMessage();
}
catch(Exception $ex) {
    print 'ERROR: '.$ex->getMessage();
}
?>
