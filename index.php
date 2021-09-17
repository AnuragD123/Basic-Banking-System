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
            <nav class="navbar  fixed-top navbar-expand-lg  navbar-dark bg-light" id="navbar" >
                <div class="container-fluid" >
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
                                <a class="nav-link" href="#About">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#contact-us" tabindex="-1">Contact Us</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>

    </header>

    <main>

        <!-- design starts -->


        <div class="banner1">
    
                Welcome to iBank
                <p> <span class="text-danger">Solution </span><span>for All your Banking Problems </span> </p>

         
        </div>

        <!-- Design Ends -->


        <div class="container" id="bankMenu">

            <div class="container row text-center">
                <div class="col-lg-4 py-5">

                    <a href="AddCustomers.php" style="color: #407294;">

                        <i class="fa  fa-university fa-10x" aria-hidden="true"></i>

                    </a>
                    <p>Add Customers</p>
                </div>

                <div class="col-lg-4 py-5 ">

                    <a href="MoneyTransfer.php" style="color: #407294;">

                        <i class="fas fa-rupee-sign fa-10x"></i>

                    </a>
                    <p>Transfer Money</p>

                </div>

                <div class="col-lg-4 py-5">
                    <a href="Customers.php" style="color: #407294;">

                        <i class="fas fa-users fa-10x"></i>

                    </a>
                    <p>View Customers</p>

                </div>

            </div>

        </div>

        <div class="footer2 text-center" id="contact-us">
            <div class="contact-us row">
                <div class="col-lg-6">
                    <p class="mx-auto ">
                    <i class="fas fa-phone-alt"></i>
                     Contact Us
                    </p>
                    <p class="email" >anuragdubey859@gmail.com</p> 
                    <p class="phone" >+91 9999999999</p>
                </div>
                <div class=" follow-us col-lg-6">
                    <p class="mx-auto ">
                    <i class="fas fa-user-plus "></i> Follow Us
                    </p>
                    <p><a href="https://bit.ly/3nruXjc" target="_blank"><i class="fab  mx-3 fa-github"></i></a> <a href="https://bit.ly/2YG6dsU " target="_blank"><i class="fab fa-twitter mx-3 "></i></a>  <a href="https://bit.ly/2YJIXu1" target="_blank"><i class="fab mx-3 fa-linkedin-in"></i></a></p>
                </div>
            </div>

          
            
           
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