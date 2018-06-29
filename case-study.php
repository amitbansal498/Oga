<?php include_once('api/jsondata.php'); ?>

<!DOCTYPE html>
<html>
<head>
		<title>CASE STUDY</title>
		<meta charset=utf-8 >
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
		<meta name="robots" content="index, follow" > 
		
		
		<!-- FAVICONS -->
    <link rel="shortcut icon" href="images/favicon/favicon.png">

		
<!-- CSS -->
    <!-- FLEXSLIDER SLIDER CSS -->
		<link rel="stylesheet" type="text/css" href="css/flexslider.css"  >
    <!-- BOOTSTRAP -->
		<link rel="stylesheet" href="css/bootstrap.min.css"> 
    <!-- GOOGLE FONT -->		
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700%7COpen+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS -->		
		<link rel="stylesheet" href="css/icons-fonts.css" >	
    <!-- CSS THEME -->		
		<link rel="stylesheet" href="css/style.css" >
    <!-- ANIMATE -->	
		<link rel='stylesheet' href="css/animate.min.css">
		
   </head>
	<body>
	
		<!-- LOADER -->	
		<div id="loader-overflow">
      <div id="loader3">Please enable JS</div>
    </div>	

<div id="wrap" class="boxed ">
<div class="grey-bg"> <!-- Grey BG  -->	
<?php include_once('header.php');?>

        <!-- PAGE TITLE SMALL -->
        <div class="page-title-cont page-title-small grey-dark-bg">
          <div class="relative container align-left">
            <div class="row">
              <div class="col-md-8">
                <h1 class="page-title">SUCCESS STORIES</h1>
              </div>
            </div>
          </div>
        </div>
        
        <!-- COTENT CONTAINER -->
			
			
<div class="page-section">
<div class="container fes2-cont">
<div class="mb-50">
<h2 class="section-title pr-0">KNOWLEDGE 
 <span class="bold">MANAGEMENT SOFTWARE</span> </h2>
</div>
<div class="row">
<?php  foreach(KMSP() as $casestudy) {  ?>  

<a data-toggle="modal" data-target="#myModal" onclick='CaseStudy(<?php echo json_encode($casestudy); ?>)'>
<div class="col-sm-6 col-md-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
<div class="post-prev-img">
<img class="wow bounceInRight" src="<?php echo $casestudy['image']; ?>" alt="img" style="visibility: visible; animation-name: bounceInRight;">
</div>
<div class="post-prev-title">
<h3><?php echo substr($casestudy['title'],0,75); ?></h3>

</div>
<div class="post-prev-info">
<?php echo $casestudy['type']; ?> case study</div>

<div class="post-prev-text">
 <?php echo substr(strip_tags($casestudy['content']),0,300); ?>             
 </div>
<div class="post-prev-more-cont clearfix">
<div class="post-prev-more left">
READ MORE
</div>
</div>
</div>
</a>
<?php } ?>
</div>
</div>
</div>	

<hr>
<div class="page-section">
<div class="container fes2-cont">
<div class="mb-50">
<h2 class="section-title pr-0">ADVISORY  
 <span class="bold">SERVICES</span> </h2>
</div>
<div class="row">
<?php  foreach(ADVISORY_SERVICES_CASESTUDY() as $casestudy) {  ?>  

<a data-toggle="modal" data-target="#myModal" onclick='CaseStudy(<?php echo json_encode($casestudy); ?>)'>
<div class="col-sm-6 col-md-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
<div class="post-prev-img">
<img class="wow bounceInRight" src="<?php echo $casestudy['image']; ?>" alt="img" style="visibility: visible; animation-name: bounceInRight;">
</div>
<div class="post-prev-title">
<h3><?php echo substr($casestudy['title'],0,75); ?></h3>

</div>
<div class="post-prev-info">
<?php echo $casestudy['type']; ?> case study</div>

<div class="post-prev-text">
 <?php echo substr(strip_tags($casestudy['content']),0,300); ?>             
 </div>
<div class="post-prev-more-cont clearfix">
<div class="post-prev-more left">
READ MORE
</div>
</div>
</div>
</a>
<?php } ?>
</div>
</div>
</div>		


<?php include_once('footer.php');?>
<?php echo POPUP_CASESTUDY();?>

		</div><!-- End BG -->	
		</div><!-- End wrap -->	
	</body>
</html>		