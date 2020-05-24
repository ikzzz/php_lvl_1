 <?include_once 'inc/model.php';?>
 <div class="images">
 <table>
 	<tr>
 	<?
while($picture = mysqli_fetch_assoc($pic)){
        if ($r==3){ 
                    echo "</tr><tr>"; $r=0;
                  }
          echo "<td><a href=\"fullimg.php?ID=".$picture['ID']."\"><img src=".$picture['URL']."></a><br>Просмотров:".$picture['views']."</td>";
                    $r++;
    };
 ?>  
 </table>
  </div>