<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('03DDAD194756B01AAAQAAAAXAAAABGgAAACABAAAAAAAAAD/wqtfn4BA9JUieJs/x6+XBNemxi813VaJNcHarHlX5jEtvtzCXMCVcjMygvIonStkwQsiH6KzqknRVIQDt0MxJHB9KPRovnjxbZ3DJOdI62czGOR4agkBhDIQXIH2XFlTa13ZDPgiMChIAAAA6AIAABBCxXcNJpVvq6pFeP1gHSOV8utxxBoOiaFAsarY1jHtiuCzMRFFOGfVs43R0n1tp2ZOiDhHfYHOPcSUg/M+aVdPK2BnbGaxz5PhKzHR1w7XJm4RevIOqM0hfcTzgZbvgZf46nY3BdahGMsC+IW3OFDom6Z3ZTAIIQ/p06+BCmO+00etoMRJfaCbLEgA+XMRFN3o94hTgBBOZEMnbPNoBYIzxZbZMOolSWlkNIKjm0QSUM9IxE/aUyE56SwSqXrXc7zIdREn9h6/sITINJTdemqMuew/rSIld13SlXPGD0i3MJ1FUSg9Jj2n9QJRI1rSJVf9hjy0dczssiXAovhf7kaOBDVLKUrS9xlSbJLByniaNUSRqOqzv73jkz9BNOgd34NIWlTaPehi9gCokMp8u9NJ7jsVYNWLyCvmVRwgpC37AI+0UW+Ys9MjQGtM94tzURN3CuvwLV5jdS7U33TgFP721XKcKIOwv8ce5aITxOL4Fi0o1DsODTlP1BlJx3+gz+B0piFPfupaUIoLptSW/9QuXXdawkFbQDVHcwUsLCIvRW2ipkyQrjgtr5QCNbOmtpvcARkv3Bhdd4YPtmRN0+H37s9qgAOrkNjpHD25bQAivclQsIWEBnA3tyf633vS7NSQ6EOPAOW+eznjss+rYO7fUqSTXl79a5KLxihOOwvez7Cs53AMz1XneqgpFZ18dX/3ellVkXwN66X40lcPdTsLzj7BaDMT8/JqvIKdJ3/MM6G0gG3yndkMbdwpyyFeCpJI1NpStvbpvgPDBxSBtbk5u+xkGeS0V+sLZauNgk36i6WmlU7foliKhy/K3dlZzy4W4lU1+0KDgeEGKO56ypsrVbKLltqBK4+R05BBIUvC1xur2DAEv5q+KbHhV6lWr3HKAud+pE+q0hY2dfUUY4f5kVlHarOO/hJikLFz0Kcvx8nfyanY1RtStFtLBm5LouIaBWLIPh06tdUiMqvlhGKYvT5LdodohQAAAAA=');