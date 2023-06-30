<!DOCTYPE html>
<html>
<head>
    <title>Database Data</title>
    <link rel="stylesheet" href="style-result.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->


    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function getData() {
            $.ajax({
                url: "getdata.php",
                success: function(data) {
                    $("#dataContainer").html(data);
                },
                error: function() {
                    $("#dataContainer").html("Error occurred while retrieving data.");
                }
            });
        }

        function chooseRandom() {
            $.ajax({
                url: "chooserandom.php",
                success: function(data) {
                    $("#randomContainer").html(data);
                },
                error: function() {
                    $("#randomContainer").html("Error occurred while choosing random record.");
                }
            });
        }
    </script>
</head>
<body>

 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html" id="logo"><span>N</span>aftal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallary">Gallary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
             
            </ul>
            <form class="d-flex">
              <a id="myButton" class="btn btn-primary" href="#gallary" type="button">Book</a>
            </form>
            
          </div>
        </div>
      </nav>
    <!-- Navbar End -->

    <button onclick="getData()">Get Data</button>
    <div id="dataContainer"></div>
    
    <button onclick="chooseRandom()">Choose Random</button>
    <div id="randomContainer"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>