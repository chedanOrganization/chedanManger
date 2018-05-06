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
    <link rel="stylesheet" href="../view/css/maincss.css">
    <script src="../view/js/login.js"  type="text/javascript"></script>
</head>
<body>

    <!-- 标题栏 -->
    <div class="headerBack">
        <div class="header">
            <div class="headerTitle">
                车单管理系统
            </div>
            <div class="headerNav">
                <button class="headerNavexit">退出登录</button>
                <a class="headerNavuser" href="http://www.baidu.com" target="_blank">用户：<?php echo $name;?></a>
            </div>
        </div>
    </div>

    <!-- 主体内容 -->
    <div class="main">
        <!-- 左边控制div -->
        <div class="mainLeft">
            <button class="chedan" id="chedan">车单录入</button>
            <button class="lishi" id="lishi">历史记录</button>
            <button class="chaxun" id="chaxun">车单查询</button>
            <button class="tongji" id="tongji">费用统计</button>
            <button class="manager" id="manager">账号管理</button>
        </div>
        <!-- 右边显示div -->
        <div class="mainRight">

            <!-- TODO 测试代码 -->
            <!-- TODO 顶部的选择div -->
            <div class="mainRightControl">
                <button class="createControl" id="createControl" onclick="showCreate()">账号注册</button>
                <button class="deletedControl" id="deletedControl" onclick="showDelete()">账号删除</button>
                <button class="updateControl" id="updateControl" onclick="showUpdate()">账号修改</button>
                <button class="selectedControl" id="selectedControl" onclick="showSelected()">账号查询</button>
            </div>
            <!-- TODO 下面的操作div-->
            <div class="mainRightContent">
                <!-- TODO 注册账号 -->
                <div class="createContent" id="createContent" style="display:none">
                    <h2>账号注册</h2>



                </div>
                <!-- TODO 账号删除 -->
                <div class="deleteContent" id="deleteContent" style="display:none">
                    <h2>账号删除</h2>



                </div>
                <!-- TODO 账号修改 -->
                <div class="updateContent" id="updateContent" style="display:none">
                    <h2>账号修改</h2>



                </div>
                <!-- TODO 账号查询 -->
                <div class="selectedContent" id="selectedContent" style="display:none">
                    <h2>账号查询</h2>



                </div>
            </div>
        </div>
    </div>

    <!-- 底部内容 -->
    <div class="footerBack">
        <div id="footer" class="footer">
            <div class="footer-inner" id="footerInner">

                <div class="footerNav">
                    <a href="http://www.baidu.com" target="_blank">*** 量身定制各种业务系统、小程序、公众号等现代化工具 ***</a>
                    <a></a><a></a><a></a><a></a><a></a><a></a>
                    <a href="http://www.baidu.com" target="_blank">*** 北京一流互联网创业团队，解决您的办公效率问题提 ***</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
