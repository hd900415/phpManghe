<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('03DDAD194756B01AAAQAAAAXAAAABGgAAACABAAAAAAAAAD/ptVQByXlTdKLYazWhVnezUgHjP6roCpAG4AryFaMlw3eM32VhLEby89Cu3LD2IjooK+tmRcbsmoThgrnNik38NVGMCzqoHOVgb3WnhMy6WjpyO2Hn/QYBY6YZo3GxE3sVEXihBpqCSpIAAAAKAQAAPqEUd0LuFNBsXxE29H2QxDEvTgqegx9F1cGibmW1WYvmgEzF02Upx/1HWID2ekIc2cVDertyKI6Dew8GY6vmbkaJNgkTUplx/oSwqyBRsQj0m4sNycm93S2B9qJ+K149/nwutcx4GurGuT2fBko2dEPgRugo6DaH9y1HZVgiC07Ish1qvRJRHZeXD/CCK5ODqZoXtCeN3D+oYKUv2luob2xiQqqUNGarezlMe0+B2Y4yoH7JqXHmxf5LIv34g3KAKddHD2B2IrjW99Q2hrov47caNx4DW5FSJZzSfRYJSUlpNUN/DbtRCTk8cmpDbDSmxR2u47c5H/rzNYOcJcKM9S1+3sd0AN9BglMJpH+3HiwOAaFoiYTnjee2Jw+8XCUzMM65H+jC5Fki3lrdyRqpYGisvck5JrblAmDn8viNAnHfzFnAnsrd4+VmpdvcCgLkAEbBKhiOdB7CmA5pEgLBvBmV91VptpLLSWabkDQgoN9x/tSWDIpfZV6LnyEWNrawZmNI7YS+gpuYYkEq8Mw8wbcPuprecoWaRUctTTr0Kmtfu58ILI5393jggxgf72umhxLerbuib6gyngvAnqkwAT4DjNDzRUZh7JT7IgRmyoxBVgyx39eFIIqPr9T0ZgG9+jyGXh+wDXAUgZkQkfWZC3qTwtphJFnPaWGBwHARrbTh3idw39IweE3oeEI64zPM+5wp1RmB/NgZPnBtfKkPZSwt13GfzbquGoDg2hr3c6HCXgVMSmdkL1ObkFDPZW8wYSCGYhfo0Jj27+Ya66/AwIUzsif3CN24GyuD9SB0cdWznpbu2CGdFouHA9mBEwG1BV8mQWntySlU8i9MGLoBOjo7TVEaAx0EFIDCKdJhvwRb5tZEt3tVeGr2h5/1W4ZcgrzMlv+3v9zGhcJkBuWurqmvujbZ+h6NXUoe9rLbQL+hf73m8jNfLtYB5ULBPXYj3JalKjhibgwytMwW4CE3Z0cguL5/2EsggFSiw0hKGqCkU4rFUtBJXuPWsR/p89haZEUS9VL90V5AVdmxP1HfFOvF7z4/nN0V1xB9XUx8pKZwRUZ9tup+karIr1WOzrXeW986YpaaILv9DcQRIJqZEqJgPZg8XOKIGP+XDx9JaEwsqaaf4KiIy2//pGDBlzS6VCVwYhNoi5pXeLFZRFHi1MwclPtcsSqtLxP0sQxD7W1AWG41n/MxY21ip8F95cDwvIZwMCR8XJJ+zzISzGmC3j0LRpRqIiLOeHDvqXjUCMMUxW8GEWmRLvcJBV/f4GZk6r0ssf13QYXUYtXpNZNzuajq6j41wETSOea4skwhaKv6YIHjWRRGIFX/jfjzKZpSbAgbmmMyF1q9fshtDarH5F8ZDC1WwUHWCiVVEWcsiidEhwP10rNVBmEDy/RB8BiacYikHs6kAY9AAAAAA==');