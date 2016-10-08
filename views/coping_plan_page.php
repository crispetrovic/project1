<!DOCTYPE html>
<title> Create A Coping Plan </title>
<body>
    
    <h3> Create A Coping Plan </h3>
    
    <p>	
        Having an effective coping plan established will </br>
	    empower you with a healthy, pre-determined </br>
		strategy for controlling your behavioral response, </br>
		preempting otherwise undesriable behavior.</br>
	</p>
	<p>
	    Coping strategies can also be used to leverage </br>
	    positive feelings by channeling that energy towards a goal. </br>
	</p>
	<p>
		<strong>Examples of coping plans:</strong>
	</p>
	
		When I feel depressed, I will take a 30 minute walk in nature.
	<br>
	<br>
	    When I feel excited, I will clean the house. 
	<br>
	<br>
  
<form name="coping_plan" action="coping_plan.php" method=post>
    <fieldset>
        <div class="form-group">
           <strong>When I feel</strong> <SELECT autofocus class="form-control" name="feeling">
            <option value=''>             </option>
            <?php 
                foreach ($feelings as $feeling)
                {
                    print ("<option value='$feeling'>".$feeling."</option>");
                }
                
            ?>
            </SELECT>,   
            <strong>I will</strong>  
            <input autocomplete="off" autofocus class="form-control" name="plan" placeholder="create a plan" type="text"/>.
        </div>
    
      <div class="control-group">
        <button type="submit" class="btn btn-default my-btn">Create</button>
    </div>
</fieldset>
</form>
</body>