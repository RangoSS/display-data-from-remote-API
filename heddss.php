<?php

session_start();
//here we start the session and check if the session is not emty
$usernames= isset($_SESSION['usernames']) ? $_SESSION['usernames'] : "";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pashions Hospitale</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<link href="css/styleHeard.css" rel="stylesheet" id="bootstrap-css">


</head>
<div class="container-fluid">
	<div class="row">
		<div class="navbar navbar-default navbar-fixed-top">
			<header id="header-site">
			
				<div class="logo-site">
					<h1><a href="#">Leistung</a></h1>
				</div>
				
				<!--Begin::Mobile View Navigation-->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
				</button>
				<!--End::Mobile View Navigation-->
				
				<!--Begin::Header right-->
				<ul class="nav navbar-right pull-right top-nav">
					<li class="dropdown dropdown-notification"> <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true"> <i class="fa fa-bell-o"></i> <span class="badge badge-default"> 3 </span> </a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3> <span class="bold">12 pending</span> notifications</h3>
								<a href="page_user_profile_1.html">view all</a> 
							</li>
							<li>
								<ul class="dropdown-menu-list">
									<li> <a href="javascript:;"> <span class="time">just now</span> <span class="details"> <span class="label label-sm label-icon label-success"> <i class="fa fa-plus"></i> </span> New user registered. </span> </a> </li>
									<li> <a href="javascript:;"> <span class="time">3 mins</span> <span class="details"> <span class="label label-sm label-icon label-danger"> <i class="fa fa-bolt"></i> </span> Server #12 overloaded. </span> </a> </li>
									<li> <a href="javascript:;"> <span class="time">10 mins</span> <span class="details"> <span class="label label-sm label-icon label-warning"> <i class="fa fa-bell-o"></i> </span> Server #2 not responding. </span> </a> </li>
									<li> <a href="javascript:;"> <span class="time">14 hrs</span> <span class="details"> <span class="label label-sm label-icon label-info"> <i class="fa fa-bullhorn"></i> </span> Application error. </span> </a> </li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="dropdown"> 
						<!--my user login link-->
						<a href="#" class="dropdown-toggle" data-toggle=".dropdown" onclick="$('#shows').toggle();" aria-expanded="true">
                             <!--here check if session is not emty-->
                          <?php if(isset($_SESSION['usernames']) && $_SESSION['usernames'] != "")
                           { ?>
                             <!--do this only if loged in-->
                           	<i class='fas fa-user-tie' style='font-size:20px;margin-top: 10px;'> </i>      
                            <li><a name="sissioning" href="logout.php"><b><u>Logout <?php echo  $usernames; ?></u></b></a></li>

                            <!--else show this if not loged on-->

                            <?php } else { ?>
							<span class="hidden-xs">LOG IN</span> 
						</a>


						<ul class="dropdown-menu" id="shows">
							<li><a href="login.php"><i id="goToLogin" class="fa fa-fw fa-user"></i> Log in</a></li>
							<li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
							<li class="divider"></li>
							<li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
						</ul>
                        <?php } ?>
					</li>
				</ul>
				<!--End::Header Right-->

				
				<!--Begin::Nav-->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-left">
						<li><a id="home" href="display.php">Home</a></li>
						<li><a id="" href="joined_tables.php">Joint</a></li>
						<li><a id="" href="deleting.php">Deleting</a></li>
						<li><a id="" href="#">Contact</a></li>
					</ul>
				</div>
				<!--End::Nav--> 
				
			</header>
		</div>
	</div>
</div>
