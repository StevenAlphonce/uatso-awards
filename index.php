<?php
session_start();
if (isset($_SESSION['admin'])) {
	header('location: admin/home.php');
}

if (isset($_SESSION['voter'])) {
	header('location: home.php');
}
?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition login-page">

	<header class="main-header bg-blue">

		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">

			<div class="navbar-custom-menu">
				<ul style="margin-top: 10px;font-size:large;" class="nav navbar-nav">
					<li><a style="color:white;background:unset; " href="results.php">SHOW RESULTS</a> </li>

				</ul>
			</div>
		</nav>
	</header>

	<div style="background-color: none;" class="login-box">
		<div class="login-logo">
			<!-- <b>UAUTS'o AWARDS 2024</b> -->
			<img src="images/site-banner.jpg" alt="">
		</div>

		<div class="login-box-body">
			<!-- <p class="login-box-msg">Sign in to start your session</p> -->

			<form action="login.php" method="POST">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" name="voter" placeholder="Voter's ID" required>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" name="password" placeholder="Password" required>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-4">
						<button type="submit" class="btn bg-blue btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
					</div>
				</div>
			</form>
		</div>
		<?php
		if (isset($_SESSION['error'])) {
			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>" . $_SESSION['error'] . "</p> 
			  	</div>
  			";
			unset($_SESSION['error']);
		}
		?>
	</div>

	<?php include 'includes/scripts.php' ?>
</body>

</html>