<?php
// Declare a namespace called Html
namespace Html;

// Define a Table class inside Html
class Table {
    public $title = "";
    public $numRows = 0;

    public function message() {
        echo "<p>HTML Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}

// Define another class Row inside Html
class Row {
    public function message() {
        echo "<p>This is a row in an HTML Table.</p>";
    }
}

// Now let's switch back to global code (no namespace)
// We use the 'use' keyword to import the namespace

// Switch out of namespace (restart PHP)
?>
<?php
// Use the Html namespace classes
use Html\Table as HtmlTable;
use Html\Row as HtmlRow;

// Create an object of Html\Table
$htmlTable = new HtmlTable();
$htmlTable->title = "Student Data";
$htmlTable->numRows = 10;

// Create an object of Html\Row
$htmlRow = new HtmlRow();
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Call methods
$htmlTable->message();
$htmlRow->message();
?>

</body>
</html>
