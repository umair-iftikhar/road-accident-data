<?php
	$pagename = "Accident";
	include('files/head.php');
?>			

<div class="container">
	<form action="add_accident.php" method="post">
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
    			<label for="date">Date*:</label>
    			<input type="date" class="form-control" value="<?= date("Y-m-d")?>" name="date" required>
  			</div>
  			<div class="form-group">
    			<label for="time">Time*:</label>
    			<input type="time" class="form-control" value="now" name="time" required>
  			</div>
  			<div class="form-group">
    			<label for="location">Location*:</label>
    			<input type="text" class="form-control" name="location" required>
  			</div>
  			<div class="form-group">
    			<label for="reason">Reason*:</label>
    			<select class="form-control" required name="reason">
				    <option selected disabled>Please Select</option>
				    <option value="infrastructure">Infrastructure</option>
				    <option value="Drunk-Driving">Drunk Driving</option>
				    <option value="Running-Red-Lights">Running Red Lights</option>
				    <option value="Rain">Rain</option>
				    <option value="Teenage-Drivers">Teenage Drivers</option>
				    <option value="Wrong-Way-Driving">Wrong-Way Driving</option>
				    <option value="Fog">Fog</option>
				    <option value="Animal">Animal</option>
				 </select>
  			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
    			<label for="injuries">Injuries*:</label>
    			<input type="number" class="form-control" name="injuries" required>
  			</div>
  			<div class="form-group">
    			<label for="death">Death*:</label>
    			<input type="number" class="form-control" name="death" required>
  			</div>
  			<div class="form-group">
    			<label for="vehicle">Vehicle Demage Count:</label>
    			<input type="number" class="form-control" name="vehicle" required>
  			</div>
  			<div class="form-group">
    			<label for="submited">Submited By:</label>
    			<input type="text" class="form-control" name="submited">
  			</div>
  			<div>
  				<input type="submit" class="btn btn-info">
  			</div>

		</div>
		</form>
	</div>
</div>


<?php
	include('files/footer.php');
?>			

<script>
	$(function(){  
  $('input[type="time"][value="now"]').each(function(){    
    var d = new Date(),        
        h = d.getHours(),
        m = d.getMinutes();
    if(h < 10) h = '0' + h; 
    if(m < 10) m = '0' + m; 
    $(this).attr({
      'value': h + ':' + m
    });
  });
});
</script>
