<b><?php require_once('util/main.php'); 
require_once ('util/db_function.php');

$gender= $_SESSION['gender'];

if (check_condition_num($gender)[0]==17)//check if we meet one condition, 
// a.k.a to see if there's 14 negative control for one gender
   $page="Job_Offer_+.php";
else { //if not randomly assign pos/neg control 
    $control=rand(0,1);
    if ($control==0)
        $page="Job_Offer_-.php";
    else
        $page="Job_Offer_+.php"; }        
$id=add_gender($gender, $control);
$_SESSION['id']=$id;
//writeToFile($gender);
//writeToFile($control);
?>
<center>
<h1>Results  </h1>
<p>        
     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
     Average Score &nbsp &nbsp &nbsp Test component A, B, C    <br>
   You &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp      	       92  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp              96, 88, 92<br>    
   group member 1(female) &nbsp &nbsp &nbsp     86 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp                  88, 96, 74<br> 
   group member 2(male ) &nbsp &nbsp &nbsp &nbsp      86  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp                85, 77, 96<br> 
   group member 3(female)  &nbsp &nbsp &nbsp   81  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp               82, 78, 83
</p>
 
<!-- direct to Job offer page -->  
<a href="<?php echo $app_path; echo $page?>" >Click here to proceed</a>  


</center></b>