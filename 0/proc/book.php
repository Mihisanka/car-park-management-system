 <?php 
 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
		
}

if (isset($_POST['submit'])) {
	include('../inc/connect.php');
	include('../inc/insert.php');
	$phone=$_SESSION['phone'];
	$street=$_POST['street'];
	
	 mysql_connect("db4free.net", "cpmsrun_2", "password123@") or die(mysql_error());
    mysql_select_db("cpmstest_1") or die(mysql_error());
	$sql = "UPDATE users SET pl_booked = 'YES' WHERE phone = '$phone'";
	$table_name='bookings';
	 if (mysql_query($sql))
    {
		$query = "select * from users where phone='$phone'";
			$result = $conn->query($query);
			while($rows = $result->fetch_assoc()) {
				$plate=$rows['plate_no'];
				$status='BOOKED';
			}
		$form_data = array(
	    'phone' => $phone,
		'plate_no'=> $plate,
		'status' => $status,
		'street'=> $street
		
	);
	//echo dbRowInsert($table_name, $form_data);
	$conn->multi_query( dbRowInsert($table_name, $form_data));
	$conn->close();
      header("Location: ../success.php");
    }
	}
	
	//


//
?>