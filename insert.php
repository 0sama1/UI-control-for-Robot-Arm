
<!DOCTYPE html>
<html>
<head>
    
<title>Page Title3</title>
</head>
<body>

<?php
$slider = $_POST["slider"];
$slider2 = $_POST["slider2"];
$slider3 = $_POST["slider3"];
$slider4 = $_POST["slider4"];
$slider5 = $_POST["slider5"];
$slider6 = $_POST["slider6"];
$conn = new mysqli("localhost", "root", "", "dbarm");
        if (isset($_POST["save"])){
            $stmt =$conn->prepare("UPDATE  engines SET Engine1='$slider', Engine2='$slider2', Engine3='$slider3', Engine4='$slider4', Engine5='$slider5', Engine6='$slider6'") ;
$stmt->execute();
echo "New record is inserted sucessfully";
        }


    
?>
<?php
if (isset($_POST["run"])){
    $stmt =$conn->prepare("UPDATE run SET RUN='On'");
    $stmt->execute();
            echo "Done";
}
?>
<form>  </form>
</body>
</html>