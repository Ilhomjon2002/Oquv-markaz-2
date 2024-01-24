<head>
    <link href="bootstrap/css/index.css" rel="stylesheet">
</head>

<?php
var_dump(__DIR__);
?>
<!-- ============================ COMPONENT LOGIN   ================================= -->
<div class="container-login" style="max-width: 380px; margin-top:100px;">
    <?php if (!empty($errors)) : ?>
            <?php foreach ($errors as $error) : ?>
                <div class="alert1 alert-danger1" role="alert">
                    <?= $error; ?>
                </div>
            <?php endforeach; ?>
    <?php endif; ?>
    <div class="card">
        <div class="card-body">
            <h2>Log In</h2>
            <form method="post">
                <div class="card-body">
                    <label>Name</label>
                    <input class="btninp" type="text" name="name" placeholder="name.."><br>
                </div>

                <div class="card-body">
                    <label>Password</label>
                    <input class="btninp" type="password" name="password" placeholder="password"><br>
                </div>

                <button class="btnsub centered-button" type="submit">Login</button>
            </form>
        </div>
    </div>
    <p class="pregis">Don't Have Accaunt?<a href="/register"> Sign Up</a></p>
</div>
<!-- ============================ COMPONENT LOGIN END   ================================= -->