<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');