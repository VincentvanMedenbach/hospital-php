
<h2>Patiënts</h2>
<table>
    <thead>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Phone</th>
        <th>Email</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    </tbody>
    <?php
    foreach ($clients as $client):
    ?>
        <tr>
            <td><?php echo $client->client_firstname?></td>
            <td><?php echo $client->client_lastname?></td>
<!--            <td>0612345678</td>-->
<!--            <td>johndoe@hismail.com</td>-->
<!--            <td class="center"><a href="#">edit</a></td>-->
<!--            <td class="center"><a href="#">delete</a></td>-->
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<p><a href="create">Create</a></p>
<!--<p><a href="index.html">Home</a></p>-->
</body>
</html>