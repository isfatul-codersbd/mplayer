<?php
require "functions.inc.php";
$q = "";
$q = $_GET["query"];
//echo ;

if(!empty($q)){
$res = search_song($__mplayer["db_connection"], $__mplayer["db_song_table"], $q);
//print_r($res);
$i=-1;


echo "<h2>Suggestions</h2></br><ul>";
while($row = mysqli_fetch_array($res))
{
    $i++;

    $var[$i]['s_name']=$row['s_name'];
    $var[$i]['s_band']=$row['s_band'];
    $var[$i]['s_cover']=$row['s_cover'];
    //$SubjectCode[$i]['SubLongName']=$row['SubLongName'];
    echo "<li class=\"slists\"><img src=\"./img/cover/".$var[$i]['s_cover']."\" height=\"50px\" width=\"50px\" />".$var[$i]['s_name']." - ".$var[$i]['s_band']."</li>";
}
echo "</ul>"."</br>"."<h2>Filter by: </h2>";

}




/*Array (
   [0] => 1
   [id] => 1
   [1] => Dolchut
   [s_band] => Dolchut
   [2] => Bayoskop
   [s_name] => Bayoskop
   [3] => Not Enrolled
   [s_album] => Not Enrolled
   [4] => cdd96d3cc73d1dbdaffa03cc6cd7339b.mp3
   [s_path] => cdd96d3cc73d1dbdaffa03cc6cd7339b.mp3
   [5] => 0
   [s_hit_count] => 0
   [6] => ./img/cover/Dolchut
   [s_cover] => ./img/cover/Dolchut )
*/
 ?>
