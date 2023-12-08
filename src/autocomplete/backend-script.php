<?php

include '../Connection/Cus_Disp_Conn.php'; 

$searchTerm = $_GET['term'];
$sql = "SELECT * FROM supplier WHERE SupID LIKE '%".$searchTerm."%'"; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
  $tutorialData = array(); 
  while($row = $result->fetch_assoc()) {

   $data['id']    = $row['SupID']; 
   $data['value'] = $row['SupName'];
   array_push($tutorialData, $data);
} 
}
 echo json_encode($tutorialData);
?>