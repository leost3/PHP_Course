<!-- 15-05-2019 -->
<html>
<body>
<?php 
   echo ("<table border=1>");
    for ($i=0; $i<9;$i++) {
        echo(
           "<tr>
                <td>9x".$i."</td>
                <td>".(9*$i)."</td>
           </tr>"
        );
    }
   echo ("</table>");
?>

</body>

</html>
