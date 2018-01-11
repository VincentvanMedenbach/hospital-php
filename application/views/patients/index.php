<h2>Patiënts</h2>
<table>
    <thead>
    <tr>
        <th onclick="nameSort()">Name</th>
        <th onclick="speciesSort()">Species</th>
        <th onclick="statusSort()">Status</th>
        <th onclick="patientSort()">patient</th>
        <th onclick="genderSort()">gender</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <script>
        function nameSort(){
            var jArray;
            jArray= <?php echo json_encode($patients); ?>; console.log(jArray);

        }
    </script>
    </tbody>
    <?php
    foreach ($patients as $patient):
        ?>
        <tr>
            <td><?php echo $patient->patient_name ?></td>
            <td><?php echo $patient->species_description ?></td>
            <td><?php echo $patient->patient_status ?></td>
            <td><?php echo $patient->client_firstname ?></td>
            <td><?php echo $patient->gender ?></td>
            <td><a href="<?php echo site_url('patients/edit/' . $patient->patient_id); ?>">Edit</a></td>
            <td><a href="<?php echo site_url('patients/delete/' . $patient->patient_id); ?>">x</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<p><a href="patients/create">Create</a></p>
</body>
</html>