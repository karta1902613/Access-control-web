<!-- light-blue - v4.0.1 - 2018-10-31 -->

<!DOCTYPE html>
<html>
<head>
    <title>門禁系統監控</title>

    <link href="css/application.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <meta charset="utf-8">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <!--<link rel="stylesheet" href="css/bootstrap.css">-->
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <!--<link href="css/style.css" rel='stylesheet' type='text/css' />-->
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css" type="text/css"/>
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
<!--    <script src="js/jquery2.0.3.min.js"></script>-->
    <script src="js/modernizr.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/screenfull.js"></script>
    <!-- datepicker   -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="gijgo.min.js"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <?php session_start(); ?>

    <script>
        $(function () {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }


            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            });
        });

    </script>
    <!-- charts -->
    <script src="js/raphael-min.js"></script>
    <script src="js/morris.js"></script>
    <link rel="stylesheet" href="css/morris.css">
    <!-- //charts -->
    <!--skycons-icons-->
    <script src="js/skycons.js"></script>
    <!--//skycons-icons-->
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
           chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
                      https://code.google.com/p/chromium/issues/detail?id=332189
        */
    </script>

</head>
<body>
<div class="logo">
    <h4><a href="index.php">門禁 <strong>監控</strong></a></h4>
</div>
<nav id="sidebar" class="sidebar nav-collapse collapse">
    <ul id="side-nav" class="side-nav">
        <li class="active">
            <a href="index.php"><i class="fa fa-home"></i> <span class="name">主頁</span></a>
        </li>
        <!--                <li class="">-->
        <!--                    <a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>-->
        <!--                </li>-->
        <li class="">
            <a href="tables.php"><i class="fa fa-align-justify"></i>成員列表</a></li>
        </li>
        <!--                <li class="">-->
        <!--                    <a href="notifications.html"><i class="fa fa-bell"></i> Notifications</a></li>-->
        <!--                </li>-->
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#elements-collapse"><i class="fa fa-wrench"></i> <span class="name">成員功能</span></a>
            <ul id="elements-collapse" class="panel-collapse collapse ">
                <li class=""><a href="">新增</a></li>
                <li class=""><a href="">修改</a></li>
                <li class=""><a href="" data-no-pjax>刪除</a></li>
            </ul>
        </li>
    </ul>


</nav>    <div class="wrap">
    <header class="page-header">
        <div class="navbar">
            <ul class="nav navbar-nav navbar-right pull-right">
                <li class="visible-phone-landscape">
                    <a href="#" id="search-toggle">
                        <i class="fa fa-search"></i>
                    </a>
                </li>

                <li class="divider"></li>
                <li class="hidden-xs">
                    <a href="#" id="settings"
                       title="Settings"
                       data-toggle="popover"
                       data-placement="bottom">
                        <i class="glyphicon glyphicon-cog"></i>
                    </a>
                </li>
                <?php
                if($_SESSION['id'] != null)
                {echo'
                <li class="hidden-xs dropdown">
                    <a href="#" title="Account" id="account"
                       class="dropdown-toggle"
                       data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                    </a>
                    <ul id="account-menu" class="dropdown-menu account" role="menu">
                        <li role="presentation" class="account-picture">
                            <img src="img/a.png" alt="">
                                '.$_SESSION['id'].'
                        </li>
                        <li role="presentation">
                            <a href="#" class="link">
                                <i class="fa fa-user"></i>
                                選項1
                            </a>
                        </li>
                        
                        <li role="presentation">
                            <a href="index.php" class="link">
                                <i class="fa fa-inbox"></i>
                                首頁
                            </a>
                        </li>
                        
                        <li role="presentation">
                            <a href="logout.php" class="link">
                                <i class="glyphicon glyphicon-off"></i>
                                登出
                            </a>
                        </li>
                    </ul>
                </li>';
                }else{
                    echo'<li class="hidden-xs"><a href="login.html"><i class="glyphicon glyphicon-user"></i></a></li>';
                }
                ?>

                <li class="visible-xs">
                    <a href="#"
                       class="btn-navbar"
                       data-toggle="collapse"
                       data-target=".sidebar"
                       title="">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
<!--                <li class="hidden-xs"><a href="login.html"><i class="glyphicon glyphicon-off"></i></a></li>-->
            </ul>

        </div>
    </header>        <div class="content container">
        <h2 class="page-title"><i class="fa fa-steam"></i>門禁紀錄圖表 <small>紀錄<?php echo $_POST["datepicker"]; ?>使用狀況</small></h2>
        <div class="row">
            <div class="col-lg-8">
                <section class="widget">
                    <header>
                        <h4>
                            橫向為時間，縱向為次數。
                        </h4>
                        <div class="widget-controls">
                            <!--                            <a title="Options" href="#"><i class="glyphicon glyphicon-cog"></i></a>-->
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <?php
                    include("mysql_connect.inc.php");
                    $datepicker=$_POST['datepicker'];

                    $sql = "SELECT * FROM Record WHERE Record.Time like '%$datepicker%'";
                    $result = mysqli_query($link,$sql);
                    $s=6;$e=7;
                    $arr=array(0,0,0,0,0,0,0,0,0);
                    for ( $i=0 ; $i<9 ; $i++ ) {
                        $s=str_pad($s,2,"0",STR_PAD_LEFT);
                        $e=str_pad($e,2,"0",STR_PAD_LEFT);
                        $sqc = "SELECT COUNT(Time) FROM Record WHERE Record.Time like '%$datepicker%' AND (Record.Time like '%$s:%' OR Record.Time like '%$e:%');";
                        //echo $sqc ,'<br>';
                        $result4 = mysqli_query($link, $sqc);
                        $s+=2;
                        $e+=2;
                        while ($row = mysqli_fetch_array($result4)) {
                            $arr[$i] = $row["COUNT(Time)"];
                            //echo $arr[$i];
                        }
                    }
                    ?>


                    <div class="body no-margin">
                        <div id="graph9">

                            <script>
                                var day_data = [
                                    <?php
                                    $t1=6;$t2=8;
                                    for($j=0;$j<9;$j++){
                                        echo '{"elapsed": "'.$t1.'~'.$t2.'", "value": '. $arr[$j].'},';
                                        $t1+=2;
                                        $t2+=2;}
                                    ?>
                                ];
                                Morris.Line({
                                    element: 'graph9',
                                    data: day_data,
                                    xkey: 'elapsed',
                                    ykeys: ['value'],
                                    labels: ['人數'],
                                    parseTime: false
                                });
                            </script>

                        </div>

                    </div>
                </section>
                <section class="widget">
                    <header>
                        <h4>
                            使用紀錄
                            <small>
                                <?php echo $_POST["datepicker"]; ?>使用狀況
                            </small>
                        </h4>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-plus"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-minus"></i></a>
                            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>

                    <div class="widget-table-overflow">
                        <thead>
                        <tr>


                            <form method="post" action="">
                                <input type="text" readonly name="datepicker" id="datepicker" width="276" value="<?php echo $datepicker?>">
                                <input type="submit" name="button" id="button" class="form-control search-query" style="background-color: #00acc1"  value="搜尋">
                            </form>
                        </thead>


                            <script>
                                $('#datepicker').datepicker();
                            </script>
                            <?php
                                echo '<script>';
                                echo 'var d = new Date();';
                                echo 'var n = d.getDate();';
                                echo 'var y = d.getFullYear();';
                                echo 'var m = d.getMonth()+1;';
                                echo 'if (m<10){m="0"+m;}';
                                echo 'if (n<10){n="0"+n;}';
                                if($datepicker==null) {
                                    echo 'document.getElementById("datepicker").value = y+"/"+m+"/"+n;';
                                    echo 'document.getElementById("button").click();';
                                }
                                echo '</script>';
                            ?>
                        </tr>
<!--                        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>-->
                        <table class="table table-striped table-lg mt-sm mb-0 sources-table">

                            <thead>
                            <tr>
                                <th class="source-col-header">State</th>
                                <th>Name</th>
                                <th>Time</th>

                            </tr>
                            </thead>


                            <tbody>

                            <?php
                            while($row=mysqli_fetch_array($result))
                            {
                                echo"<tr>";

                                echo"<td>";
                                if($row["State"]=='已註冊')
                                    echo '<span class="label label-success"> '.$row["State"] .'</span><br>';
                                elseif ($row["State"]=='未註冊'){
                                    echo '<span class="label label-important"> '.$row["State"] .'</span>';
                                    echo '<form name="form" method="post" action="">';
                                    echo "<input type=\"hidden\" name=\"number\" value=\"$row[0]\" />";
                                    echo "<input type=\"hidden\" name=\"ID\" value=\"$row[4]\" />";
                                    echo "<input type=\"text\" name=\"name\" placeholder=\"請填入姓名\" style=\"color: black;\" />";
                                    echo '<button type="submit" id="Register" style="color: black;" >註冊</button>';
                                    echo "</form><br>";
                                }
                                elseif ($row["State"]=='已凍結')
                                    echo '<span class="label label-warning"> '.$row["State"] .'</span><br>';
                                echo"</td>";
                                echo'<td>'.$row["Name"] .'</td>';
                                echo'<td>'.$row["Time"] .'</td>';
                                echo"</tr>";
                            }

                            ?>


                            </tbody>
                        </table>
                    </div>
                </section>

            </div>
            <div class="col-lg-4">

                <section class="widget widget-tabs">
                    <header>
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#stats" data-toggle="tab">最後登入</a>
                            </li>
                            <li>
                                <a href="#report" data-toggle="tab">成員</a>
                            </li>
                            <!--                            <li>-->
                            <!--                                <a href="#dropdown1" data-toggle="tab">Commenters</a>-->
                            <!--                            </li>-->
                        </ul>
                    </header>
                    <div class="body tab-content">
                        <div id="stats" class="tab-pane active clearfix">
                            <h5 class="tab-header"> Last logged-in users</h5>
                            <ul class="news-list">
                                <?php
                                include("mysql_connect.inc.php");
                                $sql = "SELECT * FROM loginLog order by time desc limit 5";
                                $result = mysqli_query($link,$sql);
                                ?>
                                <?php
                                while($row=mysqli_fetch_array($result))
                                echo'

                                <li>
                                    <img src="img/a.png" alt="" class="pull-left img-circle"/>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">'.$row["id"] .'</a></div>
                                        <div class="position">一般成員</div>
                                        <div class="time">Last logged-in: '.$row["time"] . '  login IP:'.$row["ip"] . ' </div>
                                    </div>
                                </li>'
                                ?>
                            </ul>
                        </div>
                        <div id="report" class="tab-pane">
                            <h5 class="tab-header">成員一覽</h5>
                            <ul class="news-list news-list-no-hover">
                                <li>
                                    <img src="img/a.png" alt="" class="pull-left img-circle"/>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">poi</a></div>
                                        <div class="options">
                                            <button class="btn btn-xs btn-success">

                                                管理員
                                            </button>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <img src="img/a.png" alt="" class="pull-left img-circle"/>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">Kevin</a></div>
                                        <div class="options">
                                            <button class="btn btn-xs btn-success">

                                                管理員
                                            </button>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <img src="img/a.png" alt="" class="pull-left img-circle"/>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">tank</a></div>
                                        <div class="options">

                                            <button class="btn btn-xs btn-warning">

                                                一般成員
                                            </button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <img src="img/a.png" alt="" class="pull-left img-circle"/>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">helloworld</a></div>
                                        <div class="options">

                                            <button class="btn btn-xs btn-warning">

                                                一般成員
                                            </button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <img src="img/a.png" alt="" class="pull-left img-circle"/>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">world</a></div>
                                        <div class="options">

                                            <button class="btn btn-xs btn-warning">

                                                一般成員
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </section>

            </div>
        </div>
        <?php
        echo '<script>';
        echo '$(document).ready(function(){';
        echo '$(\'#Register\').click(function(){';
        echo 'register();';
        echo '});';
        echo '});';
        echo 'function register() {';
        $number = $_POST['number'];
        $name = $_POST['name'];
        $id = $_POST['ID'];
        mysqli_query($link,"UPDATE Record SET Name='$name' ,State='已註冊' WHERE Number='$number'");
        mysqli_query($link,"INSERT INTO Member (Name,ID,Type) VALUES ('$name',$id,'已註冊')");
        echo '}';
        echo '</script>';
        ?>
        <footer class="content-footer">
            陳麒安 劉凱文 張廷毓
        </footer>
    </div>
    <div class="loader-wrap hiding hide">
        <i class="fa fa-circle-o-notch fa-spin"></i>
    </div>
</div>
<!-- common libraries. required for every page-->
<script src="lib/jquery/dist/jquery.min.js"></script>
<script src="lib/jquery-pjax/jquery.pjax.js"></script>
<script src="lib/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
<script src="lib/widgster/widgster.js"></script>
<script src="lib/underscore/underscore.js"></script>

<!-- common application js -->
<script src="js/app.js"></script>
<script src="js/settings.js"></script>

<!-- common templates -->
<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
    <% auto = sidebarState == 'auto'%>
    <% if (auto) {%>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Auto</button>
    <%} else {%>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm">Auto</button>
    <% } %>
</script>

<!-- page specific scripts -->
<!-- page libs -->
<script src="lib/slimScroll/jquery.slimscroll.min.js"></script>
<script src="lib/jquery.sparkline/index.js"></script>

<script src="lib/backbone/backbone.js"></script>
<script src="lib/backbone.localStorage/build/backbone.localStorage.min.js"></script>

<script src="lib/d3/d3.min.js"></script>
<script src="lib/nvd3/build/nv.d3.min.js"></script>

<!-- page application js -->
<script src="js/index.js"></script>
<script src="js/chat.js"></script>

<!-- page template -->
<script type="text/template" id="message-template">
    <div class="sender pull-left">
        <div class="icon">
            <img src="img/2.png" class="img-circle" alt="">
        </div>
        <div class="time">
            just now
        </div>
    </div>
    <div class="chat-message-body">
        <span class="arrow"></span>
        <div class="sender"><a href="#">Tikhon Laninga</a></div>
        <div class="text">
            <%- text %>
        </div>
    </div>
</script>

</body>
</html>