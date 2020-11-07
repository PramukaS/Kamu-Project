<!DOCTYPE html>
<html>
<head>
	<title>Kamu Nutritionist</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/nutritionist.css">
</head>

<body class="overlay-scrollbar">
	<!-- navbar -->
	<div class="navbar">
		<!-- nav left -->
		<ul class="navbar-nav">
            <li class="nav-item">
				<a class="nav-link">
					<img src="images/menu.png" width="25px" onclick="collapseSidebar()"></i>
				</a>
			</li>
			<li class="nav-item">
				<img src="images/logo.png" alt="ATPro logo" class="logo logo-light">
			</li>
		</ul>
		<!-- end nav left -->
		<!-- nav right -->
		<ul class="navbar-nav nav-right">
			<li class="nav-item avt-wrapper">
				<div class="avt dropdown">
					<img src="images/user.png" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
					<ul id="user-menu" class="dropdown-menu">
						<li  class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<span>Profile</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<span>Settings</span>
							</a>
						</li>
						<li  class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<span>Logout</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<!-- end nav right -->
	</div>
	<!-- end navbar -->
	<!-- sidebar -->
	<div class="sidebar">
		<ul class="sidebar-nav">
			<li class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<span>
						Dashboard
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link active">
					<span>Lorem</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<span>Morbi</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<span>Praesent</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
	<!-- main content -->
	<div class="wrapper">
		<div class="row">
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-primary">
					<h3>100+</h3>
					<p>Food Items</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-warning">
					<h3>100+</h3>
					<p>Clients</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-success">
					<h3>100+</h3>
					<p>Inbox</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-8 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Client Details Table
						</h3>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<tr>
									<th>#</th>
									<th>Project</th>
									<th>Manager</th>
									<th>Status</th>
									<th>Due date</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>React</td>
									<td>Tran Anh Tuat</td>
									<td>
										<span class="dot">
											<i class="bg-success"></i>
											Completed
										</span>
									</td>
									<td>17/07/2020</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Vue</td>
									<td>Bui Nhu Sang</td>
									<td>
										<span class="dot">
											<i class="bg-warning"></i>
											In progress
										</span>
									</td>
									<td>18/07/2020</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Laravel</td>
									<td>Phan Nhat Truong</td>
									<td>
										<span class="dot">
											<i class="bg-warning"></i>
											In progress
										</span>
									</td>
									<td>17/07/2020</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Django</td>
									<td>Le Anh Tuan</td>
									<td>
										<span class="dot">
											<i class="bg-danger"></i>
											Delayed
										</span>
									</td>
									<td>07/07/2020</td>
								</tr>
								<tr>
									<td>5</td>
									<td>MEAN</td>
									<td>John Evan</td>
									<td>
										<span class="dot">
											<i class="bg-primary"></i>
											Pending
										</span>
									</td>
									<td>20/08/2020</td>
								</tr>
								<tr>
									<td>6</td>
									<td>MERN</td>
									<td>Robert</td>
									<td>
										<span class="dot">
											<i class="bg-primary"></i>
											Pending
										</span>
									</td>
									<td>20/08/2020</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- end main content -->
	<!-- import script -->
	<script src="javaScript/index.js"></script>
	<!-- end import script -->
</body>
</html>