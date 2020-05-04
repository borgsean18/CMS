
<?php
header("Content-Type:application/json");
//connection with the database
include_once ("dbconnect.php");

if(empty($_GET['name']) && empty($_GET['id']))
{
	$items = getItems($conn);
	if (empty($items))
	{
		jsonResponse(200, "Items Not Found", NULL);
	}
	else
	{
		jsonResponse(200, "Item Found", $items);
	}
}
else
{
	if(!empty($_GET['name'])) 
	{
		$name = $_GET['name'];

		$items = getItemsWithName($name, $conn);
		if (empty($items))
		{
			jsonResponse(200, "Items Not Found", NULL);
		}
		else
		{
			jsonResponse(200, "Item Found", $items);
		}
	}

	if(!empty($_GET['id'])) 
	{
		$id = $_GET['id'];

		$items = getItemsWithID($id, $conn);
		if (empty($items))
		{
			jsonResponse(200, "Items Not Found", NULL);
		}
		else
		{
			jsonResponse(200, "Item Found", $items);
		}
	}
}





function jsonResponse($status, $status_message, $data)
{
	header("HTTP/1.1 " . $status_message);
	$response['status'] = $status;
	$response['status_message'] = $status_message;
	$response['data'] = $data;
	$json_response = json_encode($response);
	echo $json_response;
}

function getItems($conn)
{
	$sql = "SELECT * FROM assignmentMovies";
    
	$resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
	$data = array();
	while ($rows = mysqli_fetch_assoc($resultset))
	{
		$data[] = $rows;
	}

	return $data;
}

function getItemsWithID($id, $conn)
{
	$sql = "SELECT * FROM assignmentMovies WHERE id =" + $id;
    
	$resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
	$data = array();
	while ($rows = mysqli_fetch_assoc($resultset))
	{
		$data[] = $rows;
	}

	return $data;
}

function getItemsWithName($name, $conn)
{
	$sql = "SELECT * FROM assignmentMovies WHERE title Like '" . $name."'";
    
	$resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
	$data = array();
	while ($rows = mysqli_fetch_assoc($resultset))
	{
		$data[] = $rows;
	}

	return $data;
}
?>
