<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
