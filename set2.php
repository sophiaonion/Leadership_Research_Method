<b><center>
<?php 
require_once 'util/main.php';
include 'Questionnaire_header.php'; 
require_once ('util/db_function.php');
$id=$_SESSION['id'];
//$characteristics=array();
$characteristics=$_SESSION['characteristics'];
$value=array();

//passing the value from each field in set1 into value array 
for($j=0;$j<=24;$j++){
    array_push($value,array_values($_POST)[$j]);
//    writeToFile(array_values($_POST)[$j]);
}

add_data($id, $characteristics,$value, "set1");
$_SESSION['id']=$id;
$_SESSION['characteristics']=$characteristics;
?>

<form action="set3.php" method="post" id="add_name_form">
  <p><label> to what extent should the following qualities describe a good leader?</label> 
      <br><br>    
    <?php
	$f = fopen("your_characteristics.txt", "r");
	//Read word from the text file and write the contents to the client until end of file
        while(!feof($f)) {  
            $characteristics_name=fgets($f);
            echo "<select name=$characteristics_name>$drop_down_list</select>$characteristics_name <br>";
	}

	fclose($f);

	?>
       <br>
        <button type="submit" /> Submit</button>
        </form>
</form>
</center></b>