<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $page_title;?></title>
<link href="<?php echo base_url() . 'assets/admin/css/bootstrap.min.css'; ?>" rel="stylesheet">
<link href="<?php echo base_url() . 'assets/admin/css/styles.css'; ?>" rel="stylesheet">
<?php echo $before_head; ?>
</head>
<body>
 
<?php if($this->ion_auth->logged_in()) { ?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <ul class="nav navbar-nav navbar-right">
	  <li class="dropdown">
	    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php print_r($this->ion_auth->user()->row()->username);?> <span class="caret"></span></a>
	    <ul class="dropdown-menu" role="menu">
	    
	   	<?php echo $current_user_menu; ?>

		<li><a href="<?php echo site_url('admin/user/profile');?>">Profile page</a></li>
		<li class="divider"></li>
		<li><a href="<?php echo site_url('admin/user/logout');?>">Logout</a></li>
	    </ul>
	  </li>
	</ul>
</nav><!-- end nav -->

<?php if($this->session->flashdata('message')) { ?>

  <div class="container" style="padding-top:40px;">
    <div class="alert alert-info alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <?php echo $this->session->flashdata('message');?>
    </div>
  </div>

<?php } ?>

<?php } ?>