<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/fillers.css" />
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
                    <a class="nav-link" href="/league_leaders/<?=esc($categories[$i]);?>">
                        <?=esc($categories[$i]);?>
                    </a>
                </li>
            <?php endfor; ?>
        </ul>
    </div>

</nav>
