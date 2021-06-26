<?php
require_once './actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM pets WHERE id = {$id}";
    $result = $connect->query($sql);
    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();
        
        $name = $data['name'];
        $age = $data['age'];
        $location = $data['location'];
        $petsize= $data['petsize'];
        $hobbies = $data['hobbies'];
        $description = $data['description'];
        $breed = $data['breed'];
        $image = $data['image'];
        
    } else {
        header("location: error.php");
    }
    $connect->close();
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Pet</title>
        <?php require_once '../../../components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }     
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='../pictures/<?php echo $image?>' alt="<?php echo $name ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                <tr>
                       <th> Name</th>
                        <td><input  class ='form-control' type="text"  name="name"  placeholder ="Name" value="<?php echo $name?>" /></td>
                   </tr>   
                   <tr>
                       <th>Age</th>
                        <td><input  class ='form-control' type="text"  name="age"  placeholder ="Age" value="<?php echo $age ?>" /></td>
                   </tr>   
                   <tr>
                       <th>location</th>
                        <td><input  class ='form-control' type="text"  name="location"  placeholder ="location" value="<?php echo $location ?>" /></td>
                   </tr>   
                   <tr>
                       <th>pet size</th>
                        <td><input  class ='form-control' type="text"  name="petsize"  placeholder ="pet size" value="<?php echo $petsize ?>"/></td>
                   </tr>   
                   <tr>
                       <th>Hobbies</th>
                        <td><input  class ='form-control' type="text"  name="hobbies"  placeholder ="hobbies" value="<?php echo $hobbies ?>" /></td>
                   </tr>   
                   <tr>
                       <th>description</th>
                        <td><input  class ='form-control' type="text"  name="description"  placeholder ="description" value="<?php echo $description ?>" /></td>
                   </tr>   
                   <tr>
                       <th>Breed</th>
                        <td><input  class ='form-control' type="text"  name="breed"  placeholder ="breed" value="<?php echo $breed?>" /></td>
                   </tr>   
                   <tr>
                       <th>Image</th >
                       <td><input class= 'form-control' type="file"  name="image" value="<?php echo $image ?>"/></ td>
                   </tr>
                   <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden" name= "image" value= "<?php echo $data['image'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>