
<!DOCTYPE HTML>
<html>
<head>
    <title>Login Page</title>
   
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- font-awesome icons CSS-->
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <!-- //font-awesome icons CSS-->
    <!-- side nav css file -->
    <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
    <!-- side nav css file -->
    <!-- js-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
   
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
    <link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body >
    <div class="main-content">
        <div class="sticky-header header-section ">
			<div class="header-left">
				
				<!--toggle button start-->
				
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							
						</li>
						<li class="dropdown head-dpdn">
							
						</li>	
						<li class="dropdown head-dpdn">
							
						</li>	
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
				<!--search-box-->
				
				
				<div class="profile_details">		
					
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
   
    <div id="page-wrapper">
        <div class="main-page login-page ">
            <h2 class="title1">User Login</h2>
            <div class="widget-shadow">
                <div class="login-body">
                    <form action="actions/login_action.php" method="post">
                 
                   
                       <input type="text" name="t1" placeholder="User Name" required="" class="form-control" style="padding:10px; margin-bottom:10px;">
                     
                        <input type="password" name="password" class="form-control" style="padding:10px; margin-top:10px;" placeholder="Password">
                       
                        <input type="submit" name="Sign In" value="Sign In">
                        <div class="registration">
                          <p>Don't have an account ?<a class="" href="signup.php">Create an account</a></p>
                          <p><a href="employee/index.php">Employee Login</a></p>
                        </div>
                    </form>
                </div>
            </div>		
        </div>
    </div>
<!--footer-->
    <div class="footer"><p>&nbsp;</p><a>JOB PORTAL SYSTEM</a> </div>

<!--//footer-->
</div>
<!-- side nav js -->
<script src='js/SidebarNav.min.js' type='text/javascript'></script>
<script>$('.sidebar-menu').SidebarNav()</script>
<!-- //side nav js -->
<!-- Classie --><!-- for toggle left push menu script -->
<script src="js/classie.js"></script>
<script>var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),showLeftPush = document.getElementById( 'showLeftPush' ),body = document.body;	
	showLeftPush.onclick = function() 
        {
	classie.toggle( this, 'active' );
	classie.toggle( body, 'cbp-spmenu-push-toright' );
	classie.toggle( menuLeft, 'cbp-spmenu-open' );
	disableOther( 'showLeftPush' );
	};
	function disableOther( button ) {
	if( button !== 'showLeftPush' )
        {
            classie.toggle( showLeftPush, 'disabled' );
				}
	}
</script>
<!-- //Classie --><!-- //for toggle left push menu script -->
<!--scrolling js-->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
</body>
</html>


<!-- Registration Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>