<?php
    // 这里，不做跳转了， 把数据给打印出来。  传递过来的数据。  然后把传递过来的数据，  交给html 界面（html界面去展示）
    $name = trim($_POST['name']);
    $password = trim($_POST['password']);

    if(empty($name) || empty($password)) {
        echo "<script> alert('账号密码不能为空');history.back(); </script>";
    } else {
        // 封装数据
        session_start();
        $_SESSION['name']=$name;
        $_SESSION['password']=$password;
        // 干过去
        header("Location:main.php");
    }
?>
