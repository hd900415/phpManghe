<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');