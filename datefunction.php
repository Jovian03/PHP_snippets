<?php

    // Prints the day
    echo date("l") . "\n";
    
    // Prints the day, date, month, year, time, AM or PM
    echo date("l jS \of F Y h:i:s A") . "\n";
    
    // Prints October 3, 1975 was on a Friday
    echo "Oct 3,1975 was on a ".date("l", mktime(0,0,0,10,3,1975)) . "\n";
    
    // Use a constant in the format parameter
    echo date(DATE_RFC822) . "\n";
    
    // prints something like: 1975-10-03T00:00:00+00:00
    echo date(DATE_ATOM,mktime(0,0,0,10,3,1975));

?>