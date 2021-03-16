
<form method="post" name="frmEdit" action="<?php echo base_url('Competence/update');?>">
     <table align="center" class="table table-sm">
        <tr>
            <td colspan="2" align="center">Modifier une Competence </td>
        </tr>
        <input type="hidden" name="id_langage" class="form-control" id="id_langage" value="<?php echo $competence['id_langage'] ?>">
        <tr>
            <td class="font-weight-lighter">Nom</td>
            <td><input type="text" name="nom" value="<?php echo $competence['nom']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        <tr>
            <td class="font-weight-lighter">Niveau</td>
            <td><input type="text" name="niveau" value="<?php echo $competence['niveau']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
       
        <tr>    
            <td colspan="2" align="center"><input type="submit" value="Edit" name="btnEdit"> </td>
        </tr>
    </table>
</form>