<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
