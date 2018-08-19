

<?PHP
include "connection.php";
//$result = mysqli_query("SELECT COUNT(comp_id) FROM complain_reg");
$sql="SELECT COUNT(comp_id) FROM complain_reg where status=' '";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$total = $row[0];
echo  $total;
?>