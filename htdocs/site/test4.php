<?
include_once("functions/config.php");
include_once("functions/functions.php");
 $limit          = 4;                
    $query_count    = "SELECT count(*) FROM oferte_munca";     
    $result_count   = mysql_query($query_count);     
    $totalrows      = mysql_num_rows($result_count);  

    if(empty($page)){ 
        $page = 1; 
    } 
	else
	{
	  $page=$_GET['page'];
	}
         

    $limitvalue = $page * $limit - ($limit);  
    $query  = "SELECT * FROM oferte_munca LIMIT $limitvalue, $limit";         
    $result = mysql_query($query) or die("Error: " . mysql_error());  

    if(mysql_num_rows($result) == 0){ 
        echo("Nothing to Display!"); 
    } 

    $bgcolor = "#E0E0E0"; // light gray 

    echo("<table cellspacing=0 cellpadding=4>"); 
     
    while($row = mysql_fetch_array($result)){ 
        if ($bgcolor == "#E0E0E0"){ 
            $bgcolor = "#FFFFFF"; 
        }else{ 
            $bgcolor = "#E0E0E0"; 
        } 

    echo("<tr bgcolor=".$bgcolor."><td>"); 
    echo($row["id"]); 
     print"</td><td>";
    echo($row["specialitate"]); 
    echo("</td></tr>"); 
    } 

    echo("</table>"); 
  print"<br>";
    if($page != 1){  
        $pageprev = $page--; 
         
        echo("<a href=\"$PHP_SELF&page=$pageprev\">PREV".$limit."</a> ");  
    }else{ 
        echo("PREV".$limit." "); 
    } 

    $numofpages = $totalrows / $limit;  
     
    for($i = 1; $i <= $numofpages; $i++){ 
        if($i == $page){ 
            echo($i." "); 
        }else{ 
            echo("<a href=\"$PHP_SELF?page=$i\">$i</a> "); 
        } 
    } 


    if(($totalrows % $limit) != 0){ 
        if($i == $page){ 
            echo($i." "); 
        }else{ 
            echo("<a href=\"$PHP_SELF?page=$i\">$i</a> "); 
        } 
    } 

    if(($totalrows - ($limit * $page)) > 0){ 
        $pagenext = $page++; 
          
        echo("<a href=\"$PHP_SELF?page=$pagenext\">NEXT".$limit."</a>");  
    }else{ 
        echo("<a href=\"$PHP_SELF?page=$pagenext\">NEXT".$limit."</a>");  
    } 
     
    mysql_free_result($result); 
?>