<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flight";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM flight1";
$result = $conn->query($sql);

//$students = [];
//if ($result->num_rows > 0) {
  //  while ($row = $result->fetch_assoc()) {
    //    $flight[] = $row;
    //}
//}

?>

<!DOCTYPE html>

<head>
    <title>Sorted Flight Records | vtucode</title>
    <style>
       
        h2 {
            text-align: center;
            color: #4A90E2;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4A90E2;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }

       }
    </style>
</head>

<body>

    <h2>Sorted Student Records by Name</h2>

    <table>
        <thead>
            <tr>
                <th>Airline</th>
                <th>FlightNumber</th>
                <th>DepartureAirport</th>
                <th>ArrivalAirport</th>
                <th>DepartureTime<th>
                <th>ArrivalTime</th>
                <th>SeatCapacity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flight1 as $data): ?>
                <tr>
                    <td data-label="Airline"><?php echo htmlspecialchars($student['Airline']); ?></td>
                    <td data-label="FlightNumber"><?php echo htmlspecialchars($student['FlightNumber']); ?></td>
                    <td data-label="DepartureAirport"><?php echo htmlspecialchars($student['DepartureAirport']); ?></td>
                    <td data-label="ArrivalAirport"><?php echo htmlspecialchars($student['ArrivalAirport']); ?></td>
                    <td data-label="DepartureTime"><?php echo htmlspecialchars($student['DepartureTime']); ?></td>"><?php echo htmlspecialchars($student['usn']); ?></td>
                    <td data-label="ArrivalTime"><?php echo htmlspecialchars($student['ArrivalTime']); ?></td>
                    <td data-label="SeatCapacity"><?php echo htmlspecialchars($student['SeatCapacity']); ?></td>
                    <td data-label="Price"><?php echo htmlspecialchars($student['Price']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>