<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>车单管理系统</title>
    <link rel="stylesheet" href="view/css/mycss.css">
    <script src="view/js/login.js"  type="text/javascript"></script>
</head>

<body>
    <!-- 标题栏  测试提交-->
    <div class="header">
        <div class="headerTitle">
            车单管理系统
        </div>
        <div class="headerNav">
            <a href="http://www.baidu.com" target="_blank">开发商：北京辰辰科技创新团队</a>
            <a href="http://www.baidu.com" target="_blank">联系电话：15811363837</a>
        </div>
    </div>

    <!-- 主界面 -->
    <div class="main" id="mainBg">
        <!--登录框-->
        <div id="loginBlock" class="login tab-2">
            <div class="loginFunc">
                <div id="lbNormal" class="loginFuncNormal">用户注册</div>
                <div id="lbNormal2" class="signFuncNormal">帐号登录</div>
            </div>
            <!-- TODO 邮箱帐号登录， 现在有点问题，去掉加载中逻辑!!!! 应该显示js当前届满判断。 而不应该跳过去判断。 -->
            <form class="loginBlockForm" action="login/login.php" method="post">
                <br/><br/><br/>
                <input id="name" name="name" placeholder="请输入账号">
                <br/><br/>
                <input id="password"  name="password" placeholder="请输入密码">
                <br/><br/><br/>
                <input type="submit" value="登录" name="submit" >
            </form>

        </div>
    </div>

    <!-- 底部标题栏 -->
    <div id="footer" class="footer">
        <div class="footer-inner" id="footerInner">

            <div class="footerNav">
                <a href="http://www.baidu.com" target="_blank">*** 量身定制各种业务系统、小程序、公众号等现代化工具 ***</a>
                <a></a><a></a><a></a><a></a><a></a><a></a>
                <a href="http://www.baidu.com" target="_blank">*** 北京一流互联网创业团队，解决您的办公效率问题提 ***</a>
            </div>
        </div>
    </div>

    <!--遮罩-->
    <div id="mask" class="mask" style="display:none;"></div>

    <!--登录提示弹框-->
    <div class="enhttp" style="display:none" id="enhttpblock">
        <div class="enhttpbox">
            <div class="topborder"></div>
            <div class="ct">
                <div class="inner">
                    <p class="txt-tips">登录过程有点慢哦，可能是由于网络问题造成的。</p>
                    <p id="enhttpTips" class="txt-normal"><span id="backwards">3</span>&nbsp;秒后自动尝试普通加密方式登录</p>
                    <p class="txt-normal"><a id="idLoginBtn" class="httplogin" href="javascript:void(0)">确&nbsp;&nbsp;定</a></p>
                    <p class="txt-line"></p>
                    <p class="txt-advice">无法登录邮箱？<a class="txt-advicelink" href="http://www.baidu.com" target="_blank">意见反馈&gt;&gt;</a></p>
                </div>
            </div>
            <div class="bottomborder"></div>
        </div>
    </div>

    <!--首页评分弹框-->
    <div id="scoreIndexPop">
        <iframe id="scoreIndexPopIfm" src="about:blank" frameborder="0" scrolling="no" allowTransparency="allowtransparency"></iframe>
    </div>

    <!-- 作用暂时未知 -->
    <div>
        <form id="login126" name="login126" method="post" target="frameforlogin" style=" width: 0; height: 0;"></form>
        <iframe class="httploginframe" src="about:blank" id="frameforlogin" name="frameforlogin" style="overflow:hidden;border:0; width: 0; height: 0;" sandbox="allow-scripts allow-top-navigation">登录iframe</iframe>
    </div>

</body>
</html>

