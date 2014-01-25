<html>
<head>
  <title>Websponsive</title>
  <!-- HEADER -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="css/font-awesome.css"> -->

  <!-- Custom CSS -->
  
  <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'> -->
  <!-- <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'> -->
  <!-- <link rel="stylesheet" href="css/animate.css">  -->
  <!-- <link rel="stylesheet" href="css/styles.css">  -->
  <!-- <link rel="stylesheet" href="css/global.css">   -->
  
  <style>
body {
  padding-top: 51px;  
}
.text-center {
  padding-top: 20px;
}
.col-xs-12 {
  background-color: #fff;
}
#sidebar {
  height: 100%;
  padding-right: 0;
  padding-top: 20px;
}
#sidebar .nav {
  width: 95%;
}
#sidebar li {
  border:0 #f2f2f2 solid;
  border-bottom-width:1px;
}

/* collapsed sidebar styles */
@media screen and (max-width: 767px) {
  .row-offcanvas {
    position: relative;
    -webkit-transition: all 0.25s ease-out;
    -moz-transition: all 0.25s ease-out;
    transition: all 0.25s ease-out;
  }
  .row-offcanvas-right
  .sidebar-offcanvas {
    right: -41.6%;
  }

  .row-offcanvas-left
  .sidebar-offcanvas {
    left: -41.6%;
  }
  .row-offcanvas-right.active {
    right: 41.6%;
  }
  .row-offcanvas-left.active {
    left: 41.6%;
  }
  .sidebar-offcanvas {
    position: absolute;
    top: 0;
    width: 41.6%;
  }
  #sidebar {
    background-color:#3b3b3b;
    padding-top:0;
  }
  #sidebar .nav>li {
    color: #ddd;
    background: linear-gradient(#3E3E3E, #383838);
    border-top: 1px solid #484848;
    border-bottom: 1px solid #2E2E2E;
  }
  #sidebar .nav>li:first-child {
    border-top:0;
  }
  #sidebar .nav>li>a {
    color: #ddd;
  }
  #sidebar .nav>li>a>img {
    max-width: 14px;
  }
  #sidebar .nav>li>a:hover, #sidebar .nav>li>a:focus {
    text-decoration: none;
    background: linear-gradient(#373737, #323232);
    color: #fff;  
  }
  #sidebar .nav .caret {
    border-top-color: #fff;
    border-bottom-color: #fff;
  }
  #sidebar .nav a:hover .caret{
    border-top-color: #fff;
    border-bottom-color: #fff;
  }
}


  </style>

</head>

<body>
  <div class="home"></div>



<div class="page-container">
  
	<!-- top navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
       <div class="container">
    	<div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="#">Project Name</a>
    	</div>
       </div>
    </div>
      
        <!-- sidebar -->
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas visible-xs " id="sidebar" role="navigation">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Link 1</a></li>
              <li><a href="#">Link 2</a></li>
              <li><a href="#">Link 3</a></li>              
            </ul>
        </div>

    <div class="container">
      <div class="row row-offcanvas row-offcanvas-left">
        

  	
        <!-- main area -->
        <div class="col-xs-12 col-sm-12">
          <h1>Shrink Width to Collapse Sidebar</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in nisi eu arcu tempus vehicula. 
            Nulla faucibus cursus metus in sagittis. Nunc elit leo, imperdiet in ligula in, euismod varius est. 
            Aenean pellentesque lorem a porttitor placerat. Vestibulum placerat nunc ac rutrum fringilla. Donec 
            arcu leo, tempus adipiscing volutpat id, congue in purus. Pellentesque scelerisque mattis nibh vel 
            semper. Sed a risus purus. Fusce pulvinar, velit eget rhoncus facilisis, enim elit vulputate nisl, a 
            euismod diam metus eu enim. Nullam congue justo vitae justo accumsan, sit amet malesuada nulla sagittis. 
            Nam neque tellus, tristique in est vel, sagittis congue turpis. Aliquam nulla lacus, laoreet dapibus 
            odio vitae, posuere volutpat magna. Nam pulvinar lacus in sapien feugiat, sit amet vestibulum enim 
            eleifend. Integer sit amet ante auctor, lacinia sem quis, consectetur nulla.</p>
    
          <p>Vestibulum porttitor massa eget pellentesque eleifend. Suspendisse tempor, nisi eu placerat auctor, 
            est erat tempus neque, pellentesque venenatis eros lorem vel quam. Nulla luctus malesuada porttitor. 
            Fusce risus mi, luctus scelerisque hendrerit feugiat, volutpat gravida nisi. Quisque facilisis risus 
            in lacus sagittis malesuada. Suspendisse non purus diam. Nunc commodo felis sit amet tortor 
            adipiscing varius. Fusce commodo nulla quis fermentum hendrerit. Donec vulputate, tellus sed 
            venenatis sodales, purus nibh ullamcorper quam, sit amet tristique justo velit molestie lorem.</p>
    
          <p>Fusce sollicitudin lacus lacinia mi tincidunt ullamcorper. Aenean velit ipsum, vestibulum nec 
            tincidunt eu, lobortis vitae erat. Nullam ultricies fringilla ultricies. Sed euismod nibh quis 
            tincidunt dapibus. Nulla quam velit, porta sit amet felis eu, auctor fringilla elit. Donec 
            convallis tincidunt nibh, quis pellentesque sapien condimentum a. Phasellus purus dui, rhoncus 
            id suscipit id, ornare et sem. Duis aliquet posuere arcu a ornare. Pellentesque consequat libero 
            id massa accumsan volutpat. Fusce a hendrerit lacus. Nam elementum ac eros eu porttitor. 
            Phasellus enim mi, auctor sit amet luctus a, commodo fermentum arcu. In volutpat scelerisque 
            quam, nec lacinia libero.</p>
    
          <p>Aliquam a lacinia orci, iaculis porttitor neque. Nullam cursus dolor tempus mauris posuere, eu 
            scelerisque sem tincidunt. Praesent blandit sapien at sem pulvinar, vel egestas orci varius. 
            Praesent vitae purus at ante aliquet luctus vel quis nibh. Mauris id nulla vitae est lacinia 
            rhoncus a vel justo. Donec iaculis quis sapien vel molestie. Aliquam sed elementum orci. 
            Vestibulum tristique tempor risus et malesuada. Sed eget ligula sed quam placerat dapibus. 
            Integer accumsan ac massa at tempus.</p>
          
        </div><!-- /.col-xs-12 main -->
    </div><!--/.row-->
  </div><!--/.container-->
</div><!--/.page-container-->


  <!-- FOOTER UNIT -->
  <!-- ####################### -->
      
  <?php include 'php/footer.php';?>

  <script type="text/javascript">
    $(document).ready(function() {
      $('[data-toggle=offcanvas]').click(function() {
        $('.row-offcanvas').toggleClass('active');
      });
    });
  </script>  

</body>
</html>