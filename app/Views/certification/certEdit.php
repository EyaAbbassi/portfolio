
<form method="post" name="frmEdit" action="<?php echo base_url('Certification/update');?>">
     <table align="center" class="table table-sm">
        <tr>
            <td colspan="2" align="center">Modifier une Certificat </td>
        </tr>
        <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $certification['id_certification'] ?>">
        <tr>
            <td class="font-weight-lighter">Specialité</td>
            <td><input type="text" name="txtSpecialite" value="<?php echo $certification['specialite']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        <tr>
            <td class="font-weight-lighter">Ecole</td>
            <td><input type="text" name="txtEcole" value="<?php echo $certification['ecole']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        <tr>
            <td class="font-weight-lighter">Date</td>
            <td><input type="text" name="txtDate" value="<?php echo $certification['date']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        <tr>
            <td class="font-weight-lighter">Lieux</td>
            <td><input type="text" name="txtLieux" value="<?php echo $certification['lieux']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        <tr>    
            <td colspan="2" align="center"><input type="submit" value="Edit" name="btnEdit"> </td>
        </tr>
    </table>
</form>