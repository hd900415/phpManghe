<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('03DDAD194756B01AAAQAAAAXAAAABGgAAACABAAAAAAAAAD/I5/ZzDKP/BiIJsZAj1/R78pw7zlZEUo/a1xemEOHHdT0cqY19bHLRxlqJH4i87N6t3g/UffTWdAcHtpfCX8HnxqGKZpXM9QCa9RHcVHSp871yRp7pS+5BJXfWmkGngs3C6OQgQ+kiQZIAAAA0AQAAMS1qaznjXOzY/Jr/P963zFCa7K6IGeKO9r9tPeoZ2jxMxZG1p6tXBUMmDEh5YgGNdWZ3aoM5Nau/aMM8QR3PijhM/Im0Mh9dps+NKg94cJGqCEbrfN/9SQ0FojRJirIO+3xvckFU5cBp2Xe5NDpplkzgu3CCWS0u0yGr+bksjZmJ7EEmYcJg8j6pP6Kzo8LnSpHiDuWIN/fQxqWy+kHAE9ni0sMjEFTXvCj8DkSNpE1xwsDOVoGfVdLnovw7PrJ9dcKvc4P6HKbOwBCwCEBilBVd3j/FSTaMFhqeIeVGtRbN/NNaj+K77J5C+HutryvgFTCysqq6M3x0EtdEhwWZ5jL+FQusGvfmFuAWhrhtGkPS0hCk9DAxe2miZJthRRhX2gezygzsFWAFrSnJOQCn/QXtsswgkNDHzNv9kb8koTtYzKTR4TTydsUwKV7V04GI1UhH4KCia0lCSAlne3hYQBVNf6VSqt2xyjn7CQO46ikRAzx1OTst68WJZkFS6CY6marITqy3jUWcst4E6SFon5MYdpum+pHfS9j0wkQ9dbgjxJEtU9Z+02m1ALaGA55LsK+bakrX2P41UfJN4oE3snGkMhEuvSy2fjUmQh8zJb2xA2kGncqMvoFwanSvnnofO1rsFDYBKQ0BRM0ATB9r/578hiyTaJs3Gn6tNys5Qoxq3lO8Zo1Jn8gFl1QFb4sQO7ny+prDbm3xT2j3F4DXPHJhgSBjhNK+Ucn60Ip8qNElubFWueGkgATW+TGL4eUj0dxYzBH2aToSY/7Gu168uI8QIWsP7Pfnp9KaNNVlcVt1gGq/zkJKKf3kJMiwvvad9Do3TFZV0g86Do2km0b23WCnIhzR9Sij7LDSqZo30hYpAKz/3EOoDVS1GQ/H1U8nn/izPOhXaq7U6vNuxp5WX1jK08ZYdUyXHGq683/9VLw0XUgPgNbtEEwhNWJv7xFngF6ue8ggRMurUXxmlOK2Hr/C4EA8p9NSXJTwUA0ngG4ToNO1lhOz73XNel9k/Z0KRV9rA6phqiTCPyRvuVne1F8A8aTSCj0Bh/tn7hfdfk2ssorZNvYxbOSJDRBvHh2DjQa/HXkl6OlvQWhszeae84rAqTKLsurs+97ZXY7W1YZ/PE35pr8yU2l94q1ZJSBn5DaUcCHWhAfWF5ar9A2wy8DhGfrrS7YnirqexMl4xYYNibneAAWtvBMp6v6TlM/F71qsujkTwLml9NqlFP96Lur+28rkQ4fUMtQpYCuA2eG6hfH/JY+Nkkxn6krhPcH2YmO4SKTJbRqYVmPQRSJVgDc3APgdmrTPf5IglzV0N9lWYYgqhqj7N7+ssIrmT196h7LCzav1jSOJbDIjBe4/z79maaiA4xoZJChUIL1s9uXBcez2h+ckseS2/gMRN5E4Eq0GI0CK++t08XXi/e/+uezEfAoB3JzLyW0dI+0ooF1JJEJAqBK5E6H6hUO+D1DHh7ZHQy5f554kSWlrbNUNrIVaKJnET4s6O72VHOrNMq56nDhM+1YnwLfz+6u4mmEQ02Md1IwV472pJAvoep4qy3mzAZymPOayqL3EQXxTYNASgae2+fAUv2rMcleEOYHIQ0tV0mi/CyRGRLByun3wUHEiMt1rCCUKKD4uRkL33L0AAAAAA==');
