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
add_data2($id, $answer,$number, "set3");

$_SESSION['id']=$id;
?>

<form action="set5.php" method="post" id="add_name_form">
  <p><label>how much do you agree with the following statements? </label> 
      <br><br>
       <?php
	$i=read("set4Q.txt",$drop_down_list);
	?>
        <button type="submit" /> Submit</button>
        </form>
</form>
<?php $_SESSION['number_questions']=$i;
?>
</center></b>