<?php

namespace Infotech\ImgBB;

use Illuminate\Support\Facades\Http;

class ImgBB
{
    public static function image(Object $image)
    {
        $fullname = $image->getClientOriginalName();
        $name = pathinfo($fullname, PATHINFO_FILENAME) . "_" . time();
        $image = base64_encode(file_get_contents($image->path()));

        $response = Http::asForm()->post(
            'https://api.imgbb.com/1/upload',
            [
                'key' => env('IMGBB_API_KEY'),
                'image' => $image,
                'name' => $name,
            ]
        );

        return $response->json();
    }

    public static function url(String $url)
    {
        if (filter_var($url, FILTER_VALIDATE_URL) == false) {
            return [
                'error' => 'Invalid URL',
            ];
        }

        $response = Http::asForm()->post(
            'https://api.imgbb.com/1/upload',
            [
                'key' => env('IMGBB_API_KEY'),
                'image' => $url,
                'name' => env('APP_NAME') . "_" . time(),
            ]
        );

        return $response->json();
    }
}
