<?php
namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
?>
<!DOCTYPE html>
<html>
<body>
<?php
use Html;
$table = new Html\Table();
$table->title = "My table";
$table->numRows = 5;
$table->message();
?>
</body>
</html>
