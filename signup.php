
<!DOCTYPE HTML>
<html>
<head>
    <title>SignUp Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
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
    <!--//webfonts-->
    <!-- Metis Menu -->
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
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h2 class="title1">SignUp Here</h2>
				<div class="sign-up-row widget-shadow">
					<h5>Personal Information :</h5>
				<form action="actions/reg.php" method="post">
					<div class="sign-u" style="margin-bottom:10px;">
								<input type="text" name="fname" placeholder="First Name" required="" pattern="[\a-zA-Z\s]+" class="form-control">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u" style="margin-bottom:10px;">
								<input type="text" name="lname" placeholder="Last Name" required="" pattern="[\a-zA-Z\s]+" class="form-control">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u" style="margin-bottom:10px;">
								<input type="email" placeholder="Email Address" required="" name="email" class="form-control">
						<div class="clearfix"> </div>
					</div>
                    
                    <div class="sign-u" style="margin-bottom:10px;">
								<input type="text" name="mobile" placeholder="Mobile" required="" pattern="[\0-9]+" maxlength="10" class="form-control">
						<div class="clearfix"> </div>
					</div>
                    
                      <div class="sign-u" style="margin-bottom:10px;">
								<input type="text" name="fname1" placeholder="Fathers Name" required="" pattern="[\a-zA-Z]+" class="form-control">
						<div class="clearfix"> </div>
					</div>
                    
                      <div class="sign-u" style="margin-bottom:10px;">
								<input type="text" name="mname" placeholder="Mothers Name" required="" pattern="[\a-zA-Z]+" class="form-control">
						<div class="clearfix"> </div>
					</div>
                   
					<div class="sign-u" style="margin-bottom:10px;">
						<div class="sign-up1">
							<h4>Gender* :</h4>
						</div>
						<div class="sign-up2">
							<label>
								<input type="radio" name="gen" required="" value="Male">
								Male
							</label>
							<label>
								<input type="radio" name="gen" required="" value="Female">
								Female
							</label>
						</div>
						<div class="clearfix"> </div>
					</div>
                    
                    <div class="sign-u" style="margin-bottom:10px;">
						<div class="sign-up1">
							<h4>DOB* :</h4>
						</div>
						<div class="sign-up2">
							<input type="date" name="dob" required="" class="form-control"/>
						</div>
                        
                        
						<div class="clearfix"> </div>
					</div>
					<h6>Login Information :</h6>
					<div class="sign-u" style="margin-bottom:10px;">
								<input type="text" placeholder="User Name" required="" name="uname" class="form-control">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u" style="margin-bottom:10px;">
								<input type="password" placeholder="Password" required="" name="pswd" class="form-control">
						</div>
						<div class="clearfix"> </div>
					<div class="sub_home">
							<input type="submit" value="Submit">
						<div class="clearfix"> </div>
					</div>
					<div class="registration">
						Already Registered.
						<a class="" href="index.php">
							Login
						</a>
					</div>
				</form>
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		  
		</div>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
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
	
</body>
</html>