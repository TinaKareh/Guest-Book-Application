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
	  <li><a href="<?= base_url('signup'); ?>" class ="nav-custom"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
  </div>
</nav>
<br/>
<div class="container">
  <div class="panel panel-info custom">
    <div class="panel-heading">Login</div>
    <div class="panel-body">
	<p class ="text-info"><?php echo $this->session->flashdata('password_success'); ?></p>
     <form class="form-horizontal" method = "post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email <span>*</span>:</label>
      <div class="col-sm-5">
        <input type="email" class="form-control" id="focusedInput" placeholder="Enter email" name="email" required>
		<span class="text-danger"><?php echo form_error('email'); ?></span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pass">Password  <span>*</span>:</label>
	  <div class="col-sm-5">
       <input type="password" class="form-control" id="focusedInput" placeholder="Enter password" name="pass" required>
	   <span class="text-danger"><?php echo form_error('pass'); ?></span>
       </div>
	</div>
	 <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label class="control-label" for ="remember"><input type="checkbox" id="focusedInput" name="remember"> Remember me:</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-5">
        <button type="submit" class="btn btn-info btn-block">Login</button>
      </div>  
    </div>
	<div align="left" class="form-group">        
      <div class="col-sm-offset-2 col-sm-5">
        <a href="<?=base_url('forgot_password');?>" class ="btn-link text-success"> Forgot Password?</a>
      </div>
	  <p class ="text-danger"><?php echo $this->session->flashdata('login_error'); ?></p>
  </form>
  <br/>
   <div class ="div-custom" align="right" style="padding: 20px !important;">
      <label class="control-label col-sm-13" for="signup">Don't have an account?</label>
         <a href="<?= base_url('signup'); ?>"><span class="glyphicon glyphicon-log-in"></span> Register</a><br/>
	</div>
    </div>
  </div>
</div>

</body>
</html>