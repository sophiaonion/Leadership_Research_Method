<b><center>
<?php
require_once 'util/main.php';
require_once ('util/db_function.php');
$id=$_SESSION['id'];
$accept=$_SESSION['accept'];
add_acceptance($id, $accept);
//writeToFile($accept);
?>


<form action="transition.php" method="post"> 
<label>If you were to pass on the leadership position to another member of your group, who would you 
        give it to? <br><br>
        Please rank your group members from most preferred(1) to least least preferred(3) </label>
    <br> <br>
    <select name= "ranking1" >
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option></select>group member 1(female)    86
     <br>   <br>
    <select name= "ranking2" >
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option></select>group member 2(male)   86
    <br> <br>
    <select name= "ranking3" >
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option></select>group member 3(female)   81
    <br><br>
       <button type="submit" /> Submit</button>
 </form>

<?php
$_SESSION['id']=$id;
?>
</center></b>