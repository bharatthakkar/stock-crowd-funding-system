<?php


//将语言包载入JS
class LangAction extends BaseAction{
	public function js(){
		$str = "var LANG = {";
		foreach($this->lang_pack as $k=>$lang)
		{
			$str .= "\"".$k."\":\"".$lang."\",";
		}
		$str = substr($str,0,-1);
		$str .="};";
		header("Content-Type: text/javascript");
		echo $str;
	}
}
?>