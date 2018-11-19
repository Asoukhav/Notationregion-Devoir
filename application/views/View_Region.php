<?php

foreach($lesRegions as $uneRegion)
{
    echo"<input type='checkbox' onclick= AfficherVilles(this.value) name='region[]'
     value='".$uneRegion->nomRegion."'>".$uneRegion->scoreRegion."</input>";
    
    
}


?>