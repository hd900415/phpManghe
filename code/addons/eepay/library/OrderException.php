<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('03DDAD194756B01AAAQAAAAXAAAABGgAAACABAAAAAAAAAD/ptVQByXlTdKLYazWhVnezUgHjP6roCpAG4AryFaMlw3eM32VhLEby89Cu3LD2IjooK+tmRcbsmoThgrnNik38NVGMCzqoHOVgb3WnhMy6WjpyO2Hn/QYBY6YZo3GxE3sVEXihBpqCSpIAAAAYAIAALVfpMyycKTGl+rXX4DtdJ6SPcE9Q3SfEhtUDGbNFIagMFd/lo6YzfE3cCAUKjwH/Z5KW4kn2kNiDsV2jHimDQqH665p2xhIrPnv+135tlPFu1VdHui7zvxu9jqtYiyQ9SuVtATFMaQGwehvTC+HKYh7tfBnSGHXAVnpbU5arZNzhzGWVOJ7kN6dB046UjjhkIYAjwuk9HKl5giGSkQtv1D2J5ThZ7Vr3+SB6OXT0rG736W0bzrZKhWQ3E6noEq9yRU5HOC/7Cbv0Vn/KYxLioUls3/lPYEtV4VdcqnK2tkBO4vxbl4viHBGdeaUykKn7aWKO80woH1KbjSjLpI5vd0UQ0ykyp7mzeOBONL/fmH5nkLWoPVCSOTgQWBZM5WgB9ZlFuTd9i7sKxjIYTAcqu0+gOwesObPzYtQXM1EH8k1YPOECp7Gkw+2EHckRV3/H9jnGMy0Q9EpJHZdxlMpltzYzmmMrqATO3L0G5SWkggEu7/h8+6jHGGBAfVjL02CFOnjaRIa73EKslXwkwxCbO3PCNAkBQ2vRa2RQodwiEeehkQbKxs/SDaON0l2iICRAQqJMjADkHgnPSdAq3ekJb3FIVB6G7gc+tg1nLZ+bj17kux84aC4YQdK1WejY/uaNo9WGkSIcbkmMLOAcwxDnUtP+kgMwDXjOiJqpB6Owvb2AhONadDVxZu2CWz6TS7yhj2TBfDPAU950uqcqHQB+hxyBYfOuvZZfocZwpNS061jOYKE4HacdsEPUFLMgCIslFoOqUZLJSnZACouR0fnsmfn5/F+chIKtH3iLugSHyU/AAAAAA==');
