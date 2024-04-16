<?php
include_once 'dbconnect.php';

// fetch files
$sql = "select filename from tbl_files";
//$result = mysqli_query($con, $sql);

$result = $con->query('SELECT * FROM tbl_files');

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
    color: #ffffff; /* Change link color to black */
      }

    </style>


<title>MUAST PUBLICATIONS</title>
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
                $i = 1;
                //while($row = mysqli_fetch_array($result))
                while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <!--<td> <?//php echo $i++; ?></td> -->
                    <td> <img src="images/publication.jpg" width="70" hieght="120" class="img-fluid" alt="Book Cover"></td>
                    <td><?php echo $row['filename']; ?></td>
                    <td><br><br></td>
                    <td><br></td>
                    <td><br></td>
                    <td><br></td>
                    <td><br></td>
                    <td><br></td>
                    
                    <td><br><button class="btn btn-success d-block d-sm-none">
                      <?php  echo '<a href="journalView.php?id=' . $row['id'] . '">OPEN</a><br>'; ?></button>
                        <button  class="btn btn-success d-none d-sm-block">
                          <?php  echo '<a href="journalView.php?id=' . $row['id'] . '">OPEN</a><br>'; ?></button>
                      </td>
                </tr>
                
                <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
    </div>
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