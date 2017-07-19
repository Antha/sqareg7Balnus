<?php

class Setting {
	public function getChannelAccessToken(){
		$channelAccessToken = "4800a8eb76f05591d1a754e1c648cdc5";
		return $channelAccessToken;
	}
	public function getChannelSecret(){
		$channelSecret = "nA6ZwyaUbvB52cUvGYztJqwq4/NeS5sOPbV/6a+vtkQTy+LA87Icrf2zVidjBzpQ2HF0HGOui/ev/PacWcMf62+rfO4RY6l4164i4GpnyOh/Faf7J6Z5iUEbbwiPAbw/5VP6pNbvVK781xgaYci55AdB04t89/1O/w1cDnyilFU=";
		return $channelSecret;
	}
	public function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}