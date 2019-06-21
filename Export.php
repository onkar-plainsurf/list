<?php  
//PDO is a extension which  defines a lightweight, consistent interface for accessing databases in PHP.  
$db=new PDO('mysql:dbname=logindata;host=localhost;','root','test123');  
//here prepare the query for analyzing, prepared statements use less resources and thus run faster  
$row=$db->prepare('select * from list');  
  
$row->execute();//execute the query  
$json_data=array();//create the array  
foreach($row as $rec)//foreach loop  
{  
$json_array['id']=$rec['id'];  
    $json_array['pname']=$rec['pname'];  
    $json_array['mob']=$rec['mob'];  
    $json_array['wname']=$rec['wname'];
//here pushing the values in to an array  
    array_push($json_data,$json_array);  
  
}  
  
//built in PHP function to encode the data in to JSON format  
echo json_encode($json_data);  
  
  
?>  