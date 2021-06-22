<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<?php
$conn =new mysqli("localhost", "root", "","dbarm");
$stmt= $conn->prepare("select * from engines");
$stmt->execute();
$result = $stmt->get_result();
echo "<table border=>";
while($row =$result->fetch_assoc()) {
    echo "<tr><td>".$row['Engine1']."</td><td>".$row['Engine2']."</td><td>".$row['Engine3']."</td><td>".$row['Engine4']."</td><td>".$row['Engine5']."</td><td>".$row['Engine6']."</td></tr>";

}
$conn2 =new mysqli("localhost", "root", "","dbarm");
$stmt2= $conn->prepare("select * from run");
        $stmt2->execute();
        
         $rs=$stmt2->get_result();
         while($row=$rs->fetch_assoc()){
             
             echo "<br>"."Status: ".$row["RUN"];
         }
echo"</table>"
?>

</body>
</html>
        