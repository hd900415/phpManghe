<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');