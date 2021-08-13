<h1>Session and cookie test</h1>

<?php
session_start();
if(isset($_POST['login'])) {
    $login = $_POST['login'];
    $pass = $_POST['password'];

    if ($login == 'Fons' && $pass == 'Makker'){
        $_SESSION['logged_in'] = TRUE;
    } else{
        echo 'da ni just eh';
        $_SESSION['logged_in'] = FALSE;
    }
}

$logged_id = $_SESSION['logged_in'] ?? false;

if($logged_id){
    echo 'weclome';

} else{
    ?>
    <form method="POST">
        <input type="text" name="login">
        <input type="text" name="password">
        <input type="submit" value="login">
    </form>
    <?php
}
