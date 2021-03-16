<form method="post" name="frmAdd" action="<?php echo base_url('Certification/save');?>">
    <table class="table table-sm" align="center">
        <tr>
            <td class="font-weight-lighter" colspan="2" align="center">Ajouter une Certificat</td>
        </tr>

        <tr>
            <td class="font-weight-lighter">Specialité</td>
            <td><input type="text" name="txtSpecialite" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" > </td>
        </tr>
        <tr>
            <td class="font-weight-lighter">Ecole</td>
            <td><input type="text" name="txtEcole" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        <tr>
            <td class="font-weight-lighter">Date</td>
            <td><input type="text" name="txtDate" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        <tr>
            <td class="font-weight-lighter">Lieux</td>
            <td><input type="text" name="txtLieux" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Add" name="btnadd"></td>
        </tr>
    </table>
</form>