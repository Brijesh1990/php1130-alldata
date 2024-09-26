<?php 
require("config.php");

if(isset($_POST["cn"]))
{
    $cn=$_POST["cn"];
    $select="select * from tbl_state where cid='$cn'";
    $exe=mysqli_query($con,$select);
    while($fetch=mysqli_fetch_array($exe))
    {

        ?>
      <option value='<?php echo $fetch["sid"];?>'><?php echo $fetch["sname"];?></option>
  <?php 

}
}

if(isset($_POST["st"]))
{
    $st=$_POST["st"];
    $select="select * from tbl_city where sid='$st'";
    $exe=mysqli_query($con,$select);
    while($fetch=mysqli_fetch_array($exe))
    {

        ?>
      <option value='<?php echo $fetch["ctid"];?>'><?php echo $fetch["ctname"];?></option>
  <?php 

}
}

?>