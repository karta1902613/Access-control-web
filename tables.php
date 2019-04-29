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
    <meta charset="utf-8">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
         chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
         https://code.google.com/p/chromium/issues/detail?id=332189
         */
    </script>
    <?php session_start(); ?>
    
</head>
<body>
<div class="logo">
    <h4><a href="index.php">門禁 <strong>監控</strong></a></h4>
</div>
<nav id="sidebar" class="sidebar nav-collapse collapse">
    <ul id="side-nav" class="side-nav">
        <li class="">
            <a href="index.php"><i class="fa fa-home"></i> <span class="name">主頁</span></a>
        </li>

        <li class="active">
            <a href="tables.php"><i class="fa fa-align-justify"></i>成員列表</a></li>

        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#elements-collapse"><i class="fa fa-wrench"></i> <span
                        class="name">成員功能</span></a>
            <ul id="elements-collapse" class="panel-collapse collapse ">
                <li class=""><a href="">新增</a></li>
                <li class=""><a href="">修改</a></li>
                <li class=""><a href="" data-no-pjax>刪除</a></li>
            </ul>
        </li>
    </ul>
    <?php
    include("mysql_connect.inc.php");
    $sql = "SELECT * FROM Member";
    $result = mysqli_query($link, $sql);
    ?>

</nav>
<div class="wrap">
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
                if ($_SESSION['id'] != null) {
                    echo '
                <li class="hidden-xs dropdown">
                    <a href="#" title="Account" id="account"
                       class="dropdown-toggle"
                       data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                    </a>
                    <ul id="account-menu" class="dropdown-menu account" role="menu">
                        <li role="presentation" class="account-picture">
                            <img src="img/a.png" alt="">
                                ' . $_SESSION['id'] . '
                        </li>
                        <li role="presentation">
                            <a href="#" class="link">
                                <i class="fa fa-user"></i>
                                選項1
                            </a>
                        </li>
                        
                        <li role="presentation">
                            <a href="#" class="link">
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
                } else {
                    echo '<li class="hidden-xs"><a href="login.html"><i class="glyphicon glyphicon-user"></i></a></li>';
                }
                ?>

            </ul>
            <form id="search-form" class="navbar-form pull-right" role="search">
                <input type="search" class="form-control search-query" placeholder="Search...">
            </form>

            </ul>



        </div>
    </header>
    <div class="content container">
        <h2 class="page-title">成員列表 - <span class="fw-semi-bold">會員資料</span></h2>
        <div class="row">
            <div class="col-md-12">
                <section class="widget">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox" data-check-all>
                                    <label for="checkbox1"></label>
                                </div>
                            </th>
                            <th>ID</th>
                            <th>卡號</th>
                            <th>Info</th>
                            <th></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $num = 1;
                        while ($row = mysqli_fetch_array($result)) {
                            $num++;
                            echo "<tr>";
                            echo "<td>
                                <div class=\"checkbox\">
                                    <input id=\"checkbox$num\" type=\"checkbox\">
                                    <label for=\"checkbox$num\"></label>
                                </div>
                            </td>";
                            echo "<td>";
                            echo $row["Name"] . "<br>";
                            echo "</td>";
                            echo "<td>";
                            echo $row["ID"] . "<br>";
                            echo "</td>";
                            echo "<td>";
//                                if ($row["Type"]=='已註冊')
//                                    echo '<span class="label label-success"> '.$row["Type"] .'</span><br>';
//                                else
//                                    echo '<span class="label label-warning"> '.$row["Type"] .'</span><br>';
                            echo "<form method=\"post\" action='changeWaiting.php'><select name='change_type' class='list1' style='background-color: #616971'>";
                            if ($row["Type"] == '已註冊') {
                                echo '<option value="' . $row["Type"] . '" > ' . $row["Type"] . '</option>
                                      <option value="已凍結" > 已凍結</option>';
                                echo "<input type=\"hidden\" name=\"ID\" value=\"$row[2]\" />";
                            } else {
                                echo '<option value="' . $row["Type"] . '" > ' . $row["Type"] . '</option>
                                      <option value="已註冊"> 已註冊</option>';
                                echo "<input type=\"hidden\" name=\"ID\" value=\"$row[2]\" />";
                            }
                            echo "</select>";
                            echo "</td>";
                            echo "<td align='left'> <p align='center'><button type='submit' id='Change' value='修改' style='background-color: #616971'>修改</button></p>";
                            echo "</form>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        ?>

                        </tbody>
                    </table>

                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

            </div>
        </div>
        <!--                </section>-->
    </div>

</div>

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
            <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left
            </button>
            <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">
                Right
            </button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show
            </button>
            <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide
            </button>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
    <% auto = sidebarState == 'auto'%>
    <% if (auto) {%>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm">Icons
    </button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Auto
    </button>
    <%} else {%>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm">Auto
    </button>
    <% } %>
</script>

<!-- page specific scripts -->
<!-- page specific libs -->
<script src="lib/jquery.sparkline/index.js"></script>

<!-- page application js -->
<script src="js/tables-static.js"></script>

</body>
</html>