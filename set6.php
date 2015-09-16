<b><center>
<?php 
require_once 'util/main.php';
include 'Questionnaire_header.php'; 
require_once ('util/db_function.php');
$id=$_SESSION['id'];
$number=$_SESSION['number_questions'];
$answer=array();

for($j=0;$j<$number;$j++){
    array_push($answer,array_values($_POST)[$j]);
    //writeToFile(array_values($_POST)[$j]);
}
add_data2($id, $answer,$number, "set5");
$_SESSION['id']=$id;
?>

<p>Leadership involves many different tasks. 
<form action="set7.php" method="post" id="add_name_form">
  <label>how pleasant/enjoyable do you rate the following responsibilities for yourself?</label> 
  </p>
        <?php
	$i=read("set6Q.txt",$drop_down_list);
	?>
       
        <button type="submit" /> Submit</button>
</form>
<?php $_SESSION['number_questions']=$i;
?>
</center></b>