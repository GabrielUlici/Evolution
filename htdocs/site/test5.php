<? 
include_once("functions/config.php");
include_once("functions/functions.php");
$sql_total="select * from oferte_munca";
$result_total=mysql_query($sql_total);
$num_total=mysql_num_rows($result_total);

    $limit = 3;  
if(empty($page))
{
 $page="1";
}
else
{
 $page=$_GET['page'];
}
$limitvalue = (($page * $limit) - ($limit)); 
$sql="select * from oferte_munca LIMIT $limitvalue, $limit ORDER BY date1";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
  print $row['specialitate']."<br>";
} 
$numofpages = intval($num_total / $limit);
for($i = 1; $i <= $numofpages; $i++){

    
        if($i == $page){
            echo($i." ");
        }else{
            print"<a href=".$_SERVER['PHP_SELF']."?page=".$i.">".$i."</a> "; 
        } 
		}
?>  



