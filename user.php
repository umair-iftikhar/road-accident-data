<?php
	$pagename = "Add New User";
	include('files/head.php');
?>			

<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<form action="add_user.php" method="post">
  			<div class="form-group">
    			<label for="username">User Name*:</label>
    			<input type="text" class="form-control" name="username" required>
  			</div>
  			<div class="form-group">
    			<label for="password">Password*:</label>
    			<input type="password" class="form-control" name="password" required>
  			</div>
  			<div class="form-group">
    			<label for="role">Role*:</label>
    			<select class="form-control" required name="role">
				    <option selected disabled>Please Select</option>
				    <option value="Admin">Admin</option>
				    <option value="Officer">Officer</option>
				    <option value="Department">Department</option>
				 </select>
  			</div>
  			<div class="form-group">
    			<label for="fullname">Full Name*:</label>
    			<input type="text" class="form-control" name="fullname" required>
  			</div>
  			<div class="form-group">
    			<label for="designation">Designation*:</label>
    			<input type="text" class="form-control" name="designation" required>
  			</div>
  			<input type="submit" class="btn btn-info">
  		</form>
		</div>
		<div class="col-sm-6">
			<h1>Roles</h1>
			<ul>
				<li>Admin Can Control all software</li>
				<li>Department can add new accident and also can see reports</li>
				<li>Officer can add new accidents only</li>
			</ul>
			<q>All fields with * is required</q>
		</div>

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
