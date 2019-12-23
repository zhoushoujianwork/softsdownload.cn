<?php
    $_SESSION['user_email'] = null;
    include('../php/mysql_connect.php');
    $username = $_POST['user_email'];
    $passwd = $_POST['user_password'];
    if ($username == ''){
        echo '<script>alert("请输入用户名！");history.go(-1);</script>';
        exit(0);
    }
    if ($passwd == ''){
        echo '<script>alert("请输入密码！");history.go(-1);</script>';
        exit(0);
    }
    $sql = "select username,passwd from userinfo where username = '$username' and passwd = md5('$passwd')";
    $result = $db->query($sql);
    $number = mysqli_num_rows($result);
    if ($number) {
        session_start();
        $_SESSION['admin'] = true;
        $_SESSION['username'] = $username;
        $time = time();
        $sql = "UPDATE userinfo SET lastlogintime='$time' WHERE username='$username'";
        $db->query($sql);
        $sql = "UPDATE userinfo SET logincount=logincount+1 WHERE username='$username'";
        $db->query($sql);

        echo '<script>window.location="/";</script>';
    } else {
        echo '<script>alert("用户名或密码错误！");history.go(-1);</script>';
    }
?>