<?php include_once('head.php'); ?>
	<!-- Header -->
	<?php include_once('header.php'); ?>
		<!-- Menu -->
		<?php include_once('menu.php'); ?>


<!-- Add Advocate Div -->
<div class="adminFormContain">

<form>

<h2>Add Advocate</h2>

<label for="org">Organization:</label><br>
<input type="text" id="org" name="advOrg" class="" placeholder="butts"><br>

<label for="add">Address:</label><br>
<input type="text" id="address" name="advAdd" class="" placeholder="butts"><br>

<label for="city">City:</label><br>
<input type="text" id="city" name="advCity" class="" placeholder="butts"><br>

<label for="postcode">Postal Code:</label><br>
<input type="text" maxlength="6" id="postcode" name="advPostCode" class="" placeholder="butts"><br>

<label for="phone">Phone:</label><br>
<input type="text" id="phone" name="advPhone" class="" placeholder="butts"><br>

<label for="email">Email:</label><br>
<input type="text" id="email" name="advEmail" class="" placeholder="butts"><br>

<label for="officeopen">Office Hours:</label><br>
<input type="text" id="officeopen" name="advOpen" class="" placeholder="butts">

<label for="officecose">to </label><br>
<input type="text" id="officeclose" name="advClose" class="" placeholder="butts"><br>

<label for="description">Description:</label><br>
<textarea rows="10" cols="30" id="description" name="advDesc" class="" placeholder="butts"></textarea>

</form>

</div>

<!-- Footer -->
<?php include_once('footer.php'); ?>