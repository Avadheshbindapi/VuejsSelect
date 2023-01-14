<?php
    include './app/init.php';

    $Controller = new StateController (new StateModel($conn));
    $data = $Controller->getCountry();

    if(isset($_POST['state_name']))
    {
        $Controller->save($_POST);
    }
    print_r($data);

   
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
    <div> 
  
       <select name="" id="">
            <?php foreach($data as $values){?>
                <option value=""><?php echo $values['country_name'] ?></option>
            <?php } ?>

        </select></br></br>
        
        <form method="post">
            <input type="text" name="state_name" placeholder="State Name"></br></br>
            <button type="submit" name="submit">Save</button>
        </form>
    </div>
   
</body>
</html>