<?php
date_default_timezone_set('Asia/kolkata');
$dt = date("d-m-Y h:i:s a");

$filename = "date.txt";

$file = fopen($filename, "w");
if ($file) 
{
    fwrite($file, $dt);
    $file = fopen($filename, "r");
    $content = fread($file, filesize($filename));
    echo "<b>Content of the file: </b>" . $content;
    echo "<br>";
    echo "<br>";
    echo "Date has been written to the file successfully.";
    fclose($file);
} 
else 
{
    echo "Unable to open the file.";
}
?>