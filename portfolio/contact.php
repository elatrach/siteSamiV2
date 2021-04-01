<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="../css/bootstrap.min.css" rel="stylesheet" >
    <link href="style.css" rel="stylesheet">
    <title>Document</title>



</head>
<body> 
  <div class="container-fluid px-0">
    <?php include('./header.php'); ?>
  </div>
    <div class=" jumbotron jumbotron-fluid py-5 my-0 d-flex align-items-center" style="background-color: azure;">
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <form action="traitement.php" method="POST">
                        <div class="form-group row">
                            <label for="email">Adresse Email :</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>  
                        </div>
                        <div class="form-group row">
                            <label for="question">Votre question</label>
                            <textarea class="form-control" name="question"  id="question" rows="3"></textarea>    
                        </div>
                       
                    </form>
                </div>
                <div class="col-md-6 d-sm-none d-md-block d-flex justify-content-center  ">
                    <img src="../image/download.jpg" class="img-fluid img-thumbnail " alt="Responsive image">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <button type="submit" class="col-md-6 btn btn-primary btn-block">Envoyer</button>
            </div>
        </div>
    </div>
    
    <div class="container-fluid px-0">
    <?php include('./footer.php'); ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js" ></script>
</body>
    

</html>