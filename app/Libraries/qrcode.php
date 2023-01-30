<?php namespace
App\Libraries;
class qrcode
{
    public $cacheable = true;
    public $cachedir = 'writable/cache/';
    public $errorlog = 'writable/logs/';
    public $quality = true;
    public $size = 1024;
    public function __construct($config = array())
    {
        include "qrcode/qrconst.php";
        include "qrcode/qrtools.php";
        include "qrcode/qrspec.php";
        include "qrcode/qrimage.php";
        include "qrcode/qrinput.php";
        include "qrcode/qrbitstream.php";
        include "qrcode/qrsplit.php";
        include "qrcode/qrrscode.php";
        include "qrcode/qrmask.php";
        include "qrcode/qrencode.php";
        $this->initialize($config);
    }

    public function initialize($config = array())
    {
        $this->cacheable = (isset($config['cacheable'])) ? $config['cacheable'] : $this->cacheable;
        $this->cachedir = (isset($config['cachedir'])) ? $config['cachedir'] : FCPATH . $this->cachedir;
        $this->errorlog = (isset($config['errorlog'])) ? $config['errorlog'] : FCPATH . $this->errorlog;
        $this->quality = (isset($config['quality'])) ? $config['quality'] : $this->quality;
        $this->size = (isset($config['size'])) ? $config['size'] : $this->size;
        if (!defined('QR_CACHEABLE')) {
            define('QR_CACHEABLE', $this->cacheable);
        }
        if (!defined('QR_CACHE_DIR')) {
            define('QR_CACHE_DIR', $this->cachedir);
        }
        if (!defined('QR_LOG_DIR')) {
            define('QR_LOG_DIR', $this->errorlog);
        }
        if ($this->quality) {
            if (!defined('QR_FIND_BEST_MASK')) {
                define('QR_FIND_BEST_MASK', true);
            }
            } else {
            if (!defined('QR_FIND_BEST_MASK')) {
                define('QR_FIND_BEST_MASK', false);
            }
            if (!defined('QR_DEFAULT_MASK')) {
                define('QR_DEFAULT_MASK', $this->quality);
            }
        }
        if (!defined('QR_FIND_FROM_RANDOM')) {
            define('QR_FIND_FROM_RANDOM', false);
        }
        if (!defined('QR_PNG_MAXIMUM_SIZE')) {
            define('QR_PNG_MAXIMUM_SIZE', $this->size);
        }
    }

    public function generate($params = array())
    {
        if (isset($params['black'])
        && is_array($params['black'])
        && count($params['black']) == 3
        && array_filter($params['black'], 'is_int') === $params['black']) {
         qrcode\QRimage::$black = $params['black'];
        }

        if (isset($params['white'])
        && is_array($params['white'])
        && count($params['white']) == 3
        && array_filter($params['white'], 'is_int') === $params['white']) {
         qrcode\QRimage::$white = $params['white'];
        }

        $params['data'] = (isset($params['data'])) ? $params['data'] : 'QR Code Library';
        if (isset($params['savename'])) {
            $level = 'L';
            if (isset($params['level']) && in_array($params['level'], array('L', 'M', 'Q', 'H'))) {
                $level = $params['level'];
            }
            $size = 4;
            if (isset($params['size'])) {
                $size = min(max((int) $params['size'], 1), 10);
            }
            qrcode\QRcode::png($params['data'], $params['savename'], $level, $size,2);
            return $params['savename'];
        } else {
            $level = 'L';
            if (isset($params['level']) && in_array($params['level'], array('L', 'M', 'Q', 'H'))) {
                $level = $params['level'];
            }
            
            $size = 4;
            if (isset($params['size'])) {
                $size = min(max((int) $params['size'], 1), 10);
            }
            qrcode\QRcode::png($params['data'], null, $level, $size, 2);
        }
    }
}
