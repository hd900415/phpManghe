<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
