<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');