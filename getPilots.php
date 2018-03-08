<?php

require( "DataHandler/DataHandler.php" );
$DH = new DataHandler();
$AP = explode( ",", file_get_contents( "airports.txt") );

echo "<table>";
echo "<tr>";
echo "<th>Callsign</th>";
echo "<th>Departure</th>";
echo "<th>Destination</th>";
echo "</tr>";
foreach( $DH->getClients() as $client ){
    
    if( in_array( $client->planned_depairport, $AP ) || in_array( $client->planned_destairport, $AP ) ){
        
        echo "<tr>";
        echo "<td>{$client->callsign}</td>";
        echo "<td>{$client->planned_depairport}</td>";
        echo "<td>{$client->planned_destairport}</td>";
        echo "</tr>";
        
    };
    
}
echo "</table>";