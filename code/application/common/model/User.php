<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
