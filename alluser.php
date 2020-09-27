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


   
   

    <link rel="stylesheet" href="allu.css">
</head>
<body>

<div class="container">
 <h1>All users
 </h1>

 <hr>
.
 <a href="insert.php" class="btn btn-primary text-center"> Add Users</a>
 <a href="index.php" class="btn btn-danger text-center"> Home</a>
  <table class="table text-center table-striped table-hover table-bordered table-dark">
  <thead>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Credits</th>
    <th> Process</th>
    </tr>
</thead>
<?php

include 'connection.php';

$q ="select * from add_crud";

$query =mysqli_query($con, $q);

while($pe = mysqli_fetch_array($query))
{
    ?>
<tr>
<td><?php
    echo $pe['Name'];
    ?></td>

 <td>
 <?php   
    echo $pe['Email'];

    ?>
    </td>
    <td><?php
    echo $pe['Credits'];

?>
</td>
<td><a href="transfer.php?id= <?php echo $pe['id'] ;?>"class="text-red"> <button type="button" class="btn btn-primary">Transfer</button></a></td>



<?php
}

?>
</tbody>
</table>

</div>


</body>
</html>
