<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Reports</title>
	<link rel="stylesheet" type="text/css" href="css/adminstyle2.css">
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="css/adminstyle.css">
  <link rel="stylesheet" type="text/css" href="css/adminstyle-responsive.css">
  <link rel="stylesheet" href="css/styles.css">
 
  <script src="lib/chart-master/Chart.js"></script>
</head>

<body>
  <section id="container">
    <!-- TOP BAR CONTENT & NOTIFICATIONS-->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="#" class="logo"><b>&#8287 &#8287 &#8287 &#8287 &#8287 &#8287<span><t/>&#8287 &#8287<t/><t/></span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-tasks"></i>
              </a>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-envelope-o"></i>
              </a>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-bell-o"></i>
              </a>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="capsule">
          <div class="profilenav">
              <div class="right">
                  <ul>
                    <li>
                      <a href="#">
                        <p style="color:#414141;">Kamu.lk<br> <span>Admin</span></p><img src="images/Profile.png" alt="Admin" width="40"><i class="fa fa-angle-down"></i>
                      </a>
                       
                      <div class="dropdown">
                          <ul>
                            <li><a href="#"><i class="fa fa-user"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i>Settings</a></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out"></i>Signout</a></li>
                        </ul>
                      </div>
                      
                    </li>
                </ul>
              </div>
          </div>
      </div>

      <script>
        document.querySelector(".right ul li").addEventListener("click", function(){
            this.classList.toggle("active");
        });
      </script>
    </header>
    <!--header end-->
    <!--
        MAIN SIDEBAR MENU -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="#"><img src="images/logo.png" width="120" height="60"></a></p>
          <h5 class="centered"></h5>
          <li class="mt">
            <a href="admin.php">
              <i class="fa fa-dashboard"></i>
              <span>Home</span>
              </a>
          </li>
          <li class="sub-menu">
            <a  href="manageusers.php">
              <i class="fa fa-desktop"></i>
              <span>User Management</span>
              </a>
          </li>
            <!--<li class="sub-menu">
            <a href="manageposts.php">
              <i class="fa fa-cogs"></i>
              <span>Post Management</span>
              </a>
          </li>-->
          <li class="sub-menu">
            <a href="income.php">
              <i class="fa fa-book"></i>
              <span>Income</span>
              </a>
          <li>
            <a href="admininbox.php">
              <i class="fa fa-envelope"></i>
              <span>Inbox </span>
              </a>
          </li>
          <li class="sub-menu">
            <a class="active" href="adminreport.php">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Reports</span>
              </a>
          </li>
          <!--<li class="sub-menu">
            <a href="adminchat.php">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
          </li>-->
          <li>
            <a href="map.php">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
            </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>USER VISITS</h3>
            </div>
            <div class="custom-bar-chart">
              <ul class="y-axis">
                <li><span>10.000</span></li>
                <li><span>8.000</span></li>
                <li><span>6.000</span></li>
                <li><span>4.000</span></li>
                <li><span>2.000</span></li>
                <li><span>0</span></li>
              </ul>
              <div class="bar">
                <div class="title">JAN</div>
                <div class="value tooltips" style= "height:35%" data-original-title="3.500" data-toggle="tooltip" data-placement="top">35%</div>
              </div>
              <div class="bar ">
                <div class="title">FEB</div>
                <div class="value tooltips" style= "height:60%" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
              </div>
              <div class="bar ">
                <div class="title">MAR</div>
                <div class="value tooltips" style= "height:20%"data-original-title="2.000" data-toggle="tooltip" data-placement="top">20%</div>
              </div>
              <div class="bar ">
                <div class="title">APR</div>
                <div class="value tooltips" style= "height:85%"data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
              </div>
              <div class="bar">
                <div class="title">MAY</div>
                <div class="value tooltips" style= "height:72%"data-original-title="7.200" data-toggle="tooltip" data-placement="top">72%</div>
              </div>
              <div class="bar ">
                <div class="title">JUN</div>
                <div class="value tooltips" style= "height:85%"data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
              </div>
              <div class="bar">
                <div class="title">JUL</div>
                <div class="value tooltips" style= "height:65%" data-original-title="6.500" data-toggle="tooltip" data-placement="top">65%</div>
              </div>
            </div>
          </div>
        </div>
            <div class="tableview">
               <table class="sitestats" class="table" border="0" style="background-color: #032959;">
               <tr> 
                <td colspan="2" rowspan="5">
                  <h3>REVENUE</h><br>
                  <br>
                  <i class="fa fa-dollar fa-3x"></i><br>
                  <h3>Month Income<h3><br><b><h5><i class="fa fa-dollar"></i> 16,238</h5><br>
                </td>
              </tr>
              </table>
            </div>
            <div class="tableview">
               <table class="sitestats" class="table" border="0" style="background-color: #454C4E;">
               <tr> 
                <td colspan="2" rowspan="5">
                  <h3>Site Statistics<h3>
                  <br><i class="fa fa-eye fa-3x"></i><br>
                  <p>+ 321 NEW VISITS</p>
                  <br><b><h5><i class="fa fa-trophy"></i> 7,638</h5><br>
                </td>
              </tr>
              </table>
            </div>
            <div class="tableview">
             <table class="userstats" class="table" border="0" style="background-color: #337ab7;">
             <tr> 
              <td colspan="2" rowspan="5">
                <br><i class="fa fa-user fa-3x"></i><br>
                <h3>Registered User<h3><br><b><i class="fa fa-database" aria-hidden="true"></i>&#8287 &#8287 654</b>
              </td>
            </tr>
          </table>
        </div>
        <div class="tableview">
             <table class="userstats" class="table" border="0" style="background-color: #5cb85c">
             <tr> 
              <td colspan="2" rowspan="5">
                <br><i class="fa fa-shopping-bag fa-3x"></i><br>
                <h3>Sellers<h3><br><b><i class="fa fa-database" aria-hidden="true"></i>&#8287 &#8287 63</b>
              </td>
            </tr>
          </table>
        </div>
        <div class="tableview">
             <table class="userstats" class="table" border="0" style="background-color: #FFC300 ">
             <tr> 
              <td colspan="2" rowspan="5">
                <br><i class="fa fa-bicycle fa-3x"></i><br>
                <h3>Delivery Person<h3><br><b><i class="fa fa-database" aria-hidden="true"></i>&#8287 &#8287 187</b>
              </td>
            </tr>
          </table>
        </div>
        <div class="tableview">
             <table class="userstats" class="table" border="0" style="background-color: #FF5733"> 
             <tr> 
              <td colspan="2" rowspan="5">
                <br><i class="fa fa-heart fa-3x"></i><br>
                <h3>Nutritionist<h3><br><b><i class="fa fa-database" aria-hidden="true"></i>&#8287 &#8287 09</b>
              </td>
            </tr>
          </table>
        </div>
            
          </div>
      </section>
    </section>

</body>

</html>

