<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
