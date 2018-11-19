<?php

foreach($lesVilles as $uneVille)
{
    echo "<input type='checkbox' name='Ville'
    value='".$uneVille->nomVille."'>".$uneVille->scoreVille."</input>";
}



?>