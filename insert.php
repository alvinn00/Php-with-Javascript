<?php
    include 'new.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(!empty($message)):?>
    <p style="color: green;"><?php echo $message?></p>
    <?php endif; ?>

    <form method = "POST" action="" onsubmit="return validateForm()">
        <label for="email">Email Address:</label>
        <input type="text" id="email" name ="email">
        <button type = "submit">Submit</button>
    </form>

    <script>
        function validateForm(){
            let emailInput = document.getElementByID("email").value;

            if (emailInput.trim() === ""){
                alert("All fields are Required")
                return false;
            }

            return true;

        }


    </script>
</body>
</html>
s