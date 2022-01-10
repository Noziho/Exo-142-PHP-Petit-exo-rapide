<?php

$text = "mon super texte";

echo $text ."<br>";

$tab = ["first", "second", "third", "four"];

echo $tab[1] ."<br><br>";

for ($i = 0; $i < count($tab); $i++) {
    echo $tab[$i] ."<br>";
}

?>
<ul>
    <?php
        foreach ($tab as $value) {
            echo "<li>$value</li>";
        }
        ?>
</ul>