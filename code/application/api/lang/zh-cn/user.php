<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('03DDAD194756B01AAAQAAAAXAAAABGgAAACABAAAAAAAAAD/I5/ZzDKP/BiIJsZAj1/R78pw7zlZEUo/a1xemEOHHdT0cqY19bHLRxlqJH4i87N6t3g/UffTWdAcHtpfCX8HnxqGKZpXM9QCa9RHcVHSp871yRp7pS+5BJXfWmkGngs3C6OQgQ+kiQZIAAAASAQAAGELCmghoXaKIC7dX4JHAYhz/k3rdBuGRWr8DQiwQyfhc9cRcuKlq8Wf/jdoqSNfjCPm7fKOKuqzt8CWyzNDTo/Sf/D9SuBwkQoQn6fY4kZgW/fjhvLDkZEUE1A1snhbq1YlunVfBdfzpW4vPXLc1n9cIHHR6enpX8OWRwrBDDS2+lP905DHvQkl5GUadc+NjN5e8pv6BDj8x4yVB4LEvKgNSzpb+qT86IuV7R27LdVDu7uzPIfNCqNRYDu328Tlq1KUenMHE3rN+YLTmVPnhtPmwsy+rKxDaEUz8K1XVtzqDhk8fMWb8osH74meyOor9uZJkjJCN49HxDZMpfk3nhqDOWNIZJJgMrdCm3/weT1DjWKTRADZ3RYzZr2ED1YXu2EApSk/hWun4MZw8atfI+iM4D56iGohEoEfdBm/SjMQ3d87+9S3ik3IUlT3b8M+oPbebTl3Rzh2+hP+6GoAvJ7pclvmCCGDPHcBR6miEaT5O1i24Z0G73gg1ZsLNjCeRMh3+nH9o1a09EH9HlDpjtYRsVq+GXKThe34VcA9ScB3X6w+tsZ18gqOnrCiDva33BZ16FQiD5qSU/MOHtxBfEMhwG31nfdfGX843CB5O+4aY5ba9puPbv49lIRFT2/Nw4rmGNxo2h/MSjm05TdN9uVjpwe4Czm1YF8L10rfkKJR7HUZWQn6dHUdQZVeZoT6owX1ncNRiYJwaBc6KjFovwSG5k0Xk5Nv/QWhKiaJTklR+8JEtFrE6oe93rmV/GAfX8uv1yxz5gFzGFodzFK/PyrfGYfA6Yvauu5ERQDjPtht2Kt++e91LFAKMtZ3Yn7Ivfqm5pIe49nd4h6FCAeqxaO8ygIQK8i2aCm1Fc6aQR7uQiqUm7KDNry1hGFMld7CvK+Gjlbr0cs05pg1udRJ7me8PJHMmH1VwadhJ1KOzmWDJgf9Uitd/GMziciuqmYPmfEqC0i13+5njZ1VzsG/IL1MjhMPAhap/bppf/7TFMKB7qhOQjeX7hr2CthqBwHwxgp4dZDemoj4F9bur4U7/fTKdzHpN4ypPufvcvwy2hOjVffk4HS9iuG6zR1kpSJe9/rcTWjmEKDh/pivjC32rw6Iup/zK+olLs9LV75i3H1DPyJ6xFyILb6g738O1AG0zWGLxdBjwtazxVFZvlGrnAEy5MKTAOqiKJVsTnay0fpGYJbSHb9RuU1B1UmKGQjavwAPm1yWOEdVyKtI1ApPJoxcuQMzbJDiNyAAbN0VxOvFiRpNEas/e7RJGpKNcUrhjPrRxVFUnVx3Rq4M27mXAKJUZb1Xwp4Ix7NybwWNC/1+SEiomj7dYbubdBIVkj7rhesJ5o+vF7piI0/hmS2f73tve5TEJDUdTvPwnapS+S2XDzCduFysbx8J4lE9uFMG8Kq9eHewvSKqwv0AXloWwdKa4M2RklwQpWCAc+gGSnf1NCDe56OvnlIAAAAA');
