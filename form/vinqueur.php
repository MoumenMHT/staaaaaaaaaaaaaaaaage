<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naftal</title>

    <link rel="stylesheet" href="styles.css">
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
            <a id="myButton" class="btn btn-primary" href="test.php" type="button">upload</a>
            </form>
            <form action="logout.php" method="POST">
              <a id="myButton" class="btn btn-primary" href="sign_up.php" type="button">logout</a>
            </form>
            
          </div>
        </div>
      </nav>
    <!-- Navbar End -->





    <!-- Home Section Start -->
    <div class="home">
        <div class="content">
            <h5>Welcome To <span>N</span>aftal</h5>
            <h1>Visit <span class="changecontent"></span></h1>
            <p>Votre satisfaction est notre priorité</p>
            <a href="#gallary">Book Place</a>
        </div>
    </div>
    <!-- Home Section End -->





    







    







    <!-- Section Services Start -->
    <section class="services" id="services">
      <div class="container">

        <div class="main-txt">
          <h1><span>S</span>ervices</h1>
        </div>

        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-hotel"></i>
              <div class="card-body">
                <h3>Affordable Hotel</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-utensils"></i>
              <div class="card-body">
                <h3>Food & Drinks</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-bullhorn"></i>
              <div class="card-body">
                <h3>Safty Guide</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>

          </div>



        </div>


        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-globe-asia"></i>
              <div class="card-body">
                <h3>Around The World</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-plane"></i>
              <div class="card-body">
                <h3>Fastest Travel</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-hiking"></i>
              <div class="card-body">
                <h3>Adventures</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>

          </div>



        </div>

      </div>
    </section>
    <!-- Section Services End -->




    <!-- Section Gallary Start -->
      <section class="gallary" id="gallary">
        <div class="container">
            <div class="main-txt">
                <h1><span>G</span>allary</h1>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/1.jpg" alt="" height="230px">
                        <div class="card-body">
                          <h1 class="card-title">OMRA</h1>
                          <p class="card-sub-title">Sauudi Aribia</p>
                          <p class="card-info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, provident.</p>
                          <button class="card-btn image-button" onclick="showForm()">Book Now</button>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/5.jpg" alt="" height="230px">
                        <div class="card-body">
                          <h1 class="card-title">OMRA</h1>
                          <p class="card-sub-title">Sauudi Aribia</p>
                          <p class="card-info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, provident.</p>
                          <button class="card-btn image-button" onclick="showForm()">Book Now</button>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/g3.png" alt="" height="230px">
                        <div class="card-body">
                          <h1 class="card-title">OMRA</h1>
                          <p class="card-sub-title">Sauudi Aribia</p>
                          <p class="card-info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, provident.</p>
                          <button class="card-btn image-button" onclick="showForm()">Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/g3.png" alt="" height="230px">
                        <div class="card-body">
                          <h1 class="card-title">OMRA</h1>
                          <p class="card-sub-title">Sauudi Aribia</p>
                          <p class="card-info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, provident.</p>
                          <button class="card-btn image-button" onclick="showForm()">Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/g3.png" alt="" height="230px">
                        <div class="card-body">
                          <h1 class="card-title">OMRA</h1>
                          <p class="card-sub-title">Sauudi Aribia</p>
                          <p class="card-info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, provident.</p>
                          <button class="card-btn image-button" onclick="showForm()">Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/g3.png" alt="" height="230px">
                        <div class="card-body">
                          <h1 class="card-title">OMRA</h1>
                          <p class="card-sub-title">Sauudi Aribia</p>
                          <p class="card-info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, provident.</p>
                          <button class="card-btn image-button" onclick="showForm()">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <div id="overlay"></div>
  <div id="myForm">
      <section class="book" id="book">
          <div class="container">
              <div class="main-text">
                  <h1><span>B</span>ook</h1>
              </div>
              <div class="row">
                  <div class="col-md-6 py-3 py-md-0">
                      <div class="card">
                          <img src="./images/b5.png" alt="">
                      </div>
                  </div>
                  <div class="col-md-6 py-3 py-md-0">
                  <form id="messageForm" action="insert_voyage.php" method="POST">
              <select id="voyageSelect" type="text" name="voyage" class="form-control" onchange="showSessionSelect()">
                <option value="" disabled selected hidden>Choisir un voyage</option>
                <option value="Turkey">Turkey</option>
                <option value="Spain">Spain</option>
                <option value="Omra">Omra</option>
              </select><br>
              <div id="sessionSelectContainer">
                <select id="sessionSelect" type="text" name="session" class="form-control">
                  <option value="" disabled selected hidden>Choisir une session</option>
                  <option>from 20/07/2023 to 25/07/2023</option>
                  <option>from 20/07/2024 to 25/07/2024</option>
                </select>
              </div><br>
              <input type="submit" value="Book Now" class="submit" name="download" required>
            </form>
            <div id="messageContainer"></div>
                  </div>
              </div>
          </div>
      </section>
  </div>
    <!-- Section Gallary End -->



    


    <!-- About Start -->
    <section class="about" id="about">
      <div class="container">

        <div class="main-txt">
          <h1>About <span>Us</span></h1>
        </div>

        <div class="row" style="margin-top: 50px;">

          <div class="col-md-6 py-3 py-md-0">
            <div class="card">
              <img src="./images/b3.png" alt="">
            </div>
          </div>

          <div class="col-md-6 py-3 py-md-0">
            <h2>A propos de Naftal</h2>
            <p>Naftal est une société par actions (SPA) au capital social de 160 000 000 000 .00 DA. Fondée en 1982 et filiale à 100% du Groupe Sonatrach, elle est rattachée à l’activité commercialisation. Elle a pour mission principale, la distribution et la commercialisation des produits pétroliers et dérivés sur le marché national.</p>
            <button id="about-btn" onclick="url='https://www.naftal.dz/fr/index.php/a-propos-de-naftal'">Read More...</button>
          </div>

        </div>

      </div>
    </section>
    <!-- About End -->








    <!-- Footer Start -->
    <footer id="footer">
      <h1><span>N</span>aftal</h1>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus fugiat, ipsa quos nulla qui alias.</p>
      <div class="social-links">
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-youtube"></i>
        <i class="fa-brands fa-pinterest-p"></i>
      </div>
      <div class="credit">
        <p>Designed By <a href="#">Zaaf Mohamed</a></p>
      </div>
      <div class="copyright">
        <p>&copy;Copyright SA Coding. All Rights Reserved</p>
      </div>
    </footer>
    <!-- Footer End -->







    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script>
    $(document).ready(function() {
   $('#message').submit(function(e) {
      e.preventDefault(); // Prevent form submission

      var formData = $(this).serialize(); // Serialize form data

      $.ajax({
         url: $(this).attr('action'),
         type: $(this).attr('method'),
         data: formData,
         success: function(response) {
            $('#messageDiv').html(response); // Update the message div with the response
         },
         error: function() {
            $('#messageDiv').html("Error occurred while processing the form."); // Display an error message
         }
      });
   });
});

    
    
    </script>

<script>
function downloadFile() {
  // Replace "path/to/file.pdf" with the actual path to your file
  var fileUrl = "downloads/payment.docx";

  // Create a temporary <a> element
  var link = document.createElement("a");
  link.href = fileUrl;

  // Set the download attribute with the desired file name
  link.download = "payment.docx";

  // Append the link to the document body
  document.body.appendChild(link);

  // Trigger the click event of the link
  link.click();

  // Clean up the temporary link
  document.body.removeChild(link);
}
</script>
    <script>
        // Function to display the messages in the message container
        function displayMessage(message) {
            var messageContainer = document.getElementById("messageContainer");
            var newMessage = document.createElement("div");
            newMessage.className = "message";
            newMessage.innerHTML = message;
            messageContainer.appendChild(newMessage);
        }
    </script>
    <script>
    // Function to handle form submission
    document.getElementById("messageForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent form submission

      // Get the selected voyage and session
      var voyage = document.getElementById("voyageSelect").value;
      var session = document.getElementById("sessionSelect").value;

      // Create an XMLHttpRequest object to make a request to the PHP file
      var xhttp = new XMLHttpRequest();

      // Set up the callback function to handle the response
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // Display the message below the submit button
          var messageContainer = document.getElementById("messageContainer");
          messageContainer.innerHTML = this.responseText;
        }
      };

      // Send the POST request to the PHP file with the selected voyage and session
      xhttp.open("POST", "insert_voyage.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("voyage=" + voyage + "&session=" + session);
    });
  </script>
</body>
</html>