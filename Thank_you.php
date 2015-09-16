<b><?php 
require_once 'util/main.php';
require_once ('util/db_function.php');
$id=$_SESSION['id'];
$answer=$_POST['responsibilities'];

add_data3($id, $answer);
//writeToFile($answer);
?>
<center>
Thank you for participating!<br><br>
Please take your personal belongings and meet the researchers outside to receive further instructions. 
</center></b>