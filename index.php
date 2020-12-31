<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!---------------------------------------------Framworks----------------------------------------------->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="main.css">
  <!--------------------------------------------Fontawesome---------------------------------------------->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
   integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <!----------------------------------------------------------------------------------------------------->
    <title>QR Code Pro</title>
</head>
<body>

<div class="container">

<div class="jumbotron text-center p-4"> <p class="display-4"> QR code Generator </p><i class="fas fa-fast"></i> 
<i class="float-right"><strong>- by MADIH EL MEHDI</strong></i>
</div>

</div>
            
<div class="container text-center">
            <div class="form-group">
                        <form action="qrpng.php" method="post">
                        <h2>Text: </h2><textarea class="embed-responsive" type="text" name="text"> </textarea><br>

                        <input  class="btn btn-info mt-4 float-right" type="submit" value="GET QR Code">
                        </form>
                        </div>          
</div>         
        


</body>
</html>