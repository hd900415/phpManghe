<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
