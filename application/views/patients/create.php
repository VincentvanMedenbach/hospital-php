<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('patients/create'); ?>

<label for="patient_name">Voornaam</label><input name="patient_name" type="text">
<br/>
<label for="species_description">species</label>
<select name="species_description">
    <?php foreach ($species as $Dier): ?>
        <option value="<?php echo $Dier->species_description ?>"><?php echo $Dier->species_description ?></option>
    <?php endforeach; ?>
</select> <br/>
<label for="patient_status">Status</label><input name="patient_status" type="text"><br/>
<label for="client_firstname">naam</label>
<select name="client_firstname">
    <?php foreach ($firstnaam as $naam): ?>
        <option value="<?php echo $naam->client_firstname ?>"><?php echo $naam->client_firstname ?></option>
    <?php endforeach; ?>
</select><br>
<label for="gender">gender</label>
<input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female<br>
<input type="submit" name="submit" value="Create a patient"/>

</form>