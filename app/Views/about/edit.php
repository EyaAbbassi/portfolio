<form method="post" name="frmEdit" action="<?php echo base_url('About/update');?>" enctype="multipart/form-data">
     <table align="center" class="table table-sm">
        <tr>
            <td colspan="2" align="center">Modifier les informations </td>
        </tr>
        <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $about['id'] ?>">
        <tr>
            <td class="font-weight-lighter">Prenom</td>
            <td><input type="text" name="prenom" value="<?php echo $about['prenom']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        <tr>
            <td class="font-weight-lighter">Nom</td>
            <td><input type="text" name="nom" value="<?php echo $about['nom']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        <tr>
            <td class="font-weight-lighter">Adresse</td>
            <td><input type="text" name="adresse" value="<?php echo $about['adresse']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        <tr>
            <td class="font-weight-lighter">Email</td>
            <td><input type="text" name="email" value="<?php echo $about['email']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>

        <tr>
            <td class="font-weight-lighter">LinkedIn</td>
            <td><input type="text" name="linkedin" value="<?php echo $about['linkedin']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        <tr>
            <td class="font-weight-lighter">MORE..</td>
            <td><input type="text" name="more" value="<?php echo $about['more']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        
        <td  action="<?php echo base_url("/About/upload")?>" class="font-weight-lighter">P
        hoto</td> 
            <td><input type="file" name="photo"> </td>
        <tr>    
          
    </table> 
     <td colspan="2" align="center"><input type="submit" value="Edit" name="btnEdit"> </td>
        </tr>
</form>