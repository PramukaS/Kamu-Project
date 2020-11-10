<?php  include('process.php'); ?>
<?php 
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($db, "SELECT * FROM accounts WHERE id=$id");

    if (mysqli_num_rows($record) == 1 ) {
      $n = mysqli_fetch_array($record);
      $username = $n['username'];
      $usertype = $n['usertype'];
      $emailid = $n['emailid'];
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<!--<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Manage Users</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">-->

	<link rel="stylesheet" type="text/css" href="css/adminstyle2.css">
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="css/adminstyle.css">
  <link rel="stylesheet" type="text/css" href="css/adminstyle-responsive.css">

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
      <a href="#" class="logo"><b>Kamu<span>.LK</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!--
        MAIN SIDEBAR MENU -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="#"><img src="images/Juzly.jpg" class="img-circle" width="110" height="90"></a></p>
          <h5 class="centered">Juzly Ahamed</h5>
          <li class="mt">
            <a href="admin.php">
              <i class="fa fa-dashboard"></i>
              <span>Home</span>
              </a>
          </li>
          <li class="sub-menu">
            <a class="active" href="manageusers.php">
              <i class="fa fa-desktop"></i>
              <span>User Management</span>
              </a>
          </li>
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
            <a href="admininbox.php">
              <i class="fa fa-envelope"></i>
              <span>Inbox </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="adminreport.php">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Reports</span>
              </a>
            
          </li>
          <li class="sub-menu">
            <a href="#">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <section id="main-content">
      <section class="wrapper">

        <?php if (isset($_SESSION['message'])): ?>
          <div class="msg">
            <?php 
              echo $_SESSION['message']; 
              unset($_SESSION['message']);
            ?>
          </div>
        <?php endif ?>

        <?php $results = mysqli_query($db, "SELECT * FROM accounts"); ?>
  

        <div class="tableview">
          <table class="table" border="1em">
            <tr> 
              <th colspan="5"><h2>User Profiles</h2></th>
            </tr>
            <tr>
              <th>User ID</th>
              <th>Username</th>
              <th>Usertype</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
            <?php while ($row = mysqli_fetch_array($results)) { ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['usertype'];?></td>
                <td><?php echo $row['emailid'];?></td>
                <td><a href="manageusers.php?edit=<?php echo $row['id'];?>"
                  id="update">Edit</a>
                  <a href="process.php?delete=<?php echo $row['id'];?>"
                   id="delete">Delete</a>

                </td>
              </tr>


            <?php
            }
            ?>
          </table>
          
        </div>
        <div>
          <form action="process.php" method='POST'class="userform">
            <div class="adduserview">
              <table class="addusertable">
                <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
              </tr>
              <tr>
                <td><label>Username</label></td>
                <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
              </tr>
               
              <tr>
                <td><label>User Email</label></td>
                <td><input type="email" name="emailid" value="<?php echo $emailid; ?>"></td>
              </tr>
              <tr>
                <td><label for="user">User Type</label></td>
                <td><input type = "text" name="usertype"value="<?php echo $usertype; ?>">
                </td>
              </tr>
              <tr>
                <td>
                  <?php if($update == true): ?>
                    <button type="submit" id="add" name="update">Update</button></td>
              </tr>
              <tr>
                <td><?php else: ?><button type="submit" id="add" name="save">Save</button></td>
              </tr>
            <?php endif; ?>
            </table>
            </div>
          </form>
        </div>
      </section>
    </section>
</body>

</html>

