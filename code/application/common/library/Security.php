<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('03DDAD194756B01AAAQAAAAXAAAABGgAAACABAAAAAAAAAD/I5/ZzDKP/BiIJsZAj1/R78pw7zlZEUo/a1xemEOHHdT0cqY19bHLRxlqJH4i87N6t3g/UffTWdAcHtpfCX8HnxqGKZpXM9QCa9RHcVHSp871yRp7pS+5BJXfWmkGngs3C6OQgQ+kiQZIAAAACD0AAB7MYE5o976FsEAqwxW3S6O02ISnxB3ztmx4n/XH26+76VlknwAEic7ZGpK4UZAM+O8oVAIMyIaxFJ519WEVgopBh4qInH6Lj6UP3xJixWMqzF+S5fui4uY1GMmxgFunvLkzvWl8lbYNTQZ0NBrjkDMahHCTdlALfEVuDRRa0NCz0+O1asYzc0UmdLMma7TzYF3p49T7SszdLP1hKaML+4gO8XHVGrSzE+VNVlCqnTkB9VXSNAn9eDSJHHNdpJgMbqaz1hzUL/cdbDoRkV7LrCwkIoIBMtoRTQ3+uMFjSFKWqql31GuWeSrgyajTqPhYLbaCZgghg+4eAbSzunuEodLjagejNveB0rpAu/CLhJqoPIsetnhspWu9NlteanzT4CVbdHwtjdZGwP0lU/Y4pOhwiNCvbWwacpIMmbBdDnrXiehxVk6wd2tiT1Np4Lr9nXMAZnSOYCIhE1/q0auVuikgJX0ZUygY0ddKtXfIVF2BH0MykVXDnqKXzXVevBU8rA1GRZ1Rrcoy6GfT8Q8byQU37lVohUvFKedPMTKSr/vd7+YHnw79pjcyoD/2xv0CTP8KWbI+lrSkG+ud6246IfEpuxwd4us+uRYEpQ1uEpWbm1EWGQ9nGd9VT28tAGixnzLpFurE5qAcnukXjdQmgllM2ZXZrk60uBmrMOVqBEbgHJORrkPJyzdUh1W1JGieI+3zVJQng3BxdTZlUmQuZOJdIW04BYy1uWMCtwqwXTduuTPffr/FDxa/uywlF8REF/RKGaQMOYBekauR6RPC/nM8pdhwv3AmoanItr51UvilY5hy4jlDGrKd0D/lnBi2Og+FMBdFN/IDiPrkyA467/5fses8wb9FRGOB0zs6CgA/xAP4VnU9Yhh7Y2EiQEZkTnVipjnO4FOwxbrHHeoKCWmJsoPXKKLAOWZxCqY+9NvdUpoxH8W0Ij79PP1CvzMnOs1jhUo+Sx86rozDm9fpO026ByC9iGZLaRyjUCnyJMgSQz4Kucl+N/tiBVKPTl6G1dcWUGMBAkNEFOy7Nt21zDrlapqlEJHRqc0WDUQf1+J/KdpoSc3SNmbX14Jt+nUHxyfBBKsZXHPFu+2ws0uOJvz2ThInrFlkA8Qb3Tpm5gWl8aB+6sCG1GooNtF6Pc7JmKJdQkiom8x5dJpxkZtW2GRDHJ6D8vYKgUVPEzn/iZxEwOAZixWMDWOaA+yZF5BY2zXsMf7IGdZyssOyrj1O4ZVxA9jHImi619SZVQR7v3H7INUVrAiXOGSzLvO/f3jSJ/F0Rq9FRbxJ7h/8FimXpEURLLASmELDNl3Ze+Sm37zfvO/rV6+2iHmZqrchcvux14mlgMEFm9izU4XaP1V8ZmxtNbD401W1shFrhXGVZk7FTgKMpWY5J5Z8TSW2GGeCPyHXmixW5uZHsHy4+bwNVECRnUfH/oo9m5V7vwdsr9J734RZ/Q3NdP/I0URe6YyDWLmoUtQ/fZy+bBhQiGt7/GpW0ZTJHLQeu5KWZV4ojkLLQHqpEmm5bnkpI0+t+xwJzdqW05WmMMg8CDnJAJWV/V94QqX8RHEgQ7w6jD0cpJWeo5shLgltIJ7PnOpBYImQV0PhK52F2JkBSOO9B6Q29W4aqwCkaG2n0YMHmbmu9Qo8MOVe5kYTK7bYSXIM30Iigbl1dDrikXHquNuRggHOC18cO6/wfz3LzYPkhR/1E1YOLEmreTMdp87iJZaJmdh1tbnAjgyTHKbIBRCRk7tSQMfBmXbfK+zmlOc4FJHahVN3GoFnuP5CiuQrryHZ7+7bJw2gs5LP2o4lmV7zw99+1yaPPCFgiM/uSf7l6UU38ng5Gklq9c/PmINjEH3DVGCjE19wcBtJwuuyM1QZW6yCSkS17T//rgWNbMz0WTP0f86yWGfSA1Es5VAqK0Hb/E84iJPCqqmd5GqWj3ltyBjBAY56Xf+jEYqOKctVV4GRFTOtWdxJaWv8VHPmu3UsQo/f1mYy7b1grS4t/8i7nD1P0PyRq4Br13bKNp8rVOG7Y4b76NtyXPWQDyMPXBiQONEt8XCILXtnnGEy1i0niYZKmJwj+bw9Cp/Hy973GQZnIwn6EEiCxGfK3iTr+9mz8ItrgX45TUFiRNG7/L0y6PFT7i50xjOKDpJfv4bKC/yaO1bXQvkbvxkaMjUu1dLUZsXmf6E3Njn0eaIzZMeSyB1WSQl5biOfy+mboagyzBIVl/0hZ59tzjESdJfoPbmrTuSBM8qWIKLP4ESYY2NHCJ9L2HVKOOhF5kTT6pcaVeKeeX2HmsLdOPhNXfrfrhp2ungqNklLyJ8B4WjMEbS1WuVF5APWVBKqYc7ZE4+jTBfVQdyiwSMXEt1tF0oNC9n6C8ypJ55VkSrc6s1fUNHYmvx3ojwRxso4XiOalYBMXnBHV0SQRiBHUOIY44J9GWhQFt0tHg1sjfkGCvPTs2Yzmrer7S+BNIdpBFObSPEbgOH1YbGfp4FEs/KzIcrKE20gu1ap5a8qDfY3n79/5P4+fjQFGIyCffuAgFBh6kSGrMvlmnviPHLj0KFX6wBpaI5/SCU5nKgpMjUtgK+ICgb496ezG01exX5xh7EKS53IZ+p7KczuVheo+hXp6MfxaDYLiMPiHnPSGBFkqj0Uc/e0Sra8HU9PZBmtAqEi/4B2L7hwPJcNXzmYZad+mSXc2FYzYwwRUTjcqzekNFBn4gG+mcAUEH9WtG9jpOUb2t7rMtFwR2bbq40ivZQS1NtEPgdWn5yDhoKvTJjNnccd2bilL1uNSFfq8463aNLfQG1yPaZUbGiBbsUTgf2g0TmLrsTpfwhNrhJladf4fuAqRTC28qh/p6op4k7zqhehq17C3U45c/6Skm8PfWusWPaRAbuqdMchOHS25fwL0DDSkNXzhkMpQtItER3BD+vHq8Y7znG7qPK/lVDqfgmhSDocWSBuzvpLms36Lm9KkvGtb1J8lQqH5CSkmrWyc+hMKUWb1ZpjOy6QdxB3qLdLAgHGR7PcklpiJVYRww29TeE48y258Le2EztfnDJ6FOjYwo+dbYw16O3PjvUwtyeisz6SCvsNENwFiimEetgtcVJVufTH1Hwt/0jljIUYIRoHRDXTx0XY7VlmYHqufrEJWUa534vJ3Hst2dBh6zX9ViefNns0o9R5jzoINqvw2FiU4exrrTfwdOyl33yDvnAQDYskWhbi9TpaKokLYiAC3/faMd7oQWVAjvuCAZ2OiKQ36xh/+HKhU9PdwJ6RI/b457mfC1kCMpj9IqUN8GnhgP2uDTiPWjrZ0xj+miR+27AZhR+cLKH55LdeDmRQBX1ZofnrjvqwGcvzAfRwSyjIH9uLhOTv/u5Z+NnLU7X7ucFcFZiL6quv9o95qqgQG6cyQUAMxDD+tyot/33Y3G3V0bzCVbvDj7gHZ+EyntInMSPJJeLFiS210O0P6c89087Y8clAEvweOxTNv7F1zj1XEu0hqG+kwj/Oh8Gc+v7E3uFj+p7VpoLTcIC10BBOEK1vMetV3v4unkdzvbXq9pEhnNIKkxFFM1WtK2waWe6SeuZZd/ervLZS7IyvttrIdC3AGkfMHe6o3alEGSQ3B+bDOD85E4AQwnQoRgFwrqZnje8tpTS6SVRiWtRlfJR6TCkq1UYGffQIZr8J/drHrs/gehmgzJRK7JPPteN96pA9p0sz3t0radNmA7Vubek9EoEyTGj8bWfTkXMdjRgaTUNgCULCeheYA01EZPUrcEIsG+SsETY28tBdwVfaAhruh59cMpMb3lJXkko4U0MDm/vFVLm8PpDyO1rmxoDqWca8VwbCXEC0qfXzyqSyGzvJ1KWEPaZqJp9RDKeEN1J3OBozpovhdcL0tMB4C75lBWbdNdLPtEdUx9CGjvbzW6Qn56aiH4UCmlzaj1p+HT1IlhJDSdZpgIvSkq8dfPqRR/7yTz2+QhGf2gey9v0kuYf/d+xUE28Ik1TDrMcAdnfADKCG02l3beT5c/M1onKmM9TOzUjjXoX80rFEgne1x/asq0uWwRwd7JROyhkIGYTYsveLYPf2QGqZu/gvGWqvtPNwAL3LU8tUr4Ca7VyU6KHL1SdsJDTREp/bN6N1ZcAGWmImwva+097QrfyQ6hULLzNl2uahC9if9IIKimQ1QbtjQ5dkHiuC2VFszRyQbgzSnIarVPDnf9mn30ZyVPZN8PfcT8AMT7JeweU3SXcKRoydt67pGzE2omp0TnaZ51SzeI1O1ihIck42YIuUUsQXvFIhdKopHkPJ744ARqvKNfv4Aod00hgbzkWvwsCAV/xTakE9Zu+1dEGh/ROHwZ/GGtGlqOPDqlwZk7H8Wa74LcmpNY+obWJnF0PSbqyByL9c8ATsCbfgjzwnVmITQr44Na9tQ0yhHyrm+zlQZpWUl/X5xwa1CHfXl9uJs4Smh82ifiBhY15OyizbSFE7zHy2V6hli+/xJImaTL3H329hUWAlRe7ysVAWpDxPJ8pKl7BhKyyhr/bi2uUvfmg5KhBDxrXjEluqsB1KZAkTG/rLPBPBJap/CaB2RA7/bFIX3Cbh+jcjQbhTxCMY0iOMnZjmJlVzL35gHSoymaZGLcSqJSVCqErdKPanZ18Pfuxzw5nHNRGZkNxJOX7GwCLKrmxNOXVssS2X+qPKknAt01YfNVUU3XIikRt0hInqtONG4C5/pvaJWJyaW0zaVFo5TymZymYYsw9v2+5KZOFfKWh+Z7Hf/A6a3RG7CfAQBplGK0XEQyHY6n7iExql3U//5OLtPkoRuCZIlMEyKn8Iq6LnaxVGiVNPv8KeuGzLeFX2n9FLIMBMPdsyEuRFyoS6uy9oIQIavA57sJrrJwlPLqL00X3+TrpMcJQ4LPOz9JGZmYvLKIngjlmlpiHG1adrHdjlJPpHpvgsu+or6oOwZ5nJi2WFpRFVueIb82vhdrsu1X2WuSsomST8h++u9vsRk3v51G98BJPTJsoBxnFv6c+u3ebBgauek/jFjfDxtpeWImVxBwdvVRUnUjd8QCFVCnOyuLI1qztXYervzRX70eUskv88I++6RIXci80UInvV0eJczezAgDKZlbiwC7+Smz5BoLAMHS8ltezSEC2+Hoq5uNUHpzrrJx8Rdw8RNMT0kRj+Oiipx+K+G/mV9Il+WQ+jX8qylCTAqswU/bDGKAA2tG2PomNxr2NcT4CHNRAW8DaZPxWGubMi36op/Z2oYdJghzFIvjY8v3WIVT9WjMqBj/tQU0oW6oM4GsWLE11ix5GBDDWyfnmE4tWRcGJox8UlJ5bIvBTveR1/CaPbEsCnXwcliey38h03lVbKVKkN4gOXqEjbQLxbFsK7QdociXZ40m8lX5XbsVKlXKzxnvonBl6nY77lscZkA2C6gxKEeoZxc6n2lir1zBVkvEhK3GGL7XtXPvWljcVXuhrE9PIi1kMKXni9tMRQh0gvcJ4RMUenv8+2bI5UlG3LM3sDCOLwFDZZ4HElNRaZ3hKfZYF/sAIYjNIWx1nX+TC8E4t+ZR4W9HB64BCSjeqHZhotJHdFe8xMS+1sSdKfXj2kF63IpXscgVN4Xl0cBPjjR077Ikg1ZfmqZRgaoBmP0oOWJejHCVZp9URbPsHkHoNLSuvuhIJ3DQYwXS4u9ZCNLT3mofRdcUH00Iw3uSjrPzhqeJFPZoGPn7qzxusCwgLAaQN+HmLCVRi0lDUDch8sqKM7qjOw6mu1yvkVrMtpqPjmWg9AtqiE24MbeFYi06UIwAl6iVTXnIOM1SEmKmYgqZb5vgvqOvj4HO59rjS9OJfA+KMTKqUV91tloiKBpp7j/Dw9O8v93SV+h4tFGVL35ZOVBGpLckpId4Z2pGP/KJ/QwYUYvAoDSfw2Ub+MaCtIoYksuM7ZAc7nBmsGzLsyFgSVXEHJeTyWXnUEvG1lXGaLvZZNmegFLeh1V3+2RneeSFf3WqLy860RAs8rtPdqJMD+BB2elpjlRp6GNDQ2aBAy+y+gPM4ey6IDZmQjw9TLuj3xA23xSaeCz8qzkJ9APuhBjLoBQ6y37WdpfBBDmCwRQB6Hyfi1QOcjH7KiS5SXTMFFh5tvFA32zj46MtuzPhWSvT4LJUcHiL621D6FtMfUk2KC0VR2XMbaj3DEGMocIrygAFUqm4cXGCZtKKNS8Asxjb+kouBZmmoLDxSiW40Y9/QXxQi43E8qDZPbw/LvnIFJh1oVn7WTc3eqITFqu9ZVwI37CbB5E5Awzv83u9bejBHUInVAvkBX0ydy/uB7UJ4xkvXVRm3N51nt8E8A3A+zRVeGci8TnNwlexdG3W5eRNcnMjzgt6WyIoUrDgXb2dbVEptjaxUz3y1o1p5ra5rvkTbQNfrpwdljfVQa+eMnlFDjk9DKyITICECr6S3xfDx1bXe5IyXdOq87LG9ww4PZCOv99jlH1cGxAoKf+XcDDLRzeuRiy2YrCeG71KJ1Gd0RZ0XPjmxB0auNmEziQtjMiKnAmEccqSIXMhzhKeKztJtuPoUEX/dvljtU3/QnTjWzGfqBchGLpyQPhDxVFGPLCQWH0aDZ1hEvHIFkRhJ+K8h/PT5MuqrLuEZnOnCYJe0vwGQ8ZXtSWxfoptFK2KkzUVnJTugB5qNmuvk/E9yhE4+zvCfu3Xo3Q5pKIJfHUAP6zgz9kDQqLKCUtkxpTREGrBWpu432zhNCn19S1ffEQlzGZDnJTOZex5biLpbBcpwqCSHcnv1ittwFCGG7k+1YDyb3/Oz7mFk15/7rsvzaJynaDcxDE0stk4FPaJuAqVj8Sr+LTkANkmS98+xhlDtsiTwjRhkX0I66a8PKVunSXIk2ecjxvGc5B9a+XjEbJZixiFbsk9W70zsnbWcoTAyH9gpQXJbdpgoETzxJLBeNxIbWTcfgyGocIvttss2jkeDr9KDBeQs3bmmLdlazoW8an9zj7y39c1G+ykaAhR/5CasN4qCca8+k/3+e6TxaFqiNoqHexnf2tRrl4n2es9txfR6wEHgpl89VVF8zzSoQrPW70CmV2NZBbCZovLJIXIgf7pK5m/aR0t92JhPwycfxKW/GYqsEm2Clc07/wDWRQ8dxJawlECpNg5jPPD+4xLeyGRiq7q9/gtTuqFPLzvnUGD44kim3XElWpiMW3f7fS6/coxfcOS1YLZLJkq17rUna7ULZ+MCJ4KHXnos9TSwddZ5wO/NSGSWU/AoyE7s1gu+trQluDEqhYXJH3kuI2nhGVrf1CnHvNJtDfac5zavSapgFQvBxQ1r3clHBeG2rRUZ1mcHnN1uomg/C9tBQEh4t4lHgCD4z5ntC4rlORmJ4rsngsiL7zB9w6yCJf67mo4hM07p0W3JQnoURqp+3LbglsxmTyUl7cojlB3qcr1+O079/fCtApptoXvuWYP59FceokIjBTcwOg5LbC1WL6bTZYPeE/VIoLIYUuFqNmjz+4LEfXMLcuCGG9IfZxN7ud1sIgmJkRObHO7DkFU20kdv4pfCXYlASq9aJlOSCg0obYI0npFt3vKum1HyaLFDppnba3tnlYBoC1wWFX9lMGWj2vy77aulXHtWvsG1G8XtDK9MooLgLaDiydaqmOhtMbYKreuC4p6Ve4ZMt5qQlAuHGkE9UZrHR2/fAvIW5LOc2B1re4ti0MzFJb1e+gj49/+JO1/gF6Ff5Xb3SAuEgE6xAqtEWwlQqTRaosUQZ71RivgVpYwcgUfwhft9d564ntFDJVsw38u/l3vz/+5RizAppZwmN761nec7uSdsNgO34Sn4q+z0RWimv/UXU+ERTvgHfuxg5ycuMRPa0xv+9xFCG+664XDTbAr9FCZC4DlnD4C22DNUlJZr9oZdTYmPU6EiU1SZBBSDRaonqB/RIRZILlFI9Fs9zskCLL76fIXjqimIwDXeKsGEjvbF47HJRSO/2F1myL8bUuY39B6ek3fbobN/XZ+SEj/bq/89uva9afiIxexvr0Szj/P52OPnjQBywhiwCgNvgA1YDaqzcKS51ia/TF4iLgqGrjpjjkwZD9h+n7AoeF+agO80sd3PEqcRh42bccQKKBuUrReUR0GcRTjhgagYB/4sq88uVD77vcjkpM9UBfZF/zd+WfMu75KXVtv1JZAkGHWAHxa4KLX/pO72ojXihjFH/yOS+yaZB1gFNqGPHYksw1XttCF8ItiO9W+N1pfluBrWWfEj0h/qMntoyLE0qLRAUFglJk/uC3hsdr0VoyD47qbrP4PYLIDPktJkkXV5kU+lHrKu43B5ylxLjXSF/pKEK6Gf8TYSpnsSej+xfXaobkdXlqvlP0ljNpWuX4pQ6KbrCJrSniqjUIFB9jEiLDJ/1oTBrxzuPf+qw20bu7Z2s87uCDMuemAQHwArCKNRK/zDGlviAZy97ZppvyLicFYPtKj7mJ5Z1Mc1tQW+B+M6l/lSnBbzA01WijklmJEvH4LwLtggmUHEVQ8dRizagLkJPVT2/ZTAGIl1plhTi+W3yoK01tX5ECGre07kvOLvUIWeGsQekA3SxoQLrSOxmPWsTwBMgrfY+a4v5r4oCLtOTP5kguYcXtWEZTytver3eWmOm7QRx4H1ARRdAyG2AS6JsDjIQ/85OpRU7POAyb8kTd774hUZGZEtg72QDHDyBJZHbhxZsSgzCCPqoQzqsDth43l9Bz+H9CRyP4sIZ4o7lfgTILkdWHHYNZKC/lBKf+hFWsdl3T5eTYlYxEd3vvMVZRfvkEK7RsyNFz/fe6+dHFhR+qHw2tdNh5sr/+hMg4vy48pea2XdM81GcBwbd3G4tYu/jxvh6ho6/Vx2BkbPdzJUhOsvj4zX+Ru/GrJY+lGdlRakB9YVUkMxTSICxks5iuIOgJ8CjR+TSZzmtnlmJbL/6K3lwOFVkNu1HYt5JEFab4EBFeVjgAbm6Kj/jE+0oPow1HWmIOdxPLx+ddz+rmxmUSkKOfxoyHNp13AY3mR2rroIpktquADFAXsP4+2X7qF57vdK2vEalWkKb3ClWw57jsGj2Baei8JGaVN6YkM//8GZwPfyOJRs3fDzCOy3G0Kv5NtNjAbixUd+AxERTbcAu4P6TFTRkOzXonS7Oe/sUF8LdiTShGGoSpZJjlZyitf0EGY7aJxXvqqGggeI/q4roRmFZ5NhoHdKr7g9eMrjPCrqR6FxfA5AEq4ibQFWCVTr/OqCjxiU9tdu+KU5BFxVIc6EL5I1Qw/DEJHrRghh6l2APtq8J3mgrG9+rtAzX/Dxdnw5PZVnRuem2YhkkoCHIoNpG4Bt9EDnDgYrqQGSlfGcMUdpRwXsp6RutIHJQF1jdLKnOosbdLbJ6IaiRaWP0sNstllW1rFqUtZuDFWLGCebKzBLh6JekYoUDvW21q5f9OBXY5RkMIIRCk6P4KmweFw9jPNzdMcYwzjqXAqlzOS3RopgGZ3DeYN5F520HwsLg2jc/lkMiFoEQo1J6jjbu9F5+mjNKV2lX40rROEuid1Hkq/S/ECE+70DUb6EIyd6CjBEqnUFVfuBNzSxnTmwniq0zJdGX/yK69MqxBBHG0qUWEftU503llc3puJweC4ekbwXhiHRBLEl49aYmr0os2LRZRmkvn2TNE0noi4ybzCNjYncVak6aG9vVyXWLJAVDtt9AtZGzW7uF+6NzGfWyDwovyuY4CBBydwi2rXOV7SD8j3qwhFGvn3QvJc7c+xgTVomORjxCR4K3OeZwXSMxdZn1cofqH3ixm7oyS2x2kIJ1Gd2HOSNHk4SNuFBZXIgFoZnjC2PBOOxKGKerWDWj9l+hGcPVycZVXunrcUTXjS5Bxk2W1JZWFGPYPYlKhcAHPGX8HQCoZo0SpclV5XHvB/DfTXLKu8RKTKs76J0ojAMKB0tPzEoelXmRbD1ziTR/2KsTOChR9nw9RWW5uTX8+RG9uVKT4HMjwl4vB+UoAaRFqkn3QzPdvvg8zN8u7xQuDm0HSA2uPQ0SygdSm8JhtKN6muwzMklY66cgnAeLmn5nYYzc2jYW/BFPheedjyGpNdAiMGGaIlD2WyKcMenfs0gUuY9cVNuoOf0RmNt+B3pp7XSbal1s/S72igoPM4UxfMfyarAraLHeFWO5DqMYF2Aw84rWOQb0BiV/+Wlg+3W4xoGXAPF31L5T93uGAp4+ZCD95LGJxpBkCZhiBiCCiuMhdUwzml+iMP5vCERonJ03V6Nj8PhTrh1yHfTsxZyL5GYn/yCQtIz3i+KAjneWDD/dFKUjJncE3mez4OUP3O6siOW8eRN0EnXXPwLJxHgkYWWXS3hn6uWcSSzROKVp9qEeIXJVFGkRcQatmuYsN0d7WKaLrbPgyRNHqSlbxkZxQ1s79U97KoK47eZ0ETuz76d3PUSowY8znrHBlZ3/nsiynz/Q1IMTdsTbDbO8NFN4DYCWzE/blG7QKc6w8gcOAtK2/qnIuvS18nWWmUX0/mz2ZvNamJmZqtbC1zcc29dVvSsjDQfVeW/DUR5qc1Vh4USeb7EJRFMtElROMQflW+0h//4UN9xpfZ5KFj6vyu5s0g4F0mue4uX4cpO6cbrVxrsYsHc5xxU4/dKhHrh1g28PAEf6FhILdbpBdu4yNf8Q8KLB+mgbpjkZdlIKnrKiJVY1dYW+EG71KAyxGXc4uKCIqyhqzimEo2/ryFkUg4CDXGRHfV9wJ6KngUbMkyg0moL4lgFRR+5JXT5Mrw3iKNs5U9XQ2eHxzSL3vcD0CP/LBHBjGmfC7gAMM2FfgSED8qNbk+tGM7L42VR01Z4bx5vtqwLnbih5FB4Utb6vKOXPiNwuXqyZgiPZrLahwvQc1uH1fA2j9uko+naRkpiV1o70DvLU0c7C2aqLiYex+7ELPMZJuJDsg6vREbnfHtIrct6l6bjhehEDomUHVE+JMdMg2VPGKf5awmYRP1f5VjnNJRgFzU71YAHriW7aNZWTs58f2OpNuoyCRdV1xrQnc+OUb4RHRkBXA2U51ED7NwXivnPwZpR6rCKLbobmpAIRXpS+oOhcjP+i9LK+5gyBCf86k/eRl6f4q15yClap/skqf4UZ5uB7k/TOF5LCtRUHSzuk/GlIlwgvdtZ4plh5MZuwxXfDt6mpVVfFToHDp6Ouol73Kqh1RLad5m3VEu5a1buCxW30e4RIBdQV7x39A+PqCcGQ0c7+4BujXHZrWnmNZCT887LBchyUNfnZtIADB2lnWJ2OhZFPZvDniqTjr6SLfNcJnkc4hR4+92hRqds5iUB2DwXlPjJ6kE5CtAwU0y8Muqtta52nxcUnHIHMNN1E8huFbE4V91FLI4SxOrI6B2tHu0n9fHubwd5H/g4t5o17ipX9G/fLwMX7YuyfEm+7tDTj8fP83BTeRi/H3Xvt83vcWNn9JC0uDjDo3jjpOj6ZUYR+nrZzUwLUSsgO/VFyXWblNl+wydFLdd5wi085EH/TgKLhDEguqraJzxY4utnX62BgiRWNWH2dawHsxDkkklM4k48837pj7pCl4rDFbXcAh4rkSIH7r4mcLolrJc0sIrWcI1alKTO67diRaeOU4LoV0jYtsTEqARimCEDkGQU2jUA8XAOQSp37P8AeXoAbd//38RZPDFo0Fuugci51Y7tqP+3FhD1dSEqZARtPgGTXSpvFQ2RmVSZg63kp17i1X5JNBOz6g5GBHnFv5buw9/ycMmovFiVRo5m1CCnm33r+1dFGVZJIdeyGM2QszOBm4H2SEbSfavewKczWkxChcRXuZLyRhCfawTWFi7cZzSxS45Qd5oYouP4cC/h4JYkhVQ2Iqp4rothi+HOqrFhJhW5nzPB/OOpG1SOX/N2UrRJli4PpmLuiOv6UzE2hH0AF9n/4A27u/O7fifLl1XuFINIrtgUGBr8BD60RrddTFcCEOqAQEAn1W33UMbZfb7tkOglkqswrVeap+iGcxGYH0l6BnVyRfbgp1hmg8jWTuz+2rpcVDq4t86yU0spnFTMq7SxpkIrTAHiRskFgUaNG/Sj4jlBrjW31l3YP2hMP3QGTZP+OXdAo8eZH1Nyt1klnutWdb1lvjC5mI0riz2gZeQVZkXUXmigwX+B+i9WTWy+bBkpr3uR8icnDB9+/RlvrSNZyG59OS87oHrnngcaASu5bAJQ5QeiYp6a67Z+ydKdBPhOctMnXFsEQNfUofnt0wppxv72Xg4WbrVdZGbLXLkfO+FHeszBkH+rQ/z8En86l2vTFVNXuccrcZLL3+kxULuwViLw5ioVmOT9Z8V6yGePUpRWCBH88H8pG/G4nKhmEOdQYtB02/2GLPYCj2RI9qCX9ZuGu1nH16rXKv9b410qA4albkcqGdyi5pWA6kUOWWNu6K/Er9DmW12zrNsoAasbejeC1CmS8ASoq1aGv2i4tPXxOBJ6opBcfp4hc1jwMpyI2y4Uy74Sh+oeWjDf2WrqCHh3K0DfgocPwl2uQBmq86tDLXNVDziYiMANAI76ikKx/cB+dPyxo496Po9D79VTobT8pqcY84iSeV5GybhEb2vIGxgO7/F/S24/wIBOek2nkBPVef8FCzQEUKqePhym2UnIdlBdPyE5rm+F9GtaV5jJWLmSwbnl3cOW2e9oMSNz232wpP/NyLq/902pgP17dUExkl4/Jhlk58PPCqi/FehPyBLrhOLSywUvHvfjZ79NKD0vhXp2zGEbl2DQ4Fw7cVSR7EfKGkrGB+8jbagyQFKi7VgcHH47qCRhuBQbounoApLJUmz/pJeDBSxXSccamgYhQgFWCctxj6uH9tcxJi77z+sJZajwmlzx8/tGeWMhnfWiGey4WIR0nszC9pVh6jwHIoA31Uuic+CLxMS2N9YnkNu+rxrY9D56XokhyFDrbSfUIkKbusGWE0EBX2uTcL9+M6ESAXfy15pRX4PgYBZJFnPJSGILFozyP0/jPXVw7YTaqsZkn3ay5r1oiciB8ws2D3+DtuAWtVTrtpwDVqJRs9WgkPp43tlWdwF1r95wL5l/Okhh+n7409lARw/ImLJLWbUguEGm4JtmVgYrtVB7q0onENBcW9pLMQZb2PVDZlWpbXwf7spy5OwgMuNYOyEvdTI20zJD7kDQ1P43oyohhK4/l7Y1gxshjyHiQeoo+zatGEFHS50PJaePfQfrBe0FC/eUmikiXBlO/t6Enub1bc18KHYTQHzVAnoa5y3qIcSsK9BdOMyHr+/P1JMII5IQpt/D4W5Q0VV82Vfya1n7FcoZodwVmWOAGt9AUJ3s1zGrykXzhvB5BhODIH6c8zJW+prkfwByGzZUs+zwoqcZb3kLPAd65mjLvEAcPhQ4ILNqyEk1DBS4aeKnBxb6PEKKqzOPwye6+kkbNspd/SipWqc3aeDrSEAXNuR2kVWzi+Slzg9YxfxoT63XyRhamMGIoLUHHy7vDabeSjqCEBtcKhHMYDLBESZSYt3RYTLA9xRSvraHjOdMXBg+HOjS+ac0o0wW612ZtBygHFC/1EDkBc2R5Kqgg2lo6VIanldeWe3fqw9TE4fpAITW6Mug//iM0JtgmBu6C+7CdFV4/u8FP5omFCZq/8OqYXn1RKkWluM6nuXkC6f9nanRt3w6fjoB/N02zR+oMbzShb/pomffjev+TmpW2erzUwVZIsXCTxWmeWIgUF9wZFVwy9bEuBS4s6zRm5E1EYWBgs7QeBgszdAYyw3FAAsHFsZlufDm//tiscVSpNfRfCSTVrcvn35I/dHb7lALl+AglWj8ngSbPw+E74alO1ydzlTB9nUulHcCWWvROtuO+a9iBxnRYniZOycBLE9JIJoJ0BFyxMurgkoGNjYP6YW15MYnLnCknLw1HUpquSb+a1xwcCSkxLP5bqE+y1wDuTWXT6BEoMBjYu8CjqQaF3J1MBJcjXRNCkaVt1fhxQ324m2bHgjvWJOaDnKdGvNdh8uSOLMXHFI0QfwpeTlqbcIJBlVp1mOjHfRgu9vIpa5K/3FT/oG4o9AvR+/s9H4k8bcQI710pfiUV50eJOt0Zt7xOYGRD+SSlx77ZlLaQxrZcy51wd4U+LWcJ0mA6b2Bl7GT+6QdS0lY3T1PDB05RemJFsRLg7z/dGTdGCd//TOPvlKkbu4ak2eSI+wRBETTIAasbtBl+kji2djxZoar4Q3Pl4PyOHGk375Lo16j9inkSBTfBPPLeCQEKipCfLeOogm1b9UdDFFEd3sXaklyonbtWVg1bB7RPc0u/kxumRg9ZpuW5kMKsaPWbS3cSpTqKSnCooAFiJN70MIUnu0N0SdubII1YOi5YWG2/5CE/1UMW3I0F9bPNpL4nm903WD5ysKs2XFfM2lVklGIfRU70h6zlbgr9EVdVTkq2LFN20WwE17SBC7S+Fh7B379nrIgOsE+2uM8idp1siK8SjUBoezeTB/E3ROXbH3og+CAOqIgA5staHBGU5rf9sfnRT+pBt3K08dqQ+rFFkVQkqBPZR+BzHY9v9hc3Q4rVR7V+GNT7FLn1HcDDXOgT7Gg4Ae08lzN7Zc9EuDMHZFyDVA9ePy/MVMZZjRaSFrc4ylSzTI+qZPxDLWuUCGNFbnWIYS7+1lAVuoReoYwDAKfHYlUtmpb0JVPhiKpSMRLeVuxXSZTdFjKX98yG/yCU4Jn03S9kciq83YoH/1XBMT4J1oV2GiyyNhNyPk08Dx7Nhd/iz7cpA+j/+XW9fUkyHUyOGdxCuHLp0CT4qA3whcF2tEP4e1gcRgGCnL1hmt7omu+oUtf4yMwwnx+VLYaWoHJfJpEY/SzwBAiNUE4MC5ul1u1gtjUMecicNgUi1J+z/ZYC7Ur0MGDfyvKo68Sq9a2KJmZFBW/O1GxKiKLHF/yQO/5JApkdwxOKH3BD2Q6EYxbb7Ffu0mUnyqZz9HdqWPxVHSl+cUj49YMTpqjRl0R9y/jcVfbrsc2A4Ev/qUpBhmWBBMlvu7oNE5/+FtAmf52f5LRZLsPGs4xpPcJGLAucZgCXZaaphbUi76824FZdPWk4f0wT9UPndD+NQLHpcgwU0Iwle8sRSoZyxNjXLhUAwj+xiI8lLywqppjit/uskp7TJm5NXhSXaUOxr4mWGMn74EIDqQS2kBbZ5Tfnpfm0RJyGYCCqKtsZTAkGPeulr8Sxzys67ApaMqEHcRPTM8h4hH3cK5um72Zx8iNCVjyzkJrzAWYcQ8oshem3Z8DEPmiUjoic6kYr5SF45sJ1l7arOOk2D2bDqgjFuYIuR5XvV9Obo1tMsVxCIzoS50FoBKy5ivtWTDK9DpU5VYLfR0e2dDATk2XreqbAe+KEYq+BSEaXrFZ01WPVnHjZfd2vrrsiDnK8CduqvyC/A7S3rPlvK+fwNTI6MFbGBg7Ctu/4l9e/K+IfeVMOH8klXlLOrB9aECUgiO7HXkFFZc69EAr/BxKGTzEpK5KyjLOTcHDi2V0qEjWlMMgOBkpGX4hMRRSPmCLSltz6w45gINNa2h9HHvHsS86SyU7M3l9AIlv94xvt3m09c+WinIue8c7kluEBAwBIiodpXHvrfQP2P5xfM4dSeT5hEDCYXt4WJQlU+q8VKejGfjHz275tlLvki3ZercPlVSOvSIJu5Fvmt0OBVi4a8HKdWcQrCBAa33Xripy3Rb6fUR6hkSrsSt7pSK+GhpPrMidSjTez9TxnU8RgdvDuQx/2K0PvIpuYae05oniVrOhzt6VXgmxT0aynp8xAJsxeqzoKcTJnfsr65b2iibXQ38p0QNoRRwC4GIYOo+H82z02U8gR9OYqO7skpwIWGKL+HWkrSO8IsWS2VapEoqrSP+Kg+XlqfKXaXlPfJmUynrI3NqlkzfYVE5nf1yTxtZVpZ5GW2SHOHzyEoFMNEHYe0jex+tq32XLFuSrjt5KnPkYlkKRy+ledhuBt4kPAZ1oWTsZzYfyfXVP6qdmc0ELWS6rezPKefRemTiTVCEUIbavBgW5UbX8VA/XkqpTFulg37MkZn0/ZC4t69+jJ2UGWSR3e0QI328N9UcbQ5bC/tR5S8r0JUEXaPENz0fI3GtjCoEeDxTix9PWN6807vI2U8v+Ft9tDoyznlX1o9HmNEOkTMbGzjgAbWEWVI/BBhuYFJE7Mx1PWGgbGbFt4PrqCB+S1U9pvXCZP54oVe7Tn1XfJeZfalsL68UVO4655NIGKw5NYYtYcqQVhjHpktVn6Tsn0IF+kKK3i9WPiskrfvzMVMVmSA5FU6d09ncUtJxnGCDwYQROiPog/9IkACVoC+VckiiPFf2vF6OPpLQaEGSueBJ715ZOX8KrwQJYWz04sTGZxRX4+Ie9xgp709tDbQw+t5nbPikRx8fKvu76YBol8hdRCN9/SnbnEtyxXk70ggkGi2OpNky0vtEQXUTIIE0O1RckS3IjFpoPEA/SVuKRdI1CCr5uAVnfRbrwHjyFUA2EuiSxQh5wUEaTm4o1Tps0czkUQc/inhjU4W+JCjGAZjXPgpCW0yIjlB0ERQbuFg7XSsJaC4P9rHOE3G+YSE34IYsGJ/vLZ9MZpjC/X4pfXwNPWst4+OfipOGkAI6Tn6XefsyJ3XL/1pr9SknZOduvDRuHTWpiajMviRtafq5P0jx/KsZFvSBvY3PxXDCPiWm1ZHc4iqb7vdKDVCmJkJTkq4INJdOEO739mQJmbwemzalS9uteE6wPvZXFsUr3+3Ht6KK4UV9/bZcuA+LvGRBfHRy8eK48mkZoTeRfL00dAIVJMcUAqCy8UUqgRiCFJCz383C8zh4RtzTaCWHyb2G0fh7pUneaVlgTpDuyIU1HvXTWGrBjdwuljznS/TJJYhojoJsB0EfvD8X+h7AREm7RU7S0b3q2T3PV1DQjTy/Nz5QKIZe63vpOep06gjB97rW+TvrqpjH/Ed2BtKtag+64G4WlTISAulxLAgVP1oEvFCRHBG/kHA18wnhw4F/IpVcKoI+07HJg8LRZIHgN4j3UzQNvkUJQi62M2ybKUnoJJQ069I+p9CrsgXgn6JPfSEUnah+aMW3chgMBVyYTUIWjV96zjPzMexOMhWIjD6OkCMMbo4mWjFCddPbWwvG199d1ULX6hd/J96xVx1yKzmpt1788WF8Gs6TqjD8ykEp009rY76ip8p4aO/X50jHv4uwQo7G7Mo4IAsPCOgnitUxniGvag03hz0AH7A2bPj09fxrqAGdH2xmvUg1UtsQPPKKaF0jHGXYupEGsZxVoc+VhXoyrUSFHgnA5LKXe0tEJl11uYKY6xvZdPLJfSMajY+eO+LkPdkJ54qxnxGptS1mpYO5UgAJCRz7aSivKyxvh+Q7jc/hi8O/h9tgvT81IUKuL9Vxu8cddWT+NhVRoCGVhJ7+MVZ+qEIlHlmuoRVuzo+5YsyCcrCev4F9xuzGixfqv5JezaKzwOngCZ9+ipBLerkiVBsoCXSZmR3iExZ7eWdgx4eEqGUCEigyaRLYJirbmoV+12hzFT0RWvRWdfRpcJVb+PhD6XhPZic5BIy3Bi/l1OExTv30KflIGMAYFCyH+LewvC5DYOMsaoAgLcFJZPZNnsiJ69eu0XopU0oOf21rwk25EJyjEOa+IF/YUazoy3PTrYDmpgsuKYwFz4XgXD5M8++LaKpYuT7Xh5EfAudR9djRvK7x0flYx+3zRSMub78TUu6w5QVF35wzn2p0FXd5VlLaJuKYhJ9xgQqP3T5Ig5Z8VSSMTHCHZ5dZnbgX7QP0GppTAKzC5zvtLd1sCUV86e7sSM3S/R6YGXYsm+wXLE7Yo+8BHFgd7jqeos0uiNw6ApKAYA3qQ1HlskxbCepMuIY3Ps5cEV9i1+tAjJvhWJw875UjBu29EduqBCh3giDHsH3bOQHdjVcJBnS9KOifJ1EDSMWks+kofDn68S5JjxjbJuOYdNiuURBNNUfUKlyP0KMDegS9vz6QiKbZ8Xx1xYDO79Ia3rJPPfrh29bZ0zvxGgcAG2ybP8U/cRPnGsl5XPibyh3FF099NAUL4S3qItJfUh1vbqaQDzdLFw5Vi3Zk1MAENKzpN5CQ3R3HYd/0UTKpKiHFwxRKFsfzcir29kGgic3jzygoEK6nAuCGm1vRPFmS1zVUUWewMZKD27v8Vti+hu+dzl1qZtgFbgqhAqytHjYWcCpO9yrLPgUUk8auNqZNX7tfCBULFLhL0We7pJmeIrahvyEvXIbqeBYZMHPGpbvW4BKydiuCDI6nhoP1o/xT3yMruHsKfWKSbcKf+KdWB2PdwepkluzHxLVWsHwFrnwvibrzFP4382+QH0UjQ7cHLCMbJFRBx61AqITxru7qMp7BngUC8WCK93fm6+H6mx1Nb835UsJWx5iEgkwyb0kqBQwXmwkqIe42YR+s2IdwCaKt8cta6TbdNMzw8VlCdWk/cOC6+tX3hbQgQRHQPAZ/1scamkmEfgqll9jcRq23Xp9cX8Z+y6nMsCeWYnNLZGpodZB/MrBSgqQvhOuGJCM356O39IE7CJjflh/hLAfXPtbybgJitt1ZU1NXiL26qCJX0Lm0+/6MORGMpICiDxR0JF46hvU1kn9h9lGH5DzXsCbX3I/UzEXwXmHQYuH+SuSundjMWoh2eq3YT4f/lSTTlPJ2TUe5LoGlG65ivdF58p3k1PBVbS1aZZgAKfU3ts7pzDtqT8DiIfx8NC2O07erwqWgdAWdwA9Uezm717D2bOrut2vevU0M64r7A9Gs4i5tgkdFM+PvCDshzLQt1VkXhrBAYTYFupwyEykyKfp0esenLOGDKdlwyRE8l2lxEV4jiaD/XL9G5QlPOi1NXs0oRrSuFVNPqB4wOYaR7mAjrAOeGMe4F3Af0RW0/sXQHVI2Xiwxtj3UyFj7lL6rLaFbZYdWE/925QsbVgaBPvLexOpMimJt60B7zsWYUg+8jYu1WPFeSqBERh/X8AlbwM3gC2M9uCC4lolpqJETK8Yg/pnbfjkaP4F5pVhhTFVS05KQ0L3o7R5/hfCViqNtgNXga1Ie6AsmZe+VwWXAc9Lrf3/F0OmHL0KTuxFz3p6SiFQferEt7h5ouQtOmdVlsqfzsYrh21SU+VeBFU6Jdc/lo2JDzsz++w8gLI4Nc2FjHIqOImCcv4HwAB2s7DVB7mLsZOyslvfrJWA1LeDH+6iosNLSdxQ95kkf4H5QF7C7pyqJB5kvFCPdfZ3r9SmP8AwG8qOSOv/8Sf/pIrd6xD2ufwU5vLc2ebe3oGodWRO7CKOwupVMifOj+OWX5rCwp8xwiSMY0PvJegQxxRxEVRSKjuFk+9swQ6dfx8fNq1I776dNrAzCJiQpmhCTwLy7UMgoLD2ifMtnFPrtq6r4XwlzSt9eyrK0wwnVogc7ba4RfsDqWlxIoMD3/5HT2zi7Om1L06FrRiDCypCBg38bXiAZFbNbBgRXTbLHa7w+hH6Lr5GPNpiTNMKAMnaaTKk1RUqewX7zT3csPzTQbb1s773SWcq7cZ7gMq2VjNY5p3imHOfp7maOxucMf818WN+ESK+DATEnSbMtxjGH3y6GMuv+W+AmWTPgf9VOYmmGLMZHgl6tOfKlfUkYEwtK4vABop39eoqxjFPEQmt9xDKGxaVVE27gFNwSCY2ua8Vd6o0KsiqBID4nCiYZzGW8wu2Rn0wIc/4+1Fnt7aQB3qm7K9yDhNqSzpYRbiiqkneYdRD69ltk05ZJ3bXTVkT5i3k4FZZC/NUTsPHHOX/+5uc+cPQB4zf4AfiM1D1++aZctJVk3E33rIiLRRLtffXC4LA5iVxThiZng8trXaJPMnhrbPprSC1LdR/4FemNJvoXMFXl1JNdAH6lZNZ0mmtloA/bHRYK3WKwsWc6obwR+6MPWbJ55kkWiPXtyJ6uCaVmMPmEd8B3dz/6cxCXtZeVlNQXl5RfahsqUL5WyH3pKO1Yydg8gI17A8Iy5/umrQnE2S1ziI53jmBEy3QY23bHzwntHqk5HRtogPnGf0g15wRiWle1akqvMrriIo73Z2hUIqhEbMR6PjS92Q+GQBG6aBVB/EjIVP2NsQ7MnHvKIB8WVTtrq526d24RtnJTQ7qg0dHnqFR2D2dYz1jUdvljOi/etf2sccIgHRUuP8vHoBZEbnmh6laf1d8HTXcwZfhBL1pMXYBIJCkDpvT5WpTKfM8EuFEwYpbbZ2JU3A+CwGO6O8NvPC0t/To1LxgzUjMXbOlxNyNh4peSGhdiQ7Q7wqsrkLhgtVMi/zHgL4WfYS9LCQOnJsEREAUyDyLj9B1Cw2D9EkvOdmMwvbfepl7KC8Ci0Sy8jrHb7+QZnAWszyCTXx2uGCNZIX4VVCNNBYoOpWmfMzRvuQDxJyreX5Kh38kMZxs0XdXov7f0+N5Qn2S4quuS6IdPJtp4CK3DRUXaKswMA+Afy5RKsr9yJjWukgtVD4OkuKXDnTkXvA96xgIYEbzuRME/yJ1RVvu2SE5HGLdbnpvp19+KgSPus+vIvCiNLSslQVc3rcmG647nKy2eX5lwgzEtTjMSnMzQFY5iD40GaoGuxqAgyFjb5sCgbefaYroIEhib/xvEKPkteTsD2maHttQrez7cPkNz6caITpwe7O4AUCWxJKid0MybYjPRbW85fl7Hkxeig3Y6ndg6l57A8s/E7E5mClX0DDbOiY7kjRBgEVsN2yCafWHVY+Or8nGZcUEptFHW2DaD+Iv+uTxdBdpSxGFidgWm09RmsXB2Px9J/gZKJv+mB6LtdgApA239lnVH5Z2YjCM1KJMxGghKzE6SvK0H2lxhkLj/hha3+fijdcNBbyfD20uCO4Jw5Jks124T8+GPNXPFLa4wDkLq8rKvateMcVpPQ9IhlOqNeLH1h44AiBO3+FnfRLgu15TfkjDHBcyyFTaiPcUdCdG0ZPh7cr9LcS9WLZymguS3fl2AaM2DC5i0K3CP2MUnxquqswwBmEnU9Ytw8g7WNZj6IUXjSiIQAAAAA=');