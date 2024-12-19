<?php
$con=mysqli_connect('localhost','root','','prasad_1');
$select_query="select * from student";
$result=mysqli_query($con,$select_query);
echo " <table style='margin-left:200px; background-color: aquamarine;'  width='1300px' height='50px' >
        <tr>
        <th  width='400px'> student name</th>
        <th width='400px'>email</th>
        <th width='400px'> password</th>
        </tr>
    </table>";
while($row=mysqli_fetch_assoc($result)){
$name=$row['studentname'];
$email=$row['email'];
$password=$row['password'];
echo "<table style='margin-left:200px;'  width='1300px' height='50px'>
        <tr>
            <td style='border:1px solid; margin-left:20px;' width='400px'>$name</td>
            <td style='border:1px solid; margin-left:20px;' width='400px'>$p</td>
            <td style='border:1px solid; margin-left:20px;' width='400px'>$email</td>
        </tr>
    </table>

";

}
?>

