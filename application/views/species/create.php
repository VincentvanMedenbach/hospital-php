<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('species/create');
?>

<label for="species_description">Description</label><input  name="species_description" type='text'/><br/>
<input type="submit" name="submit" value="Create a species"/>

</form>