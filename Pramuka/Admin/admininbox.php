<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Inbox</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/adminstyle2.css">
  	<link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet"/>
  	<link rel="stylesheet" type="text/css" href="css/adminstyle.css">
  	<link rel="stylesheet" type="text/css" href="css/adminstyle-responsive.css">
    <link rel="stylesheet" href="css/styles.css">
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
      <div id="sidebar" class="nav-collapse">
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
          <!--<li class="sub-menu">
            <a  href="manageusers.php">
              <i class="fa fa-desktop"></i>
              <span>User Management</span>
              </a>
          </li>-->
          <li class="sub-menu">
            <a href="manageposts.php">
              <i class="fa fa-cogs"></i>
              <span>Post Management</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="income.php">
              <i class="fa fa-book"></i>
              <span>Income</span>
              </a>
          <li>
            <a class="active" href="admininbox.php">
              <i class="fa fa-envelope"></i>
              <span>Inbox </span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="adminreport.php">
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
       
        <div class="tableview">
          <table id="mailnav" class="table" border="0" style="position:relative; left:5px; top:2px; background-color: #fff; color: #000;  ">
            <tr> 
              <td colspan="2"><button style="border-radius: 10px; padding:6px 8px;" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&#8287 &#8287 &#8287 Compose</button></td>
            </tr>
            
            <tr><th colspan="2" style="position:relative; left:0px; top:2px;"><i class="fa fa-inbox"></i>&#8287 &#8287 &#8287 Recieved</th></tr>
             <tr> <th colspan="2" style="position:relative; left:-12px; top:2px;"><i class="fa fa-envelope-o"></i>&#8287 &#8287 &#8287 Send</th></tr>
              <tr><th colspan="2" style="position:relative; left: 2px; top:2px;"><i class="fa fa-exclamation-circle"></i>&#8287 &#8287 &#8287 Important</th></tr>
              <tr><th colspan="2" style="position:relative; left: -11px; top:2px;"><i class="fa fa-trash-o "></i>&#8287 &#8287 &#8287 Trash</th></tr>

              <tr><th colspan="2" style="position:relative; left:-7px; top:2px;"><i class="fa fa-star"></i>&#8287 &#8287 &#8287 Starred</th></tr>
          </table>
        </div>
          <div class="tableview">
           <table id="mailchart" class="table" border="0">
            <tr><th></th></tr>
            <tr style="background-color:#fff;"> 
              <td colspan="8"><h2 style="color: #000;">Inbox</h2></td>
            </tr>
            
            <tr>
              <td><input type="checkbox" name="mark"></td>
              <td>&#8287 &#8287<i class="fa fa-star"></i></td>
              <td>Pathmika</td>
              <td>Hi, There I've to convey...</td>
              <td>15th Nov</td>
              <td><i class="fa fa-trash-o "></i>&#8287 &#8287</td>
              <td><i class="fa fa-envelope-open"></i>&#8287 &#8287</td>
              <td><i class="fa fa-mail-reply"></i>&#8287 &#8287</td>
            </tr>
             <tr>
              <td><input type="checkbox" name="mark"></td>
              <td>&#8287 &#8287<i class="fa fa-star"></i></td>
              <td>Pramuka</td>
              <td>Hey I've finished the task..</td>
              <td>14th Nov</td>
              <td><i class="fa fa-trash-o "></i>&#8287 &#8287</td>
              <td><i class="fa fa-envelope-open"></i>&#8287 &#8287</td>
              <td><i class="fa fa-mail-reply"></i>&#8287 &#8287</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="mark"></td>
              <td>&#8287 &#8287<i class="fa fa-star"></i></td>
              <td>Shifna</td>
              <td>Send me those restaurant docs...</td>
              <td>12th Nov</td>
              <td><i class="fa fa-trash-o "></i>&#8287 &#8287</td>
              <td><i class="fa fa-envelope-open"></i>&#8287 &#8287</td>
              <td><i class="fa fa-mail-reply"></i>&#8287 &#8287</td>

            </tr>
            <tr>
              <td><input type="checkbox" name="mark"></td>
              <td>&#8287 &#8287<i class="fa fa-star"></i></td>
              <td>Supervisor</td>
              <td>Did You all finish the tasks...</td>
              <td>08th Nov</td>
              <td><i class="fa fa-trash-o "></i>&#8287 &#8287</td>
              <td><i class="fa fa-envelope-open"></i>&#8287 &#8287</td>
              <td><i class="fa fa-mail-reply"></i>&#8287 &#8287</td>

            </tr>
            <tr>
              <td><input type="checkbox" name="mark"></td>
              <td>&#8287 &#8287<i class="fa fa-star"></i></td>
              <td>Ahshaf Nisthar</td>
              <td>I've trouble while sign in...</td>
              <td>3rd Nov</td>
              <td><i class="fa fa-trash-o "></i>&#8287 &#8287</td>
              <td><i class="fa fa-envelope-open"></i>&#8287 &#8287</td>
              <td><i class="fa fa-mail-reply"></i>&#8287 &#8287</td>

            </tr>
            <tr>
              <td><input type="checkbox" name="mark"></td>
              <td>&#8287 &#8287<i class="fa fa-star"></i></td>
              <td>Pramuka</td>
              <td>Did you clear the pending requests</td>
              <td>24th Oct</td>
              <td><i class="fa fa-trash-o "></i>&#8287 &#8287</td>
              <td><i class="fa fa-envelope-open"></i>&#8287 &#8287</td>
              <td><i class="fa fa-mail-reply"></i>&#8287 &#8287</td>

            </tr>
            <tr>
              <td><input type="checkbox" name="mark"></td>
              <td>&#8287 &#8287<i class="fa fa-star"></i></td>
              <td>Pathmika</td>
              <td>do we able do that within this...</td>
              <td>14th Oct</td>
              <td><i class="fa fa-trash-o "></i>&#8287 &#8287</td>
              <td><i class="fa fa-envelope-open"></i>&#8287 &#8287</td>
              <td><i class="fa fa-mail-reply"></i>&#8287 &#8287</td>

            </tr>
          </table>
          </div>
          
            
      </section>
      <!-- /wrapper -->
    </section>
</body>

</html>

