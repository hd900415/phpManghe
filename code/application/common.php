<?php

// 公共助手函数

use Symfony\Component\VarExporter\VarExporter;

if (!function_exists('__')) {

    /**
     * 获取语言变量值
     * @param string $name 语言变量名
     * @param array $vars 动态变量值
     * @param string $lang 语言
     * @return mixed
     */
    function __($name, $vars = [], $lang = '')
    {
        if (is_numeric($name) || !$name) {
            return $name;
        }
        if (!is_array($vars)) {
            $vars = func_get_args();
            array_shift($vars);
            $lang = '';
        }
        return \think\Lang::get($name, $vars, $lang);
    }
}

if (!function_exists('format_bytes')) {

    /**
     * 将字节转换为可读文本
     * @param int $size 大小
     * @param string $delimiter 分隔符
     * @param int $precision 小数位数
     * @return string
     */
    function format_bytes($size, $delimiter = '', $precision = 2)
    {
        $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB');
        for ($i = 0; $size >= 1024 && $i < 6; $i++) {
            $size /= 1024;
        }
        return round($size, $precision) . $delimiter . $units[$i];
    }
}

if (!function_exists('datetime')) {

    /**
     * 将时间戳转换为日期时间
     * @param int $time 时间戳
     * @param string $format 日期时间格式
     * @return string
     */
    function datetime($time, $format = 'Y-m-d H:i:s')
    {
        $time = is_numeric($time) ? $time : strtotime($time);
        return date($format, $time);
    }
}

if (!function_exists('human_date')) {

    /**
     * 获取语义化时间
     * @param int $time 时间
     * @param int $local 本地时间
     * @return string
     */
    function human_date($time, $local = null)
    {
        return \fast\Date::human($time, $local);
    }
}

if (!function_exists('cdnurl')) {

    /**
     * 获取上传资源的CDN的地址
     * @param string $url 资源相对地址
     * @param boolean $domain 是否显示域名 或者直接传入域名
     * @return string
     */
    function cdnurl($url, $domain = false)
    {
        $regex = "/^((?:[a-z]+:)?\/\/|data:image\/)(.*)/i";
        $cdnurl = \think\Config::get('upload.cdnurl');
        $url = preg_match($regex, $url) || ($cdnurl && stripos($url, $cdnurl) === 0) ? $url : $cdnurl . $url;
        if ($domain && !preg_match($regex, $url)) {
            $domain = is_bool($domain) ? request()->domain() : $domain;
            $url = $domain . $url;
        }
        return $url;
    }
}


if (!function_exists('is_really_writable')) {

    /**
     * 判断文件或文件夹是否可写
     * @param string $file 文件或目录
     * @return    bool
     */
    function is_really_writable($file)
    {
        if (DIRECTORY_SEPARATOR === '/') {
            return is_writable($file);
        }
        if (is_dir($file)) {
            $file = rtrim($file, '/') . '/' . md5(mt_rand());
            if (($fp = @fopen($file, 'ab')) === false) {
                return false;
            }
            fclose($fp);
            @chmod($file, 0777);
            @unlink($file);
            return true;
        } elseif (!is_file($file) or ($fp = @fopen($file, 'ab')) === false) {
            return false;
        }
        fclose($fp);
        return true;
    }
}

if (!function_exists('rmdirs')) {

    /**
     * 删除文件夹
     * @param string $dirname 目录
     * @param bool $withself 是否删除自身
     * @return boolean
     */
    function rmdirs($dirname, $withself = true)
    {
        if (!is_dir($dirname)) {
            return false;
        }
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($dirname, RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::CHILD_FIRST
        );

        foreach ($files as $fileinfo) {
            $todo = ($fileinfo->isDir() ? 'rmdir' : 'unlink');
            $todo($fileinfo->getRealPath());
        }
        if ($withself) {
            @rmdir($dirname);
        }
        return true;
    }
}

if (!function_exists('copydirs')) {

    /**
     * 复制文件夹
     * @param string $source 源文件夹
     * @param string $dest 目标文件夹
     */
    function copydirs($source, $dest)
    {
        if (!is_dir($dest)) {
            mkdir($dest, 0755, true);
        }
        foreach (
            $iterator = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($source, RecursiveDirectoryIterator::SKIP_DOTS),
                RecursiveIteratorIterator::SELF_FIRST
            ) as $item
        ) {
            if ($item->isDir()) {
                $sontDir = $dest . DS . $iterator->getSubPathName();
                if (!is_dir($sontDir)) {
                    mkdir($sontDir, 0755, true);
                }
            } else {
                copy($item, $dest . DS . $iterator->getSubPathName());
            }
        }
    }
}

if (!function_exists('mb_ucfirst')) {
    function mb_ucfirst($string)
    {
        return mb_strtoupper(mb_substr($string, 0, 1)) . mb_strtolower(mb_substr($string, 1));
    }
}

if (!function_exists('addtion')) {

    /**
     * 附加关联字段数据
     * @param array $items 数据列表
     * @param mixed $fields 渲染的来源字段
     * @return array
     */
    function addtion($items, $fields)
    {
        if (!$items || !$fields) {
            return $items;
        }
        $fieldsArr = [];
        if (!is_array($fields)) {
            $arr = explode(',', $fields);
            foreach ($arr as $k => $v) {
                $fieldsArr[$v] = ['field' => $v];
            }
        } else {
            foreach ($fields as $k => $v) {
                if (is_array($v)) {
                    $v['field'] = isset($v['field']) ? $v['field'] : $k;
                } else {
                    $v = ['field' => $v];
                }
                $fieldsArr[$v['field']] = $v;
            }
        }
        foreach ($fieldsArr as $k => &$v) {
            $v = is_array($v) ? $v : ['field' => $v];
            $v['display'] = isset($v['display']) ? $v['display'] : str_replace(['_ids', '_id'], ['_names', '_name'], $v['field']);
            $v['primary'] = isset($v['primary']) ? $v['primary'] : '';
            $v['column'] = isset($v['column']) ? $v['column'] : 'name';
            $v['model'] = isset($v['model']) ? $v['model'] : '';
            $v['table'] = isset($v['table']) ? $v['table'] : '';
            $v['name'] = isset($v['name']) ? $v['name'] : str_replace(['_ids', '_id'], '', $v['field']);
        }
        unset($v);
        $ids = [];
        $fields = array_keys($fieldsArr);
        foreach ($items as $k => $v) {
            foreach ($fields as $m => $n) {
                if (isset($v[$n])) {
                    $ids[$n] = array_merge(isset($ids[$n]) && is_array($ids[$n]) ? $ids[$n] : [], explode(',', $v[$n]));
                }
            }
        }
        $result = [];
        foreach ($fieldsArr as $k => $v) {
            if ($v['model']) {
                $model = new $v['model'];
            } else {
                $model = $v['name'] ? \think\Db::name($v['name']) : \think\Db::table($v['table']);
            }
            $primary = $v['primary'] ? $v['primary'] : $model->getPk();
            $result[$v['field']] = isset($ids[$v['field']]) ? $model->where($primary, 'in', $ids[$v['field']])->column("{$primary},{$v['column']}") : [];
        }

        foreach ($items as $k => &$v) {
            foreach ($fields as $m => $n) {
                if (isset($v[$n])) {
                    $curr = array_flip(explode(',', $v[$n]));

                    $v[$fieldsArr[$n]['display']] = implode(',', array_intersect_key($result[$n], $curr));
                }
            }
        }
        return $items;
    }
}

if (!function_exists('var_export_short')) {

    /**
     * 使用短标签打印或返回数组结构
     * @param mixed $data
     * @param boolean $return 是否返回数据
     * @return string
     */
    function var_export_short($data, $return = true)
    {
        return var_export($data, $return);
        $replaced = [];
        $count = 0;

        //判断是否是对象
        if (is_resource($data) || is_object($data)) {
            return var_export($data, $return);
        }

        //判断是否有特殊的键名
        $specialKey = false;
        array_walk_recursive($data, function (&$value, &$key) use (&$specialKey) {
            if (is_string($key) && (stripos($key, "\n") !== false || stripos($key, "array (") !== false)) {
                $specialKey = true;
            }
        });
        if ($specialKey) {
            return var_export($data, $return);
        }
        array_walk_recursive($data, function (&$value, &$key) use (&$replaced, &$count, &$stringcheck) {
            if (is_object($value) || is_resource($value)) {
                $replaced[$count] = var_export($value, true);
                $value = "##<{$count}>##";
            } else {
                if (is_string($value) && (stripos($value, "\n") !== false || stripos($value, "array (") !== false)) {
                    $index = array_search($value, $replaced);
                    if ($index === false) {
                        $replaced[$count] = var_export($value, true);
                        $value = "##<{$count}>##";
                    } else {
                        $value = "##<{$index}>##";
                    }
                }
            }
            $count++;
        });

        $dump = var_export($data, true);

        $dump = preg_replace('#(?:\A|\n)([ ]*)array \(#i', '[', $dump); // Starts
        $dump = preg_replace('#\n([ ]*)\),#', "\n$1],", $dump); // Ends
        $dump = preg_replace('#=> \[\n\s+\],\n#', "=> [],\n", $dump); // Empties
        $dump = preg_replace('#\)$#', "]", $dump); //End

        if ($replaced) {
            $dump = preg_replace_callback("/'##<(\d+)>##'/", function ($matches) use ($replaced) {
                return isset($replaced[$matches[1]]) ? $replaced[$matches[1]] : "''";
            }, $dump);
        }

        if ($return === true) {
            return $dump;
        } else {
            echo $dump;
        }
    }
}

if (!function_exists('letter_avatar')) {
    /**
     * 首字母头像
     * @param $text
     * @return string
     */
    function letter_avatar($text)
    {
        $total = unpack('L', hash('adler32', $text, true))[1];
        $hue = $total % 360;
        list($r, $g, $b) = hsv2rgb($hue / 360, 0.3, 0.9);

        $bg = "rgb({$r},{$g},{$b})";
        $color = "#ffffff";
        $first = mb_strtoupper(mb_substr($text, 0, 1));
        $src = base64_encode('<svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="100" width="100"><rect fill="' . $bg . '" x="0" y="0" width="100" height="100"></rect><text x="50" y="50" font-size="50" text-copy="fast" fill="' . $color . '" text-anchor="middle" text-rights="admin" dominant-baseline="central">' . $first . '</text></svg>');
        $value = 'data:image/svg+xml;base64,' . $src;
        return $value;
    }
}

if (!function_exists('hsv2rgb')) {
    function hsv2rgb($h, $s, $v)
    {
        $r = $g = $b = 0;

        $i = floor($h * 6);
        $f = $h * 6 - $i;
        $p = $v * (1 - $s);
        $q = $v * (1 - $f * $s);
        $t = $v * (1 - (1 - $f) * $s);

        switch ($i % 6) {
            case 0:
                $r = $v;
                $g = $t;
                $b = $p;
                break;
            case 1:
                $r = $q;
                $g = $v;
                $b = $p;
                break;
            case 2:
                $r = $p;
                $g = $v;
                $b = $t;
                break;
            case 3:
                $r = $p;
                $g = $q;
                $b = $v;
                break;
            case 4:
                $r = $t;
                $g = $p;
                $b = $v;
                break;
            case 5:
                $r = $v;
                $g = $p;
                $b = $q;
                break;
        }

        return [
            floor($r * 255),
            floor($g * 255),
            floor($b * 255)
        ];
    }
}

if (!function_exists('check_nav_active')) {
    /**
     * 检测会员中心导航是否高亮
     */
    function check_nav_active($url, $classname = 'active')
    {
        $auth = \app\common\library\Auth::instance();
        $requestUrl = $auth->getRequestUri();
        $url = ltrim($url, '/');
        return $requestUrl === str_replace(".", "/", $url) ? $classname : '';
    }
}

if (!function_exists('check_cors_request')) {
    /**
     * 跨域检测
     */
    function check_cors_request()
    {
        if (isset($_SERVER['HTTP_ORIGIN']) && $_SERVER['HTTP_ORIGIN']) {
            $info = parse_url($_SERVER['HTTP_ORIGIN']);
            $domainArr = explode(',', config('fastadmin.cors_request_domain'));
            $domainArr[] = request()->host(true);
            if (in_array("*", $domainArr) || in_array($_SERVER['HTTP_ORIGIN'], $domainArr) || (isset($info['host']) && in_array($info['host'], $domainArr))) {
                header("Access-Control-Allow-Origin: " . $_SERVER['HTTP_ORIGIN']);
            } else {
                header('HTTP/1.1 403 Forbidden');
                exit;
            }

            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Max-Age: 86400');

            if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
                if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) {
                    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
                }
                if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) {
                    header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
                }
                exit;
            }
        }
    }
}

if (!function_exists('xss_clean')) {
    /**
     * 清理XSS
     */
    function xss_clean($content, $is_image = false)
    {
        return \app\common\library\Security::instance()->xss_clean($content, $is_image);
    }
}

if (!function_exists('check_ip_allowed')) {
    /**
     * 检测IP是否允许
     * @param string $ip IP地址
     */
    function check_ip_allowed($ip = null)
    {
        $ip = is_null($ip) ? request()->ip() : $ip;
        $forbiddenipArr = config('site.forbiddenip');
        $forbiddenipArr = !$forbiddenipArr ? [] : $forbiddenipArr;
        $forbiddenipArr = is_array($forbiddenipArr) ? $forbiddenipArr : array_filter(explode("\n", str_replace("\r\n", "\n", $forbiddenipArr)));
        if ($forbiddenipArr && \Symfony\Component\HttpFoundation\IpUtils::checkIp($ip, $forbiddenipArr)) {
            header('HTTP/1.1 403 Forbidden');
            exit;
        }
    }
}

if (!function_exists('de')) {
    /**
     * 调试打印函数,执行后后续代码程序将终止
     * @param mixed $data 需要打印的数据
     * @author fuyelk <fuyelk@fuyelk.com>
     */
    function de($data = [])
    {
        echo "<pre>";
        if (empty($data) || is_bool($data)) {
            var_dump($data);
            exit();
        }
        if (empty($data)) exit;
        print_r($data);
        exit;
    }
}

if (!function_exists('dp')) {
    /**
     * 调试打印函数,执行后后续代码程序将终止
     * @param mixed $data 需要打印的数据
     * @author fuyelk <fuyelk@fuyelk.com>
     */
    function dp($data = [])
    {
        echo "<pre>";
        if (empty($data) || is_bool($data)) {
            var_dump($data);
        } else {
            print_r($data);
        }
    }
}
if (!function_exists('dt')) {
    /**
     * 日志
     * @param array $data 需要打印的数据
     * @param string $name 数据说明
     * @return string 日志唯一标识
     * @author fuyelk <fuyelk@fuyelk.com>
     */
    function dt($data = [], $name = '')
    {
        $log_id = uniqid();
        trace("########### [$log_id] 日志开始 ############");
        trace($name);
        trace($data);
        trace("########### [$log_id] 日志结束 ###########");
        return $log_id;
    }
}

if (!function_exists('dta')) {
    /**
     * 实时追加型日志
     * @param mixed $log 日志内容
     * @param string $name 数据说明
     * @return string 日志唯一标识
     * @author fuyelk <fuyelk@fuyelk.com>
     */
    function dta($log, $name = '')
    {
        if (!think\Env::get('app.dta', true)) {
            return '';
        }
        $debug = debug_backtrace();
        $log = is_object($log) ? (array)$log : $log;
        $log_id = uniqid();
        $trace_root = dirname(__DIR__) . '/runtime/log/' . date('Ym');
        $file = $trace_root . '/' . date('d') . '_a.log';
        if (!is_dir(dirname($file))) mkdir(dirname($file), 0755, true);

        $msg = "============ [$log_id] 日志开始 ============" . PHP_EOL;;
        $msg .= '[ file ] ' . $debug[0]['file'] . ':' . $debug[0]['line'] . PHP_EOL;
        $msg .= '[ time ] ' . date('Y-m-d H:i:s') . PHP_EOL;
        $msg .= '[ name ] ' . $name . PHP_EOL;
        $msg .= '[ data ] ' . (is_array($log) ? var_export($log, true) : $log) . PHP_EOL;
        $fp = @fopen($file, 'a');
        fwrite($fp, $msg);
        fclose($fp);
        return date('Ymd') . $log_id;
    }
}

if (!function_exists('get_log')) {
    /**
     * 获取日志
     * @param string $log 日志ID
     * @return bool|string
     * @author fuyelk <fuyelk@fuyelk.com>
     * @date 2021/4/21 13:18
     */
    function get_log($log)
    {
        if (empty($log)) return false;

        $logFile = dirname(__DIR__) . '/runtime/log/' . mb_substr($log, 0, 6) . '/' . mb_substr($log, 6, 2) . '_a.log';
        if (!is_file($logFile)) return false;

        $content = file_get_contents($logFile);
        $logName = mb_substr($log, 8);
        $tag = "============ [$logName] 日志开始 ============";
        $startIndex = mb_strpos($content, $tag);
        $content = mb_substr($content, $startIndex);
        $endIndex = mb_strpos($content, '============ [', 10);

        if (false === $endIndex) return $content;
        return mb_substr($content, 0, $endIndex);
    }
}

if (!function_exists('add_submenu')) {
    /**
     * Fastadmin 菜单节点添加增删改查
     * @param string $menu 节点名
     * @param int $pid 父节点ID
     * @return int|string
     * @author fuyelk <fuyelk@fuyelk.com>
     * @date 2021/06/28 14:32
     */
    function add_submenu(string $menu, int $pid)
    {
        $time = time();
        return db('auth_rule')->insertAll([
            [
                'pid' => $pid,
                'name' => $menu . '/index',
                'title' => 'View',
                'icon' => 'fa fa-circle-o',
                'status' => 'normal',
                'createtime' => $time,
                'updatetime' => $time,
            ],
            [
                'pid' => $pid,
                'name' => $menu . '/add',
                'title' => 'Add',
                'icon' => 'fa fa-circle-o',
                'status' => 'normal',
                'createtime' => $time,
                'updatetime' => $time,
            ],
            [
                'pid' => $pid,
                'name' => $menu . '/del',
                'title' => 'Del',
                'icon' => 'fa fa-circle-o',
                'status' => 'normal',
                'createtime' => $time,
                'updatetime' => $time,
            ],
            [
                'pid' => $pid,
                'name' => $menu . '/edit',
                'title' => 'Edit',
                'icon' => 'fa fa-circle-o',
                'status' => 'normal',
                'createtime' => $time,
                'updatetime' => $time,
            ],
            [
                'pid' => $pid,
                'name' => $menu . '/multi',
                'title' => 'Multi',
                'icon' => 'fa fa-circle-o',
                'status' => 'normal',
                'createtime' => $time,
                'updatetime' => $time,
            ],
        ]);
    }
}

if (!function_exists('byte_conversion')) {
    /**
     * 格式化字节单位
     * @param int $size 字节大小
     * @param int $decimals 小数点位数
     * @param string $delimiter 分隔符
     * @return string
     */
    function byte_conversion($size = 0, $decimals = 3, $delimiter = ' ')
    {
        if ($size > pow(1024, 6)) {
            $size /= pow(1024, 5);
            return number_format($size, $decimals) . $delimiter . 'PB';
        }

        $units = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB');
        for ($i = 0; $size >= 1024 && $i < 6; $i++) {
            $size /= 1024;
        }
        return number_format($size, $decimals) . $delimiter . $units[$i];
    }
}

if (!function_exists('create_tips_icon')) {
    /**
     * 创建角标
     * @description 应用在a标签中：<li><a href="">{:create_tips_icon(1)}</a></li>
     * @param string|number $tips 角标
     * @param string $color 颜色
     * @return string
     * @author fuyelk <fuyelk@fuyelk.com>
     * @date 2021/07/14 16:39
     */
    function create_tips_icon($tips, $color = 'yellow')
    {
        if (empty($tips)) {
            return '';
        }
        return "<span class=\"pull-right-container\"> <small class=\"label pull-right bg-{$color}\">{$tips}</small></span>";
    }
}