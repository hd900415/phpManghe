<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
