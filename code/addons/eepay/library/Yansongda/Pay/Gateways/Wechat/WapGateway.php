<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
