<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');