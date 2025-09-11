<?php

    $cars = array(
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );

    echo "<table>\n";
    echo "<tr><th>Marka</th><th>Ilość</th><th>Sprzedane</th></tr>\n";
    echo "<tr><td>".$cars[0][0]."</td><td>".$cars[0][1]."</td><td>".$cars[0][2]."</td></tr>\n";
    echo "<tr><td>".$cars[1][0]."</td><td>".$cars[1][1]."</td><td>".$cars[1][2]."</td></tr>\n";
    echo "<tr><td>".$cars[2][0]."</td><td>".$cars[2][1]."</td><td>".$cars[2][2]."</td></tr>\n";
    echo "<table>";