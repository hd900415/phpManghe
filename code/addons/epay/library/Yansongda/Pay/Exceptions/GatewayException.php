<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('03DDAD194756B01AAAQAAAAXAAAABGgAAACABAAAAAAAAAD/slQVTQ9Y1bzfloP/c0wREIlbU8etnxLWgekdhsWCvkXcJiQw2vTyGo67JcQbGECuMAqdC/wx9zRE9Wu3YXqVMBMWdg/ARzps53M2qEq08GMrXJGzsVSWzuipqOuD8Eq52DNoY9NS6URIAAAAmAIAACQ+aXvEs1eb6SyJsos9i7rRajo7CaWuJA8HRs0T+9ku2JY8UYcb4Dl5NRaxRR/PBd0vM7wlrbXH2lHkrmINLskO+zk/FxyZ+f0X1EF+RM3jwBncdqmA4IdNwTQO7pPH4+CI+ev/I+SbxKVOB16QkOXjOsyDK8kc2W8ThDEIHdnyjfEFyNJsW32AaBzkDOXnivSr+YieHtBub1sjAKpQCyU+Q+bB9MbE7ROzIiis69gOYW5m8YArNrfvuA4TEJ6yymkX48eZnnBMp+y9YhQQHwLLjt0PWZ63jbLm9REr5xlQuDQRV1aMpYBKBqFqDl+HaOpStI7rZvv4p74MvGr+UOsewNFLSfo0ewHs4oVt15rv4CMO+7vLk/73rGWEmXjyaaf26u+TDRNxX2vHJgIMyspje5Jpg/j0am6+vcyiKLpAjasnlH0HLTVfYjllhxUacVkvi0Ap61AjH4lu/sHBxiONLd5QAOvyIKAK5TqeJSVKyO+2JmazcDrDRz/XOi41111IZs6SoDLnBXiMhmlOdzzFvaHV1cPO6W3FmGXJOf/1KrlMk+KntjjDY/zMkNptRQG7TMz6HSE10Pd+kprUNxFnhQ3RJWyCOaM68wMCOMiekSYEg4pumIgzu6qh5L87EUJuxgdbzmDLWfZMe7gjqfanpOOQGg8SaHPQj4NZ3P9bdML/LSJEywuh/sA4ViLEPZqw/WKOJoC/x7lQAqoAuYqtBydgRuKl8xYYEG6jWa8cneR/LvnjMX/a+LGirEZGE3Mq8L9Cl7bwiEjWjXXRMDUqyONKJ6A+ONs1NuD/9e3CHjtpf6Gb2xKOXPeHw8zvzwxB3walmqrr4oyLykSYcSPlH6yRwHCGUrgkVhnrjP9QOIP+9vte8lIAAAAA');