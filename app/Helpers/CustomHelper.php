<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

class CustomHelper
{
    public static function signedUrl($name, $contentType)
    {

        $s3 = Storage::disk('s3');

        $client = $s3->getClient();
        $expiry = "+30 minutes";

        $cmd = $client->getCommand('PutObject', [
            'Bucket' => Config::get('filesystems.disks.s3.bucket'),
            'Key' => $name,
            'ContentType' => $contentType,
        ]);

        $request = $client->createPresignedRequest($cmd, $expiry);

        return response()->json([
            'method' => $request->getMethod(),
            'url' => (string) $request->getUri(),
        ]);
    }

    public static function getEmbedUrls($url, $params = null)
    {
        if (!is_string($url)) {
            return null;
        }

        $regexVM = '~
    # Match Vimeo link and embed code
    (?:<iframe [^>]*src=")?         # If iframe match up to first quote of src
    (?:                             # Group vimeo url
      https?:\/\/             # Either http or https
      (?:[\w]+\.)*            # Optional subdomains
      vimeo\.com              # Match vimeo.com
      (?:[\/\w]*\/videos?)?   # Optional video sub directory this handles groups links also
      \/                      # Slash before Id
      ([0-9]+)                # $1: VIDEO_ID is numeric
      [^\s]*                  # Not a space
    )                               # End group
    "?                              # Match end quote if part of src
    (?:[^>]*></iframe>)?            # Match the end of the iframe
    (?:<p>.*</p>)?                  # Match any title information stuff
    ~ix';
        $regExpYt = '~
  ^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*
  ~ix';

        preg_match($regexVM, $url, $matches);
        if (isset($matches[1]) && is_array($params) && isset($params['img']) && $params['img']) {
            return '<a href="' . $url . '"' . (isset($params['class']) ? ' class="popup-vimeo ' . $params['class'] . '"' : '') . '><img src="" data-vmid="' . $matches[1] . '" alt=""></a>';
        } else if (isset($matches[1])) {
            return "https://player.vimeo.com/video/" . $matches[1];
        }
        preg_match($regExpYt, $url, $matches);
        if (isset($matches[7]) && is_array($params) && isset($params['img']) && $params['img']) {
            return '<a href="' . $url . '"' . (isset($params['class']) ? ' class="popup-youtube ' . $params['class'] . '"' : '') . '><img src="http://img.youtube.com/vi/' . $matches[7] . '/hqdefault.jpg" alt=""></a>';
        } else if (isset($matches[7])) {
            return "https://www.youtube.com/embed/" . $matches[7];
        }
        return null;

    }
}
