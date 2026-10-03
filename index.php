<?php

include 'demo.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>username: <?php echo $username; ?></h2>
    <h2>user_id: <?php echo $user_id; ?></h2>
    <h2>name: <?php echo $name; ?></h2>
    <h2>age: <?php echo $age; ?></h2>
    <h2>height: <?php echo $height; ?></h2>
    <h2>weight: <?php echo $weight; ?></h2>
    <h2>school: <?php echo $school; ?></h2>




    <button type="button" onclick="GreetUser()">GreetUser</button>

    <script>

        var username = "<?php echo $username ?>";
        var user_id = "<?php echo $user_id; ?>";
        var name = "<?php echo $name?>";
        var age = "<?php echo $age?>";
        var height = "<?php echo $height?>";
        var weight = "<?php echo $weight?>";
        var school = "<?php echo $school?>";



        function GreetUser(){
            alert("Hello " + name + " Ang user id mo ay " + user_id + " Ang edad mo ay " + age + " ang height mo ay " + height +
                " Ang Weight mo ay " + weight + " Nag aaral ka sa " + school )
        
        }

    </script>

</body>
</html>

