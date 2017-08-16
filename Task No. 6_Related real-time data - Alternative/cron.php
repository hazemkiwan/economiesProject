<?php
include 'conf.php';

$current_price=0;
$factor_number=0;

$result = @mysqli_query($conn,"SELECT * FROM Stocks");
while($row = mysqli_fetch_array($result)) {
	$factor_number = $row['Factor'];
	$current_price = $row['Price'];
	$new_price=($current_price/$factor_number)*2.5;

	if($new_price <= 0.01){
		$new_price=1.0;
	}

	$query="UPDATE Stocks
      SET 
        Price='$new_price'
      WHERE Name = $row['name']";

	}

	if (mysqli_query($conn, $query)) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}

	mysqli_close($conn);}


?>