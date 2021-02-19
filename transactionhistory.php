<?php

include 'config.php';
$a=10;

$sql = "SELECT * FROM transactions";
$query = mysqli_query($con,$sql);
$num = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css" integrity="sha512-sopmFEmRVsWt542K+yzH3FQ1KJfdosOJG+bGLs9ZJT07b/3gUxRA9ICuJg2JtoZ9WeknAUuwJ0ggnmrV1YL6kQ==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Awasthi And Sons</title>
    <link rel="icon" type="image/png" href="assets/images/logo.png">

</head>

<body style=" background-color: ; " class="body">

<nav class="navbar navbar-dark navbar-expand-md fixed-top shadow">
                    <div class="container-fluid ">
                        
                        <a class=" d-md-none navbar-brand" href="/"><img class="logo" src='./assets/images/logo.png' height="80"  alt='logo' /></a>
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
                        <div id="Navbar" class="collapse navbar-collapse justify-content-between text-center">
                            
                             <a class="mx-5 d-none d-md-block navbar-brand" href="./"><img class="logo" src='./assets/images/logo.png' height="80"  alt='logo' /></a>
                        
                            <ul class="navbar-nav mr-auto">
                             <li class="nav-item ">
                                <a class="nav-link onhover-bb onhover-yellow raleway text-yellow-hover"  href="./">Home</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link onhover-bb onhover-yellow raleway text-yellow-hover"  href="./customers.php">Transfer money</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link onhover-bb onhover-yellow raleway text-yellow-hover"  href="./transactionhistory.php">Trasaction History</a>
                            </li>
                            
                            </ul>

                
                        </div>
                    
                    </div>
                
                </nav>

                    <div class="container">
                        <div class="row row-header justify-content-center">
                            <div class="col-12 col-sm-6 text-center pt-5">
                                <h1 class="text-yellow">The Sparks Bank</h1>
                                <h3 class="text-capitalize">Your Money Is Safe with Us</h3>
                                <p>
                                </p>
                          
                            </div>
                            <div class="col-12">
                                 <h1 class="text-center poppins font-weight-bold mb-2">All <span class="text-yellow">Transactions</span> till date</h1>
                              </div>
                              <div class="col-auto">
                              <table class="table table-responsive table-striped table-light table-hover">
  <thead class="thead-dark">
    <tr >
      <th class="text-yellow" scope="col">Transaction ID</th>
      <th class="text-yellow" scope="col">FROM</th>
      <th class="text-yellow" scope="col">TO</th>
      <th class="text-yellow" scope="col">AMOUNT</th>
      <th class="text-yellow" scope="col">DATE</th>
    </tr>
  </thead>
  <tbody>
    <?php
while($result = mysqli_fetch_array($query)) {
    ?>
    <tr>
      <th scope="row"><?php echo $result['tid']?></th>
      <td><?php echo $result['from_name']?></td>
      <td ><?php echo $result['to_name']?></td>
      <td><?php echo $result['amount']?></td>
      <td><?php echo $result['date']?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
                            </div>
                            <div class="col-12  text-center">
                                 <img class="img-fluid " src="./assets/bank.png" alt="hack-vector"/>

                            </div>
                        </div>
                        
                    </div>

<footer  class="footer ">
  <div class="bg-yellow ">
    <div class="container">
      <div class="row py-4 d-flex align-items-center">

        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">For Any Query Contact US!</h6>
        </div>
  
        <div  class="col-md-6 col-lg-7 text-center text-md-right">

          
          <a class="btn btn-social-icon btn-google mx-2">
            <i  class="fab fa-google-plus  "> </i>
          </a>
          <a class="btn btn-social-icon  mx-2">
            <i class="fas fa-phone-alt "> </i>
          </a>
        </div>
       
      </div>

    </div>
  </div>
 </footer>

</body>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <!-- build:js js/main.js -->
     <script src="node_modules/jquery/dist/jquery.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>