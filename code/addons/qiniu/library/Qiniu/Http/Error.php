<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('03DDAD194756B01AAAQAAAAXAAAABGgAAACABAAAAAAAAAD/ptVQByXlTdKLYazWhVnezUgHjP6roCpAG4AryFaMlw3eM32VhLEby89Cu3LD2IjooK+tmRcbsmoThgrnNik38NVGMCzqoHOVgb3WnhMy6WjpyO2Hn/QYBY6YZo3GxE3sVEXihBpqCSpIAAAA4AIAAFGXeSJ4RK6xWnV1KjIrmGAiJ0aYPeBLw30HrFlzmXWqBebrgJ4d92du2foPjN/JLXCte4lqYHsX/cEy1b8BEUa73WoANTzQ8V2s2Li5UQvHbguX7/Ss/uu/Prb8EoZDMfo3jW0QNm4S+UQEZNzlvvYcsMtCbh5F+3W7t/z8/fs4fngOYCzC46tkKCRw3CkVSY3Ift36I7AkhlTOhtDl7n1WNGww0lNCOg2Df12QZoYM8tP5GKgwks/zD6D+Gm+Ou5x9xsaFZEtfa1ehNpIsaDy6fx7cyqnCwbkmbQFz+O68bwoScaEVL3MCqSdHbcWljkhykycMAFAROe3Zd8t/lKPkaSIiD7SHruQPckeWSks1qY6ivGyXtopt9d+ETAb9QROUwEyAYorgoM8NIP5xYY1D5T184rXHs//tSrA3XVUYHAjvC9q2e89w+yzoxKzOKlCuoyPf9t4kai7Hx7he5yr8ONcBBWpZW5dwYCfMOb6cqE6/O1RNXcpcWuuRcf78Ef8pL3M6Zy0iFePQphUWMPmbzAAb4OZFTMvqBJ/iP6z3O0X49NEnpJB2PYPXPuCfUjoygKLqmVeHhDBK+64M7+hpSylEnExK+Tngnnhou6iRWfii3ziP72ZSOBp3fjD7xnInE+zfx+p8u5hNDCQilMJVuth339kRTa8MNWXVw0O+YtXGOG63py9q8OUWbl6VGLxTFKJ1PXswDesOAiX33OgPLDYJY9mM7ITnTwPrucZXSbUUYcV97wBAuLIARL1bvhCb+WQjhcYsSTa4in2IGBzFx5Drh3krMXEFERpt8gI7Pa6fRWOmu21gjDM7hoAHYp+T9S8hqkC3AhbE//7chl80bh5FBDoKjztDY7EcuVwPb+19HYs3rrECBP9OPNUW9OC9l6fU0cK0veYD5pALSFn4Z1jjUXXUA1rzpJhRhhcPGCCO2M2OuA01UkDrHPrqx+ysnR6pApuVpwpjB28Ryh8AAAAA');
