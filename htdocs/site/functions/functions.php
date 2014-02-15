<?

function select_($sql,$select_name,$selected_value,$initial_value,$val1,$val2,$post) 
{



$result=mysql_query($sql);


?>
<select name="<? print $select_name;?>">
<?
   if(!empty($post))
   {
      while($row=mysql_fetch_array($result))
    {
        print'<option ';
        if($row[$val1]==$post)
      {
        print'selected="selected"';
      }
   
       print'<option ';
       print'value="';
       print $row[$val1];
       print'">';
       print $row[$val2];
       print'</option>';
    }
   
   }
   
   elseif(!empty($initial_value))
   {
   print'<option value="" selected="selected">'.$initial_value.'</option>';
   while($row=mysql_fetch_array($result))
   {
       print'<option ';
       print'value="';
       print $row[$val1];
       print'">';
       print $row[$val2];
       print'</option>';
   }
   }
   else
   {
   while($row=mysql_fetch_array($result))
{
   print'<option ';
   if($row[$val1]==$selected_value)
   {
     print'selected="selected"';
   }
   
       print'<option ';
       print'value="';
       print $row[$val1];
       print'">';
       print $row[$val2];
       print'</option>';
}
}
print'</select>';
?>
<?
}
?>

<?
  function iesire()
  {
     foreach($_SESSION as $key=>$value)
	 {
	   unset($_SESSION[$key]);
	 } 
  }
?>