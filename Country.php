<?php
    include './app/init.php';

    $Controller = new CountryController (new CountryModel($conn));
   
    
    if(isset($_POST['country_name']))
    {
        $Controller->save($_POST);
    }

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Form</title>
</head>
<body>
    <form method="post">
        <input type="text" name="country_name" placeholder="Country Name"><br><br>
        <button type="submit" name="submit">Save</button>
    </form>
</body>
</html>