<?php
//Connect to a database

echo 'Processing...';

//Check for GET variable
if(isset($_GET['name'])){
    echo 'GET: Your name is '. $_Get['name'];
}

//Check for POST variable
if(isset($_POST['name'])){
    echo 'POST: Your name is '. $_POST['name'];
}