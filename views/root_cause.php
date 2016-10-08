<!DOCTYPE html>
<title> Feeling Analysis </title>
<body>
    
    <h3> Feeling Analysis </h3>
    
    <p>	
        Recurring emotions often have underlying 'root causes.'<br>
        In order to determine these root causes, a history <br>
        needs to be gathered so that upon later review, patterns can be <br>
        identified and then addressed. 
	</p>
	
	<p>
        Whenever you notice you're struggling with a particular feeling, <br>
        make sure to analyze it. Taking the opportunity in the moment to <br>
        analyze your feelings will benefit you in the future.<br>
    </p>
	
<form name="root_cause" action="feeling_analysis.php" method=post>
    <fieldset>
        <div class="form-group">
            Which feeling would you like to analyze? <SELECT autofocus class="form-control" name="feeling">
            <option value=''>             </option>
            <?php 
                foreach ($feelings as $feeling)
                {
                    print ("<option value='$feeling'>".$feeling."</option>");
                }
                
            ?>
            </SELECT>
        </div>
        
           Why do you think you feel this way? <input autocomplete="off" autofocus class="form-control" name="why1" placeholder="type a thoughtful response" type="text"/>
        <br>
        <br>
           Why is that? <input autocomplete="off" autofocus class="form-control" name="why2" placeholder="type a thoughtful response" type="text"/>
        <br>
        <br>
            Why does that happen? <input autocomplete="off" autofocus class="form-control" name="why3" placeholder="type a thoughtful response" type="text"/>
        <br>
        <br>
            Why do you think this? <input autocomplete="off" autofocus class="form-control" name="why4" placeholder="type a thoughtful response" type="text"/>
        <br>
        <br>
            Why? <input autocomplete="off" autofocus class="form-control" name="why5" placeholder="type a thoughtful response" type="text"/>
        <br>
        <br>
      <div class="control-group">
        <button type="submit" class="btn btn-default my-btn">Submit</button>
    </div>
</fieldset>
</form>
</body>