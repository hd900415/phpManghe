<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
