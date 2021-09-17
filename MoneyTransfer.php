<?php
    include ("includes/dbconnect.inc.php");

        
        
        $transferAlert =FALSE;

        if ($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["Transfer"])){

            $accountNumber1 = $_POST['accountNumber1'] ;
            $accountHolder1 = $_POST['accountHolder1'] ;
            $accountNumber2 = $_POST['accountNumber2'] ;
            $accountHolder2 = $_POST['accountHolder2'] ;
            $amount = (int)$_POST['amount'] ;

            if(isset($_POST["accountNumber1"]) && isset($_POST["accountHolder1"]) && isset($_POST["accountNumber2"]) && isset($_POST["accountHolder2"]) && isset($_POST["amount"]))
            {
                $query1 = "SELECT * FROM customers where accountnumber = '$accountNumber1' AND name= '$accountHolder1';";
                $result1 = mysqli_query($conn,$query1);
                $fetchedRow1 = mysqli_fetch_assoc($result1);

                $newBalance1 = ((int) $fetchedRow1['balance'])- $amount;

                $queryUpdate1 = "UPDATE customers SET balance = '$newBalance1'  where accountnumber = '$accountNumber1' AND name= '$accountHolder1';";

                $result2 = mysqli_query($conn,$queryUpdate1);

                $query2 = "SELECT * FROM customers where accountnumber = '$accountNumber2' AND name= '$accountHolder2';";

                $result3 = mysqli_query($conn,$query2);
                $fetchedRow2 = mysqli_fetch_assoc($result3);

                $newBalance2 = ((int) $fetchedRow2['balance'])+ $amount;

                $queryUpdate2 = "UPDATE customers SET balance = '$newBalance2'  where accountnumber = '$accountNumber2' AND name= '$accountHolder2';";

                $result4 = mysqli_query($conn,$queryUpdate2);
                
                if($result4 && $result4){
                    $transferAlert = TRUE;

                }
               
            }

            // else{

            //     $transferAlert = TRUE;
                
            // }

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


    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css">

    <title>iBank</title>
</head>

<body>

    <header>
        <div class="container">
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

        <div class="comtainer">
        <?php
            if($transferAlert){
            echo '
        <div class="continer">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Congratulations!</strong> Successfully Transfered The Amount !.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        </div>
        
        
        ';
    } 
    ?>

        </div>

        <div class="MoneyTransferBanner">

            <span class="text-danger">iBank</span> Money Transfer


        </div>

        <div class="MoneyTransferForm my-4 container">

            <form method="POST" action ="MoneyTransfer.php">
                <h4 class="text-center">Enter the Details For Transfer:</h4>
                <h5>From:</h5>
                <div class="my-3 form-group">
                    <label for="accountNumber1">A/c Number :</label>
                    <input type="text" class="form-control" name="accountNumber1" id="accountNumber1" placeholder="Enter A/c Number">
                    
                </div>
                <div class="my-3 form-group">
                    <label for="accountHolder1">A/c Holder's Name :</label>
                    <input type="text" class="form-control" name="accountHolder1" id="accountHolder1" placeholder="Account Holder's Name">
                    
                </div>
                
                <h5>To:</h5>

                <div class="my-3 form-group">
                    <label for="accountNumber2">A/c Number :</label>
                    <input type="text" class="form-control" name="accountNumber2" id="accountNumber2" placeholder="Enter A/c Number">
                    
                </div>
                <div class="my-3 form-group">
                    <label for="accountHolder2">A/c Holder's Name :</label>
                    <input type="text" class="form-control" name="accountHolder2" id="accountHolder2" placeholder="Account Holder's Name">
                    
                </div>
                <h5>Amount Details:</h5>
                <div class="my-3 form-group">
                    <label for="amount">Enter the Amount To Transfer:</label>
                    <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter Amount">
                    
                </div>
                
                <button type="submit" name="Transfer" class=" my-3 btn w-100 btn-primary">Transfer</button>
            </form>

        </div>

        <div class="my-5 container text-center">

            <a href="Customers.php"><button type="button" class="btn btn-success container "><i class="fas fa-users "></i> View Customers</button></a>

        </div>



    </main>

    <footer>

        <nav class="navbar sticky-bottom navbar-dark bg-dark">

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