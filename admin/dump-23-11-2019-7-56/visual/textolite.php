<?php
/* Textolite v2.11s */
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', 'error.log');
version_compare(PHP_VERSION, '5.2', '>=') || exit('PHP ' . PHP_VERSION . ' is not supported');
define('a_', 'document_root');
define('b_', 'query_string');
define('c_', 'request_uri');
define('d_', 'php_self');
define('e_', 'http_accept_language');
define('f_', 'http_user_agent');
define('g_', 'remote_addr');
define('h_', 'server_addr');
define('i_', 'script_filename');
define('j_', 'script_name');
define('k_', 'server_name');
define('l_', 'server_protocol');
define('m_', 'lang');
define('n_', 'password');
define('o_', 'session');
define('p_', 'pass_complexity');
define('q_', 'pass_complexity_js');
define('r_', 'auth_time');
define('s_', 'auth_error_time');
define('t_', 'auth_error_list');
define('u_', 'auth_error_limit');
define('v_', 'auth_lockout_duration');
define('w_', 'auth_session_reset');
define('x_', 'auth_bot_filter');
define('y_', 'code_redraw_delay');
define('z_', 'code_undo_limit');
define('A_', 'code_highlighting');
define('B_', 'allowed_ext');
define('C_', 'editable_ext');
define('D_', 'default_file');
define('E_', 'document_root');
define('F_', 'mod_rewrite');
define('G_', 'logout_to_site');
define('K_', 'site_scripts');
define('L_', 'site_styles');
define('M_', 'update_final');
define('N_', 'update_beta');
define('O_', 'filelist');
define('P_', 'system_url');
define('Q_', 'error_limit');
define('R_', 'error_count');
define('S_', 'redraw_delay');
define('T_', 'mode');
define('U_', 'type');
define('V_', 'base');
define('W_', 'code');
define('X_', 'title');
define('Y_', 'version');
define('Z_', 'is_edited');
define('_a', 'post_max_size');
define('_b', 'upload_max_filesize');
define('_c', 'max_file_uploads');
define('_d', '_checkbox');
define('_e', G_ . _d);
define('_f', K_ . _d);
define('_g', L_ . _d);
define('_j', A_ . _d);
define('_k', M_ . _d);
define('_l', N_ . _d);
define('_m', 'http_ajax');
define('_n', 'source');
define('_o', 'token');
define('_p', 'sha1');
define('_q', 'html');
define('_r', 'xml');
define('_s', 'php');
define('_t', '404');
define('_u', '403');
define('_v', 'ip');
define('_w', 'sip');
define('_x', 'url');
define('_y', 'name');
define('_z', 'date');
define('_A', 'size');
define('_B', 'list');
define('_C', 'file');
define('_D', 'error');
define('_E', 'value');
define('_F', 'radio');
define('_G', 'tmp_name');
define('_H', 'langlist');
define('_I', '<script');
define('_J', '<_cript');
define('_K', '</script');
define('_L', '</_cript');
define('_M', '</body>');
define('_N', '<!--~~?');
define('_O', '?~~-->');
define('__', 'textolite_');
final class a
{
    private $a;
    private $b;
    public function __construct()
    {
        $this->a['a'] = $_GET;
        $this->a['b'] = $_POST;
        $this->a['c'] = $_SERVER;
        $this->a['d'] = $_COOKIE;
        $this->a['e'] = $_FILES;
    }
    public function a()
    {
        if (isset($this->a['a']['q']))
            return $this->a['a']['q'];
    }
    public function b($a = false, $b = false)
    {
        if (isset($this->b['c'][$a]))
            return $this->b['c'][$a];
        else {
            $c = strtoupper($a);
            if (isset($this->a['c'][$c])) {
                if (!$b)
                    $b = $a;
                return $this->b['c'][$a] = $this->g($this->a['c'][$c], $b);
            }
        }
    }
    public function c($a = false, $b = false)
    {
        if ($a) {
            if (isset($this->b['b'][$a]))
                return $this->b['b'][$a];
            else if (isset($this->a['b'][$a]))
                return $this->b['b'][$a] = $this->g($this->a['b'][$a], $b);
        } else if (count($this->a['b']))
            return true;
    }
    public function d($a, $b = false)
    {
        if (isset($this->b['d'][$a]))
            return $this->b['d'][$a];
        else if (isset($this->a['d'][$a]))
            return $this->b['d'][$a] = $this->g($this->a['d'][$a], $b);
    }
    public function e($a)
    {
        if (isset($this->a['e'][$a]))
            return $this->a['e'][$a];
    }
    public function f()
    {
        if ((stripos($this->b(b_), 'q=') === 0) && (stripos($this->b(c_), $this->b(b_)) === false))
            return 1;
        else
            return 0;
    }
    private function g($a, $b)
    {
        if ($b && ($c = '_' . $b) && method_exists($this, $c))
            return $this->$c($a);
        else
            return $a;
    }
    private function _server_protocol($a)
    {
        preg_match('~^[a-z]{4,5}/[0-9]\.[0-9]$~i', $a, $b);
        if (isset($b[0]))
            return $b[0];
    }
    private function _server_name($a)
    {
        preg_match('~^[a-z0-9-_\.]{2,300}$~i', $a, $b);
        if (isset($b[0]))
            return $b[0];
    }
    private function _script_filename($a)
    {
        $b = str_replace('\\', '/', __FILE__);
        if (stripos($b, $this->a['c'][strtoupper(a_)]) === 0)
            return $b;
        else
            return str_replace('\\', '/', $a);
    }
    private function _document_root($a)
    {
        $a = str_replace('\\', '/', $a);
        $b = $this->b(i_);
        $c = $this->b(d_);
        $d = $this->b(j_);
        if (stripos($b, $c) > 0)
            $e = str_ireplace($c, '', $b);
        if (stripos($b, $d) > 0)
            $f = str_ireplace($d, '', $b);
        if (isset($e)) {
            if (isset($f)) {
                if (strlen($e) > strlen($f))
                    $g = $e;
                else
                    $g = $f;
            } else
                $g = $e;
        } else if (isset($f))
            $g = $f;
        else
            $g = $a;
        if (stripos($b, $a) === 0) {
            if (strlen($g) > strlen($a))
                $a = $g;
        } else
            $a = $g;
        if (substr($a, -1) == '/')
            return substr($a, 0, -1);
        return $a;
    }
    private function _php_self($a)
    {
        return str_replace('\\', '/', $a);
    }
    private function _script_name($a)
    {
        return str_replace('\\', '/', $a);
    }
    private function _query_string($a)
    {
        return str_replace('\\', '/', $a);
    }
    private function _http_accept_language($a)
    {
        preg_match('~[a-z]{2}~i', strtolower(substr($a, 0, 2)), $b);
        if (isset($b[0]))
            return $b[0];
    }
    private function _remote_addr($a)
    {
        return $this->_ip($a);
    }
    private function _server_addr($a)
    {
        return $this->_ip($a);
    }
    private function _ip($a)
    {
        preg_match('~^[a-z0-9.:]{1,40}$~i', $a, $b);
        if (isset($b[0]))
            return $b[0];
    }
    private function _sha1($a)
    {
        preg_match('~^[a-z0-9]{40}$~i', $a, $b);
        if (isset($b[0]))
            return $b[0];
    }
}
final class b
{
    private $a;
    private $b;
    private $c;
    private $d;
    public function __construct($a)
    {
        $this->a = $a;
        $this->a('Content-type:text/html;charset=utf-8');
    }
    public function a($a)
    {
        return $this->b[] = $a;
    }
    public function b($a, $b)
    {
        return $this->b[] = $this->a . ' ' . $a . ' ' . $b;
    }
    public function c($a)
    {
        return $this->b[] = 'Location:' . $a;
    }
    public function d($a, $b = false, $c = false, $d = false, $e = false, $f = false, $g = false)
    {
        $h['a']    = $a;
        $h['b']    = $b;
        $h['c']    = $g;
        $h['d']    = (int) $c;
        $h['e']    = str_replace('%2F', '/', urlencode($d));
        $h['f']    = $e;
        $h['g']    = (int) $f;
        $this->c[] = $h;
    }
    public function e($a, $b = false, $c = false)
    {
        $this->d($a, '', time() - 60 * 60, $b, $c);
    }
    public function f($a)
    {
        return $this->d = $a;
    }
    public function g()
    {
        if (isset($this->b))
            foreach ($this->b as $a)
                header($a);
        if (isset($this->c))
            foreach ($this->c as $b)
                setcookie($b['a'], $b['b'], $b['d'], $b['e'], $b['f'], $b['g'], $b['c']);
        if (isset($this->d))
            print $this->d;
    }
}
final class c
{
    const a = "\n";
    const b = 'lang.ini';
    const c = 'conf.ini';
    private $a;
    private $b;
    private $c;
    private $d;
    private $e;
    private $f;
    private $g;
    public function __construct($a, $b, $c, $d, $e)
    {
        $this->c      = parse_ini_file($a . self::b, true);
        $this->d      = parse_ini_file($a . self::c, true);
        $this->e      = array(
            'c' => '<ol><li title="{source_editor}">{type}</li><li title="{visual_editor}">text</li></ol>',
            'd' => '<ol><li>{type}</li></ol>',
            'j' => '<div id="e"><div><div><h1><a href="https://vk.com/id410830583">Трафик Бандит Сайты</a> </h1><p>Копии Landing Page</p></div>{mode}<ul><li><a title="{files}">{files}</a><div id="f"><ol><li>{file_name}</li><li>{file_size}</li><li>{file_changed}</li><li>{file_menu}</li></ol><ul>{filelist}</ul></div></li><li><a title="{settings}">{settings}</a><div id="g"><fieldset><legend>{auth}</legend><dl><dt title="{new_password}">{new_password}:</dt><dd><input type="password" maxlength="14"><a></a></dd><dt title="{auth_error_limit_desc}">{login_attempts}:</dt><dd data-aa="5"><input type="text" maxlength="2" value="{auth_error_limit}"></dd><dt title="{auth_lockout_duration_desc}">{lockout_duration}:</dt><dd data-aa="1"><input type="text" maxlength="7" value="{auth_lockout_duration}"></dd><dt title="{auth_session_reset_desc}">{session_autoreset}:</dt><dd data-aa="30"><input type="text" maxlength="7" value="{auth_session_reset}"></dd><dd title="{logout_to_site_desc}" data-aa="0"><label>{logout_to_site_checkbox}<em></em>{redirect_to_site}</label></dd></dl></fieldset><fieldset><legend>{visual_editor}</legend><dl><dd title="{site_scripts_desc}" data-aa="1"><label>{site_scripts_checkbox}<em></em>{enable_scripts}</label></dd><dd title="{site_styles_desc}" data-aa="1"><label>{site_styles_checkbox}<em></em>{enable_styles}</label></dd></dl></fieldset><fieldset><legend>{source_editor}</legend><dl><dt title="{code_redraw_delay_desc}">{redraw_delay}:</dt><dd data-aa="200"><input type="text" maxlength="7" value="{code_redraw_delay}"></dd><dt title="{code_undo_limit_desc}">{steps_for_undo}:</dt><dd data-aa="50"><input type="text" maxlength="3" value="{code_undo_limit}"></dd><dd title="{code_highlighting_desc}" data-aa="1"><label>{code_highlighting_checkbox}<em></em>{enable_highlighting}</label></dd></dl></fieldset><fieldset><legend>{system}</legend><dl><dt title="{default_file_desc}">{main_page_or_file}:</dt><dd data-aa="index.html"><input type="text" maxlength="30" value="{default_file}"></dd><dd title="{new_version_notify}" data-aa="1"><label>{update_final_checkbox}<em></em>{new_version_notify}</label></dd><dd title="{beta_version_notify}" data-aa="0"><label>{update_beta_checkbox}<em></em>{beta_version_notify}</label></dd><dt title="{language}">{language}:</dt><dd data-aa="index.html"><ul>{langlist}</ul></dd></dl></fieldset><fieldset><legend>{extended}</legend><dl><dt title="{activate}">{activate}:</dt><dd><input type="text" maxlength="7"></dd><dt><ol><li><span></span><input type="text" disabled><input type="text" disabled><i></i></li></ol><p>{attachment_domain} <strong></strong>. {attachment_notice}</p><p><input type="button" value="{attach}"><input type="button" value="{cancel}"></p></dt></dl></fieldset><p><input type="button" value="{save}" disabled><a title="{restore_settings}"></a></p></div></li></ul><ul><li><input type="button" value="{save}" title="{save}" disabled></li><li><input type="button" value="{logout}" title="{logout}" disabled data-ab="{not_save}"></li></ul><p><samp data-ac="{saving}" data-ad="{saved}" data-ae="{not_saved}" data-af="{reset_session}" data-ag="{access_closed}" data-ah="{request_rejected}" data-ai="{request_blocked}" data-aj="{no_response}" data-ak="{not_writable}" data-al="{old_browser}" data-am="{new_version}" data-an="{need_update}" data-ao="{install}" data-ap="{not_install}" data-aq="{download_installer}" data-ar="{system_update}" data-as="{update_error}" data-at="{install_complete}" data-au="{attachment_domain}" data-av="{no_connect}" data-aw="{password_hashing}" data-ax="{pass_complexity}" data-ay="{uploading}" data-az="{uploading_complete}" data-bb="{uploading_error}" data-bc="{extension_error}" data-bd="{count_limit}" data-be="{size_limit}" data-bf="{file_deletion}" data-bg="{file_deleted}" data-bh="{deletion_error}" data-bi="{unknown_relation}" data-bj="{element_busy}" data-bk="{disable_script}" data-bl="{disable}" data-bm="{disabling_scripts}" data-bn="{scripts_disabled}" data-bo="{show_password}" data-bp="{hide_password}" data-bq="{post_max_size}" data-br="{upload_max_filesize}" data-bs="{max_file_uploads}" data-bt="{auth_session_reset}" data-bu="{site_scripts}" data-bv="{site_styles}" data-bw="{logout_to_site}" data-bx="{ip}" data-by="{sip}" data-bz="{system_url}" data-bA="{is_edited}" data-cc="{version}" data-cd="{update_final}" data-ce="{update_beta}"></samp><noscript><samp>{requires_javascript}</samp></noscript><i></i></p></div></div><script src="{system_url}textolite.js?v={version}"></script><script type="text/template" id="h">{source}</script>',
            'a' => '<!doctype html><html id="a"><head><title>{auth} - Textolite</title><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><link rel="stylesheet" href="{system_url}textolite.css?v={version}"></head><body><fieldset><legend>{auth}</legend><ol data-cf="{error_limit}" data-cg="{error_count}"><li></li></ol><p><samp data-aw="{password_hashing}" data-ch="{password_checking}" data-ci="{access_granted}" data-cj="{access_denied}" data-aj="{no_response}" data-ak="{not_writable}" data-bz="{system_url}">{document_root_error}</samp><noscript><samp>{requires_javascript}</samp></noscript><i></i></p><p><span>{password}:</span><input type="password" data-ax="{pass_complexity}" maxlength="14"><a data-bo="{show_password}" data-bp="{hide_password}"></a></p><p><input type="button" value="{login}" disabled></p></fieldset><script src="{system_url}textolite.js?v={version}"></script></body></html>',
            'g' => '<!doctype html><html id="b"><head><title>{code} - {{code}} - Textolite</title><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><link rel="stylesheet" href="{system_url}textolite.css?v={version}"></head><body><samp><span>{code}</span>{{code}}</samp></body></html>',
            'f' => '<!doctype html><html id="d"><head><title>{title} Сайта</title><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><link rel="stylesheet" href="{system_url}textolite.css?v={version}"></head><body><iframe>{no_frames}</iframe><script type="text/template" id="i"><base href="{base}"></script><script type="text/template" id="j">.textolite-string{outline:none;font-style:inherit;cursor:text}.textolite-focus{outline:4px solid #f2ca00 !important;outline-offset:8px}.textolite-disabled{outline-color:#f00 !important}</script></body></html>',
            'e' => '<!doctype html><html id="c"><head><title>{title} - Textolite</title><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><link rel="stylesheet" href="{system_url}textolite.css?v={version}"></head><body><div><ol data-ck="<li style=height:0px></li>"></ol><pre contenteditable data-cl="{redraw_delay}" data-cm="{code_highlighting}" data-cn="{code_undo_limit}"></pre></div></body></html>',
            'k' => '<li><ol class="r"><li><a data-co="{url}">{name}</a></li><li>{size}</li><li>{date}</li><li><i title="{add_file}"></i></li></ol><ul></ul></li>',
            'b' => '<li><ol class="t"><li><a data-co="{url}">{name}</a></li><li>{size}</li><li>{date}</li><li><i title="{delete_file}"></i><i title="{deletion_confirm}"></i><i title="{deletion_cancel}"></i></li></ol></li>',
            'n' => '<li title="{{lang}}">{radio}{lang}</li>',
            'm' => '<input type="radio" name="{name}" value="{value}">',
            'l' => '<input type="radio" name="{name}" value="{value}" checked>',
            'i' => '<input type="checkbox">',
            'h' => '<input type="checkbox" checked>'
        );
        $this->a['a'] = $a;
        $this->a['b'] = $this->g(a_);
        if (!$this->a['b'])
            $this->a['b'] = $b;
        $this->a['c'] = str_ireplace($this->a['b'], '', $this->a['a']);
        $this->a['d'] = $this->o($a);
        $this->a['e'] = $this->o($this->a['c']);
        if (stripos($f = $this->g(m_), ',')) {
            if ($d && stripos($f, $d) !== false)
                $this->b = $d;
            else if (stripos($f, $c) !== false)
                $this->b = $c;
            else
                $this->b = substr($f, 0, 2);
        } else
            $this->b = substr($f, 0, 2);
        if ($this->g(F_) === '1')
            $this->g = 1;
        else if ($this->g(F_) === '0')
            $this->g = 0;
        else
            $this->g = $e;
    }
    public function __destruct()
    {
        if ($this->f)
            $this->i();
    }
    public function a()
    {
        return $this->b;
    }
    public function b($a = false)
    {
        if ($a && !$this->g)
            return $this->a['c'] . '?q=';
        else
            return $this->a['c'];
    }
    public function c()
    {
        return $this->a['a'];
    }
    public function d()
    {
        return $this->a['e'];
    }
    public function e()
    {
        return $this->a['d'];
    }
    public function f()
    {
        return $this->a['b'];
    }
    public function g($a, $b = false)
    {
        if ($b) {
            if (isset($this->d[$b][$a]))
                return $this->d[$b][$a];
        } else if (isset($this->d[$a]))
            return $this->d[$a];
    }
    public function h($a, $b, $c = false)
    {
        if ($c) {
            if (isset($this->d[$c])) {
                $this->f = true;
                return $this->d[$c][$a] = $b;
            }
        } else {
            $this->f = true;
            return $this->d[$a] = $b;
        }
    }
    private function i()
    {
        foreach ($this->d as $a => $b)
            if (!is_array($b))
                $c[] = $a . ' = ' . $b . self::a . self::a;
        foreach ($this->d as $a => $b) {
            if (is_array($b)) {
                $c[] = '[' . $a . ']' . self::a . self::a;
                foreach ($b as $d => $e)
                    $c[] = "\t" . $d . ' = ' . $e . self::a;
                $c[] = self::a;
            }
        }
        if ($f = fopen($this->a['a'] . self::c, 'w')) {
            flock($f, LOCK_EX);
            fwrite($f, implode('', $c));
            flock($f, LOCK_UN);
            fclose($f);
        }
    }
    public function j($a, $b = false)
    {
        if (isset($this->e[$a]))
            return $this->l($this->k($this->e[$a], $b));
    }
    public function k($a, $b)
    {
        if ($b)
            foreach ($b as $c => $d)
                $a = str_ireplace('{' . $c . '}', $d, $a);
        return $a;
    }
    public function l($a)
    {
        preg_match_all('~\{([a-z0-9_]{2,30})\}~i', $a, $b);
        if ($b[1]) {
            $b[1] = array_unique($b[1]);
            foreach ($b[1] as $c)
                if ($d = $this->m($c))
                    $a = str_ireplace('{' . $c . '}', $d, $a);
        }
        return $a;
    }
    public function m($a)
    {
        if (isset($this->c[$this->b][$a]))
            return $this->c[$this->b][$a];
    }
    public function n($a)
    {
        if (isset($this->c['en'][$a]))
            return $this->c['en'][$a];
    }
    public function o($a)
    {
        if (substr_count($a, '/') > 2)
            return dirname($a) . '/';
        else
            return '/';
    }
    public function p()
    {
        return is_writable($this->a['a'] . self::c);
    }
}
final class d
{
    const a = '2.11s';
    private $a;
    private $b;
    private $c;
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function a()
    {
        $a = $this->b->d(__ . o_, _p);
        if ($a && $a == $this->a->g(o_))
            $this->b();
        else {
            $b = unserialize(urldecode($this->a->g(t_)));
            $c = $this->a->g(u_);
            $d = $this->b->b(g_);
            if ($b && isset($b[$d]))
                $e = $b[$d];
            else
                $e = 0;
            $f = time();
            if ($this->b->c() && $this->b->b(_m)) {
                $g = $this->b->c(n_, _p);
                if ($g && ($e < $c || $this->a->g(s_) + ($this->a->g(v_) * 60) < $f)) {
                    $h = $this->a->g(n_);
                    $i = $this->a->g(q_) * 1;
                    $j = $this->a->g(p_) * 1;
                    $k = $j - $i;
                    for ($l = 0; $l < $k; $l++)
                        $g = sha1($g);
                    if ($h == $g) {
                        if ($this->a->p()) {
                            $this->q();
                            if (isset($b[$d])) {
                                unset($b[$d]);
                                $this->a->h(t_, urlencode(serialize($b)));
                            }
                            if ($i < 5)
                                $this->a->h(q_, 15000);
                            else
                                $this->a->h(q_, $i - 1);
                            $this->a->h(r_, $f);
                            $this->a->h(O_, '');
                        } else {
                            $this->c->a('X-a:1');
                            $this->c->b(404, $this->a->n(_t));
                        }
                    } else {
                        $this->a->h(s_, $f);
                        $b[$d] = $e + 1;
                        $this->a->h(t_, urlencode(serialize($b)));
                        $this->c->b(404, $this->a->n(_t));
                    }
                } else
                    $this->c->b(404, $this->a->n(_t));
            } else {
                if (!$this->a->g(x_) || $this->b->b(e_) && $this->b->b(f_) && preg_match('~Chrome|Firefox|Opera|Safari|AppleWebKit|Trident|MSIE~i', $this->b->b(f_))) {
                    if ($e < $c || $this->a->g(s_) + ($this->a->g(v_) * 60) < $f) {
                        if ($this->b->b(c_) === substr($this->a->b(), 0, -1))
                            throw new Exception($this->a->b(), 307);
                        $m[P_] = $this->a->b();
                        $m[Q_] = $c;
                        $m[R_] = $e;
                        $m[p_] = $this->a->g(q_);
                        $m[Y_] = self::a;
                        $this->c->f($this->a->j('a', $m));
                    } else
                        throw new Exception(false, 403);
                } else
                    throw new Exception(false, 403);
            }
        }
    }
    public function b()
    {
        $aa = $this->b->a();
        if (!$aa || !preg_match('~\.[a-z]{2,5}$~i', $aa)) {
            if ($this->b->b(i_) != str_replace('\\', '/', __FILE__))
                $this->n();
            if (!file_exists($this->a->e() . $this->a->g(D_)) && ($ab = $this->m()))
                throw new Exception($this->a->b(1) . $ab, 307);
            else
                throw new Exception($this->a->b(1) . $this->a->g(D_), 307);
        }
        $ac = $this->a->e() . $aa;
        if ($this->b->b(_m)) {
            if ($this->b->c('reload'))
                $this->q();
            else if ($this->b->c('logout'))
                $this->r();
            else if (($ad = $this->b->c('save')) && ($ae = $this->b->c(_o, _p)) && ($ae == $this->b->d(__ . _o, _p))) {
                $this->c->e(__ . _o);
                $ad = str_replace(_L, _K, base64_decode(str_replace('_', 'a', $ad)));
                $ad = str_replace(_J, _I, $ad);
                $ad = str_replace(_N, '<?', $ad);
                $ad = str_replace(_O, '?>', $ad);
                if ($this->e(strtolower(substr($ac, strripos($ac, '.') + 1)))) {
                    if (is_writable($ac) && $af = fopen($ac, 'w')) {
                        flock($af, LOCK_EX);
                        fwrite($af, $ad);
                        flock($af, LOCK_UN);
                        fclose($af);
                        $this->a->h(O_, '');
                    } else {
                        $this->c->a('X-a:1');
                        $this->c->b(404, $this->a->n(_t));
                    }
                } else
                    $this->c->b(404, $this->a->n(_t));
            } else if ($ag = $this->b->c('open')) {
                $ag = rawurldecode($ag);
                $ah = $this->f($ag);
                if ($ah === false) {
                    $this->a->h(O_, '');
                    $ah = $this->f($ag);
                }
                if ($ah !== false)
                    $this->c->f($ah);
                else
                    $this->c->b(404, $this->a->n(_t));
            } else if (($ag = $this->b->c('upload')) && ($ae = $this->b->c(_o, _p)) && ($ae == $this->b->d(__ . _o, _p))) {
                $this->c->e(__ . _o);
                $ag = rawurldecode($ag);
                $ai = $this->a->f() . $ag;
                $aj = $this->b->e(_C);
                if ($ak = count($aj) && is_dir($ai)) {
                    $al = '';
                    $am = $this->a->j('b');
                    $an = str_replace(' ', '', str_replace(',', '|', $this->a->g(C_)));
                    foreach ($aj[_G] as $ao => $ap) {
                        if ($this->e(strtolower(substr($aj[_y][$ao], strripos($aj[_y][$ao], '.') + 1)))) {
                            if (!$aj[_D][$ao]) {
                                $ac = $ai . $aj[_y][$ao];
                                move_uploaded_file($ap, $ac);
                                $aq[_y] = $aj[_y][$ao];
                                $aq[_z] = filemtime($ac);
                                $aq[_A] = filesize($ac);
                                preg_match('~\.(?:' . $an . ')$~i', $aq[_y], $ar);
                                if (isset($ar[0]))
                                    $aq[_x] = $this->a->b(1) . substr($ag, strlen($this->a->d())) . $aq[_y];
                                else
                                    $aq[_x] = $ag . $aq[_y];
                                $al .= $this->a->k($am, $aq);
                            } else
                                $as = true;
                        } else
                            $at = true;
                        if (isset($al)) {
                            $this->a->h(O_, '');
                            $au = $this->i($ag);
                            $av = $au[_A];
                            $this->c->a('X-b:' . $av);
                            $this->c->f($al);
                        }
                        if (isset($at))
                            $this->c->a('X-c:1');
                        else if (isset($as))
                            $this->c->a('X-d:1');
                    }
                } else
                    $this->c->b(404, $this->a->n(_t));
            } else if (($aw = $this->b->c('remove')) && ($ae = $this->b->c(_o, _p)) && ($ae == $this->b->d(__ . _o, _p))) {
                $this->c->e(__ . _o);
                $aw = rawurldecode($aw);
                if ($this->e(strtolower(substr($aw, strripos($aw, '.') + 1)))) {
                    $aw = str_replace($this->a->b(), $this->a->d(), $aw);
                    $ac = $this->a->f() . $aw;
                    if (is_file($ac) && unlink($ac)) {
                        $this->a->h(O_, '');
                        $ax = $this->i($this->a->o($aw));
                        $this->c->a('X-b:' . $ax[_A]);
                    } else
                        $this->c->b(404, $this->a->n(_t));
                } else {
                    $this->c->a('X-c:1');
                    $this->c->b(404, $this->a->n(_t));
                }
            } else if (($ay = $this->b->c('settings')) && ($ae = $this->b->c(_o, _p)) && ($ae == $this->b->d(__ . _o, _p))) {
                $this->c->e(__ . _o);
                if ($ay[n_]) {
                    $az = $this->a->g(n_);
                    $aA = $this->a->g(p_) - $this->a->g(q_);
                    for ($aB = 0; $aB < $aA; $aB++)
                        $ay[n_] = sha1($ay[n_]);
                    if ($ay[n_] != $az)
                        $this->a->h(n_, $ay[n_]);
                }
                if ($ay[m_] && $ay[m_] != $this->a->a()) {
                    if (stripos($aC = $this->a->g(m_), ',') && stripos($aC, $ay[m_]) !== false) {
                        if ($ay[m_] != $this->b->b(e_))
                            $this->c->d(__ . m_, $ay[m_], time() + 60 * 60 * 24 * 365, $this->a->b(), false, false, true);
                        else
                            $this->c->e(__ . m_, $this->a->b());
                    } else
                        $this->c->b(404, $this->a->n(_t));
                }
                if ($this->a->g(D_) !== null && preg_match('~^.{1,30}$~i', $ay[D_], $ar) && isset($ar[0]))
                    $this->a->h(D_, $ay[D_]);
                else
                    $this->c->b(404, $this->a->n(_t));
                unset($ay[n_], $ay[m_], $ay[D_]);
                foreach ($ay as $ao => $aD) {
                    if ($this->a->g($ao) !== null && preg_match('~^[0-9]{1,7}$~i', $aD, $ar) && isset($ar[0]))
                        $this->a->h($ao, $aD);
                    else
                        $this->c->b(404, $this->a->n(_t));
                }
            } else if (($aE = $this->b->c('scripts')) && ($ae = $this->b->c(_o, _p)) && ($ae == $this->b->d(__ . _o, _p))) {
                $this->c->e(__ . _o);
                if ($this->a->g(K_) !== null)
                    $this->a->h(K_, '0');
                else
                    $this->c->b(404, $this->a->n(_t));
            } else if (($ax = $this->b->c('install')) && ($ae = $this->b->c(_o, _p)) && ($ae == $this->b->d(__ . _o, _p))) {
                $this->c->e(__ . _o);
                $aF = $this->a->c() . 'update.php';
                preg_match('~^[a-z0-9+=/_]+$~i', $ax, $ar);
                if (isset($ar[0]) && ($ax = base64_decode(str_replace('_', 'a', $ax))) && ($af = fopen($aF, 'w'))) {
                    flock($af, LOCK_EX);
                    $aG = fwrite($af, $ax);
                    flock($af, LOCK_UN);
                    fclose($af);
                    if ($aG) {
                        $aq = include $aF;
                        if ($aq == _D)
                            $this->c->b(404, $this->a->n(_t));
                        else if (file_exists($this->a->e() . $aq))
                            $this->c->f($this->a->b(1) . $aq);
                        unlink($aF);
                    } else
                        $this->c->b(404, $this->a->n(_t));
                } else
                    $this->c->b(404, $this->a->n(_t));
            } else
                $this->c->b(404, $this->a->n(_t));
        } else {
            $this->q();
            if (file_exists($ac)) {
                $aH = strtolower(substr($ac, strripos($ac, '.') + 1));
                if ($this->e($aH)) {
                    $aI     = true;
                    $aJ[Z_] = '';
                    $aK     = $this->c($ac);
                    preg_match('~^html?|sh?tml?|xml|php$~i', $aH, $ar);
                    if (isset($ar[0])) {
                        $aI = $this->b->d(__ . _q);
                        if ($aH == _r)
                            $aJ[T_] = $this->a->j('c', array(
                                U_ => _r
                            ));
                        else if ($aH == _s)
                            $aJ[T_] = $this->a->j('c', array(
                                U_ => _s
                            ));
                        else
                            $aJ[T_] = $this->a->j('c', array(
                                U_ => _q
                            ));
                        $aL = $this->b->c('switch');
                        if (is_numeric($aL)) {
                            $aM = $this->b->c(_n);
                            if ($aM && ($ae = $this->b->c(_o, _p)) && $ae == $this->b->d(__ . _o, _p)) {
                                $aM = base64_decode(str_replace('_', 'a', $aM));
                                $this->c->a('X-e:0');
                                $this->c->e(__ . _o);
                                $aM = str_replace(_L, _K, $aM);
                                $aM = str_replace(_J, _I, $aM);
                                if (str_replace('</fo' . 'cus>', '', str_replace('<fo' . 'cus>', '', $aM)) != $aK)
                                    $aJ[Z_] = '1';
                                $aK = $aM;
                            }
                            if ($aL === '1' && !$aI) {
                                $aI = true;
                                $this->c->d(__ . _q, 1, time() + 60 * 60 * 24 * 90, $this->a->b(), false, false, true);
                            }
                            if ($aL === '0' && $aI) {
                                $aI = false;
                                $this->c->e(__ . _q, $this->a->b());
                            }
                        }
                    } else
                        $aJ[T_] = $this->a->j('d', array(
                            U_ => $aH
                        ));
                    $aN[P_] = $this->a->b();
                    $aN[Y_] = self::a;
                    if ($aI) {
                        $aN[X_] = $this->a->m('source_editor');
                        $aN[S_] = $this->a->g(y_);
                        $aN[A_] = $this->a->g(A_);
                        $aN[z_] = $this->a->g(z_);
                        $aO     = $this->a->j('e', $aN);
                        $aK     = str_replace(_N, '<?', $aK);
                        $aK     = str_replace(_O, '?>', $aK);
                    } else {
                        $aN[X_] = $this->a->m('visual_editor');
                        $aN[V_] = $this->a->d();
                        if ($aP = strripos($aa, '/'))
                            $aN[V_] .= substr($aa, 0, $aP + 1);
                        $aO = $this->a->j('f', $aN);
                        $aK = str_replace('<?', _N, $aK);
                        $aK = str_replace('?>', _O, $aK);
                    }
                    $aK     = str_replace(_K, _L, $aK);
                    $aJ[_n] = str_replace(_I, _J, $aK);
                } else {
                    $aJ[Z_] = '';
                    $aJ[_n] = '';
                    $aJ[T_] = $this->a->j('d', array(
                        U_ => _u
                    ));
                    $aO     = $this->a->j('g', array(
                        W_ => _u,
                        P_ => $this->a->b(),
                        Y_ => self::a
                    ));
                }
            } else {
                $aJ[Z_] = '';
                $aJ[_n] = '';
                $aJ[T_] = $this->a->j('d', array(
                    U_ => _t
                ));
                $aO     = $this->a->j('g', array(
                    W_ => _t,
                    P_ => $this->a->b(),
                    Y_ => self::a
                ));
            }
            $aJ[P_] = $this->a->b();
            $aJ[_v] = $this->b->b(g_);
            $aJ[_w] = $this->b->b(h_);
            $aJ[Y_] = self::a;
            $aJ[O_] = $this->h($this->a->d());
            $aJ[p_] = $this->a->g(q_);
            $aJ[w_] = $this->a->g(w_);
            $aJ[_a] = $this->d(ini_get(_a));
            $aJ[_b] = $this->d(ini_get(_b));
            $aJ[_c] = ini_get(_c);
            $aJ[u_] = $this->a->g(u_);
            $aJ[v_] = $this->a->g(v_);
            $aJ[y_] = $this->a->g(y_);
            $aJ[z_] = $this->a->g(z_);
            $aJ[D_] = $this->a->g(D_);
            $aJ[G_] = $this->a->g(G_);
            if ($aJ[G_])
                $aJ[_e] = $this->a->j('h');
            else
                $aJ[_e] = $this->a->j('i');
            $aJ[K_] = $this->a->g(K_);
            if ($aJ[K_])
                $aJ[_f] = $this->a->j('h');
            else
                $aJ[_f] = $this->a->j('i');
            $aJ[L_] = $this->a->g(L_);
            if ($aJ[L_])
                $aJ[_g] = $this->a->j('h');
            else
                $aJ[_g] = $this->a->j('i');
            $aJ[M_] = $this->a->g(M_);
            if ($aJ[M_])
                $aJ[_k] = $this->a->j('h');
            else
                $aJ[_k] = $this->a->j('i');
            $aJ[N_] = $this->a->g(N_);
            if ($aJ[N_])
                $aJ[_l] = $this->a->j('h');
            else
                $aJ[_l] = $this->a->j('i');
            if ($this->a->g(A_))
                $aJ[_j] = $this->a->j('h');
            else
                $aJ[_j] = $this->a->j('i');
            $aJ[_H] = $this->p();
            $aJ[_n] = str_replace('{', '!~!', $aJ[_n]);
            $aO     = str_replace(_M, $this->a->j('j', $aJ) . _M, $aO);
            $aO     = str_replace('!~!', '{', $aO);
            $this->c->f($aO);
        }
    }
    public function c($a)
    {
        $b = file_get_contents($a);
        preg_match('~<meta[^>]+utf-8~i', $b, $c);
        preg_match('~<meta[^>]+windows-1251~i', $b, $d);
        if (!isset($c[0]) && isset($d[0])) {
            $b = preg_replace('~(<meta[^>]+)windows-1251~i', '$1utf-8', $b);
            $b = iconv('Windows-1251', 'UTF-8', $b);
        }
        return $b;
    }
    public function d($a)
    {
        $a = strtolower(trim($a));
        $b = (int) $a;
        switch ($a[strlen($a) - 1]) {
            case 'm':
                return $b * 1048576;
            case 'k':
                return $b * 1024;
            case 'g':
                return $b * 1073741824;
            default:
                return $b;
        }
    }
    public function e($a)
    {
        $b = $this->a->g(B_);
        if (!$b || preg_match('~(?:^|,\s*)' . $a . '(?:\s*,|$)~i', $b))
            return true;
    }
    public function f($a)
    {
        $b = $this->g($a);
        if ($b !== false) {
            $c = '';
            $d = $this->a->j('k');
            $e = $this->a->j('b');
            foreach ($b as $f) {
                if (isset($f[_B])) {
                    unset($f[_B]);
                    $c .= $this->a->k($d, $f);
                } else
                    $c .= $this->a->k($e, $f);
            }
            return $c;
        } else
            return false;
    }
    public function g($a)
    {
        $b = $this->j();
        if ($a != '/') {
            $c = $this->a->d();
            if ($c != '/') {
                if ($a == $c)
                    $d = false;
                else
                    $d = substr(str_replace($c, '', $a), 0, -1);
            } else
                $d = substr($a, 1, -1);
        } else
            $d = false;
        $e = $b[_B];
        if ($d) {
            $d = explode('/', $d);
            foreach ($d as $f) {
                foreach ($e as $g) {
                    if ($g[_y] == $f) {
                        $e = $g[_B];
                        break;
                    }
                }
                if ($e != $g[_B]) {
                    $e = false;
                    break;
                }
            }
        }
        return $e;
    }
    public function h($a)
    {
        $b = $this->i($a);
        unset($b[_B]);
        return $this->a->j('k', $b);
    }
    public function i($a)
    {
        $b = $this->j($a);
        if ($a != '/') {
            $c = $this->a->d();
            if ($c != '/') {
                if ($a == $c)
                    $d = false;
                else
                    $d = substr(str_replace($c, '', $a), 0, -1);
            } else
                $d = substr($a, 1, -1);
        } else
            $d = false;
        $e = $b;
        if ($d) {
            $d = explode('/', $d);
            foreach ($d as $f) {
                foreach ($e[_B] as $g) {
                    if ($g[_y] == $f) {
                        $e = $g;
                        break;
                    }
                }
                if ($e != $g)
                    $e = false;
            }
        }
        return $e;
    }
    public function j()
    {
        $a = $this->a->g(O_);
        if (!$a) {
            $a = $this->k($this->a->d());
            $this->a->h(O_, urlencode(serialize($a)));
        } else
            $a = unserialize(urldecode($a));
        return $a;
    }
    public function k($a)
    {
        $b = $this->a->f() . $a;
        if ($a == '/')
            $c[_y] = $this->b->b(k_);
        else
            $c[_y] = substr($a, strrpos(substr($a, 0, -1), '/') + 1, -1);
        $c[_z] = filemtime($b);
        $c[_A] = 0;
        $c[_x] = $a;
        $d     = $e = array();
        $f     = str_replace(' ', '', str_replace(',', '|', $this->a->g(C_)));
        if ($g = opendir($b)) {
            while (($h = readdir($g)) !== false) {
                if ($h != '.' && $h != '..') {
                    $i = array();
                    if (is_file($b . $h)) {
                        $i[_y] = $h;
                        $i[_A] = filesize($b . $h);
                        $i[_z] = filemtime($b . $h);
                        preg_match('~\.(?:' . $f . ')$~i', $h, $j);
                        if (isset($j[0]))
                            $i[_x] = $this->a->b(1) . substr($a, strlen($this->a->d())) . $h;
                        else
                            $i[_x] = $a . $h;
                        $e[] = $i;
                    } else {
                        $i   = $this->k($a . $h . '/');
                        $d[] = $i;
                    }
                    $c[_A] += $i[_A];
                }
            }
            closedir($g);
        }
        $c[_B] = array_merge($this->l($d), $this->l($e));
        return $c;
    }
    public function l($a)
    {
        $b = array();
        $c = array();
        foreach ($a as $d)
            $b[] = $d[_y];
        asort($b);
        foreach ($b as $e)
            foreach ($a as $d)
                if ($e == $d[_y])
                    $c[] = $d;
        return $c;
    }
    public function m()
    {
        $a = $this->a->e();
        if ($b = opendir($a)) {
            while (($c = readdir($b)) !== false) {
                if ($c != '.' && $c != '..') {
                    if (is_file($a . $c)) {
                        $d = array();
                        $e = array();
                        if (preg_match('~^index\.(?:html?|sh?tml?)$~i', $c)) {
                            closedir($b);
                            return $c;
                        } else if (preg_match('~\.(?:html?|sh?tml?)$~i', $c))
                            $d[] = $c;
                        else if (preg_match('~\.(?:php|css|js|xml)$~i', $c))
                            $e[] = $c;
                    }
                }
            }
            closedir($b);
            if (isset($d[0]))
                return $d[0];
            else if (isset($e[0]))
                return $e[0];
        }
    }
    public function n()
    {
        $a = $this->a->c() . '.htaccess';
        if (file_exists($a)) {
            $b = file_get_contents($a);
            preg_match('~RewriteBase (.+?)\n~i', $b, $c);
            if (isset($c[0]) && isset($c[1])) {
                if ($c[1] != $this->a->b()) {
                    $b = str_replace($c[0], 'RewriteBase ' . $this->a->b() . "\n", $b);
                    $this->o($b);
                }
            } else {
                $b = preg_replace('~(RewriteEngine .+?\n)~i', '$1' . "\n" . 'RewriteBase ' . $this->a->b() . "\n", $b);
                $this->o($b);
            }
        }
    }
    public function o($a)
    {
        if ($b = fopen($this->a->c() . '.htaccess', 'w')) {
            flock($b, LOCK_EX);
            fwrite($b, $a);
            flock($b, LOCK_UN);
            fclose($b);
        }
    }
    public function p()
    {
        $a = '';
        $b = explode(',', $this->a->g(m_));
        $c = $this->a->a();
        foreach ($b as $d) {
            $d = trim($d);
            if ($c == $d)
                $e = $this->a->j('l', array(
                    _y => m_,
                    _E => $d
                ));
            else
                $e = $this->a->j('m', array(
                    _y => m_,
                    _E => $d
                ));
            $a .= $this->a->j('n', array(
                _F => $e,
                m_ => $d
            ));
        }
        return $a;
    }
    public function q()
    {
        $a = sha1(time() . mt_rand());
        $this->a->h(o_, $a);
        $this->c->d(__ . o_, $a, time() + 60 * $this->a->g(w_), $this->a->b(), false, false, true);
    }
    public function r()
    {
        $this->a->h(o_, '');
        $this->c->e(__ . o_, $this->a->b());
    }
    public function s($a)
    {
        $this->c->b($a->getCode(), $this->a->n($a->getCode()));
        if ($b = $a->getMessage())
            $this->c->c($b);
        $c[W_] = $a->getCode();
        $c[P_] = $this->a->b();
        $c[Y_] = self::a;
        $this->c->f($this->a->j('g', $c));
    }
}
$a = new a();
$b = new b($a->b(l_));
$c = new c(dirname($a->b(i_)) . '/', $a->b(a_), $a->b(e_), $a->d(__ . m_), $a->f());
$d = new d($c, $a, $b);
try {
    $d->a();
}
catch (Exception $e) {
    $d->s($e);
}
$b->g();
?>