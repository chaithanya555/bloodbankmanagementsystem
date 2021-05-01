<?php
//Include database configuration file
include('dbConfig.php');



if(isset($_POST["state"]) && !empty($_POST["state"])){
    //Get all city data
    $query = $db->query("SELECT DISTINCT district FROM banks WHERE state = '".$_POST['state']."'");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['district'].'">'.$row['district'].'</option>';
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}
?>