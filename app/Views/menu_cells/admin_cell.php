<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/admin.css" />
<nav>
    <div>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/stats">Stats</a></li>
            <li><a href="/teams_list">Teams</a></li>
            <li><a href="/scores">Scores</a></li>
        </ul>
    </div>
    <div class="container-fluid">
        <ul class="admin_nav">
            <h4>CREATE</h4>
            <?php
            $edit_categories = array(
                'team_pitching_stats',
                'team_hitting_stats',
                'hitting_stats',
                'pitching_stats',
                'games',
                'users',
                'teams',
                'players',
            );
            list($bat_avg, $runs, $hits) = $edit_categories;
            for($i=0; $i < count($edit_categories); $i++): ?>
                <li class="nav-item">
                    <?php
                    $categories[$i] =substr($edit_categories[$i],0);
                    ?>
                    <a class="nav-link_edit" href="/<?=esc($categories[$i]);?>/new">
                        <?=esc($categories[$i]);?>
                    </a>
                </li>
            <?php endfor; ?>
        </ul>
    </div>
    <div class="container-fluid">
        <ul class="admin_nav">
            <h4>EDIT - Replace 'number' with the table ID of the category you want to edit</h4>
            <?php
            $edit_categories = array(
                'team_pitching_stats',
                'team_hitting_stats',
                'hitting_stats',
                'pitching_stats',
                'games',
                'users',
                'teams',
                'players',
            );
            list($bat_avg, $runs, $hits) = $edit_categories;
            for($i=0; $i < count($edit_categories); $i++): ?>
                <li class="nav-item">
                    <?php
                    $categories[$i] =substr($edit_categories[$i],0);
                    ?>
                    <a class="nav-link_edit" href="/<?=esc($categories[$i]);?>/number/edit">
                        <?=esc($categories[$i]);?>
                    </a>
                </li>
            <?php endfor; ?>
        </ul>
    </div>

</nav>
