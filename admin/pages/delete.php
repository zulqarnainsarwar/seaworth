<?php
include("connection.php");
$id = $_GET['id'];
$query = "DELETE FROM product WHERE  id = '$id'";
$data = mysqli_query($conn,$query);
if($data)
{
    echo "<script>
    alert('Record Deleted From Table')</script>";
    ?>
<!--  <META HTTP-EQUIV="Refresh" CONTENT ="0; URL=http://localhost/seawth/admin/pages/view.php">-->
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/seawth/admin/index.php?req=view">
    <?php
}
else{
    echo "<font color='red'>Sorry,Delete Process Failed ";
}

?>
