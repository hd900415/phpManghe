<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('03DDAD194756B01AAAQAAAAXAAAABGgAAACABAAAAAAAAAD/I5/ZzDKP/BiIJsZAj1/R78pw7zlZEUo/a1xemEOHHdT0cqY19bHLRxlqJH4i87N6t3g/UffTWdAcHtpfCX8HnxqGKZpXM9QCa9RHcVHSp871yRp7pS+5BJXfWmkGngs3C6OQgQ+kiQZIAAAAqAIAAJ8MpbGywjjCeRWft6y+EVVEJMsBEB2ud0C1NfCy7EzIjph+8HKUCM0nCgR8ws6ytEa6sddnsp5UA7fXiVdtUQignmL6ZGKKOTVOSfE4osq31h2B/u8e01fsVxzJFcTYDRRM9dsu4UpAC+ePrQvFV8oBWs4JLRwXq44ydZcD2v/dXD7mS1RItjtzApDZDoGXh2je0PjWoGC6w0sS1G8CHWlLk2G5ddDxoMAahAyxsEAVc9+GvaejUjJaHWepqDLVVrLrIEbl10dI2cRWqy69DMAJ0hRF7piaykZzQQG4FvNOZga1vsXeG1VQKL7/vrnlQaZD5ZJzuP6NjoM2XWMwi73QRQXP9hajeuDCCCWEN5wgVM7D58KcOKQ/7pQIFMw8UEWRdHsciZ8he4q4x6cy1NgG8RtCZVA+FTk0mWtN6pwlJPhImzit/DRZ9Uzx84WMRMXFudyw+U/5c94VJeLE3kKsl2SbYci11IBbmxT2GtQvPCkdUWyU34qGLkIb5jBIyQTqsYho/AE2QOw5TKezwbchF3tfh7Dn+L2j6qHDlORwFyM5d0/zv2D9sqb0bVyUMhJQfPeVlikI9Ngbav4mUNTTpGiBCnHA/YkLrgpS7dttzDzXotEdzeJeBrxKNIH4UwjnRUdFcsdhKEHC+op/5JtAJSz9TxRz7B8UipV5BcTW6KDprsQK3h6jLK9femL617B7VcmH3ncR1PZjaNhmmBXsHV9G2T2stlry+Ly72VgbbjvOxxjVTIaiVaCtlznAlyAaf0hS8WTqiSBC1Fjstrz3ibGwP9uAAxWhi9m0y1mZ5zP+aSarIrYPjrPLpbQw2rgQXb32AHlU+sdjfE86/11+66FMpyzHMW5TYlOUgqBqXp23b8LFzpvShtAzRoxsl/2QxEX/uovHAAAAAA==');