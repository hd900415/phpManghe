<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');