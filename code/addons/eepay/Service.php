<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
