<nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <?php
            $categories = array(
                'Guardians',
                'Mudcats',
                'Bulldogs',
                'Tsunamis'
            );
            list($bat_avg, $runs, $hits) = $categories;
            for($i=0; $i < count($categories);$i++): ?>
                <li class="nav-item">
                    <?php
                    $categories[$i] =substr($categories[$i],0);
                    ?>
                    <a class="nav-link" href="/teams_list/<?=esc($categories[$i]);?>">
                        <?=esc($categories[$i]);?>
                    </a>
                </li>
            <?php endfor; ?>
        </ul>
    </div>

</nav>
