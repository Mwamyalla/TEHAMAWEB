<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function slug($string, $spaceRepl = "-")
{
    $string = str_replace("&", "and", $string);

    $string = preg_replace("/[^a-zA-Z0-9 _-]/", "", $string);

    $string = strtolower($string);

    $string = preg_replace("/[ ]+/", " ", $string);

    $string = str_replace(" ", $spaceRepl, $string);

    return $string;
}

function resizeImage($source_path,$new_path,$width,$height)
{

    $CI =& get_instance();

    $config['image_library']     = 'gd2';
    $config['source_image']      = $source_path;
    $config['new_image']         = $new_path;
    $config['create_thumb']      = TRUE;
    $config['maintain_ratio']    = TRUE;
    $config['width']             = $width;
    $config['height']            = $height;
    $config['thumb_maker']       = '';
    $CI->load->library('image_lib', $config);
    $CI->image_lib->initialize($config);
    $CI->image_lib->resize();
    $CI->image_lib->clear();
    
}

function get_date($date)
{
	return date("jS M, Y", strtotime($date));

}

function bytesToSize($path, $filesize = '')
{
    if (!is_numeric($filesize)) {
        $bytes = sprintf('%u', filesize($path));
    } else {
        $bytes = $filesize;
    }
    if ($bytes > 0) {
        $unit = intval(log($bytes, 1024));
        $units = [
            'B',
            'KB',
            'MB',
            'GB',
        ];
        if (array_key_exists($unit, $units) === true) {
            return sprintf('%d %s', $bytes / pow(1024, $unit), $units[$unit]);
        }
    }
    return $bytes;
}




