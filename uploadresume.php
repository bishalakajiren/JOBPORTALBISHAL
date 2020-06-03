
		<!-- main content start-->
		
				<form action="actions/uploadresumecript.php" method="post" enctype="multipart/form-data">
					<div class="row">
							<div class="col-xs-4">
                                
                                   
                             </div>
                            <div class="col-xs-4">
                                <label for="ex1">Upload Resume</label>
                               <input class="form-control" id="ex2" type="file"  name="resume">
                            </div>
                          
						<div class="clearfix"> </div>
					</div>
                    
                 
					
					<div class="sub_home">
							<input type="submit" value="Submit">
						<div class="clearfix"> </div>
					
				</form>
                <div class="row">
                <?php
				session_start();
$uname=$_SESSION["uname"];


$sql1=mysqli_fetch_row(mysqli_query($con,"select count(*) from resume where uname='$uname'"));
if($sql1[0]==1)
{
	$sql2=mysqli_fetch_row(mysqli_query($con,"select * from resume where uname='$uname'"));
	echo "<p><a href='UPLOADS/$sql2[1]'>Click Here To Download Your Resume</a></p>";
}
				?>
                </div>
			