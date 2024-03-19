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

                    if($user_data['password'] == $password)
                    {   
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                        die;
                    }
                }
            }
            echo '<script>alert("please enter correct email id and password")</script>';

        }
        else{
            echo '<script>alert("please enter correct email id and password")</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body {
            background-image: url("https://cdn.wallpapersafari.com/12/79/iQeBup.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-attachment: fixed;
        }

        h1 {
            color: #05910c;
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
            background-color: #01350c;
            border: none;
        }

        #button:hover {
            background: #ffffff;
            color: rgb(0, 0, 0);
            box-shadow: 0 0 5px #14e800, 0 0 25px #37f403, 0 0 100px #1bf403;
        }


        #box {

            background-color: #05910c;
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
        <h1 style="font-family: cursive;">WELCOME TO LOGIN PAGE</h1>
    </header>
    <div id="box" style="font-family: cursive;">
        <form method="post">
            <div style="font-size: 25px; margin: 10px; color: white; text-align:center">Login
            </div>
            <br>
            <label for="text1">Email Address</label>
            <input id="text1" type="eamil" name="user_email" placeholder="Enter email" required><br><br>

            <label for="text2">Password</label>
            <input id="text2" type="password" name="password" placeholder="Enter password" required><br><br>

            <input id="button" type="submit" value="Login"><br><br>

            Don't have an account?
            <a href="signup.php" style="text-decoration: none;">Sign Up now !</a><br><br>
        </form>
    </div>

</body>

</html>