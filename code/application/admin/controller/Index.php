<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');