<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>downloadUsingPHP</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <h5>Upload a file</h5>
        <input type="file" name="file">
        <br>
        <input type="submit">
    </form>
    <?php
        if(isset($_FILES['file'])){
            echo "fileName= ",$name=$_FILES["file"]["name"],"<br>";
            echo "fileSize=",$size=$_FILES["file"]["size"],"<br>";
            echo "tmpName=",$tmpName=$_FILES["file"]["tmp_name"],"<br>";
            echo "fileType=",$type=$_FILES["file"]["type"],"<br>";
            if(move_uploaded_file($tmpName, "D:\uploads/".$name)){
                echo"Uploaded Successfully.";
            }
        }
        else{
            echo "File was not uploaded.";
        }
    ?>
</body>
</html>
