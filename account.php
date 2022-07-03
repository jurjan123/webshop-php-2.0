<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aanmelden</title>
    <style>
        .card-body{
            display: block;
            width: 450px;
            height: 230px;
            background-color: rgb(248,249,250);
            margin-left: 100px;
            margin-top: 75px;
            border-radius: 4px;
        }

        .mijn{
            padding: 10px;
        }

        .login{
            margin-top: 50px;
            margin-left: 5px;
        }

        .inputfield{
            display: flex;
            gap: 10px;
            margin-left: 45px;
        }

        input.btn[type="submit"]:hover {
        border: 1px solid black;
        }
        .btn {
            cursor: pointer;
            border: none;
            background: none;
            width: 20px;
            height: 20px;
            margin-top: 10px;
            display: block;
            width: 100px;
}
input[type="submit"].btn:hover {
  border: 1px solid black;
}

    </style>
</head>
<body>
    <?php
    require("index.php")
    ?>
    
    <div class="card-body">
    <h3 class="mijn">inloggen</h3>
    <p class="login">heb je al een account bij the whiskey shop, log dan hier in:</p><br>
    <div class="inputfield">
        <form action="" method="post">
        <input required type="text" name="username" placeholder="typ je gebruikersnaam">
        <input required type="text" name="wachtwoord" placeholder="type je wachtwoord"><br><br>
        <input class="btn" type="submit" value="submit">
        </div>
        </form>
        
    </div>
    
</body>
</html>