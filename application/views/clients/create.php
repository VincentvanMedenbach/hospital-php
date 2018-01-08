<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('clients/create'); ?>

<label for="client_firstname">Voornaam</label><input  name="client_firstname"/><br/>
<label for="client_lastname">Achternaam</label><input  name="client_lastname"/><br/>
<input type="submit" name="submit" value="Create a client"/>

</form>