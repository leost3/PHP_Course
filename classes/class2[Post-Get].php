<html>
    <head>
        <title>Lab1: Exercise 1</title>
    </head>
    <body>
        <form action="#" method="post">
            uername: <input type="text" name="username"> </br>
            Password: <input type="password" name="password"> </br>
            Email: <input type="email" name="Email"> </br>
            <input type="submit" name="Submit" value="send"> </br>
        </form>

        <?php 
        if (isset($_POST["Submit"])) {
            echo "Username - ".$_POST["username"]."</br>";
            echo "Password - ".$_POST["password"]."</br>";
            echo "Email - ".$_POST["Email"]."<.br>";
        }
    ?> 
    </body>
</html>