<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <style>
  body{
      background-image:linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),url(trbg.jpg);
  }

  table{
      margin-top:150px;
  }
  h2{
      margin-top:30px;
      color:white;
  }

  hr{
    
      background-color:white;
  }
    </style>
</head>
<body>
<div class="container">
<h2>Transaction History</h2>
<div class="text-right">
<a href="index.php"><button type="button" class="btn btn-primary">
Home</button></a></div>
<hr>
    <table class="table text-center table-striped table-hover table-bordered table-dark">
    <thead>
    <tr>
    <th>Sender</th>
    <th>Receiver</th>
    <th>Credits</th>
  
    </tr>
</thead>
<tbody>
<?php

include 'connection.php';

$q ="select * from transaction ORDER BY id DESC";

$query =mysqli_query($con, $q);

while($pe = mysqli_fetch_array($query))
{
    ?>
<tr>
<td><?php
    echo $pe['sender'];
    ?></td>

 <td>
 <?php   
    echo $pe['receiver'];

    ?>
    </td>
    <td><?php
    echo $pe['amount'];

?>


<?php
}

?>
</tbody>
</table>
</div>

</body>
</html>
