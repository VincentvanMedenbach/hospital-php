<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('patients/edit/' . $link);

?>


<label for="patient_name">Voornaam</label><input name="patient_name" value= <?php echo $editContent['patient_name']; ?>>
<br/>
<label for="species_description">species</label>
<select name="species_description" class="dropdown" <?php echo $editContent['species_description']; ?> >
    <?php foreach ($species as $Dier): ?>
        <option value="<?php echo $Dier->species_description ?>"<?php if ($editContent['species_description'] == $Dier->species_description) {
            echo 'selected';
        } ?>><?php echo $Dier->species_description ?></option>
    <?php endforeach; ?>
</select> <br/>
<label for="patient_status">Status</label><input name="patient_status"
                                                 value= <?php echo $editContent['patient_status']; ?>><br/>
<label for="client_firstname">naam</label>
<select name="client_firstname" class="dropdown" <?php echo $editContent['patient_name']; ?>>
    <?php foreach ($firstnaam as $naam): ?>
        <option value="<?php echo $naam->client_firstname ?>"<?php if($editContent['client_firstname']== $naam->client_firstname){echo 'selected';} ?>><?php echo $naam->client_firstname ?></option>
    <?php endforeach; ?>
</select><br>
<label for="gender">gender</label>
<input type="radio" name="gender" value="male"<?php if($editContent['gender']== 'male'){echo 'checked';} ?> > Male
<input type="radio" name="gender" value="female"<?php if($editContent['gender']== 'female'){echo 'checked';} ?>> Female<br>

<input type="submit" name="submit" value="Edit a client"/>

</form>