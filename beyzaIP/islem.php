<?php 



$db= mysqli_connect("localhost","root","12345678","kargocu");
if(isset($_POST['submit']))
{
 
 $instagram = $_POST['instagram'];
 $eposta = $_POST['eposta'];
 $numara = $_POST['numara'];

 if(!$instagram){
    echo "lütfen instagram Giriniz.";
 }elseif(!$eposta){
    echo "lütfen eposta Giriniz.";
 }elseif(!$numara){
    echo "lütfen numara Giriniz.";
 }
 else{
    $sql = "UPDATE iletişim SET numara=?, eposta=?, instagram=?";
    $stmt= $db->prepare($sql);
    $stmt->bind_param($numara, $eposta, $instagram);
    $stmt->execute();
if ($db->mysqli_query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $db->error;
}
 }
}
?>