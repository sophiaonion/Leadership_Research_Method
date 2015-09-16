<b><center>
<?php 
require_once 'util/main.php';
require_once ('util/db_function.php');
$id=$_SESSION['id'];
?>

<form action="set2.php" method="post" id="add_name_form">
  <p><label>Please rate yourself on the following characteristics, </label> 
      
        <?php
        include 'Questionnaire_header.php'; 
        
	$f = fopen("your_characteristics.txt", "r");
        $characteristics=array();
	//Read word from the text file and write the contents to the client until end of file
        while(!feof($f)) {  
            $characteristics_name=fgets($f);
            echo "<select name=$characteristics_name>$drop_down_list</select>$characteristics_name <br>";
             array_push($characteristics, $characteristics_name);
	}

	fclose($f);
	?>
       <br>
        <button type="submit" /> Submit</button>
 </form>

<?php 
$_SESSION['characteristics']=$characteristics;
$_SESSION['id']=$id;
?>
</center></b>