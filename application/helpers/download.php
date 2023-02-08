<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

if ( ! function_exists('force_download'))
{
 function force_download($filename = '', $data = '')
 {
  if ($filename == '' OR $data == '')
  {
   return FALSE;
  }

  if (FALSE === strpos($filename, '.'))
  {
   return FALSE;
  }
 
  // Grab the file extension
  $x = explode('.', $filename);
  $extension = end($x);

  // Load the mime types
  @include(APPPATH.'config/mimes'.EXT);
 
  // Set a default mime if we can't find it
  if ( ! isset($mimes[$extension]))
  {
   $mime = 'application/octet-stream';
  }
  else
  {
   $mime = (is_array($mimes[$extension])) ? $mimes[$extension][0] : $mimes[$extension];
  }
 
  // Generate the server headers
  if (strstr($_SERVER['HTTP_USER_AGENT'], "MSIE"))
  {
   header('Content-Type: "'.$mime.'"');
   header('Content-Disposition: attachment; filename="'.$filename.'"');
   header('Expires: 0');
   header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
   header("Content-Transfer-Encoding: binary");
   header('Pragma: public');
   header("Content-Length: ".strlen($data));
  }
  else
  {
   header('Content-Type: "'.$mime.'"');
   header('Content-Disposition: attachment; filename="'.$filename.'"');
   header("Content-Transfer-Encoding: binary");
   header('Expires: 0');
   header('Pragma: no-cache');
   header("Content-Length: ".strlen($data));
  }
 
  exit($data);
 }
}


