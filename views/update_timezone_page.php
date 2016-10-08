<!DOCTYPE html>

    
<title> My Timezone </title>

    <h3> My Timezone </h3>
   
    <form action="update_timezone.php" method="post">
        <fieldset>
            <div class="form-group">
            <SELECT autofocus class="form-control" name="timezone">
            <option value=''>Change your timezone</option>
            <?php 
                foreach ($timezones as $timezone)
                {
                    print ("<option value='$timezone'>".$timezone."</option>");
                }
            ?>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default my-btn">Update My Timezone</button>
        </div>
    </fieldset>
</form>
