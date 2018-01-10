<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('clients/edit/'. $link);

?>


<label for="client_firstname">Voornaam</label><input  name="client_firstname" value = <?php echo $editContent['client_firstname'];?>><br/>
<label for="client_lastname">Achternaam</label><input  name="client_lastname" value = <?php echo $editContent['client_lastname'];?>><br/>
<label for="client_email">Email</label><input  name="client_email" value = <?php echo $editContent['client_email'];?>><br/>
<label for="client_phone">phone</label><input  name="client_phone" value = <?php echo $editContent['client_phone'];?>><br/>
<input type="submit" name="submit" value="Edit a client"/>

</form>