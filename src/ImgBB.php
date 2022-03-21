<?php

namespace Infotech\ImgBB;

use Illuminate\Support\Facades\Http;

class ImgBB
{
    private function uploadImage(String $imageStr, String $name = null, INT $expiration = 0){
        $response = Http::asForm()->post(
            'https://api.imgbb.com/1/upload',
            [
                'key' => config('ImgBB.IMGBB_API_KEY'),
                'image' => $imageStr,
                'name' => $name,
                'expiration' => $expiration,
            ]
        );
        
        return $response->json();
    }
    
    public static function image(Object $image, String $name = null, INT $expiration = 0)
    {
        if ($name == null) {
            $fullname = $image->getClientOriginalName();
            $name = pathinfo($fullname, PATHINFO_FILENAME) . "_" . time();
        }

        $image = base64_encode(file_get_contents($image->path()));
        
        return self::uploadImage($image, $name, $expiration);
    }

    public static function url(String $url, String $name = null, INT $expiration = 0)
    {
        if (filter_var($url, FILTER_VALIDATE_URL) == false) {
            return [
                'error' => 'Invalid URL',
            ];
        }

        if ($name == null) {
            $name = config('app.name') . "_" . time();
        }

        return self::uploadImage($url, $name, $expiration);
    }
}
