<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            width: 100vw;
            height: 100vh;
            background: purple;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }        
    </style>


</head>


<body>

    <h1>


        <?php
            
            $name = $_GET ['name'];
            $mail = $_GET ['mail'];
            $age = $_GET ['age'];


            $lenName = strlen($name) > 3;
            $validMail = strpos ($mail, '.') !== false && strpos ($mail, '@') !== false;
            $validAge = is_numeric($age);
            
        ?>
        


        <?php
            
            if ($lenName  
                && $validMail
                && $validAge){
                    echo 'accesso riuscito';
                }else{
                    echo 'accesso negato';
                }
            
        ?>
    </h1>



</body>
</html>