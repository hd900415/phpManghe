<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
