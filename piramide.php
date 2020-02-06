<!DOCTYPE html>
<html>
    <head>
        <body>
            <table width "2px" cellspacing="0px" cellpadding="0px">
                <?php
                    for ($rij = 0; $rij <= 10; $rij++){
                        echo "<tr>";
                            for ($volgorde = 1; $volgorde <= $rij; $volgorde++){
                                echo "<td height=30px width=30px bgcolor=black></td>";
                            }
                            echo PHP_EOL;
                        }
                    ?>
                </tr>
            </table>
        </body>
    </head>
</html>
