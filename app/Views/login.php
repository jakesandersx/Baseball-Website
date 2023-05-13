<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/admin.css" />
    <title>Codeigniter Login with Email/Password Example</title>
</head>
<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/stats">Stats</a></li>
        <li><a href="/teams_list">Teams</a></li>
        <li><a href="/scores">Scores</a></li>
    </ul>
</nav>

<body>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-5">

            <h2>Log in</h2>

            <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif;?>
            <form action="/login" method="post">
                <div class="form-group mb-3">
                    <input type="email" name="email" placeholder="Email"
                           value="<?= set_value('email') ?>" class="form-control" >
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="password" placeholder="Password"
                           class="form-control" >
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Signin</button>
                </div>
            </form>
            <p>Not a member? <a href="/register">Register</a></p>
        </div>

    </div>
</div>
</body>
</html>
