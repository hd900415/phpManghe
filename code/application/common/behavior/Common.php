<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');