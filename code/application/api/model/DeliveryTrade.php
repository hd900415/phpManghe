<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('03DDAD194756B01AAAQAAAAXAAAABGgAAACABAAAAAAAAAD/OQmDU9eJol6c1KsMK/ROnEh50lKMAreYfLexRL7vUJlagLKK74ViEVqWv9mByoPCUsXvnH2ehJqdDfhZEKD9rMsHQnhsn/DtL/fzJRlRuu6VMoI++tQJogSdtIQAUqAWFBOxIwnLe/5IAAAA2AQAABd3ph4RSaaitZtUtWFGXtdvu20uZsmUOvQVXe9S0c327Sp5SabBFrPOsvntUKszwXFmo+TfMfhgzThVyHrOJId9bLDg2oYGF0cbgPriBSHb40DhAg+p3xEqt++MCw+joAqwaevz4ZZdQvKB0QFi+aWwMvTwIOgKO+rJ1oNlQMYidIpAgVKfOAuR4wt2ZeyBvLc8affG8IVmGfrY+0lXKoa7m/EllAb/HovHbzozeJeQug2vkQaKRZ5Gn/Cq2hHfBfKxUFJeRtN0TqTckPm/Epg/qoRbSKTwZc4TDhrT30G16Yl6IJ2pxt1g2h7FFxnfoWVNb0MAOMNgg6Cmr7FDpv6tN9+BDh/WQVxSVXIVVYXkaubr0TiVIXdADzNV4CmMSM3CRjTykq2BKJVsxCVdf1WzneuBfWTz4s36LQ9yoITCganBKpM6TWFMDKlFsW3ItJ9Ev4IciBW0MrAF+Z+XQ4CqcOivbCaX+ssAAPyhWHpDeGbV6670CmA/6VS+vj29NW/+1jtBqShpEc70iheB56qbuLJvIowf8l1KkJsdh1MNgG3tLyl1NZCpnjKBuv5qkhin9/F71//1OmcJ1yNWdzt8P8EuKrq4Ue3GkRNk5S3ew+nJstVO1FjkdUF4/hOBvRZE4tqDix7dDEnF0D+gJCRpA5R3LACnHktqBDQYDA/BLw0p6XYYz3iAfosC1jd6Xt0Xbw6kCVvxXjTL/C5kqJmX2WEx3Wvsp8jNFa6/ClthwQAnfCpzhaFHsvElCc4TMbUmdj+1mEx6xGaZEFqwr63IVw+N0QVEWYkZA2GkolYvB7oljLGjyRaILcxBZFOut5rbkS83XEa+POS7OMjXEvu3AO5hl0Ge5zslekZx8hxgAHjuoU/yPFKwZw/pJYJWYAAC/mYuRVOpgYLohYPSLzr4u4IFvzl4m7NUgUo5mD2rzduDXpaPykl6rtZBr8vpoJEb03vgoBZQ0DDLht3qLnyAiENAXuu7qnDuPdmmC2+EGWj5aC1Xaz+QwzRDV9LQtyoNe+6DsL8J5Pk54u64e2ozv4bXlO+Oxg2QuvlVErgBkw52cnwHsJ3vLjfhNkw+2rEWUxKHoQ9bYEjmh+9h9LEBVlHer2mPO+WeoOE8gHr2GueJ5EHW2g9qWZfBUaFi7/ZqTDKIhuIyp+nME0LeotF5gd6tpLcHbOesL2gLs/Hyhzk4GgQDDSPqvKSjqTWI+1m3YNKgRwXD30q01r3H25SMXOjfgihMCR0ubo/YCPksAEVIe3JCO4QCTRi3gj1IrbxBSwy6EgLGs6sl9a897ynVb/Qc5vx4BDNvH94Xy/a6zCua/39CXwNRH7gGoCIRtczoCzc3KSd7GjIxvR/uDxPxhSaJphJsxmLIto0afeT2VLT1hJsbqpBOGS5norzb6xFdApYPv8X98PfThgKalZLA+M01Rqk7WbZSdKHyQRc5kb2ilNtdPQaPvUzKzddfK7LuWBKwh6BazSQhH65pT5dHMQjUB8jsrq/hd6UTdW7ZZwcQWoD156hTU2bkgSMjDcWmUFQ6cx7WLIfvqQz8R5qG9p3SQnzVpbVHtZXU3oRYbdtS8nm5/m08HqEjGKeg48U3tJUOwMRiLH/KAkMgaxGoKoaKQz/cTvHVdx5jQSXHe+NxQHYsj1UAAAAA');