<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/login.css">
    <title>Document</title>
</head>
<body>
<div class="login">
    <h1>Login</h1>
    <form method="post" action="<?= base_url("index.php/Login/loginAction")?>">
        <input type="text" name="usuario" placeholder="Username" required="required" />
        <input type="password" name="pass" placeholder="Password" required="required" />
        <button class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
</div>
</body>
</html>