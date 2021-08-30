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
	<h4 class="navbar-text nav-custom">Guest Book Application - Dashboard</h4>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" class ="nav-custom"><?php echo "Date:" . date("d M Y") . "<br>";?></a></li>
	  <li><a class ="nav-custom"><?=$this->session->userdata('fname');?></a></li>
	  <li><a href="<?= base_url('user-logout'); ?>" class ="nav-custom">Logout <span class="glyphicon glyphicon-log-in"></span></a></li>
  </div>
</nav>
<br/>
<br/>
<br/>
<div class="container">
  <div class="panel panel-info panel-custom">
    <div class="panel-body">
	<div>
	<h3><mark> Welcome to the Guest Book Application</mark></h3>
	</div>
	<br/>
	<br/>
	<br/>
   <div class ="row">
   <div class="col-12 col-sm-6 col-md-6">
       <form>
	    <div class="col-sm-offset-2 col-sm-5">
        <a href="<?= base_url('add-guest'); ?>" class="btn btn-info btn-lg btn-custom">Add New Guest</a>
      </div> 
	   </form>
   </div>
     <div class="col-12 col-sm-6 col-md-6">
       <form>
	    <div class="col-sm-offset-2 col-sm-5">
        <a href="<?= base_url('guestlist'); ?>" class="btn btn-info btn-lg btn-custom">View Guest List</a>
      </div> 
	   </form>
   </div>
    </div>
	<br/>
	<br/>
	<br/>
  </div>
</div>

</body>
</html>