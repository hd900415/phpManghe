<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('03DDAD194756B01AAAQAAAAXAAAABGgAAACABAAAAAAAAAD/ptVQByXlTdKLYazWhVnezUgHjP6roCpAG4AryFaMlw3eM32VhLEby89Cu3LD2IjooK+tmRcbsmoThgrnNik38NVGMCzqoHOVgb3WnhMy6WjpyO2Hn/QYBY6YZo3GxE3sVEXihBpqCSpIAAAAyAIAAHWwUwmCYukdfpu9ssZkxKPVw7K3u3lXp6ge2p21QKDW28TTtYWxcklROnPlPYfM0+SwE8y3Qktp9Cr0UvXnRceAAF4irF35q5sDkLaGD710+AKZgpLdj8ZsqQkY9MTZZCB0bknlYp9c4JjjXh+EfTqFuaNaEEIO5+pQ56FZnz9HOPSrOP3tWphXRk0lmoviAvXqsev+l6/zOauE7TnjOqdrV+EE05V5Whvp4MeLmAvRPYjfnlKDWYMJ+sSxjOq8RVpGr6zNI7nrrwkjb8BvM3AldeEi7zfUo34u66vby8NOau9Bg3v4AISPiV9TuQM0S9Jj0V5+aPgr3IhJWTHdIBiCu7Ll2DI3bI2ZJuGDWfoq5DJGfXiJsKIeGQshneivWnqqzH/kUbrIsWND3zew8Hu1y3CFsgjHxZxc6A5L/EBCzUjhDJvLXkxaZLQ4mretujxW9NYT8vpzBfBWcLEmly4UA7klPFBMrj9z9wq8eaeGDeF9dTNfEKpb666+yzp+feDZiwEjqWNtzNmTkHvtbiaVxn69WjRJb2AX3VGK4p/xc1b+pC1F93t5UJ2ZahOGNxZJovNZOclGapo+wcJCBCFOkqlHCiLmq67INzL0d8T5jy4lz7EJfFmjuYc8lkrmiLMfctjWsO2O1+A6qCD9xntrs+V31kb3EHOdu2ZJOzGtJX1R4pL7MhIez0pb/nF6zr4yUwNKJP7slqa2Gvfryyor0BZTi1oQuZmaec3KFG+famv/YWjN8zfUrufgkDQNVR+Mzr6P+gNWGGMpPgfuQ+MbiIqrH//ra20bNWxm4M10KzQyB6LevAguDDJlReD9yqWpe3BeiEwr3VrfgK81/IdDoggem1PNYi5qcYIWQ/VFjF83/3nmTH+MjGcrJTUoLDFpRy1tB/p6sN7xFn8ZxvlNHB0gWHzwec0iC0cx6i4A9s8BY4rIJBkAAAAA');
