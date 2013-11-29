<?php include_once('../head.php'); ?>
	<!-- Header -->
	<?php include_once('../header.php'); ?>
		<!-- Menu -->
		<?php include_once('../menu.php'); ?>



<!-- edit hotel start -->
<div id="adminFormContain">

<h2 id="editTitle">Edit an existing hotel</h2>

<form class="hotEditForm" action="" method="post">
	<div class="row">
   		<label for="hotName" class="required">Hotel Name:</label><br>
    	<input type="text" id="hotName" name="hotName" size="40" maxlength="68" value="" placeholder="hotel">
    	
    <div class="row">
     	<select id="hotName" name="hotName">
			<label for="hotName" class="required">Hotel:</label><br>
			<option value="0">-- Select One --</option>
			<option value="0">&nbsp;</option>
		</select>
  	</div>
  	
  	<hr>

    	
    </div>
	<div class="row">
   		<label for="hotAdd" class="required">Address:</label><br>
    	<input type="text" id="hotAdd" name="hotAdd" size="40" maxlength="68" value=""><br>
    </div>
	<div class="row">
   		<label for="hotCity" class="required">City:</label><br>
    	<input type="text" id="hotCity" name="hotCity" size="40" maxlength="68" value=""><br>
    </div>
    <div class="row">
   		<label for="hotPost" class="required">Postal Code:</label><br>
    	<input type="text" id="hotPost" name="hotPost" size="6" maxlength="6" value=""><br>
    </div>
    <div class="row">
   		<label for="hotTel" class="required">Phone:</label><br>
    	<input type="text" id="hotTel" name="hotTel" size="10" maxlength="10" value=""><br>
    </div>
    <div class="row">
   		<label for="hotRent" class="required">Rent (&#36;):</label><br>
    	<input type="text" id="hotRentMin" name="hotRent" size="10" maxlength="10" value="">
    	<label for="hotTo" class="required">to</label>
    	<input type="text" id="hotRentMax" name="hotRent" size="10" maxlength="10" value=""><br>
    </div>
    <div class="row">
    	<p>Security Deposit:</p><br>
	    <label for="secDepYes">Yes:</label>
    	<input type="radio" id="secDepYes" name="secDepYes" value="yes">
    	<label for="secDepNo">No:</label>
    	<input type="radio" id="secDepNo" name="secDepNo" value="no"><br>
	</div>
	<div class="row">
   		<label for="secDep" class="required">SD (&#36;):</label><br>
    	<input type="text" id="secDep" name="secDep" size="10" maxlength="10" value="">
    </div>
    <div class="row">
    	<p>Elevator:</p><br>
	    <label for="elevYes">Yes:</label>
    	<input type="radio" id="elevYes" name="elevYes" value="yes">
    	<label for="elevNo">No:</label>
    	<input type="radio" id="elevNo" name="elevNo" value="no"><br>
	</div>
	<div class="row">
    	<p>Pets:</p><br>
	    <label for="petYes">Yes:</label>
    	<input type="radio" id="petYes" name="petYes" value="yes">
    	<label for="petNo">No:</label>
    	<input type="radio" id="petNo" name="petNo" value="no"><br>
    	<label for="petSeeNotes">See Notes:</label>
    	<input type="radio" id="petSeeNotes" name="petSeeNotes" value="SeeNotes"><br>
	</div>
	<div class="row">
   		<label for="addnNotes" class="required">Additional Notes:</label><br>
    	<textarea class="addnNotes" id="addnNotes" size="20" maxlength="500"></textarea>
    </div>


</form>
</div>


<!-- Footer -->
<?php include_once('../footer.php'); ?>