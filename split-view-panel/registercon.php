<?php
//
// This is a very small sample register page. The user will fill out their information
// on the form. When they click the submit button, the data will be inserted into the database.

    
    $firstName2 = $_POST['firstName1'];
    $lastName2 = $_POST ['lastName1'];
    $DOB2 = $_POST ['dateOfBirth1'];
    $address2 = $_POST ['address1'];
    $email2 = $_POST ['email1'];
    $password2 = $_POST['password1'];

        $connection = mysql_connect("localhost","root","");
        $db = mysql_select_db("petshealth",$connection);
   

    if(isset($_POST['firstName1'])){
    $query = mysql_query("insert into users(firstName,lastName,DOB,address,email,password) VALUES ('$firstName2','$lastName2','$DOB2','$address2','$email2','$passoword2')");
    }
    mysql_close($connection); // Connection Closed

/*$sth = $DBH->prepare($sql);
	
	
	$sth->bindParam(1, $firstName2, PDO::PARAM_INT);
    $sth->bindParam(2, $lastName2, PDO::PARAM_INT);
    $sth->bindParam(3, $DOB2, PDO::PARAM_INT);
    $sth->bindParam(4, $address2, PDO::PARAM_INT);
    $sth->bindParam(5, $email2, PDO::PARAM_INT);
    $sth->bindParam(6, $password2, PDO::PARAM_INT);
	
	$sth->execute();*/
    
    echo 'You are now registered!';
     

     
}
?>