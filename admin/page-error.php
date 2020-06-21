<?php
include_once('session.php');
?>
<?php 
error_reporting(0);

$msg=$_SESSION['msg'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="We Provide Best Website at Lowest Price for Small Business">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="#">
    <meta property="twitter:site" content="@#">
    <meta property="twitter:creator" content="@#">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Sangameshwara Florist Mathikere">
    <meta property="og:title" content="Design & Developed By We Digitize You. Mob.No:Sagar Ganechary 8618696064">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="#">
    <meta property="og:description" content="We Provide Digital Marketing Services at lowest Price">
    <title>Sangameshwara Floweriest Mathikere</title>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
      <?php include_once('menu.php')?>
    <main class="app-content">
      <div class="page-error tile">
        <h3>
		<?php 
		echo $msg;
		 
		
		?>
		</h3>
        <br/>
        <p><a class="btn btn-primary" href="javascript:window.history.back();">Go Back</a></p>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>