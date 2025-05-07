<?php
 $season=array("summer","winter","spring","autumn");
 echo "count():<br/>";
 echo count($season);

echo "<br/> sort():<br/>";
 sort($season);
 foreach($season as $s)
 {
 echo "$s<br/>";
 }

 echo "<br/>array_reverse():<br/>";
 $reverseseason= array_reverse($season);
 foreach( $reverseseason as $s )
 {
 echo "$s<br />";
 }

 echo "<br/>array_search():<br/>";
 $key= array_search("spring",$season);
 echo $key;
 ?>