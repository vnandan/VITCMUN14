<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,100|Raleway:400,100|Lato:400,100' rel='stylesheet' type='text/css'>

    <title>VITCMUN14</title>

    <!-- Bootstrap core CSS -->
    <!--link href="assets/css/bootstrap.css" rel="stylesheet"-->

    <!--link href="assets/css/font-awesome.min.css" rel="stylesheet"-->

    <!-- Custom styles for this template -->
    <!--link href="assets/css/main.css" rel="stylesheet"-->

    <?php
    echo $this->Html->css('bootstrap');
    echo $this->Html->css('font-awesome.min');
    echo $this->Html->css('main');
    ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    body{
    	/*background-color: black;*/
    }

   h1,h6
  {
    text-align: center;
    color: white;
    font-family:  'Lato','Raleway','Josefin Sans',sans-serif;
    font-weight: 100;
  }
  h1
  {
    font-size: 1em;
  }
  h6
  {
  font-size: 0.45em;
  }


  hr{
    margin: 0px;
  }
  .navbar-inverse
  {
    background-color: #000;
  }

    </style>

  </head>

  <body>
 
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top"> 
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.html"><?php echo $this->Html->image('mun/logo.png', array('id' => 'logo','height' => '70px'));?></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="committees.html">COMMITTEES</a></li>
            <li><a href="works.html">REGISTRATIONS</a></li>
            <li><a href="works.html">RESOURCES</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


  <div id="content">
    
  </div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!--script src="assets/js/bootstrap.min.js"></script-->
    <?php
    $this->Html->script('bootstrap.min');
    ?>
    <script type="text/javascript">
    $('.carousel').carousel({
    	 interval: 6000,
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

