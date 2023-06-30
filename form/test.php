<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>

    <link rel="stylesheet" href="test.css">
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
    <style>
        .message {
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

   <!-- Navbar Start -->
   <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="vinqueur.php" id="logo"><span>N</span>aftal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="vinqueur.php">Home</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="vinqueur.php#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="vinqueur.php#gallary">Gallary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="vinqueur.php#about">About</a>
              </li>
             
            </ul>
            <form action="logout.php" method="POST">
              <a id="myButton" class="btn btn-primary" href="sign_up.php" type="button">logout</a>
            </form>
            
          </div>
        </div>
      </nav>
    <!-- Navbar End -->

        <div>
        <h1>File Upload</h1>
    
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload" name="submit">



    </form>    

    <p> pour telecharge le fichié de quetusse </p>
        <button onclick="downloadFile()">Download File</button>


    <div id="messageContainer">
        <?php
        // Display messages using PHP
        if (isset($_GET['message'])) {
            $messages = explode("|", $_GET['message']);
            foreach ($messages as $message) {
                echo '<div class="message">' . $message . '</div>';
            }
        }
        ?>
    </div>
        </div>
    
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
</body>
</html>
