<html>
<head>
    <title>Interet</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo (base_url('/boot/css/style.css'))?>">
</head>
<body>
    <h2>les messages reçus</h2>
    <table class="table">
 
  <thead>
       
  <tr>
     <th scope="col">seen</th>
      <th scope="col">NAME</th>
      <th scope="col">E-mail.</th>
      <th scope="col">PHONE</th>
      <th scope="col">MESSAGE.</th>
      
    </tr>
  </thead>
  <tbody>
 
        <?php if ($contact) :
                                foreach ($contact as $conta) :
                              ?>

    
        <tr>
           <td><input type="checkbox"></td>
            <td><?php echo $conta['name']; ?></td>
            <td><?php echo $conta['email']; ?></td>
            <td><?php echo $conta['phone']; ?></td>
            <td><?php echo $conta['message']; ?></td>
           
            <td><button type="button" class="btn btn-outline-warning" onclick="doconfirm('<?php echo $conta['id_contact']?>')"> Delete</button> </td>
        </tr>
               
               <?php   endforeach ;
                         endif ;      ?>
      </tbody>
 </table>
            

      <script>
           function doconfirm(id)
        {       
             var job=confirm("Are you sure !?");
                if(job!=true)
                 {
                return false;
                 }
                 else{
                    document.location.href="<?php echo base_url("Message/delete"); ?>"+'/'+id;
                 }
               
            }  

        </script>

</body>
</html> 
