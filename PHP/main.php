<!DOCTYPE html>
<html lang='en'>  
    <head>

        <title>PHP login system</title>  
        <link rel = "stylesheet" type = "text/css" href = "style.css">   
    </head>  
<body>  
    <div id = "frm">  
        <h1>Login</h1>  
        <form method = "post">  
            <p>  
                <label> Username:</label>  
                <input type = "text" id ="user" name  = "user" required/>  
            </p>  
            <p>  
                <label> Password:</label>  
                <input type = "password" id ="pass" name  = "pass" required />  
            </p>    
                <button type =  "submit" id = "btn" value = "Login" name = "Submit">Submit</button>    
        </form>  
    </div>  
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = $_POST["admin"];
            $pass = $_POST["admin"];


        if($user === "admin" && $pass === "admin") {
            session_start();
            $_SESSION["user"] = $user;
            header("Location: localhost/PHP/web2.php");
            exit;
        } else {
            echo("Invalid");
        }
        }
    ?>

    
    </script>
</body>     
</html>  