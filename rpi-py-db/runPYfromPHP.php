<html>
<meta http-equiv="refresh" content="200" >
 </html>
<?php
/*$command = escapeshellcmd('python py_qr_val.py');
$output = shell_exec($command);
echo "$output";*/
///////////////////////////////////////////////
include('connected.php');
$output=6355433174366815;
echo "---<br>";
$shopid = SH00001;
$sql="SELECT usr FROM temp_qr WHERE qrvalue=$output";
if ($result=mysqli_query($conn,$sql))
  {
   if ($row=mysqli_fetch_row($result))
    {
    //printf ("--%s--",$row[0]);
    $presentUSER=$row[0];
    echo $presentUSER;
    //$aa= 'zero';
    $sqlq = "SELECT * FROM users1 WHERE name='$presentUSER'";
    $resultq = $conn->query($sqlq);
    if ($resultq->num_rows > 0) {
        // output data of each row
        while($rowq = $resultq->fetch_assoc())  {
            echo "" . $rowq["balance"]. "<br>";
            if($rowq["balance"] != "0")
              {
                //execute python to open door

              }
            else {
              echo "Insufficient balance ...";
            }
        }
    } else {
        echo "0 results (error balance finding problem)";
    }
    $conn->close();
  }
  else
    {
    echo "<br><br> <span style='font-size:100px;'>&#9785;</span>
    <br>[error] have valid account / scan again?
    <br><br>";
    }
  mysqli_free_result($result);
  }
echo "<br>*****";
?>
