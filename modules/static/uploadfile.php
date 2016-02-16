<?php
$uploaddir = './upload/test/';
$uploadfile = $uploaddir.time().'-'. basename($_FILES['userfile']['name']);
$t = scandir($uploaddir);
foreach($t as $v);
$test = '<img class="img2" src="/upload/test/'.$v.'">';

if(isset($_POST['add']) && isset($_FILES['userfile'])) {
	$tmpFile = $_FILES['userfile']['tmp_name'];
	list($width, $height) = getimagesize($tmpFile);
	if ($width == null && $height == null) {
		//header("Location: index.php");
		return;
	} 
	if ($width >= 105 && $height >= 189) {
		$image = new Imagick($tmpFile);
		$image->thumbnailImage(105, 189);
		$image->writeImage($uploadfile);
	} else {
	move_uploaded_file($tmpFile, $uploadfile);
	}	
	$fileimg = time().'-'. basename($_FILES['userfile']['name']);
	$files = [];
	if($dirfile = opendir($uploaddir)) {
		while( false !== ($files = readdir($dirfile))) {
			if($files == '.' || $files == '..')
			continue;
			if($files = $fileimg){
				$test = '<img class="img2" src="/upload/test/'.time().'-'. basename($_FILES['userfile']['name']).'">';				
				$_POST['test'] = $test;
			}else {
				echo 'нет такого файла';
			}
		}
	}
}
if(isset($_POST['update']) && isset($_FILES['userfile'])) {
	 $tmpFile = $_FILES['userfile']['tmp_name'];
	 list($width, $height) = getimagesize($tmpFile);
	if ($width == null && $height == null) {
		//header("Location: index.php");
		return;
  } 
  if ($width >= 105 && $height >= 189) {
		$image = new Imagick($tmpFile);
		$image->thumbnailImage(105, 189);
		$image->writeImage($uploadfile);
	} else {
	move_uploaded_file($tmpFile, $uploadfile);
	}	
	$fileimg = time().'-'. basename($_FILES['userfile']['name']);
	$files = [];
	if($dirfile = opendir($uploaddir)) {
		while( false !== ($files = readdir($dirfile))) {
			if( $files == '.' || $files == '..')
			continue;
			if($files = $fileimg) {
				$test = '<img  class="img2" src="/upload/test/'.time().'-'. basename($_FILES['userfile']['name']).'">';				
				$_POST['test'] = $test;
			}else {
				echo 'нет такого файла';
			}
		}
	}
}

if(isset($_POST['red']) && isset($_POST['del'])){
	$del = implode(',',$_POST['del']);	
	$_SESSION['reds2'] = 'red2';	
}	
if(isset($_POST['adds'])) {
	$_SESSION['adds'] = $add;	
}
if(isset($_POST['add'])){
	if(!empty($_POST['name']) && !empty($_POST['memory']) && !empty($_POST['wwlan'])){
		$_SESSION['adds'] = $adds;
		unset($_SESSION['eror']);		
		mysqli_query($db,"INSERT INTO `tovar` (`name`, `memory`, `wlan`, `img`) 
        VALUES ('".$_POST['name']."','".$_POST['memory']."','".$_POST['wwlan']."','".$_POST['test']."')");
		$_SESSION['info'] ='<p class="eror"> Товар добавлен</p>';		
	}
	else {
		$_SESSION['eror'] = '<p class="eror">Вы ничего не добавили</p>';
	}
}
if(isset($_POST['delete'])) {
	$del = implode(',',$_POST['del']);
	mysqli_query($db,"DELETE FROM `tovar` WHERE `id` IN(".$del.")");
	$_SESSION['info'] ='<p class="eror">Товар удален</p>';
}
if(isset($_POST['update'])){
	if(!empty($_POST['name']) && !empty($_POST['memory']) && !empty($_POST['wwlan'])){
		$_SESSION['adds'] = $adds;
		unset($_SESSION['eror']);
		$del = implode(',',$_POST['del']);
		mysqli_query($db,"UPDATE `tovar` SET
			`name`='".$_POST['name']."',
			`memory`='".$_POST['memory']."',
			`wlan`='".$_POST['wwlan']."',
			`img`='".$_POST['test']."'
			WHERE `id` = ".$_SESSION['id']."");
		$_SESSION['info'] ='<p class="eror">Товар изменился</p>';
		unset($_SESSION['reds2']);
	}
	else {
		$_SESSION['eror'] = '<p class="eror">Вы ничего не добавили</p>';
	}	
}
if(isset($_SESSION['info'])) {
	$info = $_SESSION['info'];
	unset($_SESSION['info']);
}


?>