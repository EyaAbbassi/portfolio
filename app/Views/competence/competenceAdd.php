<form method="post" name="frmAdd" action="<?php echo base_url('Competence/save');?>">
    <table class="table table-sm" align="center">
        <tr>
            <td class="font-weight-lighter" colspan="2" align="center">Ajouter une Competence</td>
        </tr>

        <tr>
            <td class="font-weight-lighter">Nom</td>
            <td><input type="text" name="nom" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" > </td>
        </tr>
        <tr>
            <td class="font-weight-lighter">Niveau</td>
            <td><input type="text" name="niveau" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
     
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Add" name="btnadd"></td>
        </tr>
    </table>
</form>