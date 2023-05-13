<?php
$lower_title= strtolower($title);
$route_table = str_replace(' ', '_', $lower_title);
?>
<h1>
    <?="Edit " . esc($title);?>
</h1>
<?= view_cell('admin_cell::getMenuBar');?>
<section>
    <form action="<?='/' . $route_table . '/' . $pk ;?>" method="post">
        <table class="table">
            <tr>
                <th>Column Name</th>
                <th>Value</th>
            </tr>
            <?php
            try{

                foreach($results as $key=>$value):?>
                    <tr>
                        <td>
                            <?=esc($key);?>
                        </td>
                        <td>
                            <input type="text"
                            name="<?=esc($key);?>"
                            value="<?= esc($value);?>" width="30" />
                        </td>
                    </tr>
                <?php endforeach;?>
                <tr>
                    <td><input type="submit" value=<?="Update " . esc($title);?> /></td>
                </tr>
           <?php }
            catch(Exception $ex){
                echo "<p> No record found</p>";
            }
            ?>
        </table>
    </form>
</section>
<footer>
    <p>&copy; 2023 Sanders Baseball League</p>
</footer>
