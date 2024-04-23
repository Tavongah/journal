<?php
include_once 'dbconnect.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload View & Download file in PHP and MySQL | Demo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >

    <style>
    .custom-file-input:lang(en)~.custom-file-label:after {
      content: "Browse";
    }
  </style>
</head>
<body>
<br/>

<div class="container mt-5">
    <center><h2 class="mb-4">Journal Upload</h2></center>
    <div class="row">
    <div class="col-md-6 offset-md-3">
    <form action="upload.php" method="post" enctype="multipart/form-data">
    
      <div class="custom-file mb-3">
      <div class="form-group">
        <input type="file" name="file1" class="custom-file-input" id="customFile">
     </div>
        
      </div>
      <div class="form-group">
      <button type="submit" name="submit" value="Upload" class="btn btn-primary">Upload</button>
      </div>
       
      <?php if(isset($_GET['st'])) { ?>
                <div class="alert alert-danger text-center">
                <?php if ($_GET['st'] == 'success') {
                        echo "File Uploaded Successfully!";
                    }
                    else
                    {
                        echo 'Invalid File Extension!';
                    } ?>
                </div>
            <?php } ?>
    </form>
    </div>
    </div>
  </div>


<!--<div class="container">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2 well">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <legend>Select File to Upload:</legend>
            <div class="form-group">
                <input type="file" name="file1" />
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Upload" class="btn btn-info"/>
            </div>
            <?php //if(isset($_GET['st'])) { ?>
                <div class="alert alert-danger text-center">
                <?php // if ($_GET['st'] == 'success') {
                       // echo "File Uploaded Successfully!";
                    //}
                    //else
                    //{
                      //  echo 'Invalid File Extension!';
                   // } ?>
                </div>
            <?php// } ?>
        </form>
        </div>
    </div>
    
</div>-->


</body>
</html>