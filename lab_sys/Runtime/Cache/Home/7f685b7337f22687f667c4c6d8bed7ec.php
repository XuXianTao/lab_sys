<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>lab_sys</title>
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/header.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/nav.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/main_fb.css">
    <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
    <script type="text/javascript" src="/lab_sys/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/lab_sys/Public/lab_sys/js/init.js"></script>
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
            <div class="nav"><a href="excpsta">课堂反馈</a></div>
            <div class="nav"><a href="excp">异常反馈</a></div>
        </div>
    </div>
    <div id="main">
        <form id="form" action="fb_" method="POST" onsubmit="return onDestroy()">
            <input id = "id" name = "id" type="hidden" value = "<?php echo ($rls['id']); ?>">
            <fieldset>
                <legend><?php echo ($rls['tit']); ?></legend>
                <table border = "1">
                <?php echo ($rls['q1']!=null)?"<tr>
                        <td rowspan=\"2\">".$rls['q1']."</td>
                        <td>".$rls['a1_q1']."</td>
                        <td>".$rls['a2_q1']."</td>
                        <td>".$rls['a3_q1']."</td>
                        <td>".$rls['a4_q1']."</td>
                        <td>".$rls['a5_q1']."</td>
                    </tr>
                    <tr>
                        <td><input name=\"q1_num\" type=\"radio\"value=\"1\" checked></td>
                        <td><input name=\"q1_num\"type=\"radio\"value=\"2\" ></td>
                        <td><input name=\"q1_num\"type=\"radio\"value=\"3\" ></td>
                        <td><input name=\"q1_num\"type=\"radio\"value=\"4\" ></td>
                        <td><input name=\"q1_num\"type=\"radio\"value=\"5\" ></td>
                    </tr>":"";?>
                <?php echo ($rls['q2']!=null)?"<tr>
                        <td rowspan=\"2\">".$rls['q2']."</td>
                        <td>".$rls['a1_q2']."</td>
                        <td>".$rls['a2_q2']."</td>
                        <td>".$rls['a3_q2']."</td>
                        <td>".$rls['a4_q2']."</td>
                        <td>".$rls['a5_q2']."</td>
                    </tr>
                    <tr>
                        <td><input name=\"q2_num\"type=\"radio\"value=\"1\" checked ></td>
                        <td><input name=\"q2_num\"type=\"radio\"value=\"2\" ></td>
                        <td><input name=\"q2_num\"type=\"radio\"value=\"3\" ></td>
                        <td><input name=\"q2_num\"type=\"radio\"value=\"4\" ></td>
                        <td><input name=\"q2_num\"type=\"radio\"value=\"5\" ></td>
                    </tr>":"";?>
                <?php echo ($rls['q3']!=null)?"<tr>
                        <td rowspan=\"2\">".$rls['q3']."</td>
                        <td>".$rls['a1_q3']."</td>
                        <td>".$rls['a2_q3']."</td>
                        <td>".$rls['a3_q3']."</td>
                        <td>".$rls['a4_q3']."</td>
                        <td>".$rls['a5_q3']."</td>
                    </tr>
                    <tr>
                        <td><input name=\"q3_num\"type=\"radio\"value=\"1\" checked ></td>
                        <td><input name=\"q3_num\"type=\"radio\"value=\"2\"></td>
                        <td><input name=\"q3_num\"type=\"radio\"value=\"3\"></td>
                        <td><input name=\"q3_num\"type=\"radio\"value=\"4\"></td>
                        <td><input name=\"q3_num\"type=\"radio\"value=\"5\"></td>
                    </tr>":"";?>
                <?php echo ($rls['q4']!=null)?"<tr>
                        <td rowspan=\"2\">".$rls['q4']."</td>
                        <td>".$rls['a1_q4']."</td>
                        <td>".$rls['a2_q4']."</td>
                        <td>".$rls['a3_q4']."</td>
                        <td>".$rls['a4_q4']."</td>
                        <td>".$rls['a5_q4']."</td>
                    </tr>
                    <tr>
                        <td><input name=\"q4_num\"type=\"radio\"value=\"1\" checked ></td>
                        <td><input name=\"q4_num\"type=\"radio\"value=\"2\"></td>
                        <td><input name=\"q4_num\"type=\"radio\"value=\"3\"></td>
                        <td><input name=\"q4_num\"type=\"radio\"value=\"4\"></td>
                        <td><input name=\"q4_num\"type=\"radio\"value=\"5\"></td>
                    </tr>":"";?>
                <?php echo ($rls['q5']!=null)?"<tr>
                        <td rowspan=\"2\">".$rls['q5']."</td>
                        <td>".$rls['a1_q5']."</td>
                        <td>".$rls['a2_q5']."</td>
                        <td>".$rls['a3_q5']."</td>
                        <td>".$rls['a4_q5']."</td>
                        <td>".$rls['a5_q5']."</td>
                    </tr>
                    <tr>
                        <td><input name=\"q5_num\"type=\"radio\"value=\"1\" checked ></td>
                        <td><input name=\"q5_num\"type=\"radio\"value=\"2\"></td>
                        <td><input name=\"q5_num\"type=\"radio\"value=\"3\"></td>
                        <td><input name=\"q5_num\"type=\"radio\"value=\"4\"></td>
                        <td><input name=\"q5_num\"type=\"radio\"value=\"5\"></td>
                    </tr>":"";?>
                <?php echo ($rls['q6']!=null)?"<tr>
                        <td rowspan=\"2\">".$rls['q6']."</td>
                        <td>".$rls['a1_q6']."</td>
                        <td>".$rls['a2_q6']."</td>
                        <td>".$rls['a3_q6']."</td>
                        <td>".$rls['a4_q6']."</td>
                        <td>".$rls['a5_q6']."</td>
                    </tr>
                    <tr>
                        <td><input name=\"q6_num\"type=\"radio\"value=\"1\" checked ></td>
                        <td><input name=\"q6_num\"type=\"radio\"value=\"2\"></td>
                        <td><input name=\"q6_num\"type=\"radio\"value=\"3\"></td>
                        <td><input name=\"q6_num\"type=\"radio\"value=\"4\"></td>
                        <td><input name=\"q6_num\"type=\"radio\"value=\"5\"></td>
                    </tr>":"";?>
                <?php echo ($rls['q7']!=null)?"<tr>
                        <td rowspan=\"2\">".$rls['q7']."</td>
                        <td>".$rls['a1_q7']."</td>
                        <td>".$rls['a2_q7']."</td>
                        <td>".$rls['a3_q7']."</td>
                        <td>".$rls['a4_q7']."</td>
                        <td>".$rls['a5_q7']."</td>
                    </tr>
                    <tr>
                        <td><input name=\"q7_num\"type=\"radio\"value=\"1\" checked ></td>
                        <td><input name=\"q7_num\"type=\"radio\"value=\"2\"></td>
                        <td><input name=\"q7_num\"type=\"radio\"value=\"3\"></td>
                        <td><input name=\"q7_num\"type=\"radio\"value=\"4\"></td>
                        <td><input name=\"q7_num\"type=\"radio\"value=\"5\"></td>
                    </tr>":"";?>
                <?php echo ($rls['q8']!=null)?"<tr>
                        <td rowspan=\"2\">".$rls['q8']."</td>
                        <td>".$rls['a1_q8']."</td>
                        <td>".$rls['a2_q8']."</td>
                        <td>".$rls['a3_q8']."</td>
                        <td>".$rls['a4_q8']."</td>
                        <td>".$rls['a5_q8']."</td>
                    </tr>
                    <tr>
                        <td><input name=\"q8_num\"type=\"radio\"value=\"1\" checked ></td>
                        <td><input name=\"q8_num\"type=\"radio\"value=\"2\"></td>
                        <td><input name=\"q8_num\"type=\"radio\"value=\"3\"></td>
                        <td><input name=\"q8_num\"type=\"radio\"value=\"4\"></td>
                        <td><input name=\"q8_num\"type=\"radio\"value=\"5\"></td>
                    </tr>":"";?>
                <?php echo ($rls['q9']!=null)?"<tr>
                        <td rowspan=\"2\">".$rls['q9']."</td>
                        <td>".$rls['a1_q9']."</td>
                        <td>".$rls['a2_q9']."</td>
                        <td>".$rls['a3_q9']."</td>
                        <td>".$rls['a4_q9']."</td>
                        <td>".$rls['a5_q9']."</td>
                    </tr>
                    <tr>
                        <td><input name=\"q9_num\"type=\"radio\"value=\"1\" checked ></td>
                        <td><input name=\"q9_num\"type=\"radio\"value=\"2\"></td>
                        <td><input name=\"q9_num\"type=\"radio\"value=\"3\"></td>
                        <td><input name=\"q9_num\"type=\"radio\"value=\"4\"></td>
                        <td><input name=\"q9_num\"type=\"radio\"value=\"5\"></td>
                    </tr>":"";?>
                <?php echo ($rls['q10']!=null)?"<tr>
                        <td rowspan=\"2\">".$rls['q10']."</td>
                        <td>".$rls['a1_q10']."</td>
                        <td>".$rls['a2_q10']."</td>
                        <td>".$rls['a3_q10']."</td>
                        <td>".$rls['a4_q10']."</td>
                        <td>".$rls['a5_q10']."</td>
                    </tr>
                    <tr>
                        <td><input name=\"q10_num\"type=\"radio\"value=\"1\" checked ></td>
                        <td><input name=\"q10_num\"type=\"radio\"value=\"2\"></td>
                        <td><input name=\"q10_num\"type=\"radio\"value=\"3\"></td>
                        <td><input name=\"q10_num\"type=\"radio\"value=\"4\"></td>
                        <td><input name=\"q10_num\"type=\"radio\"value=\"5\"></td>
                    </tr>":"";?>
                </table>
                <div class="btn_group">
                    <button id="btn1" class="btn" type="submit" name="btn_fb" value="a">提交</button>
                    <button id="btn1" class="btn" type="submit" name="btn_back" value = "a">返回</button>
                    <button id="btn2" class="btn" type="reset">重置</button>

                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>