<?php
    require "includes/header.php"
?>

    <div class="container">
        <h3>Upload Your Business Pictures Here</h3>
        <form action="includes/doupload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="submit" name="upload-submit">upload</button>
        </form>
    </div>
<?php    include "includes/footer.php";
?>