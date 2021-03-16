<form method="post" name="frmEdit" action="<?php echo base_url('Projet/update');?>">
     <table align="center" class="table table-sm">
        <tr>
            <td colspan="2" align="center">Modifier un projet</td>
        </tr>
        <input type="hidden" name="id_projet" class="form-control" id="id_projet" value="<?php echo $projet['id_projet'] ?>">
        <tr>
            <td class="font-weight-lighter">titre</td>
            <td><input type="text" name="titre" value="<?php echo $projet['titre']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
             <tr>
            <td class="font-weight-lighter">Objectif</td>
            <td><input type="text" name="objectif" value="<?php echo $projet['objectif']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        <tr>
            <td class="font-weight-lighter">plus d'information</td>
            <td><input type="text" name="plus_info" value="<?php echo $projet['plus_info']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
       
        <tr>    
            <td colspan="2" align="center"><input type="submit" value="Edit" name="btnEdit"> </td>
        </tr>
    </table>
</form>