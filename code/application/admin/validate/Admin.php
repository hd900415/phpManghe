<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');