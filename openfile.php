<?php
//open a file
    if (!(file_exists("welcome.txt")))
    {
        echo "could not open the file";
    }
    
    else
    {
        $text = fopen("welcome.txt","r");
        var_dump($text);
    }
    
?>