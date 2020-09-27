<?php
include 'connection.php';

if(isset($_POST['done']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amt = $_POST['amount'];
    $q = "SELECT * from add_crud where id=$from";
    $query = mysqli_query($con,$q);
    $q1 = mysqli_fetch_array($query);
    $q = "SELECT * from add_crud where id=$to";
    $query = mysqli_query($con,$q);
    $q2 = mysqli_fetch_array($query);


 if($amt > $q1['Credits'])
    {

        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Insufficent Balance!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    
 
    else {
        

        $newCredit = $q1['Credits'] - $amt;
        $q = "UPDATE add_crud set Credits=$newCredit where id=$from";
        mysqli_query($con,$q);
     


        $newCredit = $q2['Credits'] + $amt;
        $q = "UPDATE add_crud set Credits=$newCredit where id=$to";
        mysqli_query($con,$q);
           
        $sender = $q1['Name'];
        $receiver = $q2['Name'];
        $q = "INSERT INTO `transaction`(`sender`,`receiver`, `amount`) VALUES ('$sender','$receiver','$amt')";
        $tns=mysqli_query($con,$q);
        if($tns){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Transaction sucessfull!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
       
        $newCredit= 0;
        $amt =0;
       
     
    }
    
}
?>

<html>
    <head>
        <title>Transaction</title>
       
         <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<style>
     
.jumbotron{
    background-color:black;
    color:white;
    margin-top:120px;
}

.btn{
    margin-top:30px
}





</style>

    </head>


    <body>
    <div class="container">
    <div class="jumbotron">
 


<h2>Transaction</h2>
        <form method="post" name="tcredit"><br/>
            <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $q = "SELECT * FROM  add_crud where id=$sid";
                $query=mysqli_query($con,$q);
                if(!$query)
                {
                    echo "Error ".$q."<br/>".mysqli_error($con);
                }
                $res=mysqli_fetch_array($query);
            ?>
            <label> From </label><br/>

            <table class="table text-center table-striped table-hover table-bordered table-dark">

            <tr>
            <th>
            Name</th>
            <th>Email</th>
            <th>Credits</th>
            </tr>

            <tr>
            <td>
            <?php echo $res['Name'] ;?></td>
                    <td><?php echo $res['Email'] ;?></td>
    
                   <td> <?php echo $res['Credits'] ;?></td>

                   </tr>
            
            </table>
              
            <label>To</label>
            <select class=" form-control" name="to" style="margin-bottom:5%;">
            <option value="" disabled selected> To </option>
            <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $q = "SELECT * FROM add_crud where id!=$sid";
                $query=mysqli_query($con,$q);
                if(!$query)
                {
                    echo "Error ".$q."<br/>".mysqli_error($con);
                }
                while($res = mysqli_fetch_array($query)) {
            ?>
                <option class="table text-center table-bordered table-striped table-dark" value="<?php echo $res['id'];?>">
                
    

           <?php echo $res['Name'] ;?> 
              <?php echo $res['Email'] ;?> ||
                
               <?php echo $res['Credits'] ;?> ||
               
                

                </option>
            <?php } ?>
            </select> <br>
            <label>Amount</label>
            <input type="number" id="amm" class="form-control" name="amount" min="0" required/> 
            
  
            
            <button class="btn btn-primary text-center" name="done" type="submit" >Transfer</button>
            <a href="alluser.php" class="btn btn-success"> View Users</a>
            <a href="index.php" class="btn btn-danger">Home</a>
        </form>
    </div>
    </div>
    </body>
</html>