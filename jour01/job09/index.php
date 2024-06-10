<?php 

function getHello( bool $jour ) {
    if ( $jour) {
        echo "Bonjour";
    } else { 
        echo "Bonsoir";
    }
}

getHello(false);