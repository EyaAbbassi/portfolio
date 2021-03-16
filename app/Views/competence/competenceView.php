<html>
<head>
    <title>Competence</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo (base_url('/boot/css/style.css'))?>">
</head>
<body>
    <h2>COMPETENCES</h2>
    <table class="table">
 
  <thead>
        <tr>
            <td colspan="5" align="right"><button type="button" class="btn btn-outline-primary" onclick="Add()">Add</button></td>
        </tr>
  <tr>
      <th scope="col">NOM</th>
      <th scope="col">NIVEAU</th>
      
    </tr>
  </thead>
  <tbody>
 
        <?php if ($competence) :
                                foreach ($competence as $compt) :
                              ?>
    
        <tr>
            <td><?php echo $compt['nom']; ?></td>
            <td><?php echo $compt['niveau']; ?></td>
            <td>
            
            <button type="button" class="btn btn-outline-danger" onclick="Edit('<?php echo $compt['id_langage']?>')">Edit</button>


            <button type="button" class="btn btn-outline-warning" onclick="doconfirm('<?php echo $compt['id_langage']?>')"> Delete</button> </td>
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
                    document.location.href="<?php echo base_url("Competence/delete"); ?>"+'/'+id;
                 }
               
            }  

            function Edit (id)  {
                document.location.href="<?php echo base_url("Competence/edit");?>"+'/'+id;
            } 

             function  Add ()  {
                document.location.href="<?php echo base_url("Competence/add/");?>";
            } 

        </script>

</body>
</html> 

