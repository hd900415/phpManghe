<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
