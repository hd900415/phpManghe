<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('03DDAD194756B01AAAQAAAAXAAAABGgAAACABAAAAAAAAAD/ID8MYU4axdtdjgT3z0JAiOoXLMnBirrhRKX3oUZuAf3uC7w9IMifWCTNYLeSQcskYR64wu1PWnJRJJ49WhjMHacWBLKXBgACFyyg6GlE9vEKT1Q/thHmPGn3MLx6pLXaUwzbCO8lycpIAAAA0GcAANVnMjLl8xHRccjYl94FPvjjoBYS/czhiC/eHMIiSCrkMlF/REDnQrae3BgnqvrMSBmy4DVsmmy3T26i1CPm/mABr6wopR8ToZV/mUKlLR9gOB96nyrcsyyN3S9WF7HwuOSNVwByimy6+3ughi/VcYSDU/2EP5bGofKT4WjnoWFXIprxcQ3a627jnWAzAkKs5Q4IqGv9V64th8Mso+a2+0kb0ZCBo/LPvb2UxnicA4Kc2tgbOV9OQ5Ltt7uSBC6RsKpr/e4NJeDEFxXBAeZV8b5M/8Okwh53fRMTTRl29AytKhJZKw7ztnMOZmZpMlBBPLu7UjQAuTtpK7/ygEwjBuruai1OhT7qJqpIQ+r4KRuGAkFT/k3kw7oOBxvn2M3oxaWWtFCHTMncwk4JahgwKcS7MoTd6WVaalTcTNevjJT3iUsugrp8JB9OOP0/ghdQDcxnWDv1ZO+MxcP/0yQ6Mqf+Z7gMt0pcyuyzn2IDl+P7YGVUaqYvJyYcso8hjXg5ThJvrFLt41ptIooK8y11z652pxsmr261VGP0nj7Spw4PCZJ9szXKNlBx4EB41/lckKXKcREA/6rmhOz65ehu7WefSpEoCQyl+u8MlpqHZdwhVDKjfkNxkC0QE9CCF36QdYMHw5fctpFcVQYhFpBRXcUGdYNpldD8+XUReS5ckpELR1l086SjF5PUoGaa+oft/9ju4lCMd6lDnjIDhbO1i6Jul/3XHqeENbJe9fbOBs9e4YjjMVv6I8PKgQ4fN8q+WxSinFu0Z9RL+UHIUmn9Egxy8XsTdomLrJdqpMZm84BS+CPNXKnym1RK/GKeK3iLH5QlYRfoKHdyv8dX+RKOzmQRsGFmizqKnVxhce4R3QCnDRVF3J7T4KKvsL4+LcyPEvycXdqsTRWsfpOoVT4ZC7VuMLQHJ/DGPosALWGs2A851YLoUOM+2e9Gb53BNHK5TrTg7sj4cqu9K1oufWEFstx/70tykcocDTIQ+B3doGCDpNl7n0bCFAXYp7+cRhj0lE1jhtJvS+ZzbXlL2+ET0rcEa0SVsNITFZJV/zky1+Xbmc6PXtL1J42Ia7l1LcH/bvrnIyNoy4EAhSTRURe7J9cr936RK4N6gRwB/TFNh9LwzY7lMq7uQX8fsL5hbfBy0bjh2Q2n8zGuufrWBvuVw5T9BopBJgH4101oiNZaA8/otUlJ4hda7kzQ5JTD7vn2HZ/dDuYx3aNz7JzVRZ6gfQ9IrOxMsyzAUUfhgOOxrO2jOeJeaRrIErZ4Z2SCatnOKg7gMVywx8ST0sumXjAt/Rqu6KwC3l21QX8j625DCrdzZVnn7RnLLaG1CBxstkskD2555GPkx1DiUKM8Kcs/q7HiwDQPjZ0ZcMMFMcKUNfAIehT3uJVGGDoFYovHIXksebGyJcAN9uaWG5W8LG7fjDi9YppZd0ZdXHueUvUhk+JGdjsqYKYTxv1cjmmp3tZx5IyMPBO8qSd4NjK+oQA3N1h5kcxan+eUCLuycxy7eUaOtnjnEX4efwpT5lVWPYqffcA9QcPYIjnS+DjszWoh840PGV4BB/i25humxBgGXeg+cl9ntAPxMUCXqwC6f40GaKd+HS+3LjeLNGhd90vj+ATi1dqeRwQDlATvJQyLGsoO6w4VK+RRmkI8A8EnlrxsX7D5zqnuTtcV4lNcwPH21z7HNjVffJZ1tMUWlfRh7pI1ICGnPGN++hOEfksSQr3x6cwqO/KSj1J8iMe9wXZb09vfdSAGCGXpbQJMmtmi5LAUFNtV2LFQ/vftACaMBolJDIvqSybMNvaJ7ZcWhRgSGpHnkrmsdEwrTpjpUUEBQxielVCY4V3e0BkiXH156j5keq1GbgUw0EEBCLGpNRjS8U2vpR58O7S6+AQqN0mPsIXupXeFBJ0f2oXr1h4y0V+gJoHXEiHIOxvdcDdH5GzQKXpJwp+yfT0fhUHvzTpvl12YoSrBpyp/gsFa5lZKLe/BaQUlVnE8LQJq42oFLfXoSTBkOW/Jcnos6O6mMeGNUP4S92QiNbNeBIwLjMG018bTnSy6pfwGhNxdtjOUcWl5CXTLp6iBPu6asAjDv59v7lsIULuKvdE5/3WnPgJ1ZhWzPVDScjlXXm28s6IvhHYk1tclPvMu1W7XcahkSboQzhhNABEfqXgn0I1pekkBkjZDTAX272CTlweL7qwd/chleOrubm1bY9azrND+hWD1xa+KbeEKMMBUHih+aV/U0/a/1M73IyQEPWk6Gv+5mjQ1mrcy1s/ccjMUtdG5E9TfoxRukQ4JVuyuve56sMg4eHQrOj3A0nfc48JmEeyqzwUSohZ0RBFddmzHjk/qwGsd5c5mG/YUml3j66H22mQL/y7//4+/VZmc5hUfNRMFcj1OfJSL9DpztjAbSQgi7REIKecUXqkt14RV5WXdYweJU6cuUT4n4VlwoF4Ja2DgQmkxeqSP9LP9z8FmDzhqfjMgh7ckT44uno7D5nGqKuJMuIkxgSG7UluttlOMvEAyZSR11JAzqvH6ZQK96G9PjZR5C7UkbXDmRW1yJvIHvnL31ZJ9sA97FSpvMRQ/beEjup3nPLo6eQzYgzQlVBXU4IkjxDSnoJ1k+bWJWlhd9KxNQ4LncOaf4eZT6Xma6IX01fIYeXs1YhRN2WeiKP/l/IIL3POjWsjEeoA0ZrecyH+/ETN6+vO4A8Lf0F4RzMbsHxBDBd9rbEay8v7f7paXHIpkcbGspTK3xGGjWC2O4X1o6vOmLF291lc+ySiu9eVSG3cceML09QA+lj+X5QIFu9qbtcNLuI5D4Ugjdroa1NHvhZFBWdBxVuk8wGJcSANgM1snkvb4rsC7PRRRQ2l93hYOMR+y2APuxA0DXKXGh1VnqnZQiLjHLJwrS0qOMrZpG9Vy4j8RgbXUrV+AiGKqDEMDlP7K9Qp9xlIbXq+G3OdHJfhpAIwXmm7y6GBsMf0cDNDoBg3vp1evDEL+cksiKqXzMMKMz4w7ELxxS5d1t7dl/JVJQteRMt54uD8XyaAmc7hhMIqwxDEKhPWOsJqIHkQSTPV6do3JvYyzaxPTRgEFUbarCYR3iJ+E9V3Xt6aPl1DJ1ukpwq2ikbuSaYIYD902v9dztqg3OdU4hvylkjmmxosIWOgec3EMXU/7GYB2ZMMtlLvEZbfx/8Utz1pjdnluPqW8eNH6DmHCsCZK7jZNJtxJEMroSGojuxGFXStaGUkg6a6cdDoameA/6NsGHkTIazCNQZWkgag/cVEW40TPcsjqtyltq7SXjt3su90qMW9mwKaNGkn1KpQ5TkkiDbLzKFpyynesxSxmo5sPgC7vgooZGw1IfNNRKYtDIxc63xQZk8UiERnOH/odC0BRF0c5WOjb5HINl63/PhtHaLsBhchLjThiOilnrYXObbIf4MHgLG/d35EGxvy7luDnQe8ENEMcEkUr8kyKq8BoZcYM0XwyEC78XE9RTKjM4YLc5mIuFBhzVPg1B7/MudQpMBqJ/y6h+dhTY+7+w5eSJWyMVog6mNTcT0qxarpg50Y82fgWgBv/yFtgLbMOlV8X9yWisEFrm/rcqf9+41UuCD2Z1gyPz2GS7zsTb6UoOq71L/ZYovjNM8BD/g/GYSvXqd6bUBGIfzTZOTEoyR20YPLaWBbISs1kBt45Bl8eBDeznK9qCKR8UdAvQFDKHQCcsOA0INTO4jm7/0OYEmORzGqG0vMlo6ZemqdTAr44LZ6F+nhElR4qDajcw8WWzhfBaMa/sfVi5oDGqdvvtYuM+++Fl4LViEWMEL6VO3AHr9CkZvaenfstw6v8pFlQoliavdmbBSXsN6LdmRey/IPd4zcuK+M1jzm9IY8oecsdJeSJeSFbOzio6e0XfplojExAm4qj7bAysJePOjOQJZqE/Cluoj09Z5Nk6cGyHv5BaPIPJK800XeSkyljJq7LRmzgRxakTlftW24N3s96j6gy8UB31XDZYogYNbl+7IIejTWUM6PgyytBsZmsVxMLfd9vOE+C4HmnvcIheKC9i02hHQFNIuvjJQbyC1sBq2DuMK56Fqu5wTsV5hK4gQ/qlyZbMJ1wYM4104FX8Nc7df9x8ZOQMD+NlqKkgfAJeW+6H8JiGLBMqaYo3OeInXKhYe7CUjHnAOyaf13o5s2gh9YcVeug+BZZ+pFvKAMz333HJtKGSY+mePbfGt4D2T4Y4eJnSOFURRChbb1lY3i4nG9NBoCApGEKZS9k+ibSw9Ou7YUEPXtAXJnVxoiyP5z9NK3+5UY533Y7aS4RML7ZpdTqDhK5hKxaHNJQsgyU1njOpioNojESBMfWXG8suP5fgo1dHVH1UQTnDTgAVrQRPXbq1IN+pJMi2XCV0cW1WtqozJLBQ+JfVaakjXrukaKnNx5nDc+3uoQ6gdd61jXS7Qg1bEXraPW4GiSxzSUAiWdTaC5frogcZ5eK31wHtncZZic8R3aL8LbvOWMUi6dX3z3eoj7e8qgdKq3kexur7HqQBBVhCEWjkhVl2mszQISPeuy3+LRVtW8+d0hfKdtQRJCqjYlCEJKKl4bZeXGoW1WuO9BKhbqeORE8tzIwjQ6TvjSo9betectUg6q3iqcwQC8pEjMWK45sD/Y1zvrRpiiUwTsqctpLGv4Ul8Dgr/fm3bAip2nz2RKpMZB3jgRv9RlmHYr9vhYSvAOEZilrV+E6skSAeW2m/xlZZcktsZN1cExuZKM35v1QHMm2re+a1PF2pDo1fHO2Hu9qwJHIXsAKi6urIGG++x72d3r/muEuLE4HpLOq6POkI86dmTwQ+jvgYrpqqbXF8NsrCI1ZXPGxiKfFDmxbcuu2S6e+GJjwfQ6G32wA+ElQNWaUh1bA/sBJ5t4+Q596uX5P4dXTyWUClSwGgbwQEPSp+4u/7iuYLAVKeXjQCtkyGF1BbppNa7jrTpqLwrHjQI/m4HymTkqso6f4PsINL2oZq1u0cVZ4Sab3ywaTpGslftAUWFXkq5j78hfxHZPcdZqhRoOVJBjQk6fK/Xait6+cI/NEu+ji+9rI8ELXUvspGLNJdqPjpW40WKh9LcfBicKv6xNUmDMY869Eaf0J8S7zavx3VuLg9DEvO2mjrI8WqwRv8B7mIvNnaeFEFaeteNV5+6DmG8BPcR0XC+kBcvUFZiFnKnZ0dD1EduLxjIQIKgYxdfcLl6dA3RQrzi7Bo7Bq0qr1RwIjj3g1DZaDiL0SM45i312Cre1zlCPNbVi7dKJ8XpiqoqXoPOuUud1FShoNtbUWnhdCmkfPugRokPO8vqQ0mBoypAdFX6PNppBtfnvOmfb5QueGl0rGdgBNmhv33toLmvXbHU0LLlaAMt/qtywzwgqkplYS1bSWdR5wv/XNi8NGye8lHHkpV8hfqdtCtvwDE3h3hC2QpTjAzqGLwsJzaUhPiqDon3N+jfk0X6cllVMCDJIG0vEQ9DScCzmsej8DmpdpH6vYk5W5OHFHTgMTtEl70Ys5MzZk/C/u/5TGeZ9LHEeSz+vxaiN48VR1Fm21rlQrR38R+h4iOcFYSsXyQCIojT09/X42RUQ5DErv5iS4mHGlgKFc0AXud9dqMcZEB+Tz43ukBEch+q8X7FvW8EO6tacTTSasXR0Ttk8hl1F0pIFMtpXyqybRrH7V4mQTzFakDiGkspJHBgGwRHJcmNPvh7REzKgi83zghmsRh8862jNdcwoctWsVgS7oC0LBqtbLeVKE7+IOmY/9EUDm/quYPVtmw8w3ZhHWzvFG+92tR7Fc+zLYhbk1RMNldP/7zyQPJs/ewHr/zgRvKGZmlghSDp5WguOENaR92MmZQWGeFjKgqHz2tZozFQqQS6ecc/Yzj3z+9IffCa1I5e6lntSHtJNAzWmiS2gVeCnNVi6lPGipCZMR6/DELhqeclrUegDJmAu9QhbtUR/8PMvEZM/cO04MWKGewucT8wjnIkmBBojgGboIqK8sqn43dV9dU/wYyHHQ4lQ5r5BUVJ4Yu9SEH9E+EqprAxw5PfeXHRzCR5m5kK+UgjKEfBcSDXHOKJo55w9HFRTV/jLv8Nwa/saVgoiP/Yo3ZQjqnZJf2Knec4u3E/JVxQjHPpgtPichW+nfc+nND85kfvfCt/DGWhb7Pn4stBXnsInL7MRxfyMch5hjJdxBNCZV0Kt5xih5BwyAyl8QqNjPe1vz56NzXh0U0Yj46mTNEYtOxEG/sf9Fx4qoTT6xhq7e3mWL1sLwvgsefCJEmt2Q1MjC0LRsYwIOt0ZV2JpbCL4q1mDJ2nAE4GOLtkdSyjK86y/aoNszq5IYXfLqNxLkuT4wK95qWQMVVHt0SCajp3pIVxIhkLWNRb0Ey2c3Pxb+zAhjC0Rot6kVpphf9ebERX9TVEmC8RfnLPIYCiBCig0fSxoVEeb4xZnVlKjedAwUoQOzbpnprizF0dEPi29tiU8jFI6SOekSGcVgNc4ln4WbGS9vhTDlRgpEnXI6hlBeyR3vDpjO9ndnrUxxX6Fr7Olha6buEGY6RrnahtRrlxYjukJQ751EQmx16ueVQrOpbiUeuVg9Ok+B/DMl+rAfHE/42xMlgOiO6Yn2Y28im9Wyc9GDqUfII39Gw3oufF05fkHMFEehYakeH/xVBpdZonTxT3BvXdQzTtLEqlBI7raswLIWkkoCL0r/wOcmukXEldAZdWlrfane13aWvwTseIetZbYQnFxXGuFsWE+p02qF2U/61aUhhMXyreDnSSET71G+JggE0B+Yexwi1e9xHKrLBk2jHfHH/DidvSgms63R5xLcGII8S5VY+YRoSKmM83k7L8YiAoJNoQl9mabs7+TAiJ7D02Q8A5Y43Cdp+OMUekRTblb3SrmeVAzxmT5GAsjYd+DXdiJoQCrr4COucdsTyfbSguWaykGi5w20GsjSb2ohgzfv4yut20SH5wme+gtYl6C2KkkERkAB22UOxASQNW/rK4izP3AAOjPrgc9JYH3tjknRblbp8/0tpWsIEUDdKcFThY7SRlkMBqYi0I4ekdDHZGRQcR5b9KpjkRzbg7d9XD3niF2IP0ySQ1+d4x0x5ndgwlH/l+ULKlrfp6CLjRgFmQ5hoyLXNEU7nq1TJa7qsB7XfvxAKQByPOmWE/8yu0H+pyJByFbKWUyFzO7EwmNnQPDIaQnpoWslxA44zNC1AK5lOdGjnMOOPoNM0rA1n9F7sgkvd3YcaVb+bBRYh1B9frSC65kV3qodUEdMMGgwZneWjQHQwa6Grr1OHHcq2ELG9j5U6bgEjJbktrqvsZxpf7dcc3A6A0rYhensEkWmDvluPDcIsxmPMYREOW0XfNwLLsL016eCK4RboHtvw3r6ozBR945sb2ViCZMb4drwBkXYRWc5UwSAEOu/6upB4/nRo6LYPSGdytlOB3WadTzIcd7ibvnYWyUXeMzqRci5DZXhubXUCs56hK2vYzEC267OwAmHyzP2c6lCzP8/NMG48mnnxHavEPS/o2j9MsBUswRcUGB0HddludmaIkyY1Vgs9c1bJ9V1I/PNViBx4X3fLpGRk8gZ8lQkHiShKScFlhiml1SQObnt7FUAZQ8BgUtkEV9dK3+xfyqVKR7fZq03bRWSS+LjYg8tPqu9ziY5NyAiVhc0iZ0yVPfpz/mat/t/u/a5bddGvbdEdt08QkYM6IStPmSpbLDizLKeAc/DV40hBNn+T8zKtabjDzhfFavRimj966oPTE3S2muzBnCs4S8OHEuocc4d1u24gZ4egjPYvFoZSizgElfPfsqSlQNn/0fUCDvlZ60Vzd4Kind60m0KbOzDHHCHoEb1B5DENy7T+HvPlvFMFBhPmhVGF2jRTYghGwQLpS0qRDtngzRFEkIHHrA0KT2+j+KqMZ8Im4mA6VwoRTWLU4ZGdG35kqNS2vuc2AkEmG9UIXVjOxzeVYjxaYs+T3NvGyLsMMzzYS+Ms2o04i4HZUMMjOlk04DisUP6/dzfsFEB7rszgs5g0+Lfrgr2dmqX/MzdB6UnRxQzdZeeaPF7iPl1Hpt18cYkBNR4QCl6LAHNXJccxnCGWLFm8afN4wRRZilPE+NH7tmb0UeEyXcKCRgcTEB1Gdm+7sgHYxCcxm6AzCdx/c1Z2x55lB6EtMXOw7e4Gjz1I2JOPn6wNNiDgVKbtKtlYsCDzInOddn8TGxiaR8aT2Ej6mGFVKeDmEGWOJZ7jK9MNoPuWnd4EVIBhku6GpFX401aJD1lK6mJzd7BK9VUsNKVuvi80EDA818cqEZRoCQSAHlXBQDh8ibhvUfJA2iW4tbnBZpK5sFB8e4App0iyVos2jKwFbgYuW4zRz3tGSa4WtYAsb8mCqbkbPxWUZcqorY+kaEH2rNBTKfMJzrxIzDsra0II4nw36uU2b6Iq3h47i/JJKaaAvKKGRYScfrv3aydqqFLAcpL0KsZAyXYYbA3RbFcAKBeL2jLhL9ko9+FKan6JsOSnecVx0nO/a3CmbAvdzMGxDRU+kVpDiat5n9DCvC3RwrK3fSmSNsJ0TPijTBO3xfR8eUy1qdcBUxxP7+g1CAZeqCfwYHo8iyXp+S1jZglE8qJQB3IeAtin/zFxOw5rS3epKLEG7jwUeN8eoz2o3DlfTCTrqQ9AHp2Ykrq5KwV78ktOVexIPKMM6AXJweu6Y3IdPCltm7v39n5X61yVA1AH68BlE+mgoe8QdVOjF1Dtp62aQsJIYhmVnIk0wM8EFHwoTKMpsIBxwHqK9zc0AGYjS2NxMYOQEbs4sB1izBAsBjVzEocbSodmHbaBOr3LzgugXPisHJ/gqA6lJmQ4A8GiRg/vY0p7GwZhkMHfpQ2a8tWx3agFZPp9yYo+P6EtATJeIRwbx4KpfexUxIis17oe4GyLo7ynd7badhKsPHKTpUxfJ9FAZv7S1ihmRJgBgzDIR0eBfS47eMv2Xy0NplzaxZ/SjHI3of0u48Z4vVrITLa2w9sAFVM1uGKZ40iJflJxsdjuqHjY2GurvRq8qh+dVtaSQWIDAXcQNVk6w3acKQ5CCqJmyUu2zved5+sOCgExd/Jbbt+a2Z9vAgoMayAbDNqfCi2RwTYlNr8nD02jC+WWq4Dksf5eV0xE/R6yWPQsiF+1RTWDWl1beF9aRrh3DXsfG1LY4m/TY98i29Qijb9kcoWCZnpmpalrsc9TpOF9AWm0X1Sl9778Ybhdq4KXV4YlKx9V2Nra9mmsEzSj236GjF8jxHmwmLhnpUiblSa+XjyguMpGkWuTa5+eJ9F5xgj9IyrsxjeAeIGdLgEH4gtVXdGMYgofnRyNmaBfU+MbhcN+VlE0Vj4DWvKRZO3u7DFR9/u9p0dAd9CEuV3ieg4pFmuo4Wz5eltDMiMS6ZfCQpRk7ZTxIc95JZVbnE9j69JidFkExdQqFaH1uU2eSdfttQdBk1UvqQT9JnxOoIxr9e+Py0WQfkpXzELBDBf74wmGxg+j7GvVoCTq1ebV1UkvyK0HFWjpjUbwaj9lWPU+TDr+q+0J/UbwjKtUEefcJ8Lc9kzBr2MS2XSbaxJIann92JRbEbmS4MdC4DqqE4RGsvUT7YDS/fTa94MwRaV6kvUdf4y8E1K9vRc4xj/eMW9DZNu0B9mVAEs0W1U4YPHjSCsjViUFSgw9l8UI1+aFIhlHRnwivI9ct87Vb1OcN9R9gLb1UjuUhIYfeSHprjuAzXM1HNN56krt4D5bIacwj5u1CF1AArl2tUb5t8QOkzBzAn88Bnc4r13VfL12xmu/l8g9f1NHrjgj3LopRzqeGSu78nDmiLeggERuq1s84bUPNoZYZJmO8YayU8/reDhCDcA57jZqwrem1/lGfP1ouzM8w5N4PDwIWcy/xpltQ9FFUy9qVwCFScfza2Y+1V+/TyzX2dWKHJm1Gh4zCRZSVqRkqiy8rbQGlPTt/izBhykrFv1amUE40hnCwlemGzeoIefmPKhL0hoQe/+d4cn7VGlpGn3BCDM4FIrWpBAJw+ze4+KtuWk+5LqmTElALuriO+ZW0sAy4Hpa3DXISh2FsvB1OnBDy4sztNJbXidbp5SrJkbBKoMWNe8GYeDSXDv4n1uWdicRp8AzQxGzAbowWJGF7BHyxJKXaM77bdVmQXGsCn9qZoAP2kS+ejZ4zgKhqsQ2b2INCMEUboGfXPeVlKTzQiK7mbjuwCmzRjQwivP+DzcCqHqj1UbK2e3CuEq1BmtKR6I6mlKEa1SmaQlSXf7TaHUSCOB6Azf9oazjT9TgFUf6x8us/p/R04e4AeNGQXQfjMgvKizRA7JPZHHEMRnwBhdk1pXgquWnZ7n2eaIYSx7TDFJqd4MqLt9fSVZ7i9i5YEu3wqkuQC2ybfSUFCo2sVlCqHRq7/oISxyRkTR7kI5fGpbqgfO18KQokCdsMeRXBklfxJDOSUsw2DPFvKERvf1O9if4I/TyiEjKwwmTSO9jlbFJaoLkeKkFbtqlMSMQG4ZY0q6WQE8GBga82vWsSU23LfPclOrJx8OFMQQ8EhHb7dcSkGa4NABaoN5o8CHOf2+CZN5zD3m/WJtndQCig/jw4CWo3GoryLazm6wYy1KsfGWx7TBFtNyYrKElwaE9r2pIAaK9j8eetGx/nWxWhdenU/FNKSnoHVXOcHC0aM3TP8o4AH8XHKSK5puRxBeioUVQAA3/fUiAmOTXbFqo3FZpCTPdhq75m0plpHZ6TAnfSMKdW5kl6F+ZDhq3oN7R1iCsSDvMuQImcUZGegZ6zfoY7eam0gyWFSUS+PgD+R/ddyvUcYaMB8RJeLJyJAyP9oz85IRRJsbcqvr8hBuhgSQcFMKUTejdipCE3dJzJKXkvDbCxQ3Wwg7tASZbuBneuxmCjREZwMsPT0/EKMSKdQyS+B7DZCCgVU7rraZTZ8Q/KU95DebHaCVE4nYxrn0iE4vmdjv+gIsUsZPGIJKvXgdhrMB9dz/mNZleYY/SPhwJ0Nww2BwKeM34ZxqNy3QVea02YI9nwkCU0LLu5zPUhRrYioGaaa5iUDffK8xwxfO2PhELrS2rXjFCwWWoAh8sZSh5wLZ/VgJxpzskLoSWEUK1BnnFfX20wxLyuljzlOb898zEKNx/Do27qKaPf9bSKo/WRO6SaAUB7HksIXN4S5j5BhX3yeKaObZHU1taKbt74+FIhhVMQpCm/2TNbkBmDxMzWQB+Xbzf+WK4YCttv1XohthzZkjBF94ZtZzpvcsVcSuIkONSChsgMsMfAzYnjtucX7KYjUmwgx1inyqKzJnC4f05UONjJxn/Hoko5cQYNI3iCUAkQ2ajGbInX8PNhusLyR3kgqyOvAiHgwMawLyUD5hyaG4Rtj63nzDX54U0jfzkGHasFmK3YxyL8hP4hdnlK4TyHT8r0T+9FPCK59/3eHlQlTJpmOBNTUqgbVQmEg/ELxi1sHQ16nBS/SlHb6xANvdjkt3fs1gIYYSfdIMI55MIOXPg4bDQQbn1pXsH24ZqWJrjzZ84plOY5IlUq0t/9EBwcx9kvhzovmMwUO3hKuqgHXSpJz7b1wo2dNOm7nHydFweoApPRSnyWDYxK2QM8NfP/T1ZegMOVUgrAVDexV52NPX9o8kms+LmjhArHm6yJUWjOwSoiKbyedFeFqI+hpQ7TDr6UfjCmuMS67BAAwv4zIS8wgGv6YOhUVr+cvqpXwoPXEdZFyk2uqDmtw04h9xaufQsqbHFh9NKh614Hsc9nvx6mpHVKqBNITUOLY03L2YCZM+u7jVu7bmhgYonvXZNy5ChgAsCU/1CSR54Rvrz1KNemfIf7NoGfIHHppUx8glsYSRnZrVzq7CnnpcAyDiTCcnMQuT5fszbA4tbdqzHFyyQ/tzozUlm4yIlLTicYUqMfvQl1+Mq6VMLsB7X70V0idX5+2OmbkTiu9EizRPK4xHCCphGEUUA7egk8bVB5dD9ZCvb9gC2p4xgIvO2hHgSKfhXO9HvUQET5KvHOtDL5KHSjzf+0azQaXlDvm+kDXsSSG/ZxDZjb08JMyVzxKLxr8vc4t/dBa+i1Fh4GglvfPof6VH8PfDYU5vXGSqsw8U8UMGo27AdCQheVGC2zI8OeuU2cAp/ugfW8/bK9Q2vVmiSh2wFK8MZsatIwZubmGXAOmCnYUzXhsIlTJHvzrSUuKW3M6YxacSNeNA++rcRsXPcA9OpG8q5KCfFYXrzAk06iToP74uaWpRbqMdnf6rqFlRkVxkcuh2l1NiaLtMhjD3UjJwiiW15aojlJfoMoaSi4t7JMBs8PCUZWP/dB7LPKJdLhJIKnfXepIjxfkIDuiMzNagul5N06OY8A3v7Jr3gfODQyDMgBfqSMVTIglgjG06woT+5AXh/5DbDFFqdqq7L2VSY30Y2GZ9pr13C0ckJsdVt9MfY7DBIWMoM8sdTcAv3XHkdGyWooOo28EMx3FJyL57DEa80RDzVW2VxuuP3z36Mf2Q2u7OlKOG8Ts3+iERs/p0Cky2rsjr9JRnm6Th3TfQkl6T0PNl66ud5mqr3BV/1f6u7NA2CyOsiPJOKnJ7WW5Y31g7ymJOMWYitP6w0c4r9HdATiSLcYLnvE8xEso4a/b00wDQSdWSviIRs1s0XmxWtvUQ2IBe/purUdly2i4+aqdRRFeo6jSSSHINeq3pha4vOAf+JIjjYEMD8xys+PttuMfJVHYzw0ktyrosF2ajLWVKa0eocTBtR2U6J9trUCWCcQsvg8jptv/7wwWj4k3FbjX+aXOEcF8DFRPn2QqW2e8FEnGYYgpi+F98AmXMUJg6B4kQM9QrgrteZtpm06NNTZnoR1czNPhewNkctLQQLa8MxuHp0OJBSFJyDdEeU7eljHPNuQtN+dboY5l7ljRsBVuaOFEWON3+hybtbKDiIsKQmqJDYhCSXZLSmPiogUPer8dBuKoy2zGqDBD0wcpWm3OhXupSd8209A2nU/tFrB1oDi/SPaqG6KVdcutal5MUZd5rbIxoWGL+cLnLiyKP2YC0CZ3VN3lVKDqncT36ZjFnR7dqNoTBy3P3TsCXJOPGLCNq6LaTRdLJJmI1GpB9tSSF7giKgGE9jVqNoXXtWU06qN5JfL3w33DxjQK66Wo2/mzNTo9wlHpTlnfgGXeuftVueiH7dodjxviK2AAYX4swluoSfotUEpDK7Oo74B1khDm+ViyOP3cclrtfn3v/lMjzTQLYihQoQwpgX0IeClaItQMnrVkQaNilBq09xMnS9/jWusCzb3fYTk4RpQkKUcAmZQ/r8hFH/CTGGBDm8eKBIeHmBDfD4r6jPdMEW8ANB90AKhOWpTbSQxQ+0cL4HxWhTZJQtfrP9M0G8qcBE/jooA7VInU/fA7H7WXCCDfhL98DjVGIP/l7/G3DhtONUUw0tiUFNXq05kK3eZEWmns9favmnrnupdejk1tttkhIybT+4GUrBNWMVotSS0XPZDj9Z+4O0Htoi7F3XsUmNqxYkRnx3Z6TVWHMM5QFfA+JFLKBVFZT4ZdbIcQ0y5v4MW6VqLdV/exKF53kFqnVlaO3jSh+ciuQYu1wSt4yb4xsCUIQssjEdTGKv6zliEJOTzhRZQnZlDasbOoJAxaasjNLtzam7K0KS1tUrYgkRc33blJb3Kth9RlTyK4P4ZHHamXHga9b8YGojL8TTOdyP1eo/54ryRTVpVUER9GrvqDR3Lp2NJjQ+X/nxADPgLr4f+0L/5PbR/wlbh7eUKcL7vUvAWlCd0OkXEn4J9YkB39D76r7GnITDTe0RIfGyBfCBWsYtfU+pAZ87b84YpUED3+5y8n13QEbD+Xdty/b88dUiJ1oMZfXETen26ptLJFERDSQPRw48oTTqfZ0sHbhkVaQObHj/DmYXN1bCU1VsGASaX6KMOoc2vBX0a7t7dVWnUaLebB8DgogfpN1+g5vlVwC1ckbEY7iWQh6v524CmRolpHbkA0AQZwB9v2JleWJ9iPjnyqGcLNFCQP/I1QPiuTkgox4a8ey6YzkVyjp2hsmDZWG6m0gq3bfKseM5/+MG22keP66bUq5yYyFdjJnSg2wRf6DM4FwUppjHII/Pb6VvIJdBZTTKOtMrnfO1YrCp7X4kTU6HqnEG60irB+dbhyzYKFWIRTVzcoDAne9GfF6HHNsJcLPzF7OitYEvb5qXbrNyAFOf+K7Mi4Ndwcv89JKSP2kavGPAlJQoQzpAd82KETM06IWqME1Ee2rFGf0x1AJ/LNYe/VesvdbbryaDgjVu8pa/3orQI+mpI7Ql4Xn36SiEf3DWQqz1P+78cnHvqzryxfude8cA3rToShBPRu4Tm6+8p0MZscalWR5qUCJXFznB2CVFmNbPdDRqUQ2mnphD3laGwCvt49H8wnp9yuYFURKRtx/9QW8r3MT544z2KGfXGJUthxWUlStntp6ETqeVdgcIM/7vGJEPPs5aqkH1s65sHJKclk60fjq/SNhsdAI+G8MBSQ8aVg0PGQkm74MZ4VfUd06b2WSwRH4mUNA14WsweP1hHv8bTp/0DMdvxOjS5yWK/EZVNojru6nfdX0XChecYtP8qNyJT0WI7fYPY8K++M6u525nvoBaeMzlwEpkTDwsYCPkSX5JnHCLN9qbvrqlTO+bCmFLH5hpoQQ61PU0PR0Xw4994Odq2LwBNU4nRIn5V3CywpbkByHP9dHBlmezVQDM0gS/elMP2BUkh0YDKCEz62esBbgu/gtbPLGPLJmHqEfmvxMvwvW41OB+asb1OoDwhJ9Ifh/jWF/48ADadBZBHL0Pof+Dz2p1Di2/Y3nEFyYvmHDCQb+UeEORBJUO8ljJhsEqli8Yq06QbAhUEYvObFwO0ibaGuVT3SfFJVwxiKIAPtK8wi+jFM86HA3HAmxYrvLKxCeGf1+EUVW4CvNpb2an4S2w68VjVEKDHSEwzZ2vViTRLZwFKdctRqz2lzWlevm5mAcH399jKADvTZC7CRhN8OzLzI8Z4Pyl+oom9a27zIgJJhav5Gh4bFQ9vsBzhs/6xmfJyhGTdHJ2I5WYjW8vQcvZq1JDMvqWgmjcixTV3ydyeJtE6IkBN/v5inXuCdIC3xDB0LXs9sj0FMRTRPswo4aH051JMjvMLkj487NizvOi0PGXKGd6z7gznfgGgiPP0z+Rz9xVsilWihKYb9EsHvVmE4klKzA9fQG5hS4VR40bpBmYjWIdk8AO/L9UrVWdhQBVYmc0uAWmB4aTlkdsUxUzUKu/oVhC9qvxqjqMZvvcSbDRmC59mnT+k2u/YgR/BlEO6gAwVcdlmk+jvK7V7GtVNqJCyNcBio/WYXSi2Zl+b3G/nNalEJmwLbTK8AQQGSv4hnYdWa/DNsv1mKisJy7XFAWkprHYm3Ccg1rdK0Zyn2KBmJv0bZ6kPGIvqADcnAMelzq6t11BOdq0+RzNBW/9utEmmoGs0jH8sPKwBCZ0XJ5W6wk9OfdP017YozRC2WoAIIQQwb3SO5WdWrp+ULctnburRCgN07MCo0C59UDgIYCNinjNEgOoDvjpNtZPxYkcPZ0/cjiYLDfyM6x5Yfq7terRiqRuaG2KM4zlqeBTiZaVWDKG9CGmaVhERbVSbmtulReayHcfkBejlmLyMlAOK1xDhCycR3gwBODMnyKBCsVL9Q+uuoeruIYXVbspLP5/kf/OQQCir4SD88ygZ6NwTdatyVu/lEULBl5Aa6kPyydDEtV9SLRVjqoO6jkPPoKfWRo94fNGYQodR9gdUxPJau/S+cMtCZpRBHH2ZzNtwEFu72Jtbh02lBnT99AEcVji6zWhg9g/y3cpWW7IIwg56+Q5arlEERb97td/q9rVJDyrHOK0xU6lg35QQ8yDixjGBENf6LSpGxbQrBpuNMaIYM50UkBkq6WMsnL7fx0tXSBtqAy3nP690UwBRO7uvTVk0VUQ4tKJy/2bW4Z/8oDmbzDO7Rli6WDKxlWWexYAes+AqzyPwUJ7D0YRZ4PpnaXUoOnBdHoxV9BKWWG7PVWynutjz33LafCRbYzNLh4Gm084T0OO0qcRfBt/dCQjNi/a6KdDRsbpCHOXRsfcSLEsCNQdCTSB0m/W8a6wpWOMOZVcZjvREaQFuTvyYghPKezQd4z3aoJ/sLBI01UmAZV0PrYCvlSlc31tADqvuffFvM3LqJQ2+p96KpJrPxfB07GydzKEW7AWD/QOwUQVKzJC7ZYDHpxvudVFqn2WiVJwovPzgtpTAUdnkoyI4pmjBJdjS3PQl985surkzkXcPEcDAl10urlyyeGthSZazn8Sr0/ZTilS5HJMyFiMX0hBDue5WQDDSDLKLLyzdcS3DQVe9fCbyFH7tC3cmmLRgYyxoYqbpQwaVf2ggvlIh8bf/ansemfuiId/nTkiykDdYKIYR3XyFs3dVoSbah1KKTGUYTn3eRw52287UaBnaUAxmt21/EVT0n3Plp2TtGtaEiN4M11AJei6vF4gipx4zo6Irn7O+vjbF+P5K1eV/Tntb9MgaU8aNfsgf6+/i4SZXtH4TUE8jgdV2RmCintElST/SUzzr9Q+e0Pidf2wzti3KZVhTbSkgtNNjyGCYMFuS54F8PdFfghCVD8ICzzS2tVMn/TvA22LrFtWyDtM9r8jlIRLXuEG19GfX5rZoMB3la1WY6bt0BtvFkG59PaYFo8TioVNOEsc7Bl6c3WYcgUacqOMyC1jDEH4RYydW6Pd7iYXeK8ykD9sz9lsnfb9iCYGK+axDkpAkn7tRMZeVBMdAAC9qoghEQvJszA63KqEchHhBfMuXTvDIvTQX+1suPkLHiYETbz7/hhSJ4XbDQkRyrUMb87MymzMO4jN0zUEqIfQpDjwAA3sfJtGCtnUNiaZsmwx4d98/3rJ6i3moovjMgELbQ1+8YU8I8vTy/DBKfXOMpniicryeyDpsBoaAFUGsIFSl/SuhuO+PIdkGKUyDsAGMvr/+wm51l7cWOf0dnJSKSbyWuG8ZGjmonsFlw9yIONSoHN4ScVglsYIYbf5nhuxXVDNINdthsrZq81D9Ja/Y33F5DKgvLXfCNSdXIBSrDbJUlKXLYFEgIPgxIXv2HzG7dmom+noNL0zpn1Jqk/w/RtSewBW8cDsA46CjHKZycYSSY52tGTKI3CfR9CHfEh49xAeCm9r5fKe30IzIfkqqnlJgvtmEbfsqn1GGicWir44BRxSG9mLC4R+LgNmu8Qd3y6gIzNG1E9av3qzLDqCBcIwX8MvAvs0OZB8rP97XfydrnvbyFUgogX+OorpTCDY44as0s6kDq3SBfVaCdzK5I61galCQlm0dVQDL6YW5AfRXqgKHGyOHTr04WLyySZGrqs+mNRpkez0O1y2UkC5bqqfpUTHjmpMzVprd9la0Wnc3TkMYj0MvRilIq6cQhovEmXdWsi8GhiOLvDN2oxcmYhBsQ5qYTnBYtZgTiTLl5OdiSZgAEO+7qVVDIR/luu3wtrni6KkMrxLHr7dfKcjIsjoOZx4V2+rd+mBcm1N9NbAY3kN3L0FutNv+U25Q3moyfMa5BJOxKT9CADTrNMZnf+KAjwHuMgXj/AuWWBWjU2YVc6HyGXtdA9mI4FnVnBKq4yjfnP9zgf6vSna+l0Onnut8fZLe7I6FcnTntXYWcRM1KD+18paViOtOu9mbREo3Us7ir+Ctta4M0DPw7yDEwRl1qpWqO1PjIalTPz2dvGs/C2pQun4TKdt3GSDzivowM/OOl5ZKs1K9Im2O401ftc94tKhZfCjom5kYBRhFab/lPhhhRBRNld3VuhaBmxkY7cnUtmXxqMMOqRLTtTWo/Qha3rgjRbwr4lhxHeTLPgAX4tj1fY71xaOB5bUsYi8KcuF3aYOiEYE8mnhPTHdFPIJQeyUhbU6+KMQ5g+wCqOe84a/WQryC8Ckm/05TfsnrJ05XD3QXMpP8qUNwzSFm9TgaglzXs80D+hk+0ODI2C6ORKtsP+3tsHNCGVgw9NXn7Rbe5UfAY8z8YqCUXtFYRagPuURVFaj3d2ZQiSI10MsaWoQrWNBCYdVJwZQHt5RTKZhxe2SDSsukSKFss5B3MegMRe5hcfkBsalo3ahTGThKnrMxGjgUBXfSJB62lZrq2z0enB+NpvP04srws2QQylTr3spJuWkhpGbI++xr1W6jVN6Ex8iW5LNNto8TytrYVq1MhHhOK7+axgtZ6dFtE3Op9V77GqSHEVVgxhK/Kd6qwgXC6ToPqFBle+PoPVvcH6w5Mk9Tgc/UVo3hx6M3I73I6c/4OzluEsHdJVtAXLvQShnAySYaciS+yMklCeIgyxuxaXImecJQf5gzr4735NEoiQx1MrfNbFvfO767wP/PS42fs9/0Dr5PJAX8g/xR2ohLv471ohyOA/nmucS2o76DDdo5b0zOAOSaA4pOXUf73XdQ4/IZzG0a/l6lkGkJ6px5wX6gMmUYUchkQDdiBLsVrl0c9D3tHZKIRMRC36Sc3Mq/w76bgVSzR/m56eCiaHUJaw6OwRGwipQdmuqDGqAoaYimji75M2VhlSy7LqOUXdpJLn9g5J7VvAA7NrebQ5okcnCFYDHtmribHeBp/OtES/vp5AhTJK3cMVq5c0rHvXTULBsZcObyBevl7YZXZkdluUWVRR96TctvLfuLeF9to4cOq1E4ZWFZpCdCaAxU/Mj2V706eQS9oax87FWe2oJCZpgJh9EelDqwRkiX092mdnvSIcr5QWIkLrTXRO3hCKPnuoL9uGUGXe9zFclB8DHWqMSEOsr1pOphKCp6AdbrG4Q4UgwmPZtzhAMZmjX8/6m4e+1vsfn6R7zyDfaXN68W4I6RBowMLC6+ZDZhWKxLMrNIYy8UcymOzsnPIniWJoE9EavS+rmDrIlllHDHeD/B7VTTyUXY0lkhNkxCo0gtYA8t+d36oDyDBeyt5VbUus5ix/f5WOP80qJSOJBza/rMuqnCgDP0aiZn0Ol9qZk4thu+u+mBvsnVBeeyNhDAiqLYCkpCgJ0czlSyxLbDhVElM6+liJJKlq+5d4A3PXoDk3MfT+ZjJPYXEVDeHmHRfhsqjCSOdujy5Fsm648FYzHRq4988pScTrUueedNrXr4439hgtn9uL+Zf66fxFDNwErSg6xicO60W25y7aD4l8Ox0pMQH6teAGUOXpwD0iJl1pzUQghq+eZsF+mNL+wxI7xQhmow+IfdKSFnBXN7SWHuLVwtQ6bny+53AOMj+OucS5eesYKx9B/u1ifVaP5cUo4T9EGAvnPnNjJdqPRylx7oVapv68r6Qdq7RRq05f62E9ytSNWWEu8L9o8sWx9nowiVw3Q1d7Avr7qr9BI/YOWARBDKHY/V0zXBKyKkqobdEWpdb6QEIeOSdAYPqPf0gjdadBFhOrz/YbyXawSnsDibtGol4EtdqlcZLii99v0Mb348pG5XprRNWP9RkISnVQQrqIwtmHIDlVWarlady/Qlj7nLRGzjkXCAfycFwBT2/iDoYOaahIWPNxM0Dj/vOiPVMlRTMdxMSoeUCrDUoP2tkojCA1nwcP3/1NkV784m0HNF4SdvzXKTVCjRfobGtcJsGFRPW49ZqzaDKkgyxBp60e1Gh9cV9YiwOfm1Py49hLSjF/9Z28p9CIzNuwjodu90ZU+qKpg6GaGZJCB3z89LzsOqkCdnOuWru7WQ1uUuV3foEjhyaPk9Iyukf7+UYY4Uk3fRo1AVSkV9I4CGHVpg8G9YmPGWUN43121cchmoAxr5HtEK4KALmxweMcbyDGutQBtdGqG+EpGFNlRbf4aZdsWcR/pUXPBQJjUUR6doALuLcc6VKNaUl5/8ntPrCHiwllkgoSC9gziKOQlSN5qX271W7Spf2Ci4SaV0DjJmeHvODKTthsr3cxMb87989pvc1UV1Q7jHdZ9t/H7F3eg2q7gnxOKSkg8Y8DXXtWldX1i0TBz3fVox0rtLK0oduFwRmTZTc9l2CzjvaIv5Bn0iUkSlwNjWboZS6TM2CuaMyDtzIJSQWI5/PpKCAuvSYi3FkK5tUQdhy5KNxXVUqznu1gSejdXm3GwFVKvQfZz1gDAtnDa6ookEBV7cJ38weVr2PzxZcMwvCVSihehDJK0TCboIsyJmSRWrxn7Dt7C0IFR/2fiigLIJx+SVgThrbDFkQI/BNBnwLVEz1sH56csDGncBwqaW+UW7zfvLA7YSQSi1JGxWqk7ou4VGzi1e3Kvmx01R8lZkzun1jmf9DlFetRVSfxQgSQKHsfZOtYVmLBYR2hCvmD9vAPZbM5VWwnLqXPexONMQnvJRfvu1U6IGKx1o3+o2PNelZ/wdgFasD1LGTKhIJi/ZOMeTUnr0ldMREOFPBt2iZ9IoZ/nQOQdVKJ+Y9vyEHnJw5m5ZJTJGyGCh8YRkIJSWa22c5ynr3m3DXlBVWxpGEzkV3uhLIVRG0XQoxMWH81V3xCuwklhJkXPfLkRRniZWRAcch/zpeH0f9uB+DE2IqCE5eZmftJvTqpRkPAGkimdLGqWaHIMfMAoCUSvnuEOQQXx1n2sEvCvrZCdKtBTuQzuDU1H6SlFJwRLwal+3kYr45mxtQYtgjv1oh912oZAEF4DJq5yOowqYC10K6qk3pFafFWW+i+boqza2bUu54rm1fJV8a+jIzF/d9hiS4o2T4P8ho8Vi8f4yuAM6SLkbrZsMeizExUZVJCQkx8T8djnT6CDUpSrh0lK+K4/9KkaI6FEs4nkxidlGcRBNLpd0s3ELOV1CqYT5D8e5WDljma/y+sq85bLm1Qdq24MRRz33yNEKVeNkNoIN02/mNSj6QNKL7P/2v539/7WvjyY84zP2LQtkEiuQTjKQcCbJDAtJBo6on2lD3twRSW6oI2LDCARK8NtUldUGVIS5Vh85ttmJGSbwlJL84HIcTL4joAxZaASxZ7HrM3y51boLT3ToluxgW4IlV4MrsA+2IapXZEgobxkla6xLgCEdT6HLbqK9mCz9oQtqBVvuS0Zirj4Fmo8WSAemZ9Su0afbCdqq6X7Ml6rN0KRUi4I8SHkS3Ch1sw0xzk1akfDTls2DKzLdgde4x3TSErhji7CWq0/Ly6Bs7CsTX87vWAo5B1AWFjaMq9+F2yqg12ktgzCOJ+Ifs1ODE7KIk0qC5WxDigSROsvrSg7WArJNhYxaNzrZJmQSggYseh4so/7pUEWzGgO0KwAzomYz5eM0KmEzpBUdbGoxQgm0/539zGeHr9zKwQ5qNkMEmBIpOEblnQ67ymh0FBbXiX4V44rZCk2YPNSK0uwRjEPoC+KeuV3ZluaKrWcaUk0HdviIdIQYHCiL45EpEyE7ejGkPOHe2Hi7jXJmazMkplUQ8yoF/8d9hP2n/ddTpepWCgOyrjGNyeaqZETUie4sAyuJZRL0z5IbjcM4i4gy6D1tyM6euvxE2REsBKfUAEDkYTBn7CGIGaCaioRauukOaKsEsMnk6FuugWKwXJ1mBKChxK9GRZxaSKBxYI1hDfazAAaxQb6m0GUleTDlUR+vHHV3/jMlv5wYQoQAzXrfVoZvf21yg8dfXYZuAjSSvmLIXqHlRjKuLnHjlEsQzYh/a257ZY9ZAL5O/xAnqDb+pYp4yVGgxe9WqVinFeQzurQ2kI1rP1jROMdlVawhqWk8InVgcQLtpej22huIq1zZYdIz/69EimmOT1+UB+VizV6+1x27e2uwmP2wJaB1Ha8e+rUL66zzxibUELqMqmwiGRzm1qRxS6g0xyEn1zHVpTVhI8tfQAzTKS3JBe/jH9pFly1q6N90l+laji9popwIuSkgO0U0rgPW5UMQUehNw3U3CuQfBpUdqFqojKHD4+rRLs8ZKjJjdCPo5MEsl149NyINbdhHmbNZCOT+nQIYHOxrdwgShF8y79ZYtTJAQYmljqFTp7kaaoPInVN3M8KpRICARji+CU/Y0YR+UnWrMnzU0KWP0yFWG4B6ILR+H5ZD80zrj8+phR4EniBJtrXL5M9MQ4VPoI2SowuY1vH4y+SrNQAKJmn2DE7V6VJedX1Vx3pnGMvuS8G6UtEF26WgZ3eiDC92BR0BxfNBw1z/zEJT5fnCXQPkGPre4FCjgVZdBXXKGrmW8kPmAGmwsD3q9/rseB+eRzX/O2rdbTH/cn9fq9/ku8AiupxY0yTh2MEqWFIprJUhHG09MBTpD0tsSSjLsjmILUBJB3t42AyK88MqWQqTf8ER7aQ5OifNjFDSya68g77ht/QLuPXFZQDM32Udn/XWz66j52zwksX2I/nCT0yWY4x/fAGA4pvAhuDv0D9UaLJ4ytnU3zj9E/ezjoCLeoftZU/V69H2zG+FFT6B1DNdB1/vIe3nLRyQlG5qKkL0fy/CiQyR/iTtOAKG7uQIscRXwhZvfL8+N9kzLNBzkDFcsIl+MVIlXpbNtTSZZCW21hodaxCEdDr8FjMVzoF7HJLrEOgoJOXTaqAp8YdkQqo3//HNUfRSAjsaPXW7CdG/Ckc25gyJlJIdVZkjvey9scVMEATTy20ciDtig5//X5r9FA0e4IeGQFlPsdS8dmP7D7DUadwLzSnSuyhTi7XYZy8iYpB2NQc8NtW/fLwpE79pYZ1SFt8/cbsNg7ZfvGsi+PuJrgBKhC50ZKHfc9GiQrINSXgskpUSUTX0rYrzCSF4rUHuxd43+cPdScF8IPu1idaZD4yn42uqy4I9MaTOBx43ugjWnepbV1qRzRCPDN1TjeOd8sqKrdyHSPK/KMtAeefiPhAdQ3w+llb6+WMrE5ia9xrPXRsElbIOCjDMx1+p/W14b3A7XsS8ddxx8nnZHPM37avN/AU37QPVLy+MWsiarW5Q0oHU/rowCRNoTlDWcOqDYw7dFpwOdRK47X3kK/RGx6bZd4DYuA2Li3aUIqHaAZO3M6czVrPBjtx4KCw/sxbWPW+dwCOooPlrFty0Vjc9YC/Fwenk9LTq35fzRWLSBd0RUG34aayja9FVKv76vtt0wMyW/NGUvIjeR8azvRBexe5d6yX2rRfcMEWmMhSkc+b+snb+7kEjhK6v7zMe7oK0BDz+n44kGGCifth/YjSQBGMBeSdh/GaevEtFE9y1mVTUlScCuBe1SoyHj1XTWYdDoci57vIOKKV2w5aqBUVR1klTyYw4lL5UNUJMMiv2kwHv20KW0aycuwH46A5SsKexOonqvhdNRqXgTt8Q6deHZZO5dC+cfMZNCn31G2Vh3kdDeE/0/0ZFCeSX3TtbqvxJz0gOJzCJiizG8je5zh8bu8mHhmrvnUcKjZFhdzI+rQt02APeZZaUJp9EvzEQSKw1mCrBDGKRYNunlWXIxHpwdMcuAWQfCDiaQ4dpyJzhEssWTtIszLynnyRf/BCpImyDYDi5oGV+GC/kALA+7Yrc5XAubEjBNvj12cp6PHjhFl4Xrkc6CEHPq16IVRbLYq87jqG+pyYU4SDysCyDIyL6krpOmU+FzMNoh2piw+VJcQWncLAQqMfFXMSxLwsws7s4xNlTB5JvWWmN2pyQTwQN8ofpBsycubuV+iVWGy30/7GwUiO/A7O5eS6GWXMFIPjWQ5CulvEdRkiZ+baaoqccBT+HKldx81aIGV7bgCCcVTETArGp+clCZ5fVExaO7CHM68W55IWsRJe/pC9YGY53Gm1yAACOdw25cUSuUftA1qrIXleP2/BTjcIylWNNkqfmGiDrtXN2x/2u7DkAnyYI8kCX1w29pAQoVUPk3kE1T6oy75ek5h0IanScTvqzRNYtTDHOa/2aYcWOK6QdjeYiD+nnwpOMN383Uhu1I/n/M8dnY+c7hmPlX22ZUmW1UYsUBFPIn1vjY7SZ1oDQHgFY9SAWTwBo9c5WBk2e7zoQDNnKnOdd2KZyBtL0G8gZ6IrNvVMncnP1mVtf2TYqkXeFD/jYQyI3sRDAiAkb0pc+cWIfD/fkOJpCm6Csaxkch8K7ASKUsjeh2XkpVlIrXku1gX7KHWcYsm45nbpOMwon2m0J6ApVq3BQpR0a30GtRlW3e7w4rBjQ5o4tpyxpC1XTTffBDAPCAhDtv2gE5oMJJc/S9qEU3ke5r7pTHkYt0mxKN6RkBlXd7/ovPf1CMJ/PwiSZQFHo1M2YcbR0db9KwJRA4mBXokWlv6lscyXaGv/9FByfvfc4+eGlcqUEXPTq7qTrooS4JkrbowkfQgfkMoSqOvRhhPK41iF5WousJccpAex5R30Y/jzUU7OT2J54LTn4703sebs6uCnX+N4wp7HylYfrRcbI7ykbvxD4l9Ymrae5kTIQIa5YkeFP/Y8sV2a7eZf9RuVZ8drynMOHFASGUd4NuQIwDHNj+uGJ9PGfRqGXYxmWXbykhY04/lXtPbF1V3iUQyAxbAWCa5bIbWTGAtKxZlNc1Hjw45oZcnsRvkPKGhVGN7Xse68IjrqXpyXHdzXNT5aOop9KJ/2z4KZw5+ITUUaEIM3R9rABFu7nF8zwunEX94j3VAHP2bBBvjwGGaTkZVR86wx/KSfkN1WRkUkIacznVDPLg+CHQsAgN1wyR9CmzkVo9ijDgDsnZa5jE/0Cr3Y+XcL5jtvJMdytqQwwUlO0brneKj3WGCVVAJ0IYx0hr0XSpX8jE+xM/xY5oSQswOsfOpU8WEpwSajhY4om7mS8KaIHIVDnpoS5qcMw6hNgjDKAMvnbD+iwntOuY8DgOsAL/Z6vR7H1ewj/YeJ6yRX0EMqn39sE3b65Uj91IG6ktRs8FLRppCSyc8Fg4Se8fLKsmRFryz6ZebRLYIMnog2SLvybOGDBEjbrJOOX7ysPeJIZSGJ1C/SWVyBK6jCG2ZEaffIrrr8vLzvjKwoWeJR8ljNtZSJIEN393Cf3Muip+BCPyjCDccUhei2IsMbnhGQeuNhAD8GBCCyiNusX/pG3KgWvuTsl50y9Gt/vvu048peITxrDijt0PiLVtQXkEIXVHyvsNCNYnyR23Lh4X3knieIJc/80Zm0uqNpTWWxRB2qXky262yD9g9AxCC1R0el4k2rVqtzWbXXB4pHZHcDKeiL8WWlXbllAvwIdBCDRMcN+5TjB2WxeQVw8SpUbAEWAEMbt4IG6YCSV051ijDIi+6q4UFTyPjbVjF2bGMiDxf0PJsJOuyzgPsUvHSbyfjsuZ1uHvuNtNy4I1dOmK3zCWyqwx1yG6Pbv8ZZOR0mwpUBEemrPQ9Hq7KHUt6AXbO9drKXdx/zLyBRJiU1FF0MaD+ggD05smn6hv7W5LddKxJf8QL2IblaJudb6f1MVj3YgOM3RNJwoYqsmU1726+uWp8TiU7NMfSq6AsiUnbwRacRCOIYukvIJ3rfvtDuy37oj5c23Y0OHvXHOL2rfJ2p8YQ2OfUsvXjSk5vf9LDNSret0lFpuIQfTnZBXZg15r4qDwplrNQ/Zcchj9do+yejOeq+htk96eyCIiW14PktLfYo7dWCMq8FlkGr59v3XoI7lUFZLBk98MRmtTd6zeyiilEIiZXOn9IAUNsEUSZvg5o9Vrw1EDnYHoqDmdb9oYu+qvVeqcGuaozFTwpAkcT2b3jizkRsdwA74b7K4XENM8g3n8duBMXLTJ0eXL2NNbIn5T5enq8fVO37BXn+7+SCCSd3zrvT2buBA7fDG6rSB0yxLdqAmwPFsZj4FXIptTTNLRAs2+uRenJn200d5JCWR4KZOBr6EKIen+0+t3RAZfNfD918d2uy+MX0ZXLI0fzy4fcTTm78yWSPRgay+1zDtumX+SCS+1sDNGeCxyoL7sPMlPL6c+1gmlnod25JHFrCxzj7JkUXndkoyEJh1WIEapi8FBT4PIIpiMr5R1BuoxvZYELRAxzr9FMJ4AazHYdx9twqIyg5BozcRudAABX+HU+LYZ/6T14HnUR/ETEy2I6/iwcDxUkW3wmoPMbyDixKZgbMgTC+itcVPNH4lQ050OGkVedxfyAzYFqR77/lXjFe8motjDF7ouE/VDGt31oWTOhzbnvRXMqwEBPQ04pR5Q06CzX36XiWwCwcoiQCvhSzO6Egxf97vgdH1v+KG94AGlrAAzBeIOtLnZ5CkII7XsMqJdnTBb7w95/WKyUjAzb5rpuo2Ri8NGz4krEW9sa6EraL5WgxR+AcmcsQeJNPFkCpsHKLGUGb3ZG4PaqtF1/vWuyLY1OrjC+Gql1jOdA46HG1WYl5/PNag3TFl9JUfKaQ+C5frbBf4P6oFRFVrN6+CExGLpLp4aElN2ceUIiDYWVmsKNXyC65EoBBYpsmf5GnFTX0kO/tE3JXhCZC0jK9HhJG8ofo6Z8mVI2leZxCp/kJBARtRELh8Z8Lwtvj8U+xsGH/4N+Ejvg6hO8ELeQ4FGVuuIX+8nbbmgpZTLAW8LHWntsGQccHKBtIuX+8Z0hKS5p9ZdhxYxjFdtPezOsqaPK2gPblxqNgKbIqNeF0+rryjtXD/t0FSQ33vNojS2RI2jYLJwI8Ho6nGOmL4cMJl07wCzAdS7YQoyPt60KF+NFvCothnkmjv8iNRvgJEbyuidNK8PSTJ/3h7Put4thq0RhjGOoo1brPgNtj1YpENYSEzLi4qZV2yCR7fO/ecHC0Asp4mFGVy/5ev9+3V/WCRYYYqU/2NeY/TnsYIy66nf//m2QwK3GUaEHtQ1JDWKeR9rZdqp8jgI9JWUTKndqdFeet17NY1NHyp47P/+uSG02rJ3usSDI6mxr3sLoEkCZ17DK7zaoadZMoDToe1wWyK0VMnEE+Vw9qR3/dnX1pZLvvtnRAmQxEoWmtYXX7G32iB82Q8k8uST4yyFUtG1i7CdwMLspFMOICsRAvz/Bttx09WQ7Yi4rTct6VUc08GkOApz3S0Rl9E7b5U3PVaSZH8J51kJ5AV1m+YlC/aCAQ66tqk2WJgy+1duQkt7nhD3uMFRgnfr3uQVO4R5RAOXumWl2v2v1wDEcy1792QObgz6Mo23ynAE1NHVMq2c75/BzdVD0p8IvcnKPrWz1Ow41cHw91L36jNtVNQgcqW9EQ98+CcCvIt1Ce2uppmgusn15si4r8j6huq/PmbK/0vt+p6v9OgUWpzvzR0/p/ysL+tmvDAB0CPv8hzyFJ2XjQOK0jVXE8d4vHTnHhkPwEBtkdiFiCMjW+z3Paxi7ADC5a2oiwuaSdvztLmfeuUGqf/N4ziW61pd9ozkivCrFUsa1qCzp6YmYVY0LB+H5dGzdeDYjY4Zfi8tqWfwbBWL+8MS1GgDk7Ar/euFh9njj2zA6+aSYXJHZdFojBAjOyjZRWkuKbc0CcCCCQ3PbFQoiHQy20Gnjq5vzO0o5TxF4AWxqPIsbBdQKM6BdTSbYQpnlKwj6GSWCgusLqqlgSzcWXUzQ2njjAOVVTiUv3V8q9CbevuFCKZfUTWq0uVxeVVpIRRsf8nsI70Hp/Z0aX8W5Ek4GuXSop2xijF+fHWbbIppxGyGNaLVBV1yq6WBPsJLb0E5bGgYkobpqmYzxhWI4a97X/E+QQ0uJWlvR7yqRU1jT7kFSVXVrwx1ArDfv3tmK3fUDYxucOkkg/CgrIynyNNpkWGbdug47TQKk0Cp0QaTLEVX+zEmV79SIKfYtDtuoi+fFlZqul3Jg7DMdUsyGXgI2w/DAfM8vAroT33btDf6IjKWfrJd9b6mzLdzKT3HMiVwiPltnuPsnlZ+wCD46mu1GiFn30x0ZEV/8Iywt9U5YTU6lDR19A/2k/JbQ/nKRc7kT1GnnJ8QOQfFFx22JfCgaxVZXde5DvkethBg4w1+wFokZ7TriQHviXc0L6c9wTkqY7U4VQFbnHX1j4eVr7Yp4gUFHtxz5O1IBRDTRFVeTAKmLJrbo4/aqQC/MEOhna4ylL90yd+5gw749RK934fmNPeM56HYshWAG+/ii9jTyzLaw6vO9S4nrzPmVA9wMLVSnHDEdMqsxshfBCSsz48btwfj/LZdwD4u2mHP+aYar0SXKxu3uhjxPLR8XtfWOcXxy314i1VOVROdAGJdaRuEueHLiC5DzunDv8jWvq905+O3HmLehVbdJb0PXDlf0Oeht17lw+iAEb++4rWbq6VpFoVd7QmISuatIDV7ypPcvt9jQBtw1X3bwTppy58AwmL4ExXZgo5NS789PGhZ9qp49Q7CjBq9ig3EB6erxyRrjhubiJ/KMoy+yZi722nJda7/t1yvHXkbv1EzOLw92F9WXtA4y+oAw/x5PUCtyjnAdnXrBoIR6eo8hvnq2zMJ8laLO4yDZ+w95ttTrqJaXlHvtOYN17zYmnKvnRwhw8/8h4RBZ3rw8qHQgTE9cGvteR6V2OXOjrW8LqNI/3/UyfVf39b+TN6P+2LyassAQBB3MHhcwjcXsBfAuSQqzrxQpah9uUUbUFK4m3eGbq+kohUgT/PTHTS89ADUHNftuc7hGrwDfHUgkAQgxcxiMjyii1aRqiEsq8/px8CniJ4HSF5AgkauwxKMbPu3r4jJeEu/JVLVT3JPKnwJEOQs4hxWHs92YTYNFJUNs/dAEk15vT9Denge0NTr7dm25Ke2jztOt+cOLdSXYEFeLhcUZeqb56Y8N4yJaxNckJ/7QXbz4Nes4540vxBDUVVOeCzJfNS5sHX2X178CQpz06ixz1hSeGF5dpoCDga42qvHHMho/zCDXNUBnMqgRYqo1Ku4G759jCifXEm7tBBaokb0ATdns8DGyx1vg+vAUtYuTKR01XUXIMGQdo6AMgL0UPSeX03ZXFO+KVmp6BPJ2NQdtXOm3Ei3WD1Tjyd0X5ayTHJQ44RC40+gF/Mo30t23VZtj/Mo9lQyqHKzV5uFmqzBofCfA3/WuzlETGnD+Og2ukQYOQdxl6YTkKui2zrjcJMEE8wXavj+PFMfe2RVbrNzyd0lZE9EENVbvNNamEV3qwPB525UeKM30tdp4IWycqJ3gTQ+j2A/UOd39OpSQHkSq7O7LKV97NwDmwTLH6uDjwv0NWdF66fD2pmFeV12IxoX3ZnxS0G6XHdUSnJmkkwvtHmwF3nhR7cpocC0lhjUmrluAV3pOmER3nq90p0/R6kJCHNbajrqYrLvuzZgHaqmewdvveWUZfr3P8g4m2q4dv4T3EX6/maTETZy77rAeWsLBoLxrxOxlc4gh0p8KPEkg4FgkGynkZpRYnV0lIMCCmofva8d1t2p0vt0e73IW/gU7s3jVFvfflKNO1BtnsiXW4CrtJBgb5LhkDdm/m0SPB3bvBZn0AU8snSywCG2zjkIy6m5C6GWeeH+Z1YHqbjT9gw2yfVquaPUY89NzSlpRdMyuLYz4c3ZnwulNuVVvIVBIMbvmUsHSEcd06vWRK6euhDiVy/iZLT0v+Eto/YuH6URjgsXQqCYiUw5VPc5iXcaNKOT80+/dGl8TNn2dgir2sVlvHM2ambTW3Ru6yrtHJ9pwKc6MdkO9TVcB1GsU5ZzBZITOBXnR369YoQOawwLaB1j1vbtqVkBGBRkBAwEaCkj46zr4lb6KWlMxQYkvZ5Z21Ux3wC93BEk8uhxLigOmoNWJYzq/mBdLL/7ySBCqNXE3fX1tVUnOuK+mKHMeHCbfVr2koSw6B/ezQYOJKzpoRrBVWyu23R+DOjO+Pe2lpWTriGLN7SZucOVh167k+CUh8r2njIf9Q1zBuM8e4UNIuzJ24bunduy2TLpbvKxTNai4+TEOaNPXOrOaRg0P1NZ15dYdzWtJZNcYjxAlzF2wpk95fO9fnSLmWeR9E3xZj4OpgdFHMLf8YMbp18bVCqLW0/jry4FpFsSgnG1cp9Q/cdi8qfhl/3DMrAydS7fchRz6xtRWltfIn3M+DUVm5cliNZ60wW8aV4x1lHjq6Vz0+7UKMx+btt26vcMVaGEox9fLOohbkJvqzW6ceiQTY+NWeqc0wu0x1+FgGVq4glwI9WaftfCqtK/bI2qbRACPZ8oxgQ1BD/gTVASHYT/pnwnMPkGaPTf46FSQSpH9WBW+JqVKWPXfP0wXzgVFoRK8+QVCbDiez/gluOUMjRoAFNZrQ+kyVYIzZC+6OE+mLPiBlya97B+sJGujwgtKifmLVonrzJmZYSmIXixcg3mH4gheLLF0GGogeDCYpe5hsRXEKGACfcEFFkZ4KH0wuEzDH5SUNVnkuGMJIRxDsYkeBRW3V7xbQR/Ybw770WhZNC93nmEJOjzHhBF2YGgrPChkYJximQ3qKY8fwT0eddBDFFPAyZzXG3WcuAm4DB0+r30umxKDbALNGhToQHqE1HZ3OTRdwpMZCa5pcE0PRBXhSLOC+QggkUE0Blwv7YuBLWTErU1dsBWjhNa+I9qOyzEzovUUcgj1PE9kryyXWS7oA5deWuSThFGgNuRGvUIr5QQpbwzl9F0OPXvNz3Dj5mYrZuoCJb6qC7pLF5nnqrrFls6+DDk5K5Q9nNzAkQkHBLA2ZZJdISKvMzirqAI4L+D+ZcPP0qZ6hKHBBhd9twxmbQBmJWwxC8liov9tZHEVcO+BFXi4ikUvbbYKOaWPORKJA8eleA2WYdEo/7RiqHV9FAQ3vnKdkoMlTYR0c8VEI8KRY23gRBKkARGevV4VkPBzd9KR62y7AyBNl8+3VhFLh8ErVySQ+xVVtWngkKSwoMcrbMjq8404CcoB7mhlH/yxr2avDFQT6I0zhOgujJzgVdfKDWArv9TOyX+oDDtnbX9RJdiPi+E4TxNSJcjChCHoBdcKTxn+gC05f0ZjiL8vUCEbrAAWHRiCFZYulw1uQlcGP9rHSuScsgdhGD2O9eYWd5ldTzrO7pszW5ClrhXCwOO7Tv3cNU6r/r/SssTUgG5RlrRUbdYa6LZN3891DgOXLtg03CZlFHOpdPORXS+kD31k+W00suIZK2qQWKBY09ZaJtlPj1qEwYa0Fu70KPeCg75vAnudIc/r24Uc1t4bMeUVTpkeHE6l/VW6FGyRx+H0C2JCRs1ies5CmX1oP7SIvREETlWZCmlF4qofr3FedaICPZDL7gSNyoP76qeQlcNWc8ro+TPD9JNzN0Ae0oqkQcL7F1FQYuzNGT1KtkipqfibjrtYhhCj4wR6MPz8GwJqLn6fLr9Ig0x5xRPOv0bcBfI0pr0bz5LNDuzE4dlmg210AXPWWpp/8FSZgkohRQfjUCIX62AWsvEHUdMXv2jEn3FHe1w6+BUZRQ+5bquDC0fgNzDyVeSoWTs3fBpiHU7/Y382nrOBhV/XznXgVf82SbtaHpw0K3aqEuq62QBBfuhY7jikj5WU69ZI066VIYeVgTHzPQmD9KMO5cnXCI4hzo4m7u2dV91l5f6Y3fppMEoMbCpYfSim0CjuAOd94Sb1lMHFkiJlKuzSGqzAmsGAO4+jKQ5iIcnVgF7T24qAhuoDEo2+tZJI/xSuvf7OLzHLR8SmJOJodXOSm3uhj3W4axfcR72sRZNV/0iURxcW+uN7j1OKh3IyNXq72JrVGtheg/EKnDNCyY+08zHeoIMXHNzuqUmINLqikWwzMQ+HBgXwyNWYmmHpdcPZhCqlwuAED/HT5sO/uhVosedkIL0sihz5FhT7z8UYHMEnFspbr9ED+fIMckznwB/CMXEtZMZmXmFGESthe1DkvFFTj+u1J36ybwAnafzQcOIku3qFVB7rdPgFjuwAFsf3SAqEGJ4Lct+sBIDjSC8oJTsYtpPVDFtD9N0trTwucX7jcn1L+nMYX0oz4qU8X64UD/lgeHhagMGDTaztGf6+ltlDvisOmikUeTmPxvjB3uG+otsbCuFpfL7h/zXfoSHtHWxg0DTnFIA3I54IUqsTBqsHGPl0l/NUD8k5n+bzV7og757hXkt/ZvBANzYfnY1qpaawwaoXP+VJrq8CSKIujoIgQvc0h9La8a/oeoP58v8JfXgZFK2Mvy5PVHiZzAxXDbZoJvOelDJYKpmZ+kzp0GRnNi4kMGuJ89ZvJ4Q44rbu+/QoMRiu2kgkGzmHmM69XglG/w4wqsAWvMf2x45OfL6Sh9xQ2UeyEo2okyPYVu744ok93pHBcOdwIkgL/mI/MvCsvicvXLu8kxS6l27uBe2I96NT6+hJEb4jCpiGy6+48G7sA7OuEkTqs1J0Z0JhMnj05sC8LrPpca7NIHXuciqYfjqqvXIdXhwQ9R99FEQO+fHzm640MPZPIFaScw1WQjbiCS8VEp+TUOGc3G/+Df4Ookm+j0FB0s15qE7NgZD+VP/fYvcZFgh6YsBO8tp3Rs2FzD5I9l6Vt2bcfzIr23KiDIXHYtkXKtX1iOL3vCrUXE2NE0RtJkkb4GRc12YyvHXbf5dugPaKQVZvhQ49pvu6XxllKM91337QGrBt4gqxSyV2cFGteXhhwIGkN83fikLWtRs++2eILeQFXw0VkalyyFroT5cTrAY0P1grnKAhtq+Zq6HUx417yr1LRpBTo+ySyeKDqJ9wRij0K9hoccYFFzkpux4dGqJiomaON5IrJ39eMGugog/WEz6uLJcynUl37gENWRWbPkeTIRVJ6iIxZaHpGJYLo/1w18j3KeD669qGBlfW5J0M6d2v9fgCBvN5EtJPE39e/6soQECgrVoR/Ti6bK6qoaqQJcdQR/rZTSAKMyw4d2Xje53ZJLgtSa7MkutI4aDUaVm2+ToOIDMwR/iQvCJCVB0rQt9X12+e6e1gGGMvwZNAEx5aqTz2NciYw7oYywTF4oHnThVOfshlYsSxnsMCha/aduGx3z4So4UNwLVx1ew1L/d/rEIHqsvg99ddk70YA1dIZai4Y5A9P2+7ZBuhOpg665Z2KObNfD/WEiUp/fNKauaPuyE06X9qJ/WtD1u6RQbm2m+3U1uZVUGkWFAhU4P/N3PIFL72s4hjkS7WwQXrjH9kHsOPpuVo/YCfkRZm8MAEoTJIDXQq0l5sg1M4H9mhdTyEftDvhr4319hzbsPqKh4/vnlA7TQJttYBA7hEB6WCIbaip46QN8Yx3DUe9MCTgvtmnFohpFHd0TEpi4OCKpZzmLuTOwlGMmzd23LiuLqbuw1ctIPirDgIPxqZ7jaRR2B9To2lbmdImy7ogt5n45EuYutDiKRN1QUfAp5DUgNRpf7cSxLUb/4a2ux07uf8nNR6icQO8DTdYrwo5KD4oT5w+eN424/qDOF8aUBoV/ER+fH+2eoX5JEVw9IaJFxnCH+5DGi/0uCFqeYSEGVtdQEgR+QnzYVuIJ4EWT0s9bM4FMGogSH/aoom6q3a7zXPqQJLGesVljA7vPTPVd8e7T1vaml3co0eC6QNQ1ntp3TaDr3EXG2+6iup9sRj7Y0Gyc/3Jmd7qiSQMphjTfXFt9PknAj7/bLx1SlVBRhoX8tNr9jnV3j/r2Q9SJt6xuQ84SXalHwaTVQzuYThRY1wC/4EI+WnF4F8P+/j/VwwdoFZKyE2T11km8CZviuZsArXKTW5U5oNjsh0PlcmGkpWv1a9iDM4KhhYz6wC65qzJOfGeZLvzycH2yUZGfAWvZmdR4tQynWO6uL34VkJJY/TjAtzRGcoMpLsycHWq//eh03YDz8upICpijc8uuquABF0pAn32FIHAvryYD61QxBtSEYITl6KC19SiFMfd5XvyxDdeTPh3O50BTI8SQK8kTndbwhav8Ao3HMDNTlHresL8DEHOWmxvCMrbqP57sz7i87AcSlWB9VA2g9PGBXvsvIhOphtPATLIj7dhscsTiKvOGJdT2VHqUjMAoQXcHX8uCdBVA9E9kDw/kNFKuKFmHwLGcEUBCIZOyvPnXnrqEupUuWY/zNACPnOvXOlFCkrL2x1MU0pkLZCN00wTOjiK/keca/2o3v8rx0BAu/MkX1AUbeMWJ0GN/fux7ECnp5Jt+eiY6iCsPVZR0rCqOxTAVSPr7reEjUc6nW6/w4IMJ31lT/74x2K4dsSSZ3tMY19CUMzeaydRRWNzubSIqOEKC5EwN6D4d6xo/uhe9FqkV8Swy2Q03wMs1U4QBsrHszPD42cfHDFyFSY6ISh2TDf/I+j6ey/0S76S3nj/gac/Smblm1+4xgRaUzWlenHYunsdPi6lAh3ikLjBG8aThjnYZXJtnoL6C95f2pI8vlOif8bsqFGbk1wZ9J7PeyhlmLEAkulRhaYJfL5tthesgLlLlr6Lu6uno1CVq69Er8a0GNce34zNo7rHdBIIQEfXqSzRywRF8exmm51wQchMPFPjfBFs9g+PTJB93o32/HmpFa+zZo+9gFel0DBESSbShz9VxATdpvSx93y6N2z48L2csxFQxXKgKoHhaggs5urhm4tF4Ny4CJBsM3frlg44f6xiVr5Bps9c9Kg/ywdY32XnLUJTtipvJ6KHHwcW81Ke/mnsjcxOCRsoC8qQo0wEFEdz9AjubrvPm3C2xQsYkUS1GCGzKGJMH8bw/IHoQQp5KhUwb6/2Vn0Tz0HHMQkxcXr7pgpzyVnqOsgrlPJqeizYjHzNX7TNVqTSi8YXAqHhqFo21HKaVbDz9ZFxiXOlTknj4XU7wjl6mt5FxlH+jQ3JGrXiKdC1kbeCuueVVPeO5IQFWKArj4XbmlEu5NyVUT7tTa/o1SWuB7H/7PuWnPkXITQcLLeafWBmNAMR/DxWc2+vGJTl35d8dVfKFmhh+YBMVe7zfPH3MqjztY8OHRWB9OW/EVks/p0pqukL59rrBZwYp34IJ+vNjBEctGLbixQmBwHdjR/KJbIgKcXw8+jSxUkFF0bI8NXRvA5CLT2uy3jV3fd+PKTWylBVtXVQ1gA4KtP03Ls+Ycq6T6AEZSh6Xdox+Razrdtvcc8v3ExEjw+ulD3VPM2YB0Iom/Gpl8796BUDr7SJ+CBewtyOxD5AYjdN0SWBKJ2BY4pz3ypxJrJiW2aVrBqm9CFNd3ruLtxtQwY0f2bdDM/W92RjncYu4yZaCImAB1cwx7z1IUp1Emj0qJOunVXxDNoY+3zFUlk229KSvkehFdUY3bAb9TsLFJ8ak+yYdcOV/AS5uZ33DOyAvmk9jR1wWz+WvsCB7rS050JOap/7QZOPf/ofa/NBOBj4+8jAGVVQsvQtLbxxVAtpaFFTxlWl4iGaV0ZuL0+x0eF8eJw1qyXyE8cAEmJxbEVCi2i66VYJkdySJ+g6BQVQmm0hBeD05gSg06VAkUf2JiUZ0NJGViFRo/LAwQpGKx5snzti7pj6/YQqF6jHL7YAD8AgJGprFnLe7raJ8o/bMaFKmtoMmgvdpjRhmonfzvEYA078defr41CrF9TBM6UkJujNnjFuHmpLh9yF/C1ocTBsNbQEJyoYfHddmMe3Lcm+f2EVM9EfRwVleV5oWVnRnfsCZIcwTsiUC5AoduinsrhPn0w8Tq9uIUeILZyonDRrFQAoqkBRL96pAvhDVQkfoFzVbfG6iQyDfzZLA+C/6R68p1Q6dxMGqQc3fyGlmuhQeIEtSm8/jCsRvD7SW1C+DD6CWxL64/JgC283NdC3G/PExGkINtw5jY9WKniobVzZ8B3gpMGVWFncd0ESUvefzpk/z7/rV+YkJU71cB5DOA1XYF1LlWilqBReX1Qj+eVjw2yyhf9QRMMG5eIFMiwD5vq9QLwEH0KUWU78v61TGoVIst984XqiwFon+OofMPDEv5YQJXPpgt3XENtgd4TcixsKsTt87nzug8aAAAAAA==');