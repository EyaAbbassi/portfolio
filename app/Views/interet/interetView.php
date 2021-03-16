<html>
<head>
    <title>Interet</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo (base_url('/boot/css/style.css'))?>">
</head>
<body>
    <h2>INTERETS</h2>
    <table class="table">
 
  <thead>
        <tr>
            <td colspan="5" align="right"><button type="button" class="btn btn-outline-primary" onclick="Add()">Add</button></td>
        </tr>
  <tr>
      <th scope="col">NOM</th>
      <th scope="col">More About..</th>
      
    </tr>
  </thead>
  <tbody>
 
        <?php if ($interet) :
                                foreach ($interet as $inter) :
                              ?>
    
        <tr>
            <td><?php echo $inter['nom']; ?></td>
            <td><?php echo $inter['about']; ?></td>
            <td>
            
            <button type="button" class="btn btn-outline-danger" onclick="Edit('<?php echo $inter['id_interet']?>')">Edit</button>


            <button type="button" class="btn btn-outline-warning" onclick="doconfirm('<?php echo $inter['id_interet']?>')"> Delete</button> </td>
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
                    document.location.href="<?php echo base_url("Interet/delete"); ?>"+'/'+id;
                 }
               
            }  

            function Edit (id)  {
                document.location.href="<?php echo base_url("Interet/edit");?>"+'/'+id;
            } 

             function  Add ()  {
                document.location.href="<?php echo base_url("Interet/add/");?>";
            } 

        </script>

</body>
</html> 
