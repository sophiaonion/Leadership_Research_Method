<b><center>
<?php 
require_once 'util/main.php';
include 'Questionnaire_header.php'; 
require_once ('util/db_function.php');
$id=$_SESSION['id'];
$characteristics=$_SESSION['characteristics'];
$value=array();
for($j=0;$j<=24;$j++){
    array_push($value,array_values($_POST)[$j]);
//    writeToFile(array_values($_POST)[$j]);
}
add_data($id, $characteristics,$value, "set2");
$_SESSION['id']=$id;
?>

<form action="set4.php" method="post" id="add_name_form">
  <p><label>rate each of the following questions</label> 
      <br><br>
      <?php
	$i=read("set3questions.txt",$drop_down_list);
	?>
       <br>
        <button type="submit" /> Submit</button>
        </form>
</form>
<?php $_SESSION['number_questions']=$i;
?>
</center></b>