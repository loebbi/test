<?php
$lines = array();

array_push( $lines, "whoami" );

foreach( $lines as $line )
{
    system( $line );
}
?>
