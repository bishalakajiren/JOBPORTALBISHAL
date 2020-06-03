<?php
error_reporting(0);
include("db/connect.php");
$q="select max(cid)+1 from category";
$sql=mysqli_fetch_row(mysqli_query($con,$q));

if($sql[0]==NULL)
{
	$cid=1;
}
else
{
	$cid=$sql[0];
}
?>


<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<form name="f1" id="f1" method="post" action="actions/categoryscript.php">
<div class="form-group">
<label>CategoryId</label>
<input type="text" class="form-control" name="t1" value="<?php echo $cid;?>" readonly required/>
</div>

<div class="form-group">
<label>Category Name</label>
<input type="text" class="form-control" name="t2" required/>
</div>


<div class="form-group">

<input type="submit" class="btn btn-sucess" name="b1" value="SAVE"/>
</div>


</div>
</form>
<div class="col-sm-4"></div>