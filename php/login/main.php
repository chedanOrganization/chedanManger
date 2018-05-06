<?php
    session_start();
    $name = $_SESSION['name'];
    $password = $_SESSION['password'];
    session_destroy();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>主界面</title>
    <link rel="stylesheet" href="css/maincss.css">
</head>
<body>

<div>
    <h1><font  color="aqua">主界面了解一下</font></h1>
</div>

<div>
    <h2>
        我是主界面，了解一下。<br/>
    </h2>
</div>

<div class="mainclass">
    <br/><br/><br/>
    <h4>用户名： <?php echo $name;?></h4>
    <h4>密码： <?php echo $password;?></h4><br/>
</div>
</body>
</html>
