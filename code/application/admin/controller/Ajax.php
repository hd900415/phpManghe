<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');