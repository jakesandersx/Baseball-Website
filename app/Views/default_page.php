<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pretend Baseball League</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/home.css" />
</head>
<body>
<header>
    <h1>Welcome to the Sanders Baseball League</h1>
    <p>Join us for a fun-filled season of baseball!</p>
</header>

<nav>
    <ul>
        <li><a href="/stats">Stats</a></li>
        <li><a href="/teams_list">Teams</a></li>
        <li><a href="/scores">Scores</a></li>
        <li><a href="/login">Admin</a></li>
    </ul>
</nav>
<main>
<section>
    <h2>News and Updates</h2>
    <p>Check out our latest news and updates below:</p>
    <ul id="update-list">
        <li>Opening day is on June 1st, 2023</li>
        <li>We're excited to announce that we'll be hosting the championship game at Yankee Stadium</li>
    </ul>
</section>

<section>
    <h2>2022 League Standings</h2>
    <table>
        <thead>
        <tr>
            <th>Team</th>
            <th>Wins</th>
            <th>Losses</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Chicago Guardians</td>
            <td>15</td>
            <td>5</td>
        </tr>
        <tr>
            <td>New York Bulldogs</td>
            <td>12</td>
            <td>8</td>
        </tr>
        <tr>
            <td>New Orleans Mudcats</td>
            <td>8</td>
            <td>12</td>
        </tr>
        <tr>
            <td>Honolulu Tsunamis</td>
            <td>5</td>
            <td>15</td>
        </tr>
        </tbody>
    </table>
</section>
</main>
<footer>
    <p>&copy; 2023 Sanders Baseball League</p>
</footer>
</body>
</html>

