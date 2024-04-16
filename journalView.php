<?php

require_once('phpcount.php');

$time = time();
for($i = 0; $i < 1; $i++)
{
	PHPCount::AddHit("Muastwebsite", "127.0.0.1");
}


//$id = $_GET['id'];
//$sql = "select * from tbl_files";
//$result = mysqli_query($con, $sql);

//$db = new mysqli($con);

//$result = $db->query('SELECT * FROM tbl_files WHERE id = ' . $journalid);
//$row = $result->fetch_assoc();

include 'dbconnect.php';

$id = $_GET['id'];
$stmt = $con->prepare('SELECT * FROM tbl_files WHERE id = ?');
$stmt->bind_param('i', $id); // Assuming id is an integer
$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >


    <style>
    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: #004c00;
      color: #ffffff;
      text-align: center;
      padding: 10px 0;
    }

    .custom-header {
      background-color: #004c00;
      color: #ffffff;
      padding: 20px;
      text-align: center;
    }

    a {
    text-decoration: none; /* Remove underline */
    color: #000; /* Change link color to black */
      }

    </style>


<title>MUAST PUBLICATION</title>
</head>
<body>
<img src="images/muastlog.png" class="img-fluid" alt="Book Cover">


  <div class="custom-header">
    <h1>MUAST Publications</h1>
    <p>MUAST publications was launched in 2023</p>
  </div>

<!--<nav class="navbar navbar-expand-lg navbar-success bg-success">

<br>
<br>
</nav>-->
<br>
<br>

<div class="container">
<div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <table class="table table-striped table-hover">
                <thead>
                    <!-- <tr>
                     
                        <th>File Name</th>
                        <th>View</th>
                        <th>Download</th>
                        <th>Views</th>
                    </tr>-->
                    <CEnter>
                     <H3>Journals</H3>
                     </CEnter>
                     <br>
                
                </thead>
                <tbody>
               <?php
               if ($result->num_rows === 0) {
                echo 'File not found';
               }  else {
              $row = $result->fetch_assoc();
              if ($row && array_key_exists('filename', $row)) {?>
                <tr>
                    <!--<td> <?//php echo $i++; ?></td> -->
                    <td> <img src="images/publication.jpg" width="200" hieght="300" class="img-fluid" alt="Book Cover"></td>
                    <td><h4 ><?php echo $row['filename']; ?></h4>
                    <p><a href="uploads/<?php echo $row['filename']; ?>" target="_blank">am writing to provide a reference for Ability Chikanya. I have known her in a 
professional capacity as Graduate learner (Systems Support) at Hwange Colliery 
Company from July 2017 to December 2020. During her time at our organization, she has demonstrated exceptional skills and 
expertise in the field of Information and Communication Technology (ICT). </a></p>
                  </td>
                    
                </tr>

                
                </tbody>


            </table>

            <div class="container">
               <div class="row">
                  <div class="col-12 d-flex justify-content-end">
                  
                  <a  id="linkclick" href="uploads/<?php echo $row['filename']; ?>"  download><img src="images/downloadicon.png" width="40" hieght="40" class="img-fluid" alt="download icon"></a>
                 
                  </div>
               </div>
            </div>
            
            <?php
          
        } else {
          echo 'File name not available';
      }
  } ?>
        </div>
    </div>
    </div>

<br>
<br>
    <footer class="footer">
  <div class="container">
    <span>Developed by Tavonga Dutuma</span>
    <br>
    <br>
    <br>
  </div>
</footer>
</body>
</html>

