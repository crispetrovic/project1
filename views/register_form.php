<!DOCTYPE html>

<body>
    All fields are required.* 
    
</body>

<form action="register.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="email" placeholder="Email Address" type="email"/>
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="username" placeholder="Username" type="text"/>
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="first_name" placeholder="First Name" type="text"/>
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="last_name" placeholder="Last Name" type="text"/>
        </div>
        <div class="form-group">
            <SELECT autofocus class="form-control" name="timezone">
            <option disabled="disabled" selected="selected" value=''>What's your timezone?</option>
            <?php 
                foreach ($timezones as $timezone)
                {
                    print ("<option value='$timezone'>".$timezone."</option>");
                }
                
            ?>
            </SELECT>
        </div>
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="confirmation" placeholder="Confirm Password" type="password" />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default my-btn">Register</button>
        </div>
    </fieldset>
</form>
<div>
    or <a href="login.php">log in</a>
</div>
