<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
