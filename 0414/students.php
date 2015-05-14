<?php
class StudentSubject
{
    private $first;
    private $last;
    private $subject;

    public function getFirst()   { return $this->first; }
    public function getLast()    { return $this->last; }
    public function getSubject() { return $this->subject; }
}

$teacherId = filter_input(INPUT_POST, 'id');
if ($teacherId == 0) return;

try {
    // Connect to the database.
    $con = new PDO("mysql:host=localhost;dbname=school",
                   "root", "sesame");
    $con->setAttribute(PDO::ATTR_ERRMODE,
                       PDO::ERRMODE_EXCEPTION);

    // Prepared statement query.
    $query = "SELECT student.first, student.last, subject ".
             "FROM student, class, student_class ".
             "WHERE teacher_id = :teacher_id ".
             "AND code = class_code ".
             "AND student.id = student_id ".
             "ORDER BY subject, student.last";
    $ps = $con->prepare($query);
    $ps->bindParam(':teacher_id', $teacherId);
    $ps->execute();

    createTable($ps);
}
catch(PDOException $ex) {
    print 'ERROR: '.$ex->getMessage();
}
catch(Exception $ex) {
    print 'ERROR: '.$ex->getMessage();
}

function createTable(PDOStatement $ps)
{
    print "<table>\n";
    createHeaderRow($ps);
    $ps->execute();
    $ps->setFetchMode(PDO::FETCH_CLASS, "StudentSubject");

    // Construct the data rows.
    while ($ss = $ps->fetch()) {
        print "<tr>\n";
        createDataRow($ss);
        print "</tr>\n";
    }

    print "</table>\n";
}

function createHeaderRow(PDOStatement $ps)
{
    $row = $ps->fetch(PDO::FETCH_ASSOC);
    print "<tr>\n";
    foreach ($row as $field => $value) {
        print "<th>$field</th>\n";
    }
    print "</tr>\n";
}

function createDataRow(StudentSubject $ss)
{
    print "<tr>\n";
    print "<td>" . $ss->getFirst()   . "</td>\n";
    print "<td>" . $ss->getLast()    . "</td>\n";
    print "<td>" . $ss->getSubject() . "</td>\n";
    print "</tr>\n";
}
?>
