<h1>
    <?=esc($title);?>
</h1>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/admin.css" />
<nav>
    <ul>
        <li><a href="/stats">Stats</a></li>
        <li><a href="/teams_list">Teams</a></li>
        <li><a href="/scores">Scores</a></li>
        <li><a href="/profile">Previous</a></li>
    </ul>
</nav>
<section>
    <form action="<?='/' . $route_table ;?>" method="post">
        <table class="table">
            <tr>
                <th>Column Name</th>
                <th>Value</th>
            </tr>
            <?php
            try{
                foreach($fields as $key):?>
                    <tr>
                        <td>
                            <?=esc($key);?>
                        </td>
                        <td>
                            <input type="text" name="<?=esc($key);?>" width="30" />
                        </td>
                    </tr>
                <?php endforeach;?>
                <tr>
                    <td><input type="submit" value="Add new <?=esc($title);?>"  /></td>
                </tr>
           <?php }
            catch(Exception $ex){
                echo "<p> No record found</p>";
            }
            ?>
        </table>
    </form>
</section>

