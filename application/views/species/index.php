
<h2>Patiënts</h2>

<h2>Species</h2>
<table id="speciesTable">
    <thead>
    <tr>
        <th>#</th>
        <th>Description</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    </tbody>
    <?php
    foreach ($species as $Speciess):
    ?>
        <tr>
            <td><?php echo $Speciess->species_id ?></td>
            <td><?php echo $Speciess->species_description?></td>
            <td><a href="<?php echo site_url('species/edit/' . $Speciess->species_id); ?>">Edit</a></td>
            <td><a href="<?php echo site_url('species/delete/' . $Speciess->species_id); ?>">x</a></td>
<!--            <td>0612345678</td>-->
<!--            <td>johndoe@hismail.com</td>-->
<!--            <td class="center"><a href="#">edit</a></td>-->
<!--            <td class="center"><a href="#">delete</a></td>-->
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<script>
    $(document).ready(function()
        {
            $("#speciesTable").tablesorter();
        }
    );


</script>
<p><a href="species/create">Create</a></p>
<!--<p><a href="index.html">Home</a></p>-->
</body>
</html>