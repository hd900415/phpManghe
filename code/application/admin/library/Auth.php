<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
