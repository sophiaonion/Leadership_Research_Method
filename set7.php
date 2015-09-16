<b><center>
<?php 
require_once 'util/main.php';
require_once ('util/db_function.php');
$id=$_SESSION['id'];
$number=$_SESSION['number_questions'];
$answer=array();

for($j=0;$j<$number;$j++){
    array_push($answer,array_values($_POST)[$j]);
    //writeToFile(array_values($_POST)[$j]);
}
add_data2($id, $answer,$number, "set6");
?>

<form action="Thank_you.php" method="post" id="add_name_form">
  <p><label>
      What will your role be in the following group activity?<br> 
      Please list all the duties the leader of the group will have in this experiment
      (List the responsibilities previously described to you based on your test results): 
      </label> 
      <br><br>
      <textarea rows="7" cols="50" name='responsibilities'>Enter your answer at here</textarea>
      <br>
        <button type="submit" /> Submit</button>
        </form>
</form>
</center></b>
