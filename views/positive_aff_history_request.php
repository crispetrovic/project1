<!DOCTYPE html>
<title> My Positive Affirmation History </title>

<body>
    
    <h3> My Positive Affirmations </h3>

    <center><table class="table table-striped">

    <thead>
        <tr>
            <th>I am/have</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($table as $row) : ?>	
        <tr>
            <td><?= $row["affirmation"] ?></td>
        </tr>
        
    <?php endforeach ?>

    </center></tbody>
    
</table>
</body>