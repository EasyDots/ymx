<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/theme.css"/>
    <link rel="stylesheet" href="css/input.css"/>
    <title>易模秀--制作模板</title>
</head>
<body>
<div class="nav" style="height: 80px;background-color: #a5c176;">
    <div class="logo" style="padding-top: 11px"><img src="images/logo.png" alt=""/></div>
    <ul class="navList" style="top:20px">
        <li><a href="index.php">首页</a></li>
        <li><a href="theme.php">主题分类</a></li>
        <li><a href="#">意见反馈</a></li>
        <li><a href="#">联系我们</a></li>
        <li><a href="#">关于我们</a></li>
    </ul>
    <ul class="login" style="top:19px">
        <li><a href="#" id="btnLogin">登录</a></li>
        <li><a href="#" id="btnResgiter">注册</a></li>
    </ul>
</div>
<hr width="100%" size="3" color="#2b2b2b" style="margin-top: 15px"/>
<div class="container">
    <p>为定制你所需要的企业宣传模块，请您输入以下信息。</p>
    <form action="" method="post" name="gsj">
        <span class="inp_1">请输入公司简介:</span>
        <textarea name="" id="inp" cols="30" rows="10">
        </textarea>
        <span class="inp_2">上传公司图片:</span>
        <input type="file" id="inp2"/>
        <span class="inp_3">请输入企业宗旨：</span>
        <input type="text" id="inp3"/>
        <span class="inp_4">请输入经营理念：</span>
        <input type="text" id="inp4"/>
        <span class="inp_5">请输入价值观念：</span>
        <textarea name="" id="inp5" cols="30" rows="10"></textarea>
        <span class="inp_6">请输入企业特点：</span>
        <textarea name="" id="inp6" cols="30" rows="10"></textarea>
        <span class="inp_7">上传团队照片：</span>
        <input type="file" id="inp7"/>
        <input type="submit" value="提交" class="submit"/>
    </form>
</div>
<footer>ymx.com 2018 All Rights Reserved</footer>
</body>
</html>