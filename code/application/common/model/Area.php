<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');