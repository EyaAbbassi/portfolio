<html>
<head>
    <title>PROJETS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo (base_url('/boot/css/style.css'))?>">
</head>
<body>
    <h2>Mes Projets</h2>
    <table class="table">
  <caption>Liste des projets</caption>
  <thead>
        <tr>
            <td colspan="5" align="right"><button type="button" class="btn btn-outline-primary" onclick="Add()">Add</button></td>
        </tr>
  <tr>
      <th scope="col">Title</th>
      <th scope="col">Objective</th>
      <th scope="col">More About</th>
     
    </tr>
  </thead>
  <tbody>
 
        <?php if ($projet) :
                                foreach ($projet as $pro) :
                              ?>
    
        <tr>
            <td><?php echo $pro['titre']; ?></td>
            <td><?php echo $pro['objectif']; ?></td>
            <td><?php echo $pro['plus_info']; ?></td>
            
            <td>
            
            <button type="button" class="btn btn-outline-danger" onclick="Edit('<?php echo $pro['id_projet']?>')">Edit</button>


            <button type="button" class="btn btn-outline-warning" onclick="doconfirm('<?php echo $pro['id_projet']?>')"> Delete</button> </td>
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
                    document.location.href="<?php echo base_url("Projet/delete/");?>"+'/'+id;
                 }
               
            }  

            function Edit (id)  {
                document.location.href="<?php echo base_url("Projet/edit/");?>"+'/'+id;
            } 

             function  Add ()  {
                document.location.href="<?php echo base_url("Projet/add/");?>";
            } 

        </script>
   
      
       

</body>
</html> 