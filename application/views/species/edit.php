<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('species/edit/'. $link);
?>

<label for="species_description">Description</label><input  name="species_description" type='text' value="<?php echo $editContent['species_description'];?>"/><br/>
<input type="submit" name="submit" value="Edit a client"/>

</form>