<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');