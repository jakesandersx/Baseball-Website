<?php
use \CodeIgniter\View\Table;
$table = new Table();
helper('html');
?>
<h1>
    <?=esc($title);?>
</h1>
<?php
try{
    $headings = array_keys($results[0]);
    $table->setHeading($headings);
    echo $table->generate($results);
}
catch(Exception $ex){
    echo "<p>No records found. Check tablename in URL</p>";
}
?>
<?= view_cell('admin_cell::getMenuBar');?>
<footer>
    <p>&copy; 2023 Sanders Baseball League</p>
</footer>
</body>
</html>