<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('03DDAD194756B01AAAQAAAAXAAAABGgAAACABAAAAAAAAAD/ptVQByXlTdKLYazWhVnezUgHjP6roCpAG4AryFaMlw3eM32VhLEby89Cu3LD2IjooK+tmRcbsmoThgrnNik38NVGMCzqoHOVgb3WnhMy6WjpyO2Hn/QYBY6YZo3GxE3sVEXihBpqCSpIAAAAiAIAAIQorjk4IF2XS4F3dnFL2oB42aylP9jpd8sW2NBYSmdSkMmtZnUpDeMTJ17ZALBN5CskkLJa7gmaXeU3xF8woajlVfECtBFk4Cpnhkm3Iw+8VfF6jvd30KfndZUZQifzonrNm/Tm1iocz8coa7u58RfI24RnAv8ZPaW8uZggBLJ6xq5NW2xfUXifDuYAhvJ5BCm9Q6iPjfzwMhUVmPX/ZevtQa2itUtrU4/1IF/PKeHT22NSx0XA+husYzBw7hcdHZtjGVmfur1KpXpB1UGP67IJmvW0J28VVI9X6TY0zgp9wuqkSzMPE25z1gbRJ2gMtXjWy+px57k29lhO2RwlJQw+qGTDSoWz6jui1uME9Ke9l7NBuGIok0rCn4RfBlwP6PdtFgJ4E14fZAPDTdHvN+jmI5EZ/oqqEoAKBIzrcYMGkpbq4vR6+yX7neZ98UDgY75F0cs/9ZlF9BxDDgz62U3TA0JIymWmVO0rsT9FQZ88+d8hVkZEK5292HcQo4iq1YiOX4SBgHGXI3flfgnMMWu1W/pmYRxE+5HDRGTLkk93+hBOAqN6BlvgfAvoLml0d9pAfJJNXxJRn5gbAjhv8B1GLzkw1LXPN1EdQwm+FQg3yio1EYfwmqtQOs+YLenrMG87KxiQrNpAjUc2+NdjvV/Uts4Z9FU0Y6zVGjsFIPHisiOK5qyS2BPb5AHj9EqcN0Vkmhk9yBqT1knm52VXlI7a7LOQ5O+TacwqNJZDeg3bBoOdENBXw45HnSZnMIKY0B8l60ckcdl0yEl6cRSD4Hv/ytpvbVOlen09Drs6phyZ/fqHSsTrEzpL/rJW7OMq3xAnda+mYwx/2QELNj2pGjdOCuquTGUx3AAAAAA=');