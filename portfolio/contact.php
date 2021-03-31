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
    <?php include('./menu.php'); ?>
    <div class=" jumbotron jumbotron-fluid py-5 my-0 d-flex align-items-center" style="background-color: azure;">
      <div class="container ">
        <form action="traitement.php" method="POST">
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="email">Adresse Email :</label>
                    <input type="email" class="form-control" name="question" id="email" placeholder="name@example.com">
                </div>          
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="question">Votre question</label>
                    <textarea class="form-control" name="question"  id="question" rows="3"></textarea>
                </div>          
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class=" btn btn-primary">Sign in</button>
                </div>   
            </div>  
        </form>
      </div>
    </div>
    
    <?php include('./footer.php'); ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js" ></script>
</body>
    

</html>