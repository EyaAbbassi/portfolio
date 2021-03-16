<form method="post" name="frmEdit" action="<?php echo base_url('Interet/update');?>">
     <table align="center" class="table table-sm">
        <tr>
            <td colspan="2" align="center">Modifier</td>
        </tr>
        <input type="hidden" name="id_interet" class="form-control" id="id_interet" value="<?php echo $interet['id_interet'] ?>">
        <tr>
            <td class="font-weight-lighter">Nom</td>
            <td><input type="text" name="nom" value="<?php echo $interet['nom']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        <tr>
            <td class="font-weight-lighter">More About</td>
            <td><input type="text" name="about" value="<?php echo $interet['about']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
       
        <tr>    
            <td colspan="2" align="center"><input type="submit" value="Edit" name="btnEdit"> </td>
        </tr>
    </table>
</form>