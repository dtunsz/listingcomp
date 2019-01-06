<?php 
if(isset($_POST['upload-submit'])) {
    $file = $_FILES['file'];
    
    $fileName = $_FILES['file'] ['name'];
    $fileTmpName = $_FILES['file'] ['tmp_name'];
    $fileSize = $_FILES['file'] ['size'];
    $fileError = $_FILES['file'] ['error'];
    $fileType = $_FILES['file'] ['type'];

    $fileExt =explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowedFiles = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExt, $allowedFiles)) {
        if($fileError === 0) {
            if ($fileSize < 1000000){
                $fileNewName =uniqid ('', true).".".$fileActualExt;
                $fileDestination = '../uploads/' .$fileNewName;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("location: ../upload.php?uploadsuccess");
            }else {
                echo "Your file is too large!";
            }
        }else {
            echo "There was an error uploading your file!";
        }
    }
}