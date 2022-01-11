# ImgBB

[![Total Downloads](https://img.shields.io/packagist/dt/101infotech/imgbb.svg?style=flat-square)](https://packagist.org/packages/101infotech/imgbb)
\
A simple package to upload your images to ImgBB server withour any fuss. Where 'ImgBB' is Free image hosting and sharing service, upload pictures, photo host that Offers integration solutions for uploading images to forums.

## Installation

You can install the ImgBB via composer:

```
composer require 101infotech/imgbb
```

### Uploading images

Use the following methods to upload your image to ImgBB:

- Get API key from [ImgBB](https://api.imgbb.com)
- Put your API key in the '.env' file with 'IMGBB_API_KEY' variable
- You are good to go!

#### Upload image

To upload an image to ImgBB, use the following command:

```
ImgBB::image($request->file('image'));
```

#### Upload Image URL

To upload an image from URL, use the following command:

```
ImgBB::url('https://i.ibb.co/SdHW3ch/chart-1641904891.png');
```

### Response

After a successful upload, ImgBB returns a JSON response with the following fields:

```json
{
  "data": {
    "id": "2ndCYJK",
    "title": "c1f64245afb2",
    "url_viewer": "https://ibb.co/2ndCYJK",
    "url": "https://i.ibb.co/w04Prt6/c1f64245afb2.gif",
    "display_url": "https://i.ibb.co/98W13PY/c1f64245afb2.gif",
    "size": "42",
    "time": "1552042565",
    "expiration": "0",
    "image": {
      "filename": "c1f64245afb2.gif",
      "name": "c1f64245afb2",
      "mime": "image/gif",
      "extension": "gif",
      "url": "https://i.ibb.co/w04Prt6/c1f64245afb2.gif"
    },
    "thumb": {
      "filename": "c1f64245afb2.gif",
      "name": "c1f64245afb2",
      "mime": "image/gif",
      "extension": "gif",
      "url": "https://i.ibb.co/2ndCYJK/c1f64245afb2.gif"
    },
    "medium": {
      "filename": "c1f64245afb2.gif",
      "name": "c1f64245afb2",
      "mime": "image/gif",
      "extension": "gif",
      "url": "https://i.ibb.co/98W13PY/c1f64245afb2.gif"
    },
    "delete_url": "https://ibb.co/2ndCYJK/670a7e48ddcb85ac340c717a41047e5c"
  },
  "success": true,
  "status": 200
}
```
