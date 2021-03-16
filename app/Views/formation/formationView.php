<html>
<head>
    <title>Formation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo (base_url('/boot/css/style.css'))?>">
</head>
<body>
    <h2>Ma Formation</h2>
    <table class="table">
  <caption>Parcours</caption>
  <thead>
        <tr>
            <td colspan="5" align="right"><button type="button" class="btn btn-outline-primary" onclick="Add()">Add</button></td>
        </tr>
  <tr>
      <th scope="col">Niveau</th>
      <th scope="col">Ecole</th>
      <th scope="col">Date</th>
      <th scope="col">Lieux</th>
    </tr>
  </thead>
  <tbody>
 
        <?php if ($formation) :
                                foreach ($formation as $forma) : ?>
    
        <tr>
            <td><?php echo $forma['niveau']; ?></td>
            <td><?php echo $forma['ecole']; ?></td>
            <td><?php echo $forma['date']; ?></td>
            <td><?php echo $forma['lieux']; ?></td>
            <td>  
        <button type="button" class="btn btn-outline-danger" onclick="Edit('<?php echo $forma['id_formation']?>')">Edit</button>
        <button type="button" class="btn btn-outline-warning" onclick="doconfirm('<?php echo $forma['id_formation']?>')"> Delete</button> </td>
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
                    document.location.href="<?php echo base_url("Formation/delete/");?>"+'/'+id;
                 }
               
            }  

            function Edit (id)  {
                document.location.href="<?php echo base_url("Formation/edit/");?>"+'/'+id;
            } 

             function  Add ()  {
                document.location.href="<?php echo base_url("Formation/add/");?>";
            } 

        </script>
   
      
       

</body>
</html> 