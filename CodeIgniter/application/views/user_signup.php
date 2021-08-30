<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel = "stylesheet" href = "assets/bootstrap-3.4.1-dist/css/bootstrap.min.css">
   <link rel = "stylesheet" href = "assets/index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
     <img src="futuristic-removebg-preview1.png" width="70%">
    </div>
	<h4 class="navbar-text nav-custom">Guest Book Application</h4>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" class ="nav-custom"><?php echo "Date:" . date("d M Y") . "<br>";?></a></li>
	  <li><a href="<?= base_url('user'); ?>" class ="nav-custom"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
  </div>
</nav>
<br/>
<div class="container">
  <div class="panel panel-info custom">
    <div class="panel-heading">Register</div>
    <div class="panel-body">
  <form class="form-horizontal" method = "post">
   <div class="form-group">
      <label class="col-sm-2 control-label" for="userName">Name  <span>*</span>:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="focusedInput" placeholder="Enter User Name" name="userName" required>
        <span class="text-danger"><?php echo form_error('userName'); ?></span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email  <span>*</span>:</label>
      <div class="col-sm-5">
        <input type="email" class="form-control" id="focusedInput" placeholder="Enter email" name="email" required>
		<span class="text-danger"><?php echo form_error('email'); ?></span>
  </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="phone">PhoneNumber:</label>
      <div class="col-sm-5">
        <input type="tel" class="form-control" id="focusedInput" placeholder="Enter phone number" name="phone">
        <span class="text-danger"><?php echo form_error('phone'); ?></span>
      </div>
    </div>
   <div class="form-group">
      <label class="control-label col-sm-2" for="pass">Password  <span>*</span>:</label>
      <div class="col-sm-5">          
        <input type="password" min= "5" class="form-control" id="focusedInput" placeholder="Enter password" name="pass" required>
        <span class="text-danger"><?php echo form_error('pass'); ?></span>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-5">
        <button type="submit" class="btn btn-info btn-block">Submit</button>
      </div>
    </div>
  </form>  
</div>
</div>
</div>
</body>
</html>