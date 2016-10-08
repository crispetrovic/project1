<!DOCTYPE html>
<title> My Coping Plan History </title>

<body>
    
    <h2> My Coping Plans </h2>

    <center><table class="table table-striped">

    <thead>
        <tr>
            <th>When I feel</th>
            <th>I will</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($table as $row) : ?>	
        <tr>
            <td><?= $row["feeling"] ?></td>
            <td><?= $row["plan"] ?></td>
        </tr>
        
    <?php endforeach ?>

    </center></tbody>
    
</table>
</body>