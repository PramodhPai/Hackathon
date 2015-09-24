<?php
include('db.php');
if($_POST)
{
$q=$_POST['search'];
$sql_res=mysql_query("select id,college_name from autocomplete where college_name like '%$q%' order by id LIMIT 5");
while($row=mysql_fetch_array($sql_res))
{
$college_name=$row['college_name'];
$b_college_name='<strong>'.$q.'</strong>';
$college_name = str_ireplace($q, $b_college_name, $college_name);
?>
<div class="show" align="left">
</span>&nbsp;<br/><?php echo $college_name; ?><br/>
</div>
<?php
}
}
?>
