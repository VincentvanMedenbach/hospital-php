<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('clients/create'); ?>

<label for="client_firstname">Voornaam</label><input  name="client_firstname" type="text"/><br/>
<label for="client_lastname">Achternaam</label><input  name="client_lastname" type="text"/><br/>
<label for="client_phone">Phone</label><input  name="client_phone" type="tel"/><br/>
<label for="client_email">Email</label><input  name="client_email" type="email"/><br/>
<input type="submit" name="submit" value="Create a client"/>

</form>