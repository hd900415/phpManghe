<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');