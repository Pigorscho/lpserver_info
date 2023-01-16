<?php

const FILE = './.htpasswd';

function check_input_user($input) {
    return preg_match('/^[0-9_a-zA-Z]{5,20}$/', $input);
}
function check_input_pwd($input) {
    return preg_match('/^[0-9_a-zA-Z]{10,42}$/', $input);
}

function check_availability($user, $users) {
    return !!preg_match_all("/^{$user}:.*\$/m", $users);
}

function head_back() {
    echo '<p align=center>reloading in 15 seconds</p>';
    header("Refresh: 15; url=./create-account.php");
}

if (!empty($_POST)) {
    $user = $_POST['uname'];
    $pass = $_POST['pwd'];
    $users = file_get_contents('./.htpasswd');
    if ($pass == "password") {
        echo '<p align=center>U fuckn kiddn me right?<br>DONT YOU DARE USE THAT SHITTY EXCUSE OF A PASSWORD U SHITHOLE<br>freakin cunt, who do you think you are?</p>';
        head_back();
        exit;
    }
    if (!check_input_user($user)) {
        echo '<p align=center>Usernames must consist of: a-Z and/or 0-9 and have at least 5 letters and have a max of 20 letters,<br>but maybe u are too stupid for that</p>';
        head_back();
        exit;
    }
    if (!check_input_pwd($pass)) {
        echo '<p align=center>passwords must consist of: a-Z and/or 0-9 and have at least 10 letters/digits and have a max of 42 letters/digits,<br>but maybe u are too stupid for that</p>';
        head_back();
        exit;
    }
    if (check_availability($user, $users)) {
        echo '<p align=center>Username already taken!<br>Choose another one!<br>screw you!</p>';
        head_back();
        exit;
    }
}

if ($_POST['uname'] || $_POST['pwd']) {
    $hash = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
    $complete_hash = $_POST['uname'] . ':' . $hash . PHP_EOL;
    if ($complete_hash) {
        file_put_contents(FILE, $complete_hash, FILE_APPEND | LOCK_EX);
        echo '<p align=center>Account created successfully<br>Please restart your browser to see if you can log in using your new account<br>and with restart i mean completely shut down the freakn browser :P</p>';
        head_back();
        exit;
    }
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Sini">
    <meta name="description" content="descriptio">
    <style>
        h1, h2, input, button {
            text-align: center;
        }
        #pw {
            display: flex;
            justify-content: space-around;
        }

        @media screen and (max-width: 800px){
            h1, h2, input, button {
                margin-top: 3rem;
                font-size: 2rem;
            }
        }

        @media screen and (max-width: 1000px) {
            h1, h2, input, button {
                margin-top: 2rem;
                font-size: 2rem;
            }
        }

        @media screen and (max-width: 13000px) {
            h1, h2, input, button {
                margin-top: 1rem;
            }
            input, button {
                font-size: 2rem;
            }
        }

        @media screen and (max-width: 1700px) {
            h1, h2, input, button {
                margin-top: 0;
            }
            input, button {
                font-size: 1rem;
            }
        }
    </style>
    <title>Index</title>
</head>
logged in as <?php echo $_SERVER['PHP_AUTH_USER'] ?>
<body>
<nav>
    <ul>
        <li><a href="index.html">go back to Homepage</a> </li>
    </ul>
</nav>
<h1>
    Welcome
</h1>
<h2>
    Please create an Account
</h2>
<div id="pw">
    <form method="post">
        <input type="text" name="uname" placeholder="New Account Name" autocomplete="Off">
        <br>
        <br>
        <input type="text" name="pwd" placeholder="New Account Password" autocomplete="Off">
        <br>
        <br>
        <button type="submit">
            Create Account
        </button>
    </form>
</div>
</body>
</html>
