<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    
  

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


  <style>
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
.banner-text {
  position: absolute;
  top: 20%;
  left: 40%;
  transform: translate(-50%, -50%, -50%);
}




.navbar-brand {
  font-family: cursive;
}

.nav-link {
  font-family: poppins;
}

.banner-text p {
  font-family: poppins;

  color: rgb(49, 6, 6);
}

@media only screen and(max-width:360px) {
  header {
    width: 100%;
  }
}
.don{
  background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
    url(imbg.jpg);
  opacity:0.8;
  width:100%;
  height:812px;
  position:absolute;
  z-index:-1;
}

h1{

  color:white;
}
hr{
  background-color:white;
}

.card{
  background-color:transparent;
 border:none;
margin-top:200px;
  color:white;
  position:absolute;
  z-index:1;

} 




    </style>
    </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">

     <a class="navbar-brand" href="#">Credit Management</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >Home</a
            >
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">View users</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="#">Transaction History</a>
          </li>
        </ul>
      </div>
</div>
    </nav>

   
      <div class="don">
      </div>
    <div class="container">
      <div class="card">
  <h5 class="card-header">Credit Management</h5>
  <hr>
  <div class="card-body">
    <h5 class="card-title">The Spark Foundation Internship Project</h5>
    <p class="card-text">You Transfer Money From One User To Other And Also Can Add A nEw User</p>
    <a href="alluser.php" class="btn btn-primary">View Users</a>
    <a href="transferdata.php"class="btn btn-primary" >Transaction History</a>
  </div>
</div>
</div>



 
  </body>
</html>
