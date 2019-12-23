<?php
    header("Content-type: text/html; charset=utf-8");
        $username = null;
        $passwd = null;
        $repasswd = null;
        $Telephone = null;
        $username = $_POST['user_email'];
        $passwd = $_POST['user_password'];
        $repasswd = $_POST['Repassword'];
        $Telephone = $_POST['Telephone'];
        $Security_code = $_POST['Security_code'];

        if ($username == ''){
            echo '<script>alert("请输入用户名！");history.go(-1);</script>';
            exit(0);
        }
        if ($passwd == ''){
            echo '<script>alert("请输入密码");history.go(-1);</script>';
            exit(0);
        }elseif (strlen($passwd)<6) {
            echo "<script>alert('用户密码的长度不得少于6位!请重新输入'); history.back();</script>";
            exit(0);
        }elseif (strlen($passwd)>12) {
            echo "<script>alert('用户密码的长度不得多于16位!请重新输入'); history.back();</script>";
            exit(0);
        }
        if ($passwd != $repasswd){
            echo '<script>alert("密码与确认密码应该一致");history.go(-1);</script>';
            exit(0);
        }
        if (strlen($Telephone) != 11){
            echo '<script>alert("输入的手机号码有误");history.go(-1);</script>';
            exit(0);
        }
        if (strlen($Security_code) != 6){
            echo '<script>alert("请输入6位安全码！");history.go(-1);</script>';
            exit(0);
        }

        if($passwd == $repasswd){
            include('../mysql_connect.php');
            $sql = "select username from userinfo where username = '$username'";
            $result = $db->query($sql);
            $number = mysqli_num_rows($result);
            $time = time();
            if ($number) {
                echo '<script>alert("用户名已经存在");history.go(-1);</script>';
            } else {
                $sql_insert = "insert into userinfo (username,passwd,telphone,intime,Security_code) values('$username', md5('$passwd'), '$Telephone','{$time}','$Security_code')";
                // echo $sql_insert;
                $res_insert = $db->query($sql_insert);
                // $is = $db->errno;
                if ($res_insert) {
                    session_start();
                    $_SESSION['admin'] = true;
                    $_SESSION['username'] = $username;
                    session_destroy();
                    echo '<script>alert("恭喜，注册成功！");window.location="index.php";</script>';
                } else {
                    echo '<script>alert("系统繁忙，请稍候！");window.location="index.php";</script>';
                }
            }
        }else{
            echo "<script>alert('提交未成功！'); history.go(-1);</script>";
        }
?>