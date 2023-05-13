<?php
use \CodeIgniter\View\Table;
$table = new Table();
helper('html');
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/fillers.css" />
<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/stats">Stats</a></li>
        <li><a href="/teams_list">Teams</a></li>
        <li><a href="/scores">Scores</a></li>
        <li><a href="/login">Admin</a></li>
    </ul>
</nav>
<?= view_cell('admin_cell::getMenuBar'); ?>
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
<footer>
    <p>&copy; 2023 Sanders Baseball League</p>
</footer>
</body>
</html>