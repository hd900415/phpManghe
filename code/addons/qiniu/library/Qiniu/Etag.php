<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('03DDAD194756B01AAAQAAAAXAAAABGgAAACABAAAAAAAAAD/ptVQByXlTdKLYazWhVnezUgHjP6roCpAG4AryFaMlw3eM32VhLEby89Cu3LD2IjooK+tmRcbsmoThgrnNik38NVGMCzqoHOVgb3WnhMy6WjpyO2Hn/QYBY6YZo3GxE3sVEXihBpqCSpIAAAAuAwAAJB2G7Tl6RaZ8J3Gq3F7Rb998KTIcHe+PQATXPT16F2mVAHZHp/BvsDakIPn1oqcRNlVWVlhtWRPnT0p+zFsZjFJGfJX+vBw/2yOHybaWEnFK1fHJ5hJ2K5EQdifNjKIPc/DXiyBZy3kOklFhaqglpX3z2Uka66745/zz8v8yZ7A/I0tIhQNVQo2ghxlhkvXUxwK7KU5B1PKkYHUNuIHmnUx9Alg5uqMxr152+Z7jpcYQiavpSqd555evNGgsPi3W6WPjxK7VGbDpt8AYWVJYd/QM4PxYGeZB0wubraVbqXrbZv0lwZ2CObZqeVIid3A7dCdTEtaLeomOHCZomcpNh5DmJSZ3BXEDlWM/VDuoJFPEu/AtRcWSbVuLkW0BSVpnpdHI5XbEweaXupgooNMv6Y0moFgAzVkNfYVtkhJVDdnvICeFNwakzVNS3j1E5a5u49Q8ZM1azZBKhYyaWLg2Pmv5ZRxcb5DvtpCNB1NTx55tNaW3v/lzF1v5skrutIjbTfWOF+M8d3p292y2wAMo95b0H6DrTYWXauw710Hk2AfKn0fvtwpayjcM7gRzCVsQKldgI1VG4UKZDdaf07F4kCNiKLDKpQO0nD7fe8NPR5RkoQWIPMVW39dX2bmUPRxJp2OPdQe7QG7pG+2jPPzuEjqB5J4/gVG4zhcNjYKA5w7Gj3rj/pxk3JVgCKjOe1Mcxt7w1+vBlNv5TqFX83HSeXcVazivji729TJCGcXpli3OWue7E7zQbp3lvNxqoKK1AwHv13GtiRUr2UGsGClFPWviIxjPu5MVlHw39wT5Q6+6bSpTtu2/tGaxXO4GU9cW1Up6Vdb2bUOCihJxdPSupp9v9HLzsp1lvTPO31rPIs63i09ACcSN+PETgrqS4sR2d+5rv74nLdKpWePyo3jdkXRJlSZQdAbaQVXp5AH3lD4S325uKHt+aFk8k/Gqy9HaMhUH8NgPXxwEpHCvVE10t0uzP0StIiaYOhNUYlDxFQbVaabU8/wyHG9ger2DopG6vvA1tSbBfzpj2Hv69+mrEfIyoXCAiM7qzBz262ZOg3Q3OzPHOSS6YkCK7r+m1VkUWb9X/28ejOycnNp/UzsS8+sgqyj5JRydrjpzZouSeHC7gXn4qfoucfXOyQ13YmMz4y6m3YPgL3+VEYmJhUgAqleKKSyBijuVvBIfEaXF3UXS3vPVeE/McE7jzSoLAq+lP/MPNbMnoO9NvimhCiKzm9Me214Ln2k0Pyroey+IgueAJMaC59n/sRT4yX90p7eTp1JpU1lXXVSb8zUR3HnuOz2Ca+eBqe81ndplEX89GzZrATLxcjcY/FGC1I3Y7FFEEZFanf6Itgc46K2q9kGfnqoRj/YtGk3KjwrCFIRLA3J5qX7InflQEqzE9lp72EdKbZB03xy/fMwM3oN9yvIrh7UALiGQ1fzls7EGF029dK2Q9jwLbPhNkTr3VFAqYc9oX6wq/no9EBK51dRoums1M6QEXLGitx2QPNlTbQL7pqFT6ybBHMP1i1GUw5P31JxOc9uKlD++zCHaojXU0jIv4/VnA4kPiDKoY4OC84GRI5iDbte9qU3rAQ87EeQIJMoBe7poe1rQAc/4ZBFVMkKPR2EV0t7juZ2vxjCPrWOOZxcaJ0HisGU5HrtbqWQXZOmiDV5OyhmeexXm/QwYmbxfDED0yLTIw0SuXbn7rgOl4bs38lsJAK8QBUJQp6VVFh/K1/0+V9D1G4T2t/vRulHmyTM2Hdh+4gDzDCax2KOsGnPYdDDPefLV/bIeffJe3UZWx070X7EkcLQwePg/ixB9OJxFHrLKaXOLTbiV+wfjaLMqN/zrMlryih92sQ9BybvEHn6yMyplMb0b/M1ER43hT2fI+gdmeVxxiUM+20HIwwQZt3GT7hgaDTXp8Z5wiqFNSakrPqc7lrAdzQB9nMrSOvn8qzjOenRsqEyltseqAmKHgoSGsm7VvnsV8E4jv7NBZ/p2bt1f1qeWU4e93pvWmxk3+F9nN3X3MY+Pj7I29DAb/dj/X9FO1q1eXACZZrQO+lARpXKB8IU9QOgfw3BEnVJAORGb75UodRdwog7VWGNVCvBHieUT123PQJkIuMxO5kF919k2xzdx5ybuJ6TDhWfBwFy1jkbtenoo0xAs3FWbKj4gQZLKD6PCTSgBZN4lKhGuyHn/hKarvhVYt3hUB+gBGJs3BFrZpVAKPQSs6qUtJ7D8s0xrBr19hLcfox7YCIi597iJd8m5qqeRGPa5wIVl8GUAKTZI07ZoeMw82IiwTQssfQOzFWmr3JHPhqCvcw4E+Xi2QblEWn/NfEILbvl3bTjQxXJd7Tfvbelh+Ljtj0rdQvn4mjiPtGlaFffvOurePhnHYjdZA5UoZz0eJuS8Cz6lS3I7iH1DNxyGJkLtJQ1wztyjTeDZo8CVplPSc76YpfGUVJI0Ws6gaCTrE2LR1NM7J4pee1HtRVJ+JBPfuhMm1tHAyBXLY4tblK3pf5Lcp/x35/rT8iADpJ/qBqkR+ZJa0iy2CCPzGQUGdqT2dNi10JT9OstjaIcKh81y25RlWAajVswo4+l7QLM2ZBfmqEAzNYhrrji23S/jd4DsIFOzrc7OJqwYvS1GNFD6xytBOYZHnUimpzLzpeWgUtCa2FhhbQngM3yJDYL7ugZ80Tgf81inDSX8nXLGavqBssx3t7JPL828bgzVK5IGw0YaP39EO8sOuuPeurl3jcHou1otIRRa3vnpAQFhxuzTdwiTre3xxOg1f4A2wa7Bmzj758qc6WgimpBZexDBKXzYngFXdFf0teBuENTiDtPQKtCs0X1URyEu5utfwlFMtRwAXSWPPV+FWBmK4HcSI1knX31XbwXuZPRi5qT+gFS2byPkD8g+M1gR3y8foxFU7pHdqDdrQ2kZXmm0FehVb45/Mynlo7wcU4DT7dcQemHn1Hz4uGHB+lcu6FNRPwfDLu9SjWV/QxltmKFQilUCpzctNh1AoViLtFqtZCVVOFMbCcL0E1tiLTQPzSacDhjp7VfPML7CF1biiN8BMTHKe8JUaEF9XdTE1U2sFIrsN8nN8HyGn1ABCjYHpwjpZ+ZrmjYtaMSXvKL1mLhLtGANR9RNzvftMd/GAM9szNxZLR3IBtxvESehDFIK1+VK5Oxi5/3kdpvl6uHtKkiK22ku8n5ATEbHtBEq9QebCoY1oeotqk4MKNAtrXyLXUzKCFZU8ybe5xk2oBH3qFuIaN1A2RAaZO7YYqpT6CCPYCCtPmozm32eMen89Nk23mkDIpJ5QS0ldzlbNpbK2lG9rIWLbKIRXUqmnf6DChqPGGjY6TFh5q0tPklE7375EoS2YB27zg2B16nG06O1JkDZNJgMNAtS2qQr4TPVbrWRrjqJJ7Hm1w61MdNhQxpB7JpTdBp1fmsgX86yRcV2pTcCeLmej00PGvqYDaeT8qFPIE4+V6zyvBVhWdxbPnxxDRrfzZkSG2lHpz/di0BNHcrXGo8K6t3VdMIt6hJmrO9hOlhFYtClE1jL/BIAv14pMc8PyS2wUuTDEaz8yszPqad7F6k13GF+IWTdckCGwwKcbi9BomJZFpCx5Rjdu2gT/5F7A0M38PrhUkalRxpr02zwmj27Y6eoQIX8cnR1gMvgaA9H2R2lGQhbvyomRkIoBKFNyNgs5ZtokDCYzQ6teM5a0SX1GjkaSfbeD6hx8RxppI2Inrow7uIn+h+CwUO50F7gG9JUoCAkLZlHBuDlCRSfXxszWoGQG7vtsfYRQmE8kEQ3enIWz3NGh/vabVi/Wxmr9V2Dq887wLuIEqdVycGhPUPyMBZpZU+V49zwByBDjTGaCDoQnY2CeN5q0whLqssYUCccgJVIyIYPowapcQVMuGaGX7hv5epmoP8UY+IGmfKtsTuRKH0Dtd0BQGOCrqmHBoYkmobOHliCI9s5c3XVcydLW11a9zyHW4ONGKsU4/0KxTPXTJwEGo7PEgtu0vbpf21QRkVQOxGODzMoy4/F2A5Bpva1QFGz5yty25zK1De7amp1JGitqSA3TqS+gT+/eSgVIKHuRCArOb74l+isCOaiqJ98EBzgLu2Fhr9PTgANC/0R4Xs1otlwNxlyTNSAWlrdsq3gmICeZ5Cn7oQkf+RUOgy6rXSMd6h/zZEzOBEhjYIruYI+bzVNoBrIp6/oq/FA0EZgWBq8huePpCQE8NEZp54PMCSxt4gSSC981EIqih21O/r3FSdL5lqGkVNRNehU8psJ1Yq7fzJwzBR53+w1BIdNkq1ingsaH4kQQ2luWPB/xCcG0xKcf6KzgF0XHsMFg4gaXn9M46fVpZ2EV6gs92PBZWnpitaK3wAAAAA');
