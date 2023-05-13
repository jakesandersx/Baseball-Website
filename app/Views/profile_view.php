<?php
helper('html');

?>

<h1><?=esc($title);?></h1>
<?= view_cell('admin_cell::getMenuBar');?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/admin.css" />
<section>
    <h1>Profile for <?=session()->get('name');?></h1>
    <p>Id: <?= session()->get('name');?></p>
    <p>Name: <?= session()->get('name');?></p>
    <p>Email: <?= session()->get('email');?></p>
</section>
<footer>
    <p>&copy; 2023 Sanders Baseball League</p>
</footer>
