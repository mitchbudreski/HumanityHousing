<?php include_once('head.php'); ?>
	<!-- Header -->
	<?php include_once('header.php'); ?>
		<!-- Menu -->
		<?php include_once('menu.php'); ?>


<!-- Add Advocate Div -->
<div class="dashboardcontain">
<?php include_once('sidebar.php'); ?>

<div class="adminFormContain adv right">
<div class="clearfix">
<form>

<h2>Add Advocate</h2>

<div class="left">

<label for="org">Organization:</label><br>
<input type="text" id="org" name="advOrg" class="" ><br>

<label for="add">Address:</label><br>
<input type="text" id="address" name="advAdd" class="" ><br>

<label for="city">City:</label><br>
<input type="text" id="city" name="advCity" class="" ><br>

<label for="postcode">Postal Code:</label><br>
<input type="text" maxlength="6" id="postcode" name="advPostCode" class="" ><br>

<label for="phone">Phone:</label><br>
<input type="text" id="phone" name="advPhone" class="" ><br>

<label for="email">Email:</label><br>
<input type="text" id="email" name="advEmail" class="" ><br>

<label for="officeopen">Office Hours:</label><br>
<input type="text" id="officeopen" name="advOpen" class="" placeholder="from" >

<label for="officecose">to </label><br>
<input type="text" id="officeclose" name="advClose" class="" placeholder="until" ><br>
</div>

<div class="right">
<label for="description">Description:</label><br>
<textarea rows="10" cols="30" id="description" name="advDesc" class="right" ></textarea>
</div>
</form>
</div>
</div>
</div>

<!-- Footer -->
<?php include_once('footer.php'); ?>