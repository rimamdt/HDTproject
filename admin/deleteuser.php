<?php 

$conn = new mysqli( "localhos","root", ""  ,"hdtproject" );

if($conn->connect_error){
    die("connection failed: ".$con->connect_error);
}
if(
    isset($_POST['id'])
)
{
    $user_id=intval($_POST['id']);
    $conn->query("DELETE FROM user WHERE ID= $user_id");
}
$conn->close();
?>