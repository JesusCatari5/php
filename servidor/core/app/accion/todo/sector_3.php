<?php
// print_r($_POST);
//if(isset($_SESSION["user_id"]) && !empty($_POST)){
foreach ($_POST as $p => $k) {
	Sector_3::actualizar($p,$k);
}

foreach ($_FILES as $p => $k) {
  if(isset($_FILES[$p])){
    

    
    $image = new Upload($_FILES[$p]);
    if($image->uploaded){
      $image->Process("style/portada");
      if($image->processed){
		Sector_3::actualizar($p,$image->file_dst_name);		
      }
    }
  }
}

Core::redir("index.php?vista=sector_3");
//}


?>