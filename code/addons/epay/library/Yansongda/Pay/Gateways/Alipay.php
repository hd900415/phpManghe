<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');