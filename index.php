<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>VITCMUN14</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">

    body{
      <?php 
      $img_arr = array('1','2','3','4');
      ?>
    	background: url("assets/img/mun/pic<?php echo rand(1,count($img_arr));?>.JPG") no-repeat center center fixed ;
      background-size: 100% 100%;

    }

    #full-screen-slider {
 	 margin-bottom: 0;
  	z-index: -10;
	}
.carousel .carousel-inner .item img {
  width: 100%;
}
.all-sliders {
  
  top: 25px;
  right: 25px;
  color: white;
  z-index: 10;
}
.all-sliders:hover {
  color: white;
}


	#centerHeading
	{
		position: absolute;
		margin-left: 0px;
		margin-right: 0px;
		left: 0px;
		right: 0px;
		margin-top: 30px;
		z-index: 10;
	}

  h1,h6
  {
    text-align: center;
    color: white;
    font-family: 'existenceLight', 'Lato',Arial, sans-serif;
  }
  h1
  {
    font-size: 9em;
  }
  h6
  {
  font-size: 4em;
  }

  hr{
    margin: 0px;
    margin: 0px 30px;
  }
  .navbar-inverse
  {
    background-color: #000;
  }

  .center
  {
    display : table-cell;
    vertical-align : middle;
    float: none;
  }


  @font-face {
    font-family: 'existenceLight';
    src: url('assets/fonts/existenceLight/Existence-Light-webfont.eot');
    src: url('assets/fonts/existenceLight/Existence-Light-webfont.eot?#iefix') format('embedded-opentype'),
         url('assets/fonts/existenceLight/Existence-Light-webfont.woff') format('woff'),
         url('assets/fonts/existenceLight/Existence-Light-webfont.ttf') format('truetype'),
         url('assets/fonts/existenceLight/Existence-Light-webfont.svg#existencelight') format('svg');
    font-weight: bold;
    font-style: normal;

}

    </style>
  </head>

  <body>
  <div style="position: absolute; top: 0px; left: 0px; width: 100%;height: 100%; z-index: 5; background: rgba(0,0,0,0.8);"></div>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top"> 
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">VITCMUN14</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="services.html">COMMITTEES</a></li>
            <li><a href="works.html">REGISTRATIONS</a></li>
            <li><a href="works.html">RESOURCES</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<div class="row center" id="centerHeading">
   <div class="col-md-6 col-md-offset-3">
    <div style="background: rgba(0,0,0,0.1);-moz-border-radius: 5px;border-radius: 5px;"><h1>VITCMUN<hr>2014</h1><h6>21-23 March</h6></div>
  </div>
</div>
<?php
/*
<!--CAROUSEL-->
	<div id="full-screen-slider" class="carousel slide" style="opacity: 0.2;">
     <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="assets/img/mun/pic1.jpg"  />
        </div>
        <div class="item fullscrn">
            <img src="assets/img/mun/pic2.jpg"  />
        </div>
        <div class="item fullscrn">
            <img src="assets/img/mun/pic3.jpg"  />
        </div>
        <div class="item fullscrn">
            <img src="assets/img/mun/pic4.jpg"  />
        </div>
	</div>
	</div>

*/
  ?>
  


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $('.carousel').carousel({
    	 interval: 2000,
    	 pause: false
    	});
    $('.carousel').carousel('cycle');


    $(document).ready(function() {
  function setFullScreen() {
    browserHeight = $(window).height() - 70;
    $("#full-screen-slider .carousel-inner .item img").css({
      height: browserHeight
    });
  }

  setFullScreen();

  $(window).resize(function() {
    setFullScreen();
  });
});
    
	</script>
  </body>
</html>

