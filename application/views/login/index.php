<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title>Login | Desaku</title>
	<style>
		.card-header{
			background-image: url('<?php echo base_url('assets/login.jpg'); ?>');
			padding:15px 15px 44px; 
			background-repeat:no-repeat;
    		background-size:cover;
			background-position:center;
			
		}
	</style>
</head>
<body>
<div class="d-flex justify-content-center">
	<div class="container m-4 pb-5">
	<div class="d-flex mt-5 justify-content-center">
		<div class="col-sm-9">
			<div class="card">
  			<div class="card-header text-center text-white">
    			<h1>Sign In</h1>
  			</div>
  			<div class="card-body">
			  <form action="/action_page.php" class="needs-validation" novalidate>
    			<div class="form-group">
      				<label for="uname">Username:</label>
      				<input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      				<div class="valid-feedback">Valid.</div>
      				<div class="invalid-feedback">Please fill out this field.</div>
    			</div>
    			<div class="form-group">
      				<label for="pwd">Password:</label>
      				<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      				<div class="valid-feedback">Valid.</div>
      				<div class="invalid-feedback">Please fill out this field.</div>
    			</div>
    			<button type="submit" class="btn btn-primary">Login</button>
  			   </form>
  			</div>
  		    <div class="card-footer text-muted text-center">
				  <a class="btn btn-danger" href="<?php echo base_url('Welcome') ?>">Back</a>
  			</div>
			</div>
		</div>
	</div>
	</div>
</div>
</body>
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</html>