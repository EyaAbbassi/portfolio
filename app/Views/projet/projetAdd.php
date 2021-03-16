<form method="post" name="frmAdd" action="<?php echo base_url('Projet/save');?>">
    <table class="table table-sm" align="center">
        <tr>
            <td class="font-weight-lighter" colspan="2" align="center">Ajouter une projet</td>
        </tr>

        <tr>
            <td class="font-weight-lighter">titre</td>
            <td><input type="text" name="titre" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" > </td>
        </tr>
        <tr>
            <td class="font-weight-lighter">objectif</td>
            <td><input type="text" name="objectif" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        <tr>
            <td class="font-weight-lighter">plus d'information</td>
            <td><input type="text" name="plus_info" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Add" name="btnadd"></td>
        </tr>
    </table>
</form>