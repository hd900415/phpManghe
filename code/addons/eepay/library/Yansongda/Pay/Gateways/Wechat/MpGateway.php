<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
