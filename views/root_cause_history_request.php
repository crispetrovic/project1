<!DOCTYPE html>
<title> My Feeling Analyses History </title>

<body>
    
    <h3> My Feeling Analyses </h3>

    <center><table class="table table-striped">

    <thead>
        <tr>
            <th>Feeling</th>
            <th>1st why</th>
            <th>2nd why</th>
            <th>3rd why</th>
            <th>4th why</th>
            <th>5th why</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($table as $row) : ?>	
        <tr>
            <td><?= $row["feeling"] ?></td>
            <td><?= $row["why1"] ?></td>
            <td><?= $row["why2"] ?></td>
            <td><?= $row["why3"] ?></td>
            <td><?= $row["why4"] ?></td>
            <td><?= $row["why5"] ?></td>
        </tr>
        
    <?php endforeach ?>

    </center></tbody>
    
</table>
</body>