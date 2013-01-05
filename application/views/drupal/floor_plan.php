
		<link type="text/css" href="<?php echo base_url()?>assets/business/pikachoose/styles/css3.css" rel="stylesheet" />
		<script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/business/pikachoose/lib/jquery.jcarousel.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/business/pikachoose/lib/jquery.pikachoose.js"></script>
		
        <script type="text/javascript" src="<?php echo base_url()?>assets/business/pikachoose/lib/jquery.fancybox-1.3.4.pack.js"></script> 
   		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/business/pikachoose/styles/jquery.fancybox-1.3.3.css.css" media="screen" />
		
		<script language="javascript">
		
			$(document).ready(function (){
				var a =function(self){
					self.anchor.fancybox();
				};
				
					$("#pikame").PikaChoose({buildFinished:a});
					$("#pikama").PikaChoose({buildFinished:a});
					
				});
				
				
		</script>
        
        <!--  END --------------------------------->
        

<body>
<!-- not really needed, i'm using it to center the gallery. -->

<div class="wrap">
<div id="main" class="clearfix">
    <section id="post-content" role="main">
    
    <nav class="breadcrumb"><a href="<?php echo site_url('')?>">Home</a> » Floor Plan</nav>
    </div>               
     
     
                    
   
 <br> G&M Construction </br>
 <div class="row">
 
<div class="pikachoose">
Styled without images. Pure CSS.


	<ul id="pikame" >
		<li><a href="#"><img src="<?php echo base_url()?>assets/business/pikachoose/1.jpg"/></a><span>This is an example of the basic theme.</span></li>
		<li><a href="http://www.pikachoose.com"><img src="<?php echo base_url()?>assets/business/pikachoose/2.jpg"/></a><span>jCarousel is supported and can be integrated with PikaChoose!</span></li>
		<li><a href="http://www.pikachoose.com"><img src="<?php echo base_url()?>assets/business/pikachoose/3.jpg"/></a><span>Be sure to check out for updates.
        </span></li>
	</ul>
</div>



</div>

<div class="row">

<div class="pikachoose">
Styled without images. Pure CSS.


	<ul id="pikama" >
		<li><a href="#"><img src="<?php echo base_url()?>assets/business/pikachoose/1.jpg"/></a><span>This is an example of the basic theme.</span></li>
		<li><a href="http://www.pikachoose.com"><img src="<?php echo base_url()?>assets/business/pikachoose/2.jpg"/></a><span>jCarousel is supported and can be integrated with PikaChoose!</span></li>
		<li><a href="http://www.pikachoose.com"><img src="<?php echo base_url()?>assets/business/pikachoose/3.jpg"/></a><span>Be sure to check out for updates.
        </span></li>
	</ul>
</div>
</div>
</div> <!-- end of wrap -->

</body>
</html>

 
  
     