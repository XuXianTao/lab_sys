<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>lab_sys</title>
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/header.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/nav.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/main_fbupdt.css" />
    <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
    <script src="/lab_sys/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/init.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/type-btn.js"></script>
    <input type="hidden" name="uname" id="uname" value="<?php echo ($admin['nam']); ?>" />
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

<body onload="init();type_btn();">
    <div id="header_wrapper">
        <div id="header">
            <div id="logo"><img src="/lab_sys/Public/lab_sys/img/logo.jpg" alt="中山大学" /></div>
            <div id="welcome">欢迎！</div>
        </div>
    </div>
    <div id="navigation_wrapper">
        <div id="navigation">
            <div class="nav"><a href="/lab_sys/index.php/Home/Main/main_m">主页</a></div>
            <div class="nav"><a href="/lab_sys/index.php/Home/exception/excpsts">异常情况</a></div>
            <div class="nav"><a href="/lab_sys/index.php/Home/exception/excpsta">故障统计</a></div>
            <div class="nav"><a href="/lab_sys/index.php/Home/feedback/fbman">原始问卷管理</a></div>
            <div class="nav"><a href="/lab_sys/index.php/Home/feedback/fbman2">已发布问卷管理</a></div>
        </div>
    </div>
    <div id="main">
        <form id="form" action="/lab_sys/index.php/Home/feedback/fbupdt_" method="POST" onsubmit="return onDestroy()">
            <fieldset>
                <legend>问卷修改：务必进行核对后再提交修改！提交将会创建新问卷！</legend>
                <div id="qnr0" name="qnr0" class="tit">
                    <br> 标题： <input id="q0" name="tit" type="text" value="<?php echo ($old['tit']); ?>" placeholder="这里输入问卷标题">
                </div>
                <div id="qnrtyp" name="qnrtyp" class="typ">
                    <br> 类型：
                    <input id="qt0" name="typ" type="radio" value="0" <?php echo $old['typ']?"":"checked";?>>调查问卷
                    <input id="qt1" name="typ" type="radio" value="1" <?php echo $old['typ']?"checked":"";?>>课堂小测
                </div>
                <div id="qnr1" name="qnr1" class="q">
                    <br> 问题1： <input id="q1" name="q1" type="text" value="<?php echo ($old['q1']); ?>" placeholder="这里输入问题1"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="a1_q1" name="a1_q1" type="text" class="a" value="<?php echo ($old['a1_q1']); ?>" placeholder="这里输入问题1的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="a2_q1" name="a2_q1" type="text" class="a" value="<?php echo ($old['a2_q1']); ?>" placeholder="这里输入问题1的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="a3_q1" name="a3_q1" type="text" class="a" value="<?php echo ($old['a3_q1']); ?>" placeholder="这里输入问题1的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="a4_q1" name="a4_q1" type="text" class="a" value="<?php echo ($old['a4_q1']); ?>" placeholder="这里输入问题1的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="a5_q1" name="a5_q1" type="text" class="a" value="<?php echo ($old['a5_q1']); ?>" placeholder="这里输入问题1的第五个选项"> <br><br>
                    <div>
                        &emsp;&emsp;正确选项：
                        <input id="a_q1_1" name="a_q1" type="radio" value="1" <?php echo $old['a_q1']==1?"checked":"";?>>1
                        <input id="a_q1_2" name="a_q1" type="radio" value="2" <?php echo $old['a_q1']==2?"checked":"";?>>2
                        <input id="a_q1_3" name="a_q1" type="radio" value="3" <?php echo $old['a_q1']==3?"checked":"";?>>3
                        <input id="a_q1_4" name="a_q1" type="radio" value="4" <?php echo $old['a_q1']==4?"checked":"";?>>4
                        <input id="a_q1_5" name="a_q1" type="radio" value="5" <?php echo $old['a_q1']==5?"checked":"";?>>5
                    </div>
                </div>
                <div id="qnr2" name="qnr1" class="q">
                    <br> 问题2： <input id="q2" name="q2" type="text" value="<?php echo ($old['q2']); ?>" placeholder="这里输入第二个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="a1_q2" name="a1_q2" type="text" class="a" value="<?php echo ($old['a1_q2']); ?>" placeholder="这里输入问题2的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="a2_q2" name="a2_q2" type="text" class="a" value="<?php echo ($old['a2_q2']); ?>" placeholder="这里输入问题2的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="a3_q2" name="a3_q2" type="text" class="a" value="<?php echo ($old['a3_q2']); ?>" placeholder="这里输入问题2的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="a4_q2" name="a4_q2" type="text" class="a" value="<?php echo ($old['a4_q2']); ?>" placeholder="这里输入问题2的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="a5_q2" name="a5_q2" type="text" class="a" value="<?php echo ($old['a5_q2']); ?>" placeholder="这里输入问题2的第五个选项"> <br><br>
                    <div>
                        &emsp;&emsp;正确选项：
                        <input id="a_q2_1" name="a_q2" type="radio" value="1" <?php echo $old['a_q2']==1?"checked":"";?>>1
                        <input id="a_q2_2" name="a_q2" type="radio" value="2" <?php echo $old['a_q2']==2?"checked":"";?>>2
                        <input id="a_q2_3" name="a_q2" type="radio" value="3" <?php echo $old['a_q2']==3?"checked":"";?>>3
                        <input id="a_q2_4" name="a_q2" type="radio" value="4" <?php echo $old['a_q2']==4?"checked":"";?>>4
                        <input id="a_q2_5" name="a_q2" type="radio" value="5" <?php echo $old['a_q2']==5?"checked":"";?>>5
                    </div>
                </div>
                <div id="qnr3" name="qnr1" class="q">
                    <br> 问题3： <input id="q3" name="q3" type="text" value="<?php echo ($old['q3']); ?>" placeholder="这里输入第三个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="a1_q3" name="a1_q3" type="text" class="a" value="<?php echo ($old['a1_q3']); ?>" placeholder="这里输入问题3的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="a2_q3" name="a2_q3" type="text" class="a" value="<?php echo ($old['a2_q3']); ?>" placeholder="这里输入问题3的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="a3_q3" name="a3_q3" type="text" class="a" value="<?php echo ($old['a3_q3']); ?>" placeholder="这里输入问题3的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="a4_q3" name="a4_q3" type="text" class="a" value="<?php echo ($old['a4_q3']); ?>" placeholder="这里输入问题3的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="a5_q3" name="a5_q3" type="text" class="a" value="<?php echo ($old['a5_q3']); ?>" placeholder="这里输入问题3的第五个选项"> <br><br>
                    <div>
                        &emsp;&emsp;正确选项：
                        <input id="a_q3_1" name="a_q3" type="radio" value="1" <?php echo $old['a_q3']==1?"checked":"";?>>1
                        <input id="a_q3_2" name="a_q3" type="radio" value="2" <?php echo $old['a_q3']==2?"checked":"";?>>2
                        <input id="a_q3_3" name="a_q3" type="radio" value="3" <?php echo $old['a_q3']==3?"checked":"";?>>3
                        <input id="a_q3_4" name="a_q3" type="radio" value="4" <?php echo $old['a_q3']==4?"checked":"";?>>4
                        <input id="a_q3_5" name="a_q3" type="radio" value="5" <?php echo $old['a_q3']==5?"checked":"";?>>5
                    </div>
                </div>
                <div id="qnr4" name="qnr1" class="q">
                    <br> 问题4： <input id="q4" name="q4" type="text" value="<?php echo ($old['q4']); ?>" placeholder="这里输入第四个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="a1_q4" name="a1_q4" type="text" class="a" value="<?php echo ($old['a1_q4']); ?>" placeholder="这里输入问题4的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="a2_q4" name="a2_q4" type="text" class="a" value="<?php echo ($old['a2_q4']); ?>" placeholder="这里输入问题4的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="a3_q4" name="a3_q4" type="text" class="a" value="<?php echo ($old['a3_q4']); ?>" placeholder="这里输入问题4的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="a4_q4" name="a4_q4" type="text" class="a" value="<?php echo ($old['a4_q4']); ?>" placeholder="这里输入问题4的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="a5_q4" name="a5_q4" type="text" class="a" value="<?php echo ($old['a5_q4']); ?>" placeholder="这里输入问题4的第五个选项"> <br><br>
                    <div>
                        &emsp;&emsp;正确选项：
                        <input id="a_q4_1" name="a_q4" type="radio" value="1" <?php echo $old['a_q4']==1?"checked":"";?>>1
                        <input id="a_q4_2" name="a_q4" type="radio" value="2" <?php echo $old['a_q4']==2?"checked":"";?>>2
                        <input id="a_q4_3" name="a_q4" type="radio" value="3" <?php echo $old['a_q4']==3?"checked":"";?>>3
                        <input id="a_q4_4" name="a_q4" type="radio" value="4" <?php echo $old['a_q4']==4?"checked":"";?>>4
                        <input id="a_q4_5" name="a_q4" type="radio" value="5" <?php echo $old['a_q4']==5?"checked":"";?>>5
                    </div>
                </div>
                <div id="qnr5" name="qnr1" class="q">
                    <br> 问题5： <input id="q5" name="q5" type="text" value="<?php echo ($old['q5']); ?>" placeholder="这里输入第五个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="a1_q5" name="a1_q5" type="text" class="a" value="<?php echo ($old['a1_q5']); ?>" placeholder="这里输入问题5的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="a2_q5" name="a2_q5" type="text" class="a" value="<?php echo ($old['a2_q5']); ?>" placeholder="这里输入问题5的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="a3_q5" name="a3_q5" type="text" class="a" value="<?php echo ($old['a3_q5']); ?>" placeholder="这里输入问题5的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="a4_q5" name="a4_q5" type="text" class="a" value="<?php echo ($old['a4_q5']); ?>" placeholder="这里输入问题5的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="a5_q5" name="a5_q5" type="text" class="a" value="<?php echo ($old['a5_q5']); ?>" placeholder="这里输入问题5的第五个选项"> <br><br>
                    <div>
                        &emsp;&emsp;正确选项：
                        <input id="a_q5_1" name="a_q5" type="radio" value="1" <?php echo $old['a_q5']==1?"checked":"";?>>1
                        <input id="a_q5_2" name="a_q5" type="radio" value="2" <?php echo $old['a_q5']==2?"checked":"";?>>2
                        <input id="a_q5_3" name="a_q5" type="radio" value="3" <?php echo $old['a_q5']==3?"checked":"";?>>3
                        <input id="a_q5_4" name="a_q5" type="radio" value="4" <?php echo $old['a_q5']==4?"checked":"";?>>4
                        <input id="a_q5_5" name="a_q5" type="radio" value="5" <?php echo $old['a_q5']==5?"checked":"";?>>5
                    </div>
                </div>
                <div id="qnr6" name="qnr1" class="q">
                    <br> 问题6： <input id="q6" name="q6" type="text" value="<?php echo ($old['q6']); ?>" placeholder="这里输入第六个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="a1_q6" name="a1_q6" type="text" class="a" value="<?php echo ($old['a1_q6']); ?>" placeholder="这里输入问题6的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="a2_q6" name="a2_q6" type="text" class="a" value="<?php echo ($old['a2_q6']); ?>" placeholder="这里输入问题6的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="a3_q6" name="a3_q6" type="text" class="a" value="<?php echo ($old['a3_q6']); ?>" placeholder="这里输入问题6的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="a4_q6" name="a4_q6" type="text" class="a" value="<?php echo ($old['a4_q6']); ?>" placeholder="这里输入问题6的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="a5_q6" name="a5_q6" type="text" class="a" value="<?php echo ($old['a5_q6']); ?>" placeholder="这里输入问题6的第五个选项"> <br><br>
                    <div>
                        &emsp;&emsp;正确选项：
                        <input id="a_q6_1" name="a_q6" type="radio" value="1" <?php echo $old['a_q6']==1?"checked":"";?>>1
                        <input id="a_q6_2" name="a_q6" type="radio" value="2" <?php echo $old['a_q6']==2?"checked":"";?>>2
                        <input id="a_q6_3" name="a_q6" type="radio" value="3" <?php echo $old['a_q6']==3?"checked":"";?>>3
                        <input id="a_q6_4" name="a_q6" type="radio" value="4" <?php echo $old['a_q6']==4?"checked":"";?>>4
                        <input id="a_q6_5" name="a_q6" type="radio" value="5" <?php echo $old['a_q6']==5?"checked":"";?>>5
                    </div>
                </div>
                <div id="qnr7" name="qnr1" class="q">
                    <br> 问题7： <input id="q7" name="q7" type="text" value="<?php echo ($old['q7']); ?>" placeholder="这里输入第七个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="a1_q7" name="a1_q7" type="text" class="a" value="<?php echo ($old['a1_q7']); ?>" placeholder="这里输入问题7的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="a2_q7" name="a2_q7" type="text" class="a" value="<?php echo ($old['a2_q7']); ?>" placeholder="这里输入问题7的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="a3_q7" name="a3_q7" type="text" class="a" value="<?php echo ($old['a3_q7']); ?>" placeholder="这里输入问题7的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="a4_q7" name="a4_q7" type="text" class="a" value="<?php echo ($old['a4_q7']); ?>" placeholder="这里输入问题7的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="a5_q7" name="a5_q7" type="text" class="a" value="<?php echo ($old['a5_q7']); ?>" placeholder="这里输入问题7的第五个选项"> <br><br>
                    <div>
                        &emsp;&emsp;正确选项：
                        <input id="a_q7_1" name="a_q7" type="radio" value="1" <?php echo $old['a_q7']==1?"checked":"";?>>1
                        <input id="a_q7_2" name="a_q7" type="radio" value="2" <?php echo $old['a_q7']==2?"checked":"";?>>2
                        <input id="a_q7_3" name="a_q7" type="radio" value="3" <?php echo $old['a_q7']==3?"checked":"";?>>3
                        <input id="a_q7_4" name="a_q7" type="radio" value="4" <?php echo $old['a_q7']==4?"checked":"";?>>4
                        <input id="a_q7_5" name="a_q7" type="radio" value="5" <?php echo $old['a_q7']==5?"checked":"";?>>5
                    </div>
                </div>
                <div id="qnr8" name="qnr1" class="q">
                    <br> 问题8： <input id="q8" name="q8" type="text" value="<?php echo ($old['q8']); ?>" placeholder="这里输入第八个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="a1_q8" name="a1_q8" type="text" class="a" value="<?php echo ($old['a1_q8']); ?>" placeholder="这里输入问题8的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="a2_q8" name="a2_q8" type="text" class="a" value="<?php echo ($old['a2_q8']); ?>" placeholder="这里输入问题8的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="a3_q8" name="a3_q8" type="text" class="a" value="<?php echo ($old['a3_q8']); ?>" placeholder="这里输入问题8的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="a4_q8" name="a4_q8" type="text" class="a" value="<?php echo ($old['a4_q8']); ?>" placeholder="这里输入问题8的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="a5_q8" name="a5_q8" type="text" class="a" value="<?php echo ($old['a5_q8']); ?>" placeholder="这里输入问题8的第五个选项"> <br><br>
                    <div>
                        &emsp;&emsp;正确选项：
                        <input id="a_q8_1" name="a_q8" type="radio" value="1" <?php echo $old['a_q8']==1?"checked":"";?>>1
                        <input id="a_q8_2" name="a_q8" type="radio" value="2" <?php echo $old['a_q8']==2?"checked":"";?>>2
                        <input id="a_q8_3" name="a_q8" type="radio" value="3" <?php echo $old['a_q8']==3?"checked":"";?>>3
                        <input id="a_q8_4" name="a_q8" type="radio" value="4" <?php echo $old['a_q8']==4?"checked":"";?>>4
                        <input id="a_q8_5" name="a_q8" type="radio" value="5" <?php echo $old['a_q8']==5?"checked":"";?>>5
                    </div>
                </div>
                <div id="qnr9" name="qnr1" class="q">
                    <br> 问题9： <input id="q9" name="q9" type="text" value="<?php echo ($old['q9']); ?>" placeholder="这里输入第九个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="a1_q9" name="a1_q9" type="text" class="a" value="<?php echo ($old['a1_q9']); ?>" placeholder="这里输入问题9的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="a2_q9" name="a2_q9" type="text" class="a" value="<?php echo ($old['a2_q9']); ?>" placeholder="这里输入问题9的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="a3_q9" name="a3_q9" type="text" class="a" value="<?php echo ($old['a3_q9']); ?>" placeholder="这里输入问题9的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="a4_q9" name="a4_q9" type="text" class="a" value="<?php echo ($old['a4_q9']); ?>" placeholder="这里输入问题9的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="a5_q9" name="a5_q9" type="text" class="a" value="<?php echo ($old['a5_q9']); ?>" placeholder="这里输入问题9的第五个选项"> <br><br>
                    <div>
                        &emsp;&emsp;正确选项：
                        <input id="a_q9_1" name="a_q9" type="radio" value="1" <?php echo $old['a_q9']==1?"checked":"";?>>1
                        <input id="a_q9_2" name="a_q9" type="radio" value="2" <?php echo $old['a_q9']==2?"checked":"";?>>2
                        <input id="a_q9_3" name="a_q9" type="radio" value="3" <?php echo $old['a_q9']==3?"checked":"";?>>3
                        <input id="a_q9_4" name="a_q9" type="radio" value="4" <?php echo $old['a_q9']==4?"checked":"";?>>4
                        <input id="a_q9_5" name="a_q9" type="radio" value="5" <?php echo $old['a_q9']==5?"checked":"";?>>5
                    </div>
                </div>
                <div id="qnr10" name="qnr1" class="q">
                    <br> 问题10： <input id="q10" name="q10" type="text" value="<?php echo ($old['q10']); ?>" placeholder="这里输入第十个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="a1_q10" name="a1_q10" type="text" class="a" value="<?php echo ($old['a1_q10']); ?>" placeholder="这里输入问题10的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="a2_q10" name="a2_q10" type="text" class="a" value="<?php echo ($old['a2_q10']); ?>" placeholder="这里输入问题10的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="a3_q10" name="a3_q10" type="text" class="a" value="<?php echo ($old['a3_q10']); ?>" placeholder="这里输入问题10的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="a4_q10" name="a4_q10" type="text" class="a" value="<?php echo ($old['a4_q10']); ?>" placeholder="这里输入问题10的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="a5_q10" name="a5_q10" type="text" class="a" value="<?php echo ($old['a5_q10']); ?>" placeholder="这里输入问题10的第五个选项"> <br><br>
                    <div>
                        &emsp;&emsp;正确选项：
                        <input id="a_q10_1" name="a_q10" type="radio" value="1" <?php echo $old['a_q10']==1?"checked":"";?>>1
                        <input id="a_q10_2" name="a_q10" type="radio" value="2" <?php echo $old['a_q10']==2?"checked":"";?>>2
                        <input id="a_q10_3" name="a_q10" type="radio" value="3" <?php echo $old['a_q10']==3?"checked":"";?>>3
                        <input id="a_q10_4" name="a_q10" type="radio" value="4" <?php echo $old['a_q10']==4?"checked":"";?>>4
                        <input id="a_q10_5" name="a_q10" type="radio" value="5" <?php echo $old['a_q10']==5?"checked":"";?>>5
                    </div>
                </div>
                <div class="btn_group">
                    <button id="btn1" class="btn" type="submit" name="btn_fbupdt" value="a">修改</button>
                    <button id="btn2" class="btn" type="reset">清空</button>
                    <button id="btn3" class="btn" type="submit" name="btn_back" value="a">返回</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>