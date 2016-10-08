<!DOCTYPE html>
<title> Home </title>
<body>
    
    <h3> Home </h3>
<form name="report" action="index.php" method=post>   
    <fieldset>
        <div class="form-group">
            How are you feeling? <SELECT autofocus class="form-control" name="feeling">
            <option value=''>             </option>
            <?php 
                foreach ($feelings as $feeling)
                {
                    print ("<option value='$feeling'>".$feeling."</option>");
                }
                
            ?>
            </SELECT>
        </div>
        Where are you? <SELECT autofocus class="form-control" name="location">
            <option value=''>             </option>
            <?php 
                foreach ($locations as $location)
                {
                    print ("<option value='$location'>".$location."</option>");
                }
                
            ?>
            </SELECT>
        </br>
        </br>
        <div class="form-group">
        What happened? 
            <input autocomplete="off" autofocus class="form-control" name="event" placeholder="In a few words, describe what happened." type="text" maxlength="40"/>
        </div>
        
        
        <div class="form-group">
            What would you like to do? <SELECT autofocus class="form-control" name="tool">
            <option value=''>             </option>
            <?php 
                foreach ($tools as $tool)
                {
                    print ("<option value='$tool'>".$tool."</option>");
                }
                
            ?>
            </SELECT>
            
        <br>
        <br>
        <div class="control-group">
            <button type="submit" class="btn btn-default my-btn">Continue</button>
        </div>
    </fieldset>
</form>
</body>
