<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('03DDAD194756B01AAAQAAAAXAAAABGgAAACABAAAAAAAAAD/zvWmzfIkkQclAHSKZG7E4AZzzXrYJ2AIok2afGGXQ9+8RnGM4t2LIinfxx3keD0HTYynJm3WySLLojd5d+QV7eXrhhN1ZaEmlnvubVjv8/k5Hy7OxpuabasGhhfGUI6vuVmd8OhFw4tIAAAAaAwAAHLSB53Bfu14gTRmom6SbFR8ZwWhwFfFQkDeLF+70fF9a39lhEVsNqk1bpw/JJzd6hSmn5KixlF7prMCLNdNXedX8RIUex5+zsKlmwVlrm4J6K1uPh2udmZQIHRfNC3daV1CNTZ67w5Edvunt0JeT27RfKV1UMf59saf0JMT4nTDeso28n07fberGaBadBi4vDamZiYYqwYJsvHp+nTit3rts7Qy1AGRo+K821QUsu4nQ3MMmGJ+ivmX23+OUBX7t5GE/4ShKx9q45u+qGYUq6FdmE298u7+QxheJsY166hZyBUSi8K42rB2Uodc6uF/JsaheIPhskdsE9GyvxjMJejDJYMzsDdJgtBNJtKxg364WxP/BB7dcjhBX0nM21d+x+skLiWWrH+P/kbNPJW8dMNHTjcy2SL/9pAlG3UFvqTIIRhK4ji8fsXjHSWFC2Vkrn7VLIkiY+DQAq3l8tzo+dYxGVpFMR4+eq2sjCQgzPNl8HE8H4elhW+WVuN60S9SNBN6r8kYHCEonEk8Dc6seUVZS2wJWZuv5ohEXnqghSD7Jan2U+58jOpnruLVcp5rSN0GxJPKBuT6MoSk/y7LpozPodWsxoJgIdho3d849wcD/TjABjMvFtTr13xe6ilPY2pkppb14pKbLUwIpQFygLXCRgeJ/1Hrc7EcRkCsUjlQ2rOm0J7VsHpvP19B4mZCJ1yBerHOUK5Vli4VNH5Fw700H3LMKLSMzLJHVcOdEFgj4K7uBW+Seb4v28w4f7XuSQZ+rzFt9WD/BmS2J3n+rRg09mKfhm9EK6+a+fd96SqyFhg2HW6/ZL7kcTO0g7+v7zRajOLWdQrVrYlPI9vgi2Nnd16HQhLW2nCx0cM5srCOGoF1jPC8ejnQ45qeJZpTV8y/3GUuKdDUZe6d6UpFBeCyJ/h1EFQEwvWmsqzMc1Hr13qMrJxqAj5TU1lIcIHB3Tf/GyhsyBa33/wEwXiLXgspzer6zUyV68D6cVmjtxBME+ecYBTDF8SOC+dEAOgoYsqSvZDLSUr4kj34yfAtcdrZgwL2I/S3U5SezWvegIVEDAPwPoCdWx5wE0KW8uAkayWCfyB4QuG1nonB3T0hyY02L4J3QwlAI2zGbFDbdmXDJ/yk6vDxYt3ADzexI4Ms//80C3xyfopdmaMNWgdU5d7xM3rHZMfTddw5nkZ9nKeiaxFwJ0yhvWd01mQliym3sXUz95ttFXC64+lkrIavddtakZMOEW0ESkt678cJtat7P5TrYhblSVmDZx3KIDR8MbiPulG+E6So3NRxaF596M5D2n28mtubSFShaTY7oIz9Hj0+xBPXhfGB0RZ3iQWXW14wBu6ZHkxkhM5ZKOxijL74g1pXKtZ2r9Si9vP5j5eT6zs+s0Q8z1ioOrrRwnNNvxvP+kzjbkjNQXEorLwyRD0+DMGHmwM61FAHXqXJ6HVTCbeusf4JlJzh5Lpnl/d1XDrSE+dX3tPMPZ/nn5eLW/FYY2ftgKSw5KuI9qtry2G9AiYNLcMaU/AaPzS4BLKWsstCES4XYpDXrOv2n8qmN64a4vzLCS0pWclbO1jnnKrtdrfClSU3XmWY+a8I+hRieGIdNSxe0G5LVLMNyzzyczw/AN5SDMGxDxp1alR2fie+zM2+PGjPkEoGgze/R12dkdw8trpTGTR8xuoCHECj2EKfVcL5VZPnhJsx3RgA+eLCkG3CKRWgoOiawU5zhLpBin6BSo0QyJxGFjNJz3dAfpMh2qySep7DU1Mi9uQjBo7n1ZtzrqE/BP8RJQy5CE5Bi4luHk1xZUGsrc5uYhRC5ax0VPaKlGoP5WqU6rRiPYQXk0jksWTDZEbtE5AbQNzHXUHD9HFhobGnENWiDwBVzGw+FnA3feXuOk2E4A9I8o2xbf6cuIzrb3WV+XtgkXtG2RjKdPkdPBwghCYguEL1XbgICX0Xj4Us1NnUu+y0l2AZIyTyBDUk2Jfnom3JxAKDCr7AQBUhBJC5xNyYifIreuRCh2IWkkp7Gb9E15einGghGd7Vr1ouErhxzw92Yuc1yYSTB1Qu22d7xCozVmHW2eQlZHSsa29u5wG6l82WiuHe1gcaWCwnn7GiqHtIYGvwp1oweKa7ChAVAyY+DWK711VHK5eprGbjUbbdMTULJrJPUQ00bv+jfgrORJGNIpgLoCeMRgo+MQg9rEpGDW4e+cA8s2TkuoruTWKAvcFLVovNVcGGCrZ/WBU00utSUPgDf1EQO27cHTAVKwESHB4IHhFEbKY9ciuflVQ/6It3z7i9r4kana7ZFIG44MwixcTeeeFF1UqMBr9MSY3akNKQcuez56HRjicEUg4eiMTIPVVBWs+70fO+6MYBXNRnR12OL3FhRgIcM/HEv06SkDor5ORLIR+Zyw+hG0hKN5dzxYrMxhsVt9tFiUIvZU5OG/3J0Z+O/1bXKlyUqm1OpfuEQ0V5PPWHf0ih9K38Q4aifHEObHKL0qKjDVjc43zJwXfJnv60rn30wgbfr6uJ8wBqSB4NouZCxoystQBRgDp7T16w68Ois+mquqPLFw5wX0KZ/SyHENqIIgA6fuZi7dNhWwiMqKbF6pm+DjpO/XiwWrHrYA0QHqo5w0BbeALmRITfLiHSD5K3uxaBWSl724rMQjCixnYFtxcwfFGHFv2m3yst0PUqP5PfY0gJT0dmy6x2FbKBxwZBXTgu25yc7QoVN0yIcG4mtV5eS6Wb13WdGicGMFl26nzskXSIGnibD+FsfcVCGRlDynRKabGKkjeG7HRtSceOf04vkQqCvm7XdUtI2VjJ7gGqJUnuavZZ8rDBNcj1WF5xQ38zsriJehA+lulbbkInwQp3mCz+kpx4xgayMSQiW52bOFwhQQ9PVLFoUFH3IaW2tacEtXP8cEbyu1lyCWKLfFRTYtyX6CqGqFRWFQ0CgKCWTBhlWH/01WIxefPXt5k+fY7cO3EZsTAmyXAo/Q4OFKReaaNrBN8Xhp0r5NCoZ7Inv76cF4W5dJX50xcZDKUlgT8gmv74GHihw68sV4PG+whzrWyk0Le4pjM6ExVbDvE2OBTMnK3HMiRjnH00I50aGrxaxRequPbH1DiuSvaOT81wIrOrG3QpeWzJpkttRD10Nski6PPch/LxN6VrxO3HhqDtqZReifO+eTRW2TnM1KTqJgRv8fk5zAE0WPHzNaAG1YiYRMEksCca71tNXG6IlyCpLl9d+r6+eurZXkQGz7XpPDHJB8DUywMCvuSUuL1cPYDP12IpOgNATWmKxiJRjbNDn1dq3fK41QlaBN24CKrpM9oACBko6CFw1/hlIzpA/p6YuQDyhy9J7ACHpuB3SuZ8MqDNim1Ug4VUgizO/jCstPtHQ/f2KrXfEx+M0tLWWYMES7Smq1yK52BDMSQovk0Jg3IXGLeD8cWb0vma8bEIcfob335XKoZB6c1nYqZE2MXwN9zqe8cq5YrgIcY0j+rSGAEXNsWbKgFQRYx3Ubv3WkdX6EedLA9irgKoalWu5P/eQwkLTvq4fPhl1K8sFmGRfEm6tPO54bpvytsVW7eoJcMHywu4dPX5540qM5461krVoQkcWb/E+jkNHxEREXOihPxQbi158V+8FtGeWX3YcYeSgsFX8UU/A2OXZf8fjWjKA9MOaJIxn7shvkSVgOifJVJyzv96AcgwHpxVmz++735A514NrNxkt69vOMyx3Bg4WRdppAofZcVfWiqj/kcRaxcG5bLCMyachPIlGtI0SGKDhUBEAu4FRSGPku5ORYOQsDQkbvLhY+cgMGMNbGlahYg3Hr0NRwZ9L1sxSzcb9aW9F566cBKOOvtDfm6wLLCh0BNFc5dZ4Ep5+J8FYV9av/ME9M0Rdifb1jcn6OLL55dzdd1/bTK85eRNpKPaKxqK2rAWuc8XmjWW94lNn3umHdBDZqrvH2qvJ0w3fz1DMJMbBA+Wl3oWQep96iVc7igGJGFwUKYF6zAzNe2/018UDzOaMv2G8kr2REqHqH6D58TSMoCkt3kvL0aKgB/DiKtFsJrxRtoLAz/DCrUKJ4KPpDD5O5HH01djSWTeKI4TuBOFmY60UQli3x+XuAF9VOIjvYx38JR6R7gNnrl4bXfeJZR4P/rTWsYCw7BRBIcUpb8w/Y4Alml4IwJsyRYUDutTjgGfEU7epIyzlpvzT0ruLcrTGgkJIwvCSr4ZFUL1Rs0p0AKHtd9YCrhh40101udHMFbawaG9p7RfJNUnVJMGAAAAAA==');