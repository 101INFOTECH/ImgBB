<?php

namespace Infotech\ImgBB;

use Illuminate\Support\Facades\Http;

class ImgBB
{
    public static function image(Object $image, String $name = null, INT $expiration = 0)
    {
        if ($name == null) {
            $fullname = $image->getClientOriginalName();
            $name = pathinfo($fullname, PATHINFO_FILENAME) . "_" . time();
        }

        $image = base64_encode(file_get_contents($image->path()));

        $response = Http::asForm()->post(
            'https://api.imgbb.com/1/upload',
            [
                'key' => config('ImgBB.IMGBB_API_KEY'),
                'image' => $image,
                'name' => $name,
                'expiration' => $expiration,
            ]
        );

        return $response->json();
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

        $response = Http::asForm()->post(
            'https://api.imgbb.com/1/upload',
            [
                'key' => config('ImgBB.IMGBB_API_KEY'),
                'image' => $url,
                'name' => $name,
                'expiration' => $expiration,
            ]
        );

        return $response->json();
    }
}
