
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once '../../../components/boot.php'?>
    <title>PHP CRUD / Add pets</title>
    <style>
           fieldset {
               margin: auto;
               margin-top: 100px;
               width: 60% ;
           }      
       </style>
</head>
<body>
<fieldset>
           <legend class='h2'> Add  pets</legend>
           <form action="actions/a_create.php"  method= "post" enctype= "multipart/form-data">
               <table  class='table'>
                   <tr>
                       <th>Name</th>
                        <td><input  class ='form-control' type="text"  name="name"  placeholder ="Pet Name" /></td>
                   </tr>   
                   <tr>
                       <th>Age</th>
                        <td><input  class ='form-control' type="text"  name="age"  placeholder ="age" /></td>
                   </tr>   
                   <tr>
                       <th>Location</th>
                        <td><input  class ='form-control' type="text"  name="location"  placeholder ="location" /></td>
                   </tr>   
                   <tr>
                       <th>Pet size</th>
                        <td><input  class ='form-control' type="text"  name="petsize"  placeholder ="petsize" /></td>
                   </tr>   
                   <tr>
                       <th>Hobbies</th>
                        <td><input  class ='form-control' type="text"  name="hobbies"  placeholder ="Hobbies" /></td>
                   </tr>   
                   <tr>
                       <th>Description</th>
                        <td><input  class ='form-control' type="text"  name="description"  placeholder ="Description" /></td>
                   </tr>   
                   <tr>
                       <th>Breed</th>
                        <td><input  class ='form-control' type="text"  name="breed"  placeholder ="Breed" /></td>
                   </tr>   
                   
                   <tr>
                       <th>Image</th >
                       <td><input class= 'form-control' type="file"  name="image" /></ td>
                   </tr>
                   <tr>
                       <td><button class ='btn btn-success' type= "submit">Insert pets</button></td>
                       <td><a href="index.php" ><button class= 'btn btn-warning' type= "button">Home</button></a></td>
                   </tr>
               </table>
           </form>
       </fieldset>
</body>
</html>