<?php
require_once('dbconfig.php');

$sql = "SELECT * FROM Request_makeup";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Makeup CT Management</title>
</head>
<body>
    <h1>Makeup CT Management</h1>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Missed Course</th>
            <th>CT Date</th>
            <th>Reason</th>
            <th>Status</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['ID']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Missed Course']; ?></td>
            <td><?php echo $row['CT date']; ?></td>
            <td><?php echo $row['Reason']; ?></td>
            <td><?php echo $row['Status']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <button onclick="window.location.href='addrequest.php'">Add Request</button>
    <button onclick="window.location.href='cancelrequest.php'">Cancel Request</button>
</body>
</html>

<?php
$conn->close();
?>