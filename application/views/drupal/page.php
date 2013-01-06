<!DOCTYPE html>

<head>
<meta charset="utf-8" />

<title>Welcome to G&amp;M Construction | G&amp;M Construction</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/business/style.css" charset="utf-8"/>  

<script type="text/javascript" src="<?php echo base_url()?>/assets/business/js/jquery.js?v=1.4.4"></script>
<script type="text/javascript" src="<?php echo base_url()?>/assets/business/js/query.once.js?v=1.2"></script>
<script type="text/javascript" src="<?php echo base_url()?>/assets/business/js/drupal.js?mdohm1"></script>

<script type="text/javascript" src="<?php echo base_url()?>/assets/business/js/sliding_effect.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/assets/business/js/superfish.js?mdohm1"></script>
<script type="text/javascript" src="<?php echo base_url()?>/assets/business/js/supersubs.js?mdohm1"></script>
<script type="text/javascript" src="<?php echo base_url()?>/assets/business/js/sfmenu.js?mdohm1"></script>


<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->




<!-----floor plan js css -->


		<link type="text/css" href="<?php echo base_url()?>assets/business/pikachoose/styles/css3.css" rel="stylesheet" />
		<script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/business/pikachoose/lib/jquery.jcarousel.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/business/pikachoose/lib/jquery.pikachoose.js"></script>
		
        <script type="text/javascript" src="<?php echo base_url()?>assets/business/pikachoose/lib/jquery.fancybox-1.3.4.pack.js"></script> 
   		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/business/pikachoose/styles/jquery.fancybox-1.3.3.css.css" media="screen" />

<!----END -floor plan js css -->
 
 
 	<script language="javascript">
		
			$(document).ready(function (){
				var a =function(self){
					self.anchor.fancybox();
				};
				
					$("#pikame").PikaChoose({buildFinished:a});
				
					
				});
				
				
		</script>
        




</head>


<!--  End of head -->


<body class="html front not-logged-in one-sidebar sidebar-first page-node">
    
<div id="wrap">

  <header id="header" class="clearfix" role="banner">

    <div>
             <div id="logo">
             <a href="<?php echo site_url('')?>" title="Home"><img src="<?php echo base_url()?>assets/business/logo.png" alt="Home" /></a>
        </div>
            <hgroup id="sitename">
        <h2><a href="<?php echo site_url('')?>" title="Home">G&amp;M Construction</a></h2>
        <p>a construction company</p><!--site slogan-->
      </hgroup>
    </div>
    
    
 <nav id="navigation" class="clearfix" role="navigation">
      <div id="main-menu">
        <ul class="menu">
<li class="first leaf"><a href="<?php echo site_url('')?>" class="active">Home</a></li>

<li class="leaf"><a href="<?php echo  site_url('floor_plan')?>">Floor Plan</a></li>
<li class="leaf"><a href="<?php echo site_url('display_location')?>">Display Location</a></li>

<li class="last leaf"><a href="<?php echo site_url('contact')?>">Contact</a></li>
</ul>     
 </div>
    </nav>
    
 
    
    <!-- end main-menu -->
  </header>
  
 