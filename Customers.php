<?php

    include("includes/dbconnect.inc.php");
    $displayAlert =FALSE;
    
    
    if ($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["AddCustomer"]) ) {
        

        $accountNumber = $_POST['accountNumber'] ;
        $name = $_POST['Name'] ;
        $email = $_POST['Email'] ;
        $mobile = $_POST['Mobile'] ;
        $balance = $_POST['Balance'] ;

        $query1 = "SELECT * FROM customers where accountnumber = '$accountNumber' AND name= '$name';";

        $result = mysqli_query($conn,$query1);
        $rows = mysqli_num_rows($result);

        if ($rows == 0) {
            $query = "INSERT INTO `customers` (`s.no`, `accountnumber`, `name`, `email`, `number`, `balance`) VALUES (NULL, '$accountNumber', '$name', '$email', '$mobile', '$balance');";

            $sql = mysqli_query($conn,$query);
            $displayAlert =TRUE;
        }

       
        
        
       

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>    

    <link rel="stylesheet" href="style.css">

    <title>iBank</title>
</head>

<body>

    <header >
        <div class="container" >
            <nav class="navbar  fixed-top navbar-expand-lg  navbar-dark bg-light " id="navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">iBank</a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse pe-5 " id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#About">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="index.php#contact-us" tabindex="-1">Contact Us</a>
                            </li> 
                        </ul>

                    </div>
                </div>
            </nav>
        </div>

    </header>

    <main>


<!-- Php Code To Display Alert -->
<?php
    if($displayAlert){
        echo '
        <div class="continer">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Congratulations!</strong> The Customer Has Been Added.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        </div>
        
        
        ';
    }
    else if($displayAlert==FALSE && isset($_POST['AddCustomer'])) {

        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Sorry!</strong> Account Number and customer Already Exist
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> ' ;
        
        


    }

?>

<!-- Php code ends -->

       

        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        
                        <th>A/c Number</th>
                        <th>Name</th>
                        <th>A/c Balance</th>
                        <th>Transfer Money</th>
                    </tr>
                    <tr>

                    </tr>
                </thead>
                <?php 


                    $query3 = "SELECT * FROM customers";

                    $result2 = mysqli_query($conn,$query3);


                    $fetchedRow = mysqli_fetch_assoc($result2);


                while($fetchedRow = mysqli_fetch_assoc($result2)){
                      

                echo "<tr> ";
                        
                    echo " <td> ". $fetchedRow["accountnumber"]."</td>".
                        "<td>". $fetchedRow['name']. "</td>".
                        "<td>".$fetchedRow['balance']. "</td>";
                        echo '<td><a href="Moneytransfer.php"><Button class="btn btn-danger"> Transfer</Button></a></td>';
                echo "</tr>" ;
                };
                
               
                ?>
            </table>


        </div>
    
        <div class="my-5 container text-center">

            <a href="AddCustomers.php"><button type="button" class="btn btn-success container "><i class="fas fa-user"></i>    Add Customer</button></a>

        </div>

      
    </main>

    <footer>

        <nav class="navbar sticky-bottom navbar-dark bg-dark" id="footer">
            <div class="container-fluid">
                <p class="mx-auto text-light">&copy Created By - Anurag Dubey </p>
            </div>
        </nav>
        

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>