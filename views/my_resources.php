<!DOCTYPE html>
<title> My Resources </title>
<body>
    
    <h3>My Resources</h3>

		
<form name="tools" action="resources.php" method=post>
    <fieldset>
    <div class="form-group">
            What would you like to access? <SELECT autofocus class="form-control" name="resources">
            <option value=''>             </option>
            <?php 
                foreach ($resources as $resource)
                {
                    print ("<option value='$resource'>".$resource."</option>");
                }
                
            ?>
            </SELECT>
    <br>
    <br>
    <br>
    

    <div class="control-group">
        <button type="submit" class="btn btn-default my-btn">Continue</button>
    </div>
</fieldset>
</form>
</body>
