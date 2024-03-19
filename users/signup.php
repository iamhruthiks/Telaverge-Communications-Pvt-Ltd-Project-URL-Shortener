<?php

    session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_email = $_POST['user_email'];
        $password = $_POST['password'];

        if(!empty($user_email) && !empty($password))
        {   
            
            $query = "select * from users where user_email = '$user_email' limit 1";
            
            $result = mysqli_query($con,$query);

            if($result)
            {
                if($result && mysqli_num_rows($result)>0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['user_email'] == $user_email)
                    {   
                        header("Location: failure.html");
                        die;
                    }
                }
            }

        }


        if(!empty($user_email) && !empty($password))
        {   
          
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_email,password) values ('$user_id','$user_email','$password')";
            
            mysqli_query($con,$query);

            header("Location: success.html");
            die;

        }
    }
  

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <style>
        body {
            background-image: url("https://getwallpapers.com/wallpaper/full/d/e/c/1362385-lighthouse-desktop-wallpaper-1920x1080-for-iphone.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-attachment: fixed;
        }

        h1 {
            color: #219ebc;
            text-align: center;
        }

        label {
            color: white;
        }

        #text1 {

            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }

        #text2 {

            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }

        #button {

            padding: 10px;
            width: 100px;
            color: white;
            background-color: #013744;
            border: none;
        }

        #button:hover {
            background: #ffffff;
            color: rgb(0, 0, 0);
            box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 100px #03e9f4;
        }


        #box {

            background-color: #219ebc;
            margin: auto;
            width: 300px;
            padding: 20px;
            opacity: 0.8;
        }

        a {
            color: rgb(248, 248, 248);
            text-decoration: none;
        }


        a:hover {
            background: #ffffff;
            color: rgb(0, 0, 0);
            box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 100px #03e9f4;
        }
    </style>
</head>

<body>
    <header>
        <h1 style="font-family: cursive;">WELCOME TO SIGN UP PAGE</h1>
    </header>
    <div id="box" style="font-family: cursive;">
        <form  id="form" method="post">
            <div style="font-size: 25px; margin: 10px; color: white; text-align:center">Create an account
            </div>
            <br>
            <label for="text1">Email Address</label>
            <input id="text1" type="eamil" name="user_email" placeholder="Enter email" required><br><br>

            <label for="text2">Password</label>
            <input id="text2" type="password" name="password" placeholder="Enter password" required><br><br>

            <input id="button" type="submit" value="Sign Up"><br><br>

            Already have an account?
            <a href="login.php" style="text-decoration: none;">Login now !</a><br><br>
        </form>
    </div>

</body>

</html>