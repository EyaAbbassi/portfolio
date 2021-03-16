<form method="post" name="frmEdit" action="<?php echo base_url('Formation/update');?>">
     <table align="center" class="table table-sm">
        <tr>
            <td colspan="2" align="center">Modifier</td>
        </tr>
        <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $formation['id_formation'] ?>">
        <tr>
            <td class="font-weight-lighter">Niveau</td>
            <td><input type="text" name="niveau" value="<?php echo $formation['niveau']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        <tr>
            <td class="font-weight-lighter">Ecole</td>
            <td><input type="text" name="ecole" value="<?php echo $formation['ecole']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        <tr>
            <td class="font-weight-lighter">Date</td>
            <td><input type="text" name="date" value="<?php echo $formation['date']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        <tr>
            <td class="font-weight-lighter">Lieux</td>
            <td><input type="text" name="lieux" value="<?php echo $formation['lieux']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        <tr>    
            <td colspan="2" align="center"><input type="submit" value="Edit" name="btnEdit"> </td>
        </tr>
    </table>
</form>