<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');