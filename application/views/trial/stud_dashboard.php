<!DOCTYPE HTML>

<html>
	<head>
		<title>TUP E-LEARNING</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="<?php echo base_url().'/assets/css/main.css';?>" />
		<link rel="stylesheet" href="<?php echo base_url().'/assets/css/login.css';?>" />
	</head>
	
	<body class="is-preload">
	<nav>
			<header id="header">
				<div class="topnav">
					<a href="home.html">Home</a>
					<a href="">About Us</a>
					<a href="">Contact Us</a>
					</div>
					<div class="topnav-right">
						<a href="">Sign Out</a>
					</div>
			</header>
		</nav>
			
			<div class="sidenav">
			<?php $image=$img_id;?>
			<img src="<?php echo base_url().'assets/images/'.$image.'.jpg';?>" alt="Profile Picture" width="240" height="240">

			<ul class="alt">
				<li><b><?php $name_print = $name; echo $name_print;?></b></li>
				<li><?php $sid = $student_id; echo $sid;?></li>
			</ul>	
						
			<ul class="alt">
				<li><a class="active" href="stud_dashboard.html">Dashboard</a></li>
				<li><a href="<?php echo base_url().'pages/student_classes';?>">Classes</a></li>
				<li><a href="#">Discussions</a></li>
				<li><a href="stud_modules.html">Modules</a></li>
			</ul>
			</div>
			</section>
			</div>	
<div class="main">
		
	<div class="table-wrapper">
		<h2>Dashboard</h2>
		<table>
			<thead>
				<tr>
					<th>Date</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>02-18-18</td>
					<td><a href="">Your professor has sent you a registration request.</a></td>
				</tr>
				<tr>
					<td>02-16-18</td>
					<td><a href="">You have registered to CS323 Class. You can now read your modules.</a></td>
				</tr>
				<tr>
					<td>02-16-18</td>
					<td><a href="">You have registered to CS322 Class. You can now read your modules.</a></td>
				</tr>
				<tr>
					<td>02-11-18</td>
					<td><a href="">You have registered to CS321L Class. You can now read your modules.</a></td>
				</tr>
				<tr>
					<td>02-04-18</td>
					<td><a href="">You have completed a quiz from CS311 Class. Click to see your score.</a></td>
				</tr>
				<tr>
					<td>01-26-18</td>
					<td><a href="">You have registered to CSF2 Class. You can now read your modules.</a></td>
				</tr>
				<tr>
					<td>01-12-18</td>
					<td><a href="">You have registered to SS3 Class. You can now read your modules.</a></td>
				</tr><tr>
					<td>12-06-17</td>
					<td><a href="">You have registered to CS311 Class. You can now read your modules.</a></td>
				</tr>
				<tr>
					<td>11-21-17</td>
					<td><a href="">Welcome to your E-Learning profile!</a></td>
				</tr>
			</tbody>
		</table>
	</div>
					
    
</div>
	 
</body>
</html> 

