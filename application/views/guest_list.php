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
	<h4 class="navbar-text nav-custom">Guest Book Application - List of Guest</h4>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" class ="nav-custom"><?php echo "Date:" . date("d M Y") . "<br>";?></a></li>
	  <li><a href="<?= base_url('hello'); ?>" class ="nav-custom">Home</a></li>
	  <li><a href="<?= base_url('user-logout'); ?>" class ="nav-custom">Logout <span class="glyphicon glyphicon-log-in"></span></a></li>
  </div>
</nav>
<br/>
<div class="container">
<div align="right">
          <a class="btn btn-info" href="<?= base_url('add-guest');?>">Add Guest</a>
	</div>
	<br/>
 <div class="table-responsive">          
  <table class="table table-bordered table-striped">
    <thead>
      <tr class ="info">
        <th>#</th>
        <th>Date</th>
        <th>Time</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Mobile Phone</th>
        <th>Organization From</th>
		    <th>Person To Visit</th>
        <th>Reason To Visit</th>

      </tr>
    </thead>
    <tbody>
	<?php foreach ($guests as $guests): ?>
      <tr>
        <td><?=$guests->id;?></td>
        <td><?=$guests->entry_date?></td>
        <td><?=$guests->entry_time?></td>
        <td><?=$guests->first_name?></td>
        <td><?=$guests->last_name?></td>
        <td><?=$guests->mobile?></td>
        <td><?=$guests->organization?></td>
		<td><?=$guests->person?></td>
		<td><?=$guests->purpose?></td>
      </tr>
	  <?php endforeach; ?>
    </tbody>
  </table>
  </div>
  <p><?php echo $links; ?></p>
</div>
</body>
</html>