<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');