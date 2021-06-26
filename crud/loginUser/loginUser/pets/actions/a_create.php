<?php
require_once './db_connect.php';
require_once './file_upload.php';

if ($_POST) {   
    $name = $_POST['name'];
    $age = $_POST['age'];
    $location = $_POST['location'];
    $petsize = $_POST['petsize'];
    $hobbies = $_POST['hobbies'];
    $description= $_POST['description'];
    $breed = $_POST['breed'];
  
    
   
     
    $uploadError = '';
    //this function exists in the service file upload.
    $image = file_upload($_FILES['image']);  
   
    $sql = "INSERT INTO pets (name,age,location,petsize,hobbies,description,breed,image) VALUES ('$name','$age','$location','$petsize','$hobbies','$description','$breed','$image->fileName')";

    if ($connect->query($sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $name </td>
            <td> $age </td>
            <td> $location </td>
            <td> $petsize </td>
            <td> $hobbies </td>
            <td> $description</td>
            <td> $breed </td>
            
           
           
        
            </tr></table><hr>";
        $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    }
    $connect->close();
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../../../../components/boot.php'?>
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>