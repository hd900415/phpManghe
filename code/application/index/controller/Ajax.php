<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
