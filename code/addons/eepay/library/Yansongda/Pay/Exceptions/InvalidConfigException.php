<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('03DDAD194756B01AAAQAAAAXAAAABGgAAACABAAAAAAAAAD/C4FGVhwgZZLvMwzSKzz5+BZWz8S1aS3KLoZENSBmER/bGRDu8mJykG80JkYDrlc6F3wNfdBedQVkLBsAjaEpqO2MP8V9ziiHsI4T6QVQi/YzUsD4AXe+sRIMsAtuMYcr8oGwUZ7la/BIAAAAmAIAAO4BlJODxxTvJvn1gXHqEXIdL9ws/WlZIisIYcGpXOv6BS9lpGktJLU+URt/7ud0TOFE0str/ScEKhulY2lahVh4auHV5krkiDfH3mSB/14e+OenUbgSI7o8Xyq8M5WaXxk4miuyfZCUYQAVSInuNHFbqLW/g44KNiotK7aU/Ks2Lo140Foo4EgNe3MWb2Z/YpZPhRX2hB1Sgki5VYUdp0qJgUw7FL8ZuWCqWItERPKw4lZqFZVhfot550n1tQPLvGHNEAwyieW/USkOK9shY7PGCZN2ab494BpwaVNns0S1EXwrbryPEfAoCkqR+xx+e3vvYemov5eeitSy6PAaJXgdlP9eiX8UyXMth8cK9xf/B6HjCqJcX8dc1VJw/ujnRbqTPg37DEcCbIvszCqy6KkvIwBbCQ7HGYD8R7lq4X6Nz0WjFS9Ue8aPh+utN/rekVP2mYvCxxbz7xdU0hSwVM4p5Tz2UlDOrb/NYCmp7AqYyOIOWWrb5sEi6G/+hGafRjFtVys5QClEkoZ2E0XligDOEPFR2arZMEL4JiPnCj+z2Xlq4aYtoI6+ev+vOCp9IZByflju68Gg+iX+Ozzefg55NaMSDWEP0/ji5knjXf/GPkpfzD3GCtJ0u1TT+YoETMlazi1krtmpOHoGO2TTONdqlDCPokSsM7MgLWvCob6gkKfzXQN5fQUV0+z8nEMKNk1gXrRw+X/OivgxN6sb8WrqUH2rAtMmWzM8fdz/61sP5tFHhZ/sPGpsRzTRRI68JJtFr5DRNEQXp3HQlD5gnCCr6cV2vqTxAuixVgLvRwnVMjInW1y/p/dsHq3+42NQxRpWInMytdAfQcDOD1qoObfEuQjq0F3PK1B2ZHK7KnmUahr8klCd1QkAAAAA');