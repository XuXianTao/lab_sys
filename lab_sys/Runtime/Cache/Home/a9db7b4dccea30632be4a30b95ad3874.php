<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>lab_sys</title>
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/header.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/nav.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/main_fbstu.css">
    <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
    <script type="text/javascript" src="/lab_sys/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/lab_sys/Public/lab_sys/js/init.js"></script>
    <input type="hidden" name="uname" id="uname" value="<?php echo ($user['nam']); ?>" />
    <input type="hidden" name="ip" id="ip" />
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

<body onload="init()">
    <div id="header_wrapper">
        <div id="header">
            <div id="logo"><img src="/lab_sys/Public/lab_sys/img/logo.jpg" alt="中山大学" /></div>
            <div id="welcome">欢迎！</div>
        </div>
    </div>
    <div id="navigation_wrapper">
        <div id="navigation">
            <div class="nav"><a href="main">主页</a></div>
            <div class="nav"><a href="fbstu">课堂反馈</a></div>
            <div class="nav"><a href="excp">异常反馈</a></div>
        </div>
    </div>
    <div id="main">
        <form>
            <table border="1">
                <?php echo ($fill!=null)?"
                <caption>未填问卷/小测</caption>
                <tr>
                    <th>问卷标题</th>
                    <th>类型</th>
                    <th>发布人</th>
                    <th>截止时间</th>
                </tr>":"
                <caption>无未填问卷/小测</caption>";?>
                <?php if(is_array($fill)): $i = 0; $__LIST__ = $fill;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><a href="fb?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["tit"]); ?></td>
                        <td><?php echo ($vo['typ'])?"小测":"问卷";?></td>
                        <td><?php echo ($vo["teaname"]); ?></td>
                        <td><?php echo ($vo["ddl"]); ?></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </form>
    </div>
</body>

</html>