<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr align="center">
    <td><strong>date</strong></td>
    <td><strong>subject</strong></td>
    <td><strong>total</strong></td>
  </tr>
<?php
include("connect.php");
$result = mysql_query("SELECT * FROM data");
while($row = mysql_fetch_array($result))
 {
  echo "<tr>";
    echo"<td>" .$row['date']."</td>";
    echo"<td>" .$row['subject']."</td>";
    echo"<td>" .$row['total']."</td>";
  echo"</tr>";
 }
echo "</table>";
 mysql_close();
?>

