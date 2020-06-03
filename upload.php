
<!DOCTYPE HTML>
<html>
<head>
    <title>Academic Page</title>
   
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
				<h2 class="title1">Upload Academic Details</h2>
				<div class="sign-up-row widget-shadow">
					<h5>Academic Information :</h5>
				<form action="actions/uploadscript.php" method="post" enctype="multipart/form-data">
					<div class="form-group row">
							<div class="col-xs-4">
                                   <label for="ex1">HSLC Marksheet</label>
                                   
                             </div>
                            <div class="col-xs-4">
                             
                               <input class="form-control" id="ex2" type="file"  name="hslc">
                            </div>
                          
						<div class="clearfix"> </div>
					</div>
                    
                    <div class="form-group row">
							<div class="col-xs-4">
                                   <label for="ex1">HS Marksheet</label>
                                   
                             </div>
                            <div class="col-xs-4">
                               
                               <input class="form-control" id="ex2" type="file" name="hs">
                            </div>
                           
						<div class="clearfix"> </div>
					</div>
                    
                      <div class="form-group row">
							<div class="col-xs-4">
                                   <label for="ex1">Degree Marksheet</label>
                                   
                             </div>
                            <div class="col-xs-4">
                              
                               <input class="form-control" id="ex2" type="file"  placeholder="Degree Year" name="degree">
                            </div>
                          
						<div class="clearfix"> </div>
					</div>
                    
                       <div class="form-group row">
							<div class="col-xs-4">
                                   <label for="ex1">Masters Marksheet</label>
                                   
                             </div>
                            <div class="col-xs-4">
                              
                               <input class="form-control" id="ex2" type="file" pattern="[\0-9]+" placeholder="Masters Year" name="master">
                            </div>

</div>
                              <div class="form-group row">
							<div class="col-xs-4">
                                   <label for="ex1">Resume Upload</label>
                                   
                             </div>
                            <div class="col-xs-4">
                              
                              <input class="form-control" id="ex2" type="file"  name="resume">
                            </div>
                        </div>

                            
                          
						<div class="clearfix"> </div>
					</div>
					
					<div class="sub_home">
							<input type="submit" value="Submit">
						<div class="clearfix"> </div>
					
				</form>
				</div>
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
