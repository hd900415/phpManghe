<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');