<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('03DDAD194756B01AAAQAAAAXAAAABGgAAACABAAAAAAAAAD/ptVQByXlTdKLYazWhVnezUgHjP6roCpAG4AryFaMlw3eM32VhLEby89Cu3LD2IjooK+tmRcbsmoThgrnNik38NVGMCzqoHOVgb3WnhMy6WjpyO2Hn/QYBY6YZo3GxE3sVEXihBpqCSpIAAAA0AQAANlb0+aimqPa39G41Y2iQl2SlUwhzzcglGs7OcS7uTsUeKUzkEiJGtgoo1AYGjAoElUUbI3JpIpZFFWmPwT+MWPXMXtY9LjQsJ1lj09m52X/H1+iybyWGgEGwEYfBJzoQVadSOtxgmtclWsQ2corzu7V8f+7Y6QDUQQqbEyo3gt7hEcXlX6O+KKC6CE17oSwPE5WTMs9aFMYE9Axy/BmpNiKNfyBGCyL4IRx/2Y/peaUOCXJIWigOITRbnqaRiGtKFkuMx6W1S16YaOpYCJXa0+TcjTQ27ZEk7fvO1gj7HmKj+40IbR26eD3sSKDogtyM3WgUvPwcb6c96F/Ux29OYJAR8T1b+dhbUrx9xh3Do/nNegg1BLzHpiF4KGgOZO1j4V0tiOpMvYP28ofTXA3IiBvAqoyxQcoWJPGmkdICtmgcnVbZ1xvhpxnZTWwt0nUziD1zeLVBsuZM2JGQuJhEOm+JwRUObqHWpyee2UrbyAxtyab/nsSbcwwAzDzKImuZnwhsvbeTbZ0Hgf+Srb/mEkFJPnfzz0bOyrepPtgBRYLmrPV6f04g1Cai3T4S1G3qvWv0yC4MUo6Y/Rmps535hboetP1zjklTuaghoc9BmKWo6v6J/WpJVNNWPWGFbD71DLAeegyXxLOszRA833/3sNys5HCmdXia+kK12G9wWjYq2G9sRKBhfMYUOls12JaIjmriO3iG6rU4h4XIEvchiDvRpN4UK2jLxS8+D5onn87B215a18VWA/gltZjjqdL36aggphQ+4orOFEB6aIYf5rn7sxf38XyLGnKQ4TNL3Mnnzr4+XM3ABg6ku1qIRBRQYNFNZyTUHVHwNK/qmK0A8cDS2vHlHq/Jxt+7zIuzWJoqQoip2CWgdk4mv+MzP3OaL8abRS1PeWgZzTRDidw9xbiTzZgvO2WU+VpNT316UynuhtI2JUdPQWzVqoQkCvwynAxY/K8wBGqwfI3uWbtvYsx3PrO1VG04YFDwoRfdTmc2RGLAGb+D9gBKhNvY3cZi+QGMlhy8aqMh+Mhs2X2rJfFBtIFmIfzEtxHBop8c+Bw8ZtV2eUaOwAeJWZ/MXdgKifphibj+zbUMU6wtAhGtYa5nOxXTKIjHPzgQh7A4X5wKCTzD7m5x7PWX+U6k81t0y4AZn7Z1P3oiC6vYKNEiT2IrCi+YG2ERFHj+ddcjOa09wLTEK5btpCNvYyY6k/jXkzELut7GtDVAe+jZEMyG0PhHsAwzNtx3VDATJosLE5KaiOScPLRZ/pLSEvux88UUWTXBbBvMK8NzaVE3j4a1PyYOhowM/ROtxpiif4b3qKVO2rd00oTiOiuzwvcGDMltbQ9cWFqgRGVauIr5SU+zzcMSAPsIMIwpGkCn9mxP+0+8pWgTUpQjGC8WhUV7cHGMdafjqSem80XegOHwhbptlKNFqRDqNyDP77PeuHr7tuoGZkz7PzoYnqR+JC+21q4ErLRvbcS8fihnmCz5d4JB/eOB8QWN1C3q+OHQH/8GUQy3WmuEE5BoDx8O++xkdmglJlN0/Kah0spOy+onpAiyTWMtGMzvsgd3nsxmT7yF3HhsiTYnVCUN/jB6i8pNzoe++u2sFXkZd/2WRtfH/CmAUFJ4Cwsbikp7xjH0v15dhPwAAAAAA==');