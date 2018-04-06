<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>lab_sys</title>
    <link rel="stylesheet" href="/sysulab/Public/lab_sys/css/header.css">
    <link rel="stylesheet" href="/sysulab/Public/lab_sys/css/nav.css">
    <link rel="stylesheet" href="/sysulab/Public/lab_sys/css/main_excp.css">
    <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
    <script type="text/javascript" src="/sysulab/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/sysulab/Public/lab_sys/js/init.js"></script>
    <script type="text/javascript" src="/sysulab/Public/lab_sys/js/ent.js"></script>
    <script type="text/javascript" src="/sysulab/Public/lab_sys/js/input.js"></script>
    <input type="hidden" name="uname" id="uname" value="<?php echo ($user['nam']); ?>" />
    <input type="hidden" name="ip" id="ip" />
    <script>
        window.onbeforeunload = function() {
            return "确认退出？";
        }

        function onDestroy() {
            window.onbeforeunload = null;
        }
    </script>
    <style type="text/css">
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }
        
        * {
            font-family: Arial, sans-serif, "微软雅黑";
            font-size: large;
        }
        
        p {
            display: inline-block;
        }
        
        a {
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body onload="init();input()">
    <div id="header_wrapper">
        <div id="header">
            <div id="logo"><img src="/sysulab/Public/lab_sys/img/logo.jpg" alt="中山大学" /></div>
            <div id="welcome">欢迎！</div>
        </div>
    </div>
    <div id="navigation_wrapper">
        <div id="navigation">
            <div class="nav"><a href="main">主页</a></div>
            <div class="nav"><a href="fb">课堂反馈</a></div>
            <div class="nav"><a href="excp">异常反馈</a></div>
        </div>
    </div>
    <div id="main">
        <form id="form" action="excp_" method="POST" onsubmit="return onDestroy()">
            <fieldset>
                <legend>异常反馈</legend>
                <div class="choice">请选择异常仪器：<br>
                    <input name="pc" value="pc" type="checkbox">电脑<br>
                    <input name="wire" value="wire" type="checkbox">导线<br>
                    <input name="box" value="box" type="checkbox">电路箱<br>
                    <input name="oscp" value="oscp" type="checkbox">示波器<br>
                    <input name="gen" value="gen" type="checkbox">函数发生器<br>
                    <input name="oth" value="oth" type="checkbox">其他
                    <input name="des" type="text" placeholder="输入文字进行描述" width="20px">
                </div>
                <div class="btn_group">
                    <button id="btn1" class="btn" type="submit" name="btn_excp">提交</button>
                    <button id="btn2" class="btn" type="reset">重置</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>