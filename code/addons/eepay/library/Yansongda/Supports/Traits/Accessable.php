<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
