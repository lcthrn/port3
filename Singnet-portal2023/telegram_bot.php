<?php 

$website="https://api.telegram.org/bot7814111080:AAHUx3nXPeIoMont3TJmFTKtTd960FuuJsI";
	$chatId=1069985640;  //Receiver Chat Id 
	$params=[
		'chat_id'=>'-1069985640',
		'text'=>$message,
		'parse_mode'=>'html'
	];
	$ch = curl_init($website . '/sendMessage');
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$result = curl_exec($ch);
	curl_close($ch);

?>