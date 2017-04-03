<?php
require_once('config.php');

$DB_NAME = "SUMSC";
$TB_NAME = "Campus_walk";
$DB =new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, $DB_NAME);

if($DB->connect_error)
    die('Connect to mysql failed.<br>');

$sql = "select * from Campus_walk;";

$result = $DB->query($sql);
?>

<table>
<thead>
    <tr>
    <th style="width:20%">Name</th>
    <th style="width:25%">Telphone</th>
    <th style="width:25%">Email</th>
    <th style="width:25%">College</th>
    <th style="width:10%">Grade</th>
    </tr>
</thead>
<tbody>
<?php
if($result->num_rows > 0 )
    while($row = $result->fetch_assoc() )
    {  ?>        
    <tr>
    <td><?php echo $row['name'] ?></td>
    <td><?php  echo $row['telphone'] ?></td>
    <td><?php echo  $row['email'] ?></td>
    <td><?php  echo $row['college'] ?></td>
    <td><?php  echo $row['grade'] ?></td>
    </tr>
<?php }
?>

</tbody>
