<table class="table table-striped table-hover">
    <thead>
        <tr>            
            <th>Vehicle Number</th>
            <th>Name</th>
            <th>Type</th>
        </tr>
    </thead>
    <tbody>
        <?php //`ID`, `Name`, `Type`
        $sql = "SELECT * FROM `vehicle` ORDER BY ID ASC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Type"]."</td></tr>";
            }
        } else {
            echo "<tr><td>-</td><td>-</td><td>-</td></tr>";
        }
        $conn->close();
        ?>
    </tbody>
</table>