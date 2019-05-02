<?php
//$page = $_SERVER['PHP_SELF'];
//$sec = "2";
?>
<html>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
</html>
<?php


include ('connected.php');
$aa= 'abhi';
$sql = "INSERT INTO liveusers (name, balance,items, email)
VALUES ('John', '22','apple' ,'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
