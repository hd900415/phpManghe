<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');