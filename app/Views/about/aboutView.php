
<html>
<head>
    <title>About</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo (base_url('/boot/css/style.css'))?>">
</head>
<body>
    <h2>About Me</h2>

            <img src="<?php echo base_url("upload/".$about[0]['photo']) ?>"></br>
            <?php echo $about[0]['prenom']; ?></br>
            <?php echo $about[0]['nom']; ?></br>
            <?php echo $about[0]['adresse']; ?></br>
            <?php echo $about[0]['email']; ?></br>
            <?php echo $about[0]['linkedin']; ?></br>
            <?php echo $about[0]['more']; ?></br>
             
   
      <a href="<?php echo base_url("About/edit/1") ?>" class="btn btn-outline-danger">Edit</a>      
    
      
       

</body>
</html> 




