<?php include_once('../head.php'); ?>
	<!-- Header -->
	<?php include_once('../header.php'); ?>
		<!-- Menu -->
		<?php include_once('../menu.php'); ?>


<!-- login page start -->
<div id="loginContain">

<h2 id="loginWelcome" class="">
Hello and welcome to Humanity Housing.<br>
Please sign-in below.
</h2>

<form id="loginForm">
	<div class="row">
   		<label for="adminID" class="required">Admin ID</label>
    	<input type="text" id="adminID" name="adminID" size="20" maxlength="48" value="">
    </div>
	<div class="row">
   		<label for="pass" class="required">Password</label>
   		<input type="text" id="name" name="pass" size="20" maxlength="48" value="">
   	</div>
</form>

</div>

<!-- Footer -->
<?php include_once('footer.php'); ?>