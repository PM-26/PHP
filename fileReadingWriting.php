<?php
//writing
$fptr=fopen("file.txt","w");
fwrite($fptr,"Hey");
fclose($fptr);
if($fptr=fopen("file.txt","r")){
    echo "File successfully opened.";
}
else{
    echo "Unable to open file.";
}
//reading
$content=fread($fptr,filesize("file.txt"));
echo $content;
//closing
fclose($fptr);
?>
