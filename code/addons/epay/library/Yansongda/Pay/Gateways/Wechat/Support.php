<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');