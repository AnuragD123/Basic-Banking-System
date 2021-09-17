<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>iBank</title>
</head>

<body>

    <header >
        <div class="container" >
            <nav class="navbar  fixed-top navbar-expand-lg navbar-dark bg-light " id="navbar">
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
        <div class="my-5 ">
        <h3 class="text-danger" align="center">Enter the Details</h3>
        <div class="container my-4 ">
            <form action="Customers.php" method="POST">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            
                            <th>A/c Number</th>
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Mobile No.</th>
                            <th>A/c Balance</th>
                            <th>   </th>
                            
                        </tr>
                        <tr>
                            
                        </tr>
                    </thead>
                    
                    <tr>
                        
                        <td><input type="text" name="accountNumber"></td>
                        <td><input type="text" name="Name"></td>
                        <td><input type="email" name="Email"></td>
                        <td><input type="text" name="Mobile"></td>

                        <td><input type="text" name="Balance"></td>

                        <td><input class="btn btn-danger" name="AddCustomer" type="submit" value="Add"></td>
                    </tr>
                </table>
                
            </form>

        </div>


        </div>


      
    </main>

    <footer>

        <nav class="navbar fixed-bottom navbar-dark bg-dark" id="footer">
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