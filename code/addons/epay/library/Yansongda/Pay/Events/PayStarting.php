<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('03DDAD194756B01AAAQAAAAXAAAABGgAAACABAAAAAAAAAD/ptVQByXlTdKLYazWhVnezUgHjP6roCpAG4AryFaMlw3eM32VhLEby89Cu3LD2IjooK+tmRcbsmoThgrnNik38NVGMCzqoHOVgb3WnhMy6WjpyO2Hn/QYBY6YZo3GxE3sVEXihBpqCSpIAAAAeAIAAODLM9Aq/SUGTMbRHZ2AV8KHDxzAweii7wqf2Md23bHtsdUyWuYFKjVfiqbo9X5Dh7nGxiYTmr+n8zc0JyIgfpXvLQo/S8a+w4l+iX9C1XXKLMfP1RHtpmUeGtO66MXTdfbqSEcakpAZ1nL8h8YYVusQlzvXSYFFwAuUqVGcp8+bF7xRhrfz5sYKhsQopa2ChVITU6QfxJRpUr/60mtwUz9bcxku8dpJHerOfGTTuz2Xkf7IOc1olzBOBUUjp0HWeN1bA9iowSopiqMddJiWQwcUeDNmMM/kM8LOe1UZQwNDrl55gufUJF18SujcTU0XYcUipNWrAStKVyFBS4VDt1fSoaSQQIC9ROPNPURFtcit+dml/7A7RRaS3EuB1A2G7HaYiuOo8lat2aqrnrzLg+9FKG8KZpAwridqpNYw3B8zd+0OJK4I2Te4G1A+tqNwQ7V91FR0XRubvEBvi5KYlbEO2ucR2KYgOMNbvXaAyl43eDZwQxn9unWqrtr8IYm1VLWE9FVoN8CHtcdgF/4gdzhiGh66FkLik6yDm4BYu3Yac3QQupSFsVeZ6QOV/Led9X0IJY83zEk/bpNNhkMbigchHo8FlVyz02U15Jozw/DpQWKD0ZST7hBPzeokvRzNIqgNQgISm/Xm2CUGTw67grYRSxmkByFZ/UJ+U69ky210eJ18n8cjggdCWFWGoq2Jg9T8QS2rCZjQJJjdP2/9I6a4u3lXyHocbP0LP7CM2oeFKLpYIO/A7L4qmgWe5JoXUkBhPsKb4iR7bDh6BJ+p/CuZb50TXkTDIExz/jCOVV8JTTv9Ca0K6PgfaumhGXKh5d9XdvWZrkoVAAAAAA==');