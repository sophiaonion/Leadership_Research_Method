<b><center>
<?php

function read($filename,$drop_down_list){
    $f = fopen($filename, "r");
        $i=0;
	//Read word from the text file and write the contents to the client until end of file
        while(!feof($f)) {  
            $question=fgets($f);
            echo "<select name=Q$i>$drop_down_list </select>$question <br><br>";
            $i++;
	}

	fclose($f);
     return $i;
}
?>
<p>on a scale from 1 to 7 (1 = not at all, 7 = very much so): </p>
</center></b>