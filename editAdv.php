<?php include_once('head.php'); ?>
	<!-- Header -->
	<?php include_once('header.php'); ?>
		<!-- Menu -->
		<?php include_once('menu.php'); ?>


<div class="dashboardcontain">
        <?php include_once('sidebar.php'); ?>
<div class="adminFormContain">

<form>

<h2>Edit Advocate</h2>

<label for="org">Organization:</label> 
<select id="" name="" class="">
<option value="">?</option><br>

<label for="add">Address:</label>
<input type="text" id="add" name="advAdd" class="" placeholder="butts"><br>

<label for="city">City:</label>
<input type="text" id="city" name="advCity" class="" placeholder="butts"><br>

<label for="postcode">Postal Code:</label>
<input type="text" maxlength="6" id="postcode" name="advPostCode" class="" placeholder="butts"><br>

<label for="phone">Phone:</label>
<input type="text" id="phone" name="advPhone" class="" placeholder="butts"><br>

<label for="email">Email:</label>
<input type="text" id="email" name="advEmail" class="" placeholder="butts"><br>

<label for="officeopen">Office Hours:</label>
<input type="text" id="officeopen" name="advOpen" class="" placeholder="butts">

<label for="officecose">to </label>
<input type="text" id="officeclose" name="advClose" class="" placeholder="butts"><br>

<label for="description">Description:</label>
<textarea rows="10" cols="30" id="description" name="advDesc" class="" placeholder="butts"></textarea>

</form>

</div>
</div>

<?php include_once('footer.php'); ?>