<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
