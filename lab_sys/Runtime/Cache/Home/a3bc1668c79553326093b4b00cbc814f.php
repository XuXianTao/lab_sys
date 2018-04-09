<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>lab_sys</title>
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/header.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/nav.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/main_fbrls.css">
    <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
    <script type="text/javascript" src="/lab_sys/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/lab_sys/Public/lab_sys/js/init.js"></script>
    <script type="text/javascript" src="/lab_sys/Public/lab_sys/js/set_dat.js"></script>
    <input type="hidden" name="uname" id="uname" value="<?php echo ($admin['nam']); ?>" />
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
        
        select {
            display: inline-block;
        }
    </style>
</head>

<body onload="init();set_deft();set_opt()">
    <div id="header_wrapper">
        <div id="header">
            <div id="logo"><img src="/lab_sys/Public/lab_sys/img/logo.jpg" alt="中山大学" /></div>
            <div id="welcome">欢迎！</div>
        </div>
    </div>
    <div id="navigation_wrapper">
        <div id="navigation">
            <div class="nav"><a href="main_m">主页</a></div>
            <div class="nav"><a href="excpsts">异常情况</a></div>
            <div class="nav"><a href="excpsta">故障统计</a></div>
            <div class="nav"><a href="fbman">原始问卷管理</a></div>
            <div class="nav"><a href="fbman2">已发布问卷管理</a></div>
        </div>
    </div>
    <div id="main">
        <form id="form" action="/lab_sys/index.php/Home/feedback/fbrls_" method="POST" onsubmit="return onDestroy()">
            <fieldset>
                <legend>问卷发布：务必进行核对后再进行发布！</legend>
                <div class="choice">
                    问卷：<b><?php echo I('que');;?></b>
                </div>
                <div class="choice">
                    上课课室：
                    <select name="cla">
                        <option value="C102">C102</option>
                        <option value="C103">C103</option>
                        <option value="C104">C104</option>
                        <option value="C303">C303</option>
                    </select>
                </div>
                <div class="choice">
                    上课日：
                    <select name="wDay">
                        <option value="1">周一</option>
                        <option value="2">周二</option>
                        <option value="3">周三</option>
                        <option value="4">周四</option>
                        <option value="5">周五</option>
                        <option value="6">周六</option>
                        <option value="7">周日</option>
                    </select>
                </div>
                <div class="choice">
                    上课时段：
                    <select name="timInt">
                        <option>1-2节(8:00-9:40)</option>
                        <option>3-4节(10:00-11:40)</option>
                        <option>1-4节(8:00-11:40)</option>
                        <option>5-6节(14:20-16:00)</option>
                        <option>7-8节(16:20-18:00)</option>
                        <option>5-8节(14:20-18:00)</option>
                        <option>5-6节(14:20-16:00)</option>
                        <option>7-8节(16:20-18:00)</option>
                        <option>9-10节(19:00-20:40)</option>
                        <option>10-11节(20:50-21:30)</option>
                        <option>9-11节(19:00-21:30)</option>
                    </select>
                </div>
                <div class="choice">
                    截止时间：
                    <select id="year" name = "year">
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                        <option>2026</option>
                        <option>2027</option>
                        <option>2028</option>
                        <option>2029</option>
                    </select>
                    <p>年</p>
                    <select id="month" name="month">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                    <p>月</p>
                    <select id="day" name="day">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                    </select>
                    <p>日</p>
                </div>
                <div class="btn_group">
                    <button id="btn1" class="btn" type="submit" name="btn_fbrls" value="true">发布</button>
                    <button id="btn2" class="btn" type="submit" name="btn_reback" value="true">返回</button>
                </div>
                <input type="hidden" name="que" value="<?php echo I('que');?>">
            </fieldset>
        </form>
    </div>
</body>

</html>