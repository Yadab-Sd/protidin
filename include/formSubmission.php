<?php
include("DBclass.php");

if(isset($_POST['book'])){
    if(isset($_POST['name'])&&isset($_POST['phone'])&&!empty($_POST['name'])&&!empty($_POST['phone'])){
        $db = new DBclass;
        #$conn = $db->connection;
        $insert_query = "INSERT INTO r_book (`date`, `time`, `people`, `name`, `phone`, `email`)
        VALUES('".$_POST['date']."','".$_POST['time']."','".$_POST['people']."','".$_POST['name']."','".$_POST['phone']."','".$_POST['email']."')";
        $result = $db->DBquery($insert_query);
        if($result){
            exit('Submission Successfull! We will confirm you soon');
        }
    }
    else{
        exit('Name and Phone must be filled');
    }
}
#special signup form submission
if(isset($_POST['signup'])){
    if(isset($_POST['email-address'])&&!empty($_POST['email-address'])){
        $db = new DBclass;
        $insert_query = "INSERT INTO r_specials (`email-address`) VALUES('".$_POST['email-address']."')";
        $result = $db->DBquery($insert_query);
        if($result){
            exit('Request Accepted');
        }
    }
    else{
        exit('Request Failed.');
    }
}
#special message form submission
if(isset($_POST['message'])){
    if(isset($_POST['name'])&&isset($_POST['phone'])&&!empty($_POST['name'])&&!empty($_POST['phone'])){
        $msg = $_POST['message'];
        $clear_msg = str_replace("'","\'", $msg);
        $db = new DBclass;
        $insert_query = "INSERT INTO r_inbox (`name`, `email`, `phone`, `message`)
        VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','$clear_msg')";
        $result = $db->DBquery($insert_query);
        if($result){
            exit('Message Accepted. Thanks for your messages');
        }
    }
    else{
        exit('Name And Phone must be filled');
    }
}
#work if no condition applied from aboves
if(isset($_POST['signout'])){
    session_unset();
    session_destroy();
    exit("http://tonmoyenterprise.com/");
}
#work if no condition applied from aboves
else{
    exit('No operation done.');
}

?>
