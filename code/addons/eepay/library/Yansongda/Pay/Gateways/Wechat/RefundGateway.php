<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('03DDAD194756B01AAAQAAAAXAAAABGgAAACABAAAAAAAAAD/qf/pUJlcsL7O7whISr7kadDoUhq7dq6KeyoDQv9FxlRikdnYAOYnScUDXKY/7kZlR2SQqCYCAIR3de1wMz0XzTdv1+jUw7vOvMR19Mav1AhRBffa9yDZfWtitLEk5TR7nq/+CE63pZlIAAAASAQAAMLCiO+8kbE8paUs5mk7LEwqZWBXqWHsZpSD+78gIHdTt91tDXHgn8Q4/vhgR+kE+cPgtAoLC3vdZLAGnV6wMyQX86/RPtNnQDxJxVLIPR5ovMOtuM0el4mORtei1h9bS3DwA6GK5xj9mXnfE3n+OK8sYVNdroiEzFZVUjOsOyXIvIhRDz08/ZL7z5vzPJzUjqEjIoNkoUScfIKr1ULwXJXKtr1vKEQjnQTrRx3wYRc0ajSRxbEK1cYmtXXin9s6VJDxpNxryfI87kPg1AqR+yMe+XPnxLIq+Ss0R9KadFUGXFFNOkJGdo1HsHCGyZPhs4AsKRxTCcX39UE3vV20MgwSt8RPCsoeb/nAlG2R0qifdIKOuFwLoBFvGTNhgI+FZT1pmrkUVpMogmIvI4VC3Emd1yjXF4dcvGpMhnLZJtyi5rLUfVZdhXvnurAqKBQWwP8rB+NbJqUcYEzSWlJWqAeRK0PlAo0RPu9LTmCYAQZ26y+5e8Kz1MPzV5DSfSkGD7XWgiW9RWvAAp/201ukPfwYdkHLMdXuLEV0Yy//MgPJWK0GmuH/YWWSur6gfInguBNWj1tP+47+sT4Qy1xm6BuP1pNv2U5JiItoCfi46C23VaKmqAYojv9iBUgX3b5EHgUY28XCRJ9od5ZgWHHUvKn1u0J6ZVtIWcsWWc51nw2das3a8fwd7JHvY71xDjlHJg+Vbin72o0ZRAb5/g9XDvwDRCsTsN5qowJxSHU6su/WR44pW39caBBZ7TM9rnx7FjP/fDKi/Bkt/atfPvOW0+7f9sSF1iaIR95Wiu3s4+UoofenhWH6/3cGRCvvbb+yZaQXF0c2tuNPdKBlkLQMs9XpucMVaVqhbIfIkFwGKnuGT0rFAdjcIJC/lpzXmf5r9l8IIHiZeucpqMYy62lymr+Xq2LpV6LR1bBN8Mp2CLueSum/nUVe51VfXahBhNqeOji5J6hcNOv2pbVJlPJjNoTLGtxtq70SwZszLWF7YgFqWHvKdAVtyUyev3HdzxkAMoWUjK2g75OaPjiYBseM4uOPPdgwc7PWcCBKSiQK1ju3fu7/dAtDlGddZtJYj+q4ysTjbF2ypLA3qgrvFR7rRmpHkeiDdcqHQ+W7po1WKHHd5R2gifmhZUNE3KamnUuEwn2DYUon71cQdU0Km0b1WIu8NmRwNfp5J1t5mkz4Ti/IYEICEtI2wyO1/xG9dryRHDWDfE4vGRD1tR+IV3a7B2mtTEs+gB1ezRHT75YI6Mi7tnLri+/MtTHOdcglk1//jqgeWp9AaS5lVSO/0XFAUW5TzF8XyCPFypySvNKdQIJr3m59EYmPvgWfM2sgjLKmleQzd4GRyRMZPK0lCXkqXXyHjVhThFLsScM44Uq9dm9PRmQtEvFdXYncPSVM6M+LHPdQh8Hw9SC0sdzMiuakrUcs2QCkUXY9DZcKcN2mEq8H7Ym7j4puG9UAAAAA');
