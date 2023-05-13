<?php
use \CodeIgniter\View\Table;
$table = new Table();
helper('html');
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/fillers.css" />
<h1>
    <?=esc($title);?>
</h1>
<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/stats">Stats</a></li>
        <li><a href="/teams_list">Teams</a></li>
        <li><a href="/scores">Scores</a></li>
        <li><a href="/login">Admin</a></li>
    </ul>
</nav>
<nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <?php
            $categories = array(
                'bat_avg',
                'runs',
                'hits',
                'doubles',
                'triples',
                'home_runs',
                'rbis',
                'stolen_bases',
                'walks',
                'IP',
                'ERA',
                'strikeouts'
            );
            list($bat_avg, $runs, $hits) = $categories;
            for($i=0; $i < count($categories);$i++): ?>
                <li class="nav-item">
                    <?php
                    $categories[$i] =substr($categories[$i],0);
                    ?>
                    <a class="nav-link" href="/team_stats/<?=esc($categories[$i]);?>">
                        <?=esc($categories[$i]);?>
                    </a>
                </li>
            <?php endfor; ?>
        </ul>
    </div>

</nav>
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