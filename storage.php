<?php
 // demo purpose. It's insecure for production env (handling file name)

// should end with slash
$storageFolder="storage/";
$prefix="mindmaps.document.";

$fileMatch="([^\w\d\-[\.])";

if ($_SERVER['REQUEST_METHOD']=="GET") {
	if (!isset($_GET['keyName'])) { // return all documents
	 $content=[];
	 if ($handle = opendir($storageFolder)) {
		while (false !== ($file = readdir($handle))) {
			if (is_file("$storageFolder$file") && strpos($file,$prefix)=== 0) { 
				$contents[]=file_get_contents("$storageFolder$file");
			}
		}
		closedir($handle);
	 }
	 echo '{"documents":['.join(',',$contents).']}';
   } else {
		$file=preg_replace($fileMatch, '', $_GET['keyName']);
		if (is_file("$storageFolder$file"))
			echo file_get_contents("$storageFolder$file");
   }
} elseif ($_SERVER['REQUEST_METHOD']=="POST") {
	if (isset($_POST['keyName']) && isset($_POST['data'])) { // save or update document
		$file=preg_replace($fileMatch, '', $_POST['keyName']);
		echo file_put_contents($storageFolder.$file,$_POST['data']);
	}
} elseif ($_SERVER['REQUEST_METHOD']=="DELETE") {
	parse_str(file_get_contents('php://input'), $params);
	if (isset($params['keyName'])) {
		$file=preg_replace($fileMatch, '', $params['keyName']);
		if (is_file("$storageFolder$file"))
			echo unlink("$storageFolder$file");
	}
}

