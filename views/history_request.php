<!DOCTYPE html>
<title> My History </title>

<body>
    
    <h3> My Feeling History </h3>

    <center><table class="table table-striped">

    <thead>
        <tr>
            <th>Date/Time</th>
            <th>Feeling</th>
            <th>Location</th>
            <th>Event</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($table as $row) : ?>	
        <tr>
            <td><?= $row['formatted_date_time'] ?></td>
            <td><?= $row["feeling"] ?></td>
            <td><?= $row["location"] ?></td>
            <td><?= $row["event"] ?></td>
            <td><?= $row["tool"] ?></td>
        </tr>
        
    <?php endforeach ?>

    </center></tbody>
    
</table>
<br>
<br>
<p>
    Download a copy of my history. <a href="pdf_output.php">Click here.</a>
</p>
</form>
</body>