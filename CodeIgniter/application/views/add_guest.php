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
	<h4 class="navbar-text nav-custom">Guest Book Application - Add Guest</h4>
    <ul class="nav navbar-nav navbar-right nav-custom">
      <li><a href="#"><?php echo "Date:" . date("d M Y") . "<br>";?></a></li>
	  <li><a href="<?= base_url('hello'); ?>" class ="nav-custom">Home</a></li>
	  <li><a href="<?= base_url('user-logout'); ?>" class ="nav-custom">Logout <span class="glyphicon glyphicon-log-in"></span></a></li>
  </div>
</nav>
<br/>
<div class="container">
  <div class="panel panel-info custom">
  <div class="panel-heading">Add Guest</div>
    <div class="panel-body">
  <form class="form-horizontal" method = "POST" action="<?= base_url('add-guest')?>">
   <div class="form-group">
      <label class="col-sm-2 control-label" for="userName"> First Name  <span>*</span>:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="focusedInput" value = "<?php echo set_value('fname'); ?>" name="fname" required>
        <span class="text-danger"><?php echo form_error('fname'); ?></span>
      </div>
    </div>
	<div class="form-group">
      <label class="col-sm-2 control-label" for="userName"> Last Name  <span>*</span>:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="focusedInput" value = "<?php echo set_value('lname'); ?>" name="lname" required>
        <span class="text-danger"><?php echo form_error('lname'); ?></span>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="phone">Mobile Phone  <span>*</span>:</label>
      <div class="col-sm-5">
        <input type="tel" class="form-control" id="focusedInput" value = "<?php echo set_value('phone'); ?>" name="phone">
        <span class="text-danger"><?php echo form_error('phone'); ?></span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="organization">Organization From  <span>*</span>:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="focusedInput" value = "<?php echo set_value('organization'); ?>" name="organization">
        <span class="text-danger"><?php echo form_error('organization'); ?></span>
      </div>
    </div>
   <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Person To Visit  <span>*</span>:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" id="focusedInput" value = "<?php echo set_value('person'); ?>" name="person" required>
        <span class="text-danger"><?php echo form_error('person'); ?></span>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Purpose of Visit  <span>*</span>:</label>
      <div class="col-sm-5">          
        <textarea class="form-control" rows="5" id="purpose" value = "<?php echo set_value('purpose'); ?>" name ="purpose" required></textarea>
        <span class="text-danger"><?php echo form_error('purpose'); ?></span>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-5">
        <button type="submit" class="btn btn-info btn-block">Save</button>
      </div>
    </div>
  </form> 
  
</div>
</div>
</div>
</body>
</html>