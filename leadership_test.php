<b><center>
<?php  
require_once 'util/main.php';
      
$gender=$_SESSION['gender'];      
?>

<div id="content">
    <h1>Leadership Test</h1>
    
       <?php
	$f = fopen("Leadership questions.txt", "r");
        
	//Read line from the text file and write the contents to the client until end of file
	$j=0;
        while(!feof($f)) {  
            ++$j;
            echo "<p><label>";
	    echo fgets($f);
            echo "<br/></label>";
            
            for ($i=0;$i<=3;$i++){
                echo "<input type= 'radio' name='$j'/>";
                echo fgets($f);
                echo "<br/>";
            }
            
            echo "</p>";
            
	}

	fclose($f);

	?>

        <form action="waiting_page.php" method="post"> 
        <label>&nbsp;</label>
        <button type="submit" /> Submit</button>
        </form>
</div>

<?php
    $_SESSION['gender']=$gender;
?>
    </center></b>