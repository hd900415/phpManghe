<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('03DDAD194756B01AAAQAAAAXAAAABGgAAACABAAAAAAAAAD/I5/ZzDKP/BiIJsZAj1/R78pw7zlZEUo/a1xemEOHHdT0cqY19bHLRxlqJH4i87N6t3g/UffTWdAcHtpfCX8HnxqGKZpXM9QCa9RHcVHSp871yRp7pS+5BJXfWmkGngs3C6OQgQ+kiQZIAAAAiC8AAJzq8QcoOJDdt3NrfSMtOUn6MCszREt6wlm1tWJLZ8y4aSKt2w5Jiq6GJM7tqmxwz/XcdKkqtB+pJ2Zfp+0Oabfxb8JDwzulvtEs0AGiTuxHPwa0+8XyCGoy4Lv53uOR08M3Nn74C2aZsuwRE7j12muCv1fBYfalHwOKlazrUy4rNVI6qAsU4Y4N92sWd1Cr/BDpbNDZZ1EomDp+bg8wqzNeg2hLSYkpD3ojJNLbEGfXkq+joTmE0tCXkzrowH1D8+sGyfbE2i9i1WZC7PjTXmRIo/j+OkRPTvaWyhflEj6aRmvqpVsNTktm6jUZZbPTpWOE7NH7h9YIbKanTIs/NtG8e1Qdypot/VP8d/xXgD2ah5/bEeYTf3bbOptivDUmnN4Im7liRuIhwebf1iUrpI1vvrrFIPu6BPnUB8Mk6D49xTnsbt88CnO7Pw8JQuduJlSHtzMCp4MoQqwvmU5H82zUON7PoJeyaLoFhdKVp5iF0TUKEwB3mN4Hlw+Bg3peYUgyX7i+76/g3323ltvypx45l1p7y+ogP0M4EnENlml8Z141Lcsk3buHFeAYWVOXFOUWP6244b+bEg4F4cEldVVmPkbDLj3bW7VinW7EmvuBWrA2Hpy53ANfD7ZczAg0t5fqBUFnPZUWceOvQA+nq5I+ooiERxc5MpDwaMur0NrhObdfAaYXCvkWP5P0oyZDtD86CW4e7kD/3l5qkdGKgyHtGjRxrQNFirEu0TLTw88CcXKCaERj3kg9zST9WtXGVSOUcy6zVaEdhJqfmjKem7/e2PFJXlzmS15zYXmpqUGT8CqjPSZYQfw1ooLCxi36X3vrQDfo60d4JaT44eEF79RnQGKEVTlkGdIhFr77TG9mNHXOXFmcLQc9dDv8WP3gAs1n7RjGb8+tHCKhDfEPxdldxb3uvmHgmu2MMIklo88r5QRnfaHaLeDcndIsxauoei/Rk+urhBboZSu5AKjmo/HjIz6N5fNb4pzxP9qYWorTI+XWLuS+DEQbt+zw2Cpzb/7TczG9kVrpcxhZO4UfAYjg90GtFCkFgooKhu9DWyB8fDEIRSicyBQALP9SOYx4hqkS2XHH99sr0GeDJ5uVAiw8r5A5MNRjj6iPe13tgbePScyggG60idsZshnZgG09uY+x6us54T1YZxQWc1U1/RQf+B0R//01jH7hUSwLSbnxLFASVJNdcKNqoMe7vhog/Lstk1sRuCruUDgcuj9eMQJAK+3wbta1gbK7TRfb9G/Vds6kvXoFFmKJhTx3QRmMpfwE5Vl/q6ogZymOq0jEXhy+rbtPBn8MKqWR2pTN/abIggMMdkOmGgYnqXgV8LhzPmEXSVSW+QRBsmygQlFqy0UeYfKQM6Ctw9SOVRKx+YexaYSUP78IVUi+vy+rFswNXAaxVjudQqkrMS/Ka6N5ma/7WM5ruRqkr6/S8AZPiTCQYrNmVAnoN5ubesTB11VzaQ7u2srWyXtbFxSXsSL6XRRWiuLwbADTXUmg2iSqzPumJeQ1SsI4z5CXp8kbWYa6fItrJ3ey9B9/A+0/xYDpWic7aeot74VdoPyUetMzArPXrWKinlI7hIu+/Tpf8CyWPx/AuuYL7+kozRWSR1/tX6n8UlvL9j+i3m8SqyCcm7jjEEJE1SUSr2LTF1G3rTsAaWB/JQJSgY3dmUfGFqPu0U2A101XMkhp90/7d1dTkNQiLQiKw3frOXZgorTQ8mPagktEkkr/ddt580vC/VJPc0naLBG5X0vEKpPsxlYSIU9rLN+9zL5K5pnDxTzvX5TUGNeKMN+SD+//zgEPB/K+wI6sx/0mFqPB7481P0ls25ztaEZsbLN9aGqgjjVZiJC74tANU+IxlTKBr5WTtSQASDKJKpGF/50AtzVgIK1tqlxJW03blEcU7st0ygodgeHrh4hXiLXZKA2uXWD/rmX7DqCfYCmpfAdlS6pTIkr2rTglrSGwCnzV5BmYcwrNzmGkpsc8A2OIpm4Sgxh6y2UNx3kuyndQRYo6TaBO9yljIQUxSPEnYRyAmGAGJaqQTxbKTpYtOokoeOuxGzmok9ol8UZ95MVR/Ar9Fsw3fKgjspbKNcNAeT0Haz4gqaVMeFUHRC/CuSeIyDA85qnFbe9F7vGkY6hasjcyhYwhUP36reLi4kdyxq1dH+LooJwftunrJNP6MH7vXZOD8oqblWCdCqzEfB7W7Ru/vMEtlqhcC5JoqJm6MkrH+DZEvzY8JEmroPrC030RWDGCg8zxauF6cc0YTZxQwU4BoJi+48Do4dnBBSPgeoKf1k3wlfEq5+4x8GMSJ843hOLboCpEtM+JBYh27q/3NsOOx16r8IhoaheatgpzzXv6tGP8BY17CtLRxda3jY2d91bd99ZkdF1kttGJQ8c6gtfcMfNksSGh2GzSdSUFJXZUz5j1comoAW1gLumaZ8d9dfhosJTG7njV6DgY90hpdnUgYN0dJ2GgoRhChUCJIo9i942dj3B1hnMlrD4le2VB+L1wHkcv72WAK0EE+3vWW3IzjN/avFywZ9/NhUrByoA8wcp9a5dR/pbeeADKlzOGZ2u5alrXi2E/kPhPH5VD2KEvi0M3VuAZ4wuCT7HZu3DSQby00Xasl/QZJ7u+a2omqQvLaVUrPaOOfAksq+euvxmfO7uMYCFW9bg+ibKMw8igZcnUt/CtJJncuYZbJSfkOx6jj1kTArkaPAkLFn0HYcE+RS/P82lMbbPp3TztNu9wYsOv2KPJO4WllEc5mRrbhYV70jYf0/RCB1QAx0RmrbG/qKDGHflgbyxLf0vWqTOiA9b0LrWKkwedY30GoPRI6Ducdn5trxCZL5Otc3ykHUOv0nadwA518PPdEn9GKeE8+ni0k7tnoUi59MIPSBR7alHDHBnSdj8LvWcUnwEY/EZ/LenJe1Lp/Lc95P+pH+E6tPYmokfzxhHspzwUwDh7c8jgdKFIXTNO2wH1Z8B8aebI13rGAa6ATdXzlOyHepkMWdp6ah7oW+rUsmc4sf8hep8FqOEVvbpJ3Wjtnk6UNwa8oLkdt8uzcLoozEvNWJkS7DwaYkYP8EstkeryyOPBidz7BSUWjavSc+U/mx17F4vddQFh9j38g2Mr3+jPID2U3a4V8l9d4Bp6PcfKOxwwRLF0+HurHJtQ6iRNq3WBZXAjfBPAl0YQRPVNQ/piJpaaiJ4oJfTevEBC4GE3Ja2CbDY3RM5NBNDyhZ2QYxP2w0VTYuDZHX84duwhx/PHtUUayWdDeyMiIymauHr6/G6Xt34gpBhiWpax6DTpZHt4jXLh5/Zy82YmDWchczti/L6VP9wpac/hmp/tnd3F5H1x2ctV37ArwQbXqyaCoNv35NiJ/t9VY9LYrzPQ+A0I780i9JiTnJzGlrtQlEMpXMg9lF3kqgn726zDEEWzoToUN33DsLxBtb4WL0gQqFUlUxCgMK5MD+ew1mdotgh9hxDiUz805+wJP2xICnOaHUIQn2GBQFjoF8+W06UmE0ei+400TWdIxkOjGimZbGMqEfBfsZQNBzCFLUNlAtPYtEGHszThj7hI72dmWKHdU+OVyNNVWWXqQJOKVvjaTL8lzjfb6BCDQqM9IINV5h3vCAAYJ3G+d4lYQ3hSekUkN5auq3M3u/LAAK6aNOk3TwCm7YYsZHOYweC/m6DTzi9gSOuV2+lLAYJFSpnyIplDOHdKm01h/NInHSc1A+r6jynPvYdIyIxQJpFOXOZPxESzQNy3hg39lqReLd5vnG+QwQv1R8RPCX7HdhT63Vcanmjk/cwAsJBS2W9xRViVXSjXO6kHXovfp2H3XkNGj7QXjBiHSIfe/5wGEnBhfYgU6d8eapD8nYFpX9Sb0D2aiRTqKpER3rgcCcs85V7DxD3NfLVRSh8dtqq97/v/Q9yhUMZB6X7P4yV25KB8uGYVbQjQ6PGgHyj0W3/aHSF/VwiiyXczbqJjGHvdY2ac+azcyV3rGnCvG54IR34Zo5fcRMgRWa8jdkikfGkPwRrPb5yn1PQjZUhrGLTfnWD6aqTJ3Q8BGB5PXFfThNB6IBcl2m8rYMl4+66BcXd/rEpaYbQbG87cWVK+5s0tRodG0bkvuRc5VjwYN89qFHMeCU4K3rQ8ROX9GF4KklWgL2kkMTUTbXTy9tMJ1fa4jSyXNwOf3n+w9saIF7p0xLsjxHiXEt5c+Tr1j2fpc89B3Ve/IV1/iLLKVfVQyc+xtSbDr5fWEbBBkyKCOdPHjwxLnmNYawkRu051sdl35XX5YdUitKQ6Y7RUuhJJhDXJCkj/NvkQK2Fed8zgr+UxL+WEY+rCb+qIhyjmg3POk1Y1lZCkV9AkHSe9gQRjdgbNwwfna9C70zG03UI69c36XdvvmoQCYnf4Im3wQdqp6cFC647CoSfcCoSzu+d7h7QUtHYI+O+riAx38+LJnrGPhDUSjeSem2lsjJ+EnNe0k3jjiOPIP8yKpb2NDSMz4q8ZEt1NkLDtq6zMYVya0qlaA2gjJipGsNI90pQjQVqoKUd6mB66CAyyzp59oRM9DRY+5Z7b7c6iZX+X2glM+DiwDoZxt+Pa4ThJUEkQnDbkLXm1dby7rU4oGwUMWzdFNP4jay8M1j8eruTKdrcEBMS5rITdBxJY5MBvBiZayMzEnYv7SvuacwTTKTINJfraPzDEtEwEkZPZpoqx1PZBsGR4nO3aAcc8JNU77j3RmhM7Fgr7jUQEmJ4tH9EawlJsHwOPJ6sRRcGLbdaOPfxcFMDfeHDDs79hHUAN1H59m/onYLdPPNsAI28wYbgCcGIjdUJngTmmYRRox4pHyqWAwF/D81nU5MyT6lmyj38a/u8TTusQgTbyAo480c0rTDlC0WO4fY+jEx2GbUldMW8y1w2zpdOm09hEYttIHYIPte1WL5UGoYYwJWX60mYFS57nV3jOnZIZTdDfIQA/kHLvMldJfVo7rtEGTzGSfJ4ROgKFu3fQ8MNEJ1pT+HsbhWwl3fgltDiUqDkYk3c2BkH5Egba7sAeU8VKUI6rm9olrnHjOowgeDhj2z5UOyKqRwRvRoLnaPCsdlX6BSb6VuOxGQIgNyROT+CaPG2+Vkr1GpO62obK63MQfB+9tQcslX1kFEMbH85d36fwmOVuVeJhvblkS1Xq+eBd9XV/HdVwWEtVLax47FAsBomROewAE9Kb78vD2mzpT2ZZPQLl6C/D8A0vwRL/e63w9w7S9Cce8DsScp87v7Y0pcRmJXSpHyBxnDbFqFyOKNkjkV/uB8gNDWzQBy4dTnTZiMvJaMPdP1yQTylliq6du3jKpvCG11AGLeNKn5ankvn4uHf6/8GiZ82CtObX2spqRRHLb90AX6EXQAZEO93//12zQPr87tITbNsD4mXHSXg3O/gVKlb4cXpDlxmVWouNSZ1YqHwYR1gTnyma53GZ3KUNvjU/AHgtdpNnK+lTgfWQsCZprQQr+S2MUkvZmEWU1hkjmZ/h3Wxfj37ymao4sweRZqg1L7WOWe7zwNovkzlX8mLmgfxFVtJli8jF2Pi3YcOsnaiKxbsOCtNRnA1AacAy9rmW4CuzHd82482Bmu5eZbGcr4N+lq4hAo3Ob1Zz3kEKsNnEBG3ORSYW73OKje/YUIW7MKv6Gd9gS6KEMHoltikIVNwbjMoUDCkWoCSws3BIEUm1txg5SzxuNbtWt/N8yYcgrjxFFs0vhDKCJd/sInscGnHji7EAaTnx3vGmVKF/mQa1nMS5fnGcxstgAU6iXgcgiiS8vIOBHdSehPcXz4kIVLQd/JYbc9yPngKUQcfl3FRRxC9rRMdJOmvDA1luEEdAhzJ3rq9M15KSQcZ0Lr84wBOAAvKdYf2IwtSZjKtatI1N2x5xKTyHTYZnY0ndVCJ2rIUggzAQkUOeD13v0v7t+1i7m5Zdk05UHxepYO4NBhujz4J/2q7XxeHIb8hbG8ML9dWPA+8BZ/P/Pmt0qdPjIInElFgWF/1whP13przc2W70kMEDDimOX6fYI2MQ6GHw+uYWKhfo6XJEodPj1P/7xhmYpIUyLAxKoU+Lf5bjVFUKmspZmNW2BLm42fUL6VB+Mu2S9Pm9PNymPg/pI4crwWNYkFSkqQYOLlKhnVmxWTLQhVEwpZ4v7R5BAHzSWzCYFxMg3jvWwSvmnJwtUJ10O19bpuWjZzlgUddu+P7w2/2j4hAU32cztk3E1qXUgjdjOW86jRz+SrxwbLA+BSoyVu6tcKxQcwtmcLaZVg66I41t8SmycFNM0SOhc/rAuqX617rdFyzGME6WlLdiH7abswLJhequ1lc82IKQVLTE6r/M1YhWPVOX+EI0V2E78Yr4LHCR5k+SUViResE1JUQYT8JfBxGBrys+WwtO++2maF1wMWcz350m+MTwDcWDm8XwhK/ZhGuHetQAJrk1se759EMotNekcIivPwMYBMZjhxia9YqQ0Kkmki9Y9nhrTnXLiosO+tUqTXFaDou37MYyXJAhy1edgwts9ek0nOv5FvqltSNVngbjw+TsW+ABcYHqLveoRWbWemdATktcrTeYFc5//disBGxHFbNnMa80nZXnn0QC0eixjK34MOBPdkZm8N3R1lXLg0G1DEX9OqmhVzxNu5HKNQNJcbMRplXYfy0sUPcSss6Z0a5x5xIV3xMBdJqPIAaZARVXhZ2y+Kk4yDj6vLW3hfAgcCJum3a2hS8rgq+MtivxybywNvaDmRmaQqL2AixWeVHz2Flpw11BALO6LO9XkTnJDOBTe6ABjF9LfkZhv0kcMVCiR9RcyKzKMYW0EgGi3nALbz2m0MQVpKAaM6oErnKoDpTb1eKfbg4Hkv0pH4kAxZlohTzLPdo8vcipJ7QyKxU1E2P1peaA0qeIRCx7Qmrq86R4D9ZnlMeO6TO5TzE937L3i45AgZvQErlRakZtvJfDaJoE1Owix5o4btn3bC/8aAleiLHdEM+qIa+YMistqtxPnPVF279y70skRyQYYCZHxZU2lfgBSQGMz9A6tX3RYJN+w1kBJTemZYv0PJ7U+SMAj72uAJZBM60yYd4i1joCEyFVa97CY4iXN4iEr0H9YN+d671niQAAoSm/Is2Id3f3csaBGWSf4u/c6nSMe0w6vuCgmrMojlTzpWf8ScxbUQa3Ct/8BFJWd+OYgvRwL7i616qKVQzIKgrK2Y2oIl4yW0NCjtUDhX+dCL4qRhl2nNkhOavHcc7RjlARUbB++wjaGb99Rb4Vz2idKrekJ59SwyLWjyWx558GUXk3FhTO5FamNkO3vfuDBDyhNc53sEIHJOmMf/vEwq/YfOBqewhTctpHXLkGgNkiUOM5IE4d4MLo7D6CO/aa0F8w5vNsFv4hrZeBS9C+La9Fk4OK/h/XyHlvhOti7gw6NnQA1sqLRiTLM2QKRzpgr2XMvXBjVKZaGScAM2tbO+//9DvSKInjDHEY4opdZbF8MFML+QISBtpILwDp4pvYZd92ouwurxfN2oPCf4DX2VJwS/TvHLDDXwE4qTDRGa9pPv52vUxPyJ0rp4cpvO0DnAKXRXMkMr851c0YnzKQry6nNvpizM9Fdnq/u5Qnh/RDOfLeCbHVOLyxKpY5ZmyzK+FsvLKu2bninG1ACqMNFYpH2wXuwxC6kPRp2LTBm47mK+tYy57Td1Un6e5ngf0TmptCLQwr+W/9TMitlaoSZXqbsXun67wwCGYoVZ4N9HeDKDi5IX8FWEte6/MwyWVeYipCHziewQJr0k3R/iB7mUiA0RCvS94wEWgaqd70ebVebqvrem1x94B3I8s2CClinVIkthFXq45F8VJaHHrLrMgSGgHZfz4qrA6YU/Ha1dqXt68dEuDJXkgKRJN6BRFAxamMXVq58p6H+XeLHqz8up5c1LG/iA+zbDyStMoMRase7zNYrAf3z8jR81mrlvZvHqlec/dDNMwruG9vrgJHhwQ8s3CbAE22i2kL9MsDZQI6loQz7P7cD/7NuTfsLVL3XMcBENweseUeZipSKk2A2aFowd0D8NlYNJGZLKKOP3ub7r6YNw+BaQ+r8hDHEmAHqEieq7JexBsq4Xh5j8UMNf/US/EE0lDbHEuiH87WMHFMAvXgM/X3aU3iwiqmhHmMFRAqE2diiaf4TGcwS8Mu/9x6fvg7hXzG7Cbj1oRdR7/MCxXQKdTewQIeZEc/ci1GgMIm8tuxNFhD33tVCDgMJSt5AHo9guEs6ds73pZduGJGQoSgHgRy5ti152mcD/rUAs9qaxfqlbMZjUsF3pNw5eVJNKr7tCOxH/n2eDJBBECWFCt+Q5XxgRM/kyeuH8tJ/vyMSigR/0/t5dPssOxZJFab2sZQrtVAudLw96wCA7HXAXhJKQocIdqv3yvMfJmFIX0pZ+GEA0vbbNqh8kkPMwlDuEBrOP0kZ5qrn+yqQX5EwXpVOEWSA4oc34Bs9At1ddPHEA6IOu6ehtFWExWtiXydtMjFr0lDuRdHw5fDt0XcNz5yxlyepgPGlJsBC732so2YyUI7irA7YRy9K4AcKsfMg1/uumf5groLaNn0mhJBmDKLH24TFvFWafSmCLU82wspNSSsyg//PT/7p/shb1RrGp4+wx3zb0QumJDR+Gt5dLrDbJnEy/kvjsSZAF7pXKCgHRSeDXATNHeKCrp2ZbKJ+t0YLp3Arg5nMwF3X5tA2u5BBq8rEwUh6ty3SaxkpZVrQPhlzZmjAbcKz+g0l/X6ganhGkML8k0CVhBRWmllwfxTB8lgqGzvfMUsn39tAXuypnch5h0DaL0iDd6SRjNi762C9hACpSoghRtYRR6n3iHyYvPHLgb4NrBvlVM9666Ym168srfaKabMCN7tJLOGC3hMIotHGEThX3gsQs30hD4qwXr2igpij/IJhl/8rmzURVIdhZPKhsdSLPXG/Bo/Xkfl8zEYnQMKRgdhBicxy3xNc1teH2nV6a8yW8ZwQGWcChID13KWSqzsF/yD9+tzLIMAxo6F8CnSUkr0Pcn3LW/Vrf/dUMHzAuHOwWA//zNWdDrp8BGU5HUS9Q66t+77NG1HR1Cre10XP+Q5Uz+ri+r8qlS94tQis/kfJmL5DNCl3C1cKRyDmxLSikayw4oUWTCiT1LvdSZVDQbXeWnq0dEPDfKuiEXyz3TbEGblLqBonB8GyQUAlCPVPX6W0giEG+7aI5JvfGB2A9LbglNMVOUPqxEgdA4mz1O9MHWvtc4T/qMwQ5ROKDE493hai6JMg1CUHzznHA481naBzqn71i1YUxb/iUDD92L5u8gk5Ia/f+rdmRY0Jpnip5w+hQEo3dS0FyA3xfHQw7oTKU8TnroWlnJ+rdJn9M2T0PQSLIJH5DaIzPlUpcFJJOBajR/rRjM/ToN5WnfHei1dMyACve7ZWB7YwDW4Y+52FJhYmpqTNxjXOcqrM9RL6/kujmGA5jTSGFH7lxFPKmaHR5mDcGWLTA/KXFGfUxepyihKGYqndN6pMfzflH7pv8TiT2KIHDgmeb98hHvkH21DmXfurTRzkYb2y7qY4IzXcUsZTfYII34ERllVp9Edf5Bf0MDP8irzVTEDsWXza3cQ3TfHwcAuQ9BxyWk8wZkHNNtGxIHxIaY1RX5/Wyxemzlr6JSn3A5x/J4usc9ky4TD1wYdCZAu8ky786TOFpW5ce6L+FmjVpUWbl0i0e6howldVw+knOMbWBmDlL+iTINfQWv4QQFTlNgkdJDVAfeP34S7azIoO4PGCZCbcfXGNwkqFiwDfAXIYH/gJGgRerADWlUKDLQfRYhfv7uPI71rT5FzUfYaZtWm3z/XWciGbAapg2plFE5Ck9DXSLJo2vhbYqNN6JWbCx733Du8SvS9/HTY7vUJqpIhYvHGp11S8tVZJB7sXnqV/YT0CE01pAmMCUaH3zXkbrCCc5bIrORQwYPsAhHHm8uODCsPzyiERqj+BWbH3VWbYCxyWG+ZFUSL/HZj/pISpZFDfX1kFlTb8IveBjlAbtqCY0tBoXIz1Guvlu6v+doavLhCBtyCG1KrHL+ccnK9aDhNvibmsJCvFLZ4f6StJIn3GiMiQN03R9D+BqT7KXJT0/U1GljTk6E2sLRE4Oue8ZnTrz3IsUPGPPwFsOZFkLhcJ8jxM7yMZPeJJZniyudp5QmDioeb0XOnm2l70bGpMdRAFQ0WSg1p4B2cQKlbEyaRm19PbsWmX6NzuQm2/mWQTc+4KaaVpZE2wQKBpiWlxCkPGIPBqFropZpzgx67n8CtUJp5qGgZZQ2FvwZEPchfcz+QU7shGFtVkX+mNOOGrMUsoRyIUjx4jTzK8NmlcGQNmuUk9dW1MBGFh32eGRl+CRF42yyZ316fGlj5Owrkswh6vHEgPQ7Zc5lRzMQOUsk/3PW82pYTDFl2KEc18ZBN8Ywad66lW7ql8vIzs6LXWsr6CDaVNxuGfhQnShDqtWkTbN6sl6Q2bdd3YlosbW3kkJ+HwJijAWwis0Q2n4guInLS6g6ExW/+2Z43YmLBcT06sLt53Cgn1y2Cv7OotpJOIRrUC1rMG0gjcHcS7DQY55v6MnRdUl1/BhWhRBqZWLKVmjJMw55MMh+0QWnMSVmh+Ef9D1MTINEUtNccCIrnldQs397JlBa97nG3Kyh1LMbE8iMEz9z2sfIujCA8LfGWl4k+ZC1cDwxygu5gnyrRMGgubeuzmqc/TVDNbPWnftuNI0nz0B2fo39YFdH4lbGIdXTz4/gAUpkPbt42HXbaMC4vjuinWvIIHru0+bovqYplQDY4kW4znqhoO5MPEmcGsHjMgOTRHZDeXWPvWzPtBh1Cmfc2fnj1WROUB+GE1uUosUR/lV6uUyZyVbdjzWhjQ45eydznUfe0MtpYplQfSg7Ud27gLDZi7guDdAzDyK8eH7P5zFXGGFU3ocOtSvB/0sI6YF+gJj7bYa2it1SjDe2QtWpYwkpIeUdSmOlQ4Egg9iHBB8jZHH0P06U1j74gkYqb+6Wy+Io1XXH4UP9O+4pIxapSSKPceFyaSD0zN8DufJmEvOKfYizBlhXDy0viThCx1Adl4PopfKJj35VzV8cSTaBNvFwrI06uXclPq/XrZkWe8GTei7D38pXToBOCE4PKfdqsti3W6qjstu17Yphn/5bvRjx0n9ZOi+mSiejcbPzo1JbmrTw98Ps0iTO2jtLcNVHJEKYuY54kRUDHbVgf3eWHts84HE1MFV0VRb7cZRYfyCI4jndtVDVm292PU1nawg17nYGf9TDU7nl203GTNmgWCt782AuFLvHckPokjpYvUrRozpCUoyAkR4eBST9PZU5nFs4198RkA77sGhg3k5w6ILmL+z7ZS0cMnUZSTRj4B45vZi2SC+7XJzso95LVtbg/1UtpIAd2KkKYB8Xq4tzbj16biYF9WcEodl91jOJVN5iippiXgyokQ0uLJEiqWr2AMeE59/MhPi9N0DtuNGWuZBiFJeOJsylQStPbb4EG1aMP1ftr9oIy+NXuAFNAZr5/ro5VQqsreCAlqbasuVY+AdHMiuX+iUHDFR+mmmELBC6XglXfA9PS2dLDyAp2G09fUho8TpezJP35PD65uteqrAyeSoGlaayQLW5G6W3WWiJyPAjOr0jv/roifPSh5Cvbv9ItDUYhK+oIz3XLyq6V49KNGbF+RKsnUUBA2Xeq/74UYJQu2weUPB+xQPUnKvBaD7t9kIVci8YHerRctgz3MImL9jR9SAulkdgLY8UepvoqKx0UNtj6xBJszDVvFCgSSSWJ4xIWoi2V/YxEnnpzmq+Mcsiu7BL7fFG08kko4JmqT+QqJZSogD0LJwzVQg1BlGwmxCEUdJbdAnYRUQ3tgpqQ7KM552BUUsKHYd7fj8n8f8vd6OzTIdc5oRln52MAQlODyxS4y95ZzQWjkDcfYlL5xtiELzUKy+aW33aeC0oMSIpML6820wUyhAnOiXJqePWd1CAdaM+EdsbgLqoy0lyP4AcPPg8SCgmuP1OOh+0Ns0WO5o8YIOz1Z16eb1EtN0q+HtYJG3qpCA/QJpQoaMN+wUUtk7/jlEeeF80+lSTyQyKsDPCERxYHXVLf4I8f1D5EcYMcEpIzzZTTKRB+fhkzwBNmAXKjqMG2cEz6hwR67F3lnrsI+42PxwJWFeFsxs+s2SjC8ulTSdFdTCogq/qSwd8Sr0uwk8fENrM87MEIwSvdoZ4zd1pPp9CQN/AaDbCDhNUnqil9KhQnOBO5+9Mysp1Aabt6VTtcqii4PxiwqaWSy4/SidlR+yHbRe3qzG65V8ESLh81sLAn2EMYkm1JNB6qY9Pv1H4qfqc+4saFBe9rtfQk9x/LFsW8uz2rsr1BDoPwgHNj/kS+l7JLKhciJ3IWbKMD+SzkRCwG45ubFC58T0Z8kjjkhc542cTjLuwyLJcqCToCf3py7MHTmyWbWIllZ5P7TAIxLR2g4wnqv3NokX6+iJ8wPReXQ/0EMuPV5qntoCAT16b3x0j32fW5072pyKBswOlu6q/jN/QU8LZcWIK+hVYzTUB6dbnat1CikefKc2L1pM/80D0gJ4axNBHsZWVucmSOd5fhzRb/foWy2Gy0uW+t5/9PqrY1CposhDxIEIKgwNY5FxJ1V1uUjIuqEH7aZbeUYNeBdipoNfNLARxvxNjdrQuc4u6eh0zp1b3YWORjX6YhCrt7dkAxM2D9CpQOy97m5hrsSgfo/+cTvSMx5C170h/XIqcXE+doa8MjTCvL+q4v1iy+W/I3qsMqs4WpADpC6sphNIIjjk92DkOk/jiskDZVQHOD0M6r610f+VWy0zH903P+K9q7G5zqTDqLYctxcGEtmwrDuA47yl6aMN0n0FjgrYMGc5dZxRJMf4475ahFnmCeb055SMwaBBPBR3+b9YYSqpeB55IHQ/9cwf3fGveOf7izNCL7j+HOoON6zH8n4rtFNBxRNAZBR0nE+nkgebh8Dyn4SWY1avLYBnFoLwpLHeakRDorPemcRJcmeH4JISu1soD0BMJ5bOA6a46f/JL6hOLUpaO354xBZ4P6e1XR7UI7+3cIT5X67bBXZg6ow58lcoWqkm36JDkr4sfmPeJQl5N1psTqjG9ZuDyAngtI+NBHj19hY7X0qFFLMZ+nfSSV6cy2sgefElrkkb/ZEjOwzlW6RdXl5wRlrh6LoEjiMr8/GTVRWF5+5yHiKti2ThfSs8oBQds1qEV+oXmqo3VfVasMAGeUEm+6IeZ1057hMmdwfgJsRNDHqcQxf9mg2ACME5xIuwXwclecPuV+uwLgNebjbAzAHovbYqV87sn/zDlj1V4MF7vn+R1NLhHsleiVX5Sh4DVL2eYQLA6Tb5HLmPQJ96nu/m9qLe/zSSFCje/k2mJyFK5Rqx88rXjs4tFfuAVopJy4N9Tt6IJgx4uuRoiZUkPmK5CWooZWmPqiTkCqwlOiPKZCsr2wWBbooSPrm7ZYqpBwtGxu9DAPgY1SrkpXq3E+a23dFQFfjOF3O7twX5Of/cA4tFXitafSSg3cOXGCpKPW42/wjBdFx0vB9jW+Q7FFQIYTVhbd8e1w0eHnZ6oKGVVJgedLLDLa1eMj7A7mIxM5r/auKFVbAsraWl39IrLAO5wKEGE+S+0L6OmmeYcGXB9IekSwe+wICO5QaH46PqT32pi+kIE7yXwzxI5rUKg1pSwSA7n8HTZJK5PVDEzHN0DmKWS4S79/O/RIwmoElU9LevUP7cbyEBDuaPUzYxSK1hWEAKlr1qxRdjiagqyw7+MW6b0dVh7xDN+HBDMcaqadMVYIDzOMrEUxVLSDPrcsj8F+ubCgW+rV6nKc2DSXMn9cW/Aj56VgR2ewVHfTnK1c8mOEnvbWRRpjJoQBa4fmxUZt7PCc9Nen2ZuIggkR2rk2UCuCez9R76VQNTBGH4UvAaE/CyrCZWZQlDMy3+PouH+w+QBeig8djLvb958LkokdDkwtFc1wokIS7JGSlX5gutIau7nYA1zSXLrVzlfEdgMPVTzjpZ6Td1neXpLsbpnLWGdtGYA/r7O/S/u/5Jez+usHABmeaeAAmFcNW87A6YuMi+58UhGnCEkSlQ9laySYV7IxWk27GAGJV2PHZhF94BpCUqwj3V9b5mmVuIoklCr8T4HOWRcj18mQCb0TkAyRWdqOObVu3P8yvv66INH9IaEzAov07Qusk0ek62We237CAwrRKVPLg8YtJB7OV9kpT56bC7qQt2DaWU3Dmh5KVhoosoIRijKshEusEf17JgbNuM0GAZknJAxoKy145RvjdLqCGHm1IFeTb96OHo80eZ9mobHg7lR3RY2JxwJzFo2of1efILGYtQh+LkhH0+yfK2yM/E8dF21ybQsakRDurfPMUsyqdlvcF/qxDFxiUSTTbNdMhse3uTrLVh3IqjMvkV0utO6eJnGu3sWZnTAPd6vMf4GaLpQlrlkLWUTGEUf9aCUuqB0jIaVrcq9Xf1E7SqiDwNBTW73ZSMwkEhXdmbeu4cZ0WOG3uoTe0oyDpxNJ1U/Og/aMxuhYeteaOKMgUFKq6WwvlAdvWqEc0ggNoYDTn074KrMo/3iJ2eTcGVFJa54qoig+vC6wCkVEZfBt48K9/1OoRmqcVkL8f399+QmuHzvMxYHwgXEYRNqzxBYlCv8sBnfkTokJJN5tO8NtS3q25CQLaqdXAf5LSJFp4224ImRcliOt7HCGw8HLBweZFrF3FZYGtO2MZtSqSke7Smxxvo8upbU0raFS3CAiSNgphtjWIBRJODM12UZ+nU+vx+tr0bG4y+h7i604Leruh9tYt2J4/9J/52T8s9O6OOSVm7xaLD32QK4RY27iTFbhc+H+tLYb5Qw6/b6qOS4mVZwcmIQeM4tHHPVb4bYnV2PbWKzRv19pzn+rUlC6W4ASBEa2qyTeBHxvcZMDT1oSx0MghlCLwq5Fxup1K6JeVf68aAaUdYqoS6KiaiQ1U089lNoDzY99QzA+B10iDDBgzpX9A3qYYrMS/zMw585v2waKI83rxfQ1UWr3XUSltY3dlFG9lXEnf4wXggOXYBLPr6EtN7Cn1H167BHuD+pQ5uqrbNOJiXocV1yOFyf4vLzq/sC4eWlOoUijxtQciee10Y5k9X7Lz1Biw7DYrbyLv3q08qxiF8x8F+CwKYGR3aV7M8y3xzqS91qAROHHTcbYCYRpIfVG2q0pKMzmrAC7a7r4CtMamAJ7lezPcoWQLaAi1etSPti3/ohfQ08J1pOBbg8PvDbYb9I2rmDnSFwh+xvNxph+OJQSddi4rGQYwQVJ3BzmyNkgtJyXaFvkHr3hMUGUFbZIxq0OBiPpFK4QxC2WQoTwk0YFJQBkpXZbcpKIiaaDQyDDjJdgXyBKItIg8cF/nj5fr+R6EEBjBv7efHq0nMBBHHNDXBpe1fdPTzTPzyeopOfHtFr9iFzrGkCTq5k1F6VvnizwgtrwGAoWsTynpqozW6ByhNnmWs9pxHRuCMgo671BKuLimXimUFySfqxM4+4c4MWWov/EhvEHDmUYtOVknnJUrvPoNKZ5Mssl3OUII/jWC+eTXkTNBouGZK6vdYkSG/nPV9Zrgl05+28vdNXtJ8JKiQbfKK/iiyk8qObBh6WZFlWmif7CcG+HOCgOJYwfNk1V09hyhu7lfaORehTOSHtKlW1uq9He+yot+MrZ35q++JnZVlx9CpzqGd1heIlC5hxX5AhxEKnJFC/QdVZgI3IDWkuKHqkYRe7eOJjpg7J2Pt8kUSi+e5kuYeiM6Ha0MQU6hGQLIKM4RMuFHgM2klJA7+XKpxnYjoSl4jRXLQRnWZeeWtUbtaTZdrjgqd4FkxCT86uZGgoRTXYq+j0vM/iunnfLwXEFUPpncy4R3ZZtnOof6F9ogzpQ9S4o+NCjo82CspwUcO4n7WtIUKQMI14tYGQHwgaUcSPR1gZpXd3gurA9FCG9b63SceQwoF6aPjyq+OQ5KMyKv8chEpMahXnrFFCM6OOFVvKfyLpj9+CHIPJJqGkfHASqkHxsAxvlvUCyw/G6xHTIGjJKPg5f5j4SecGVvQRs5oMhB3/8oLXaAiZLMF7NcwoZTyKGixNdUbUyE2mNx6zUvhqmOEDzes5aDbHrNnXDNBrjq0bHQXPxZU304GDr2RJ7ro/igenBSVsfMeH+mqwcZhV0dJ8BhXnw3igL5Ur4fKgpvNKb/An1mf+rn41T9Pvugr+hAxzQTNxWyOrVRoR7Jin90c2xF/0CJr/t2o+44IL979Y8zgbL0pRmKLX+rducgT+YMEGX+oUOMbF0T80uLL29SgAAAAA=');