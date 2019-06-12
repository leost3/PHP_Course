<html>
    <head>
        <title>Lab1: Exercise 2</title>
    </head>
    <body>
    <?php 
        if (isset($_POST["Submit"])) {
            echo "Username - ".$_GET["Username"]."<.br>";
            echo "Password - ".$_GET["Password"]."<.br>";
            echo "Email - ".$_GET["Email"]."<.br>";
        }
    ?> 
    </body>
</html>