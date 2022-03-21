# ImgBB

A simple package to upload your images to ImgBB server withour any fuss. Where 'ImgBB' is Free image hosting and sharing service, upload pictures, photo host that Offers integration solutions for uploading images to forums.

## Installation

You can install the ImgBB via composer:

```
composer require 101infotech/imgbb
```

Then publish the config file using:

```
php artisan vendor:publish  --tag="ImgBB"
```

### Uploading images

Use the following methods to upload your image to ImgBB:

- Get API key from [ImgBB](https://api.imgbb.com)
- Put your API key in the '.env' file with 'IMGBB_API_KEY' variable
- You are good to go!

#### Upload image

To upload an image to ImgBB, use the following command:

```
ImgBB::image($request->file('image'), 'image_name', expiration_in_seconds);
```

Datatypes Object $image, String image_name, Int expiration_in_seconds. Remember 'image_name' and 'expiration_in_seconds' are optional.

#### Upload Image URL

To upload an image from URL, use the following command:

```
ImgBB::url('https://i.ibb.co/SdHW3ch/chart-1641904891.png', 'image_name', expiration_in_seconds);
```

Datatypes String image_url, String image_name, Int expiration_in_seconds. Remember 'image_name' and 'expiration_in_seconds' are optional.

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

### Change Log

v1.0.0: Initial release.
v1.0.1: Added image 'name' and 'expiration'.
v1.1.0: Added publishable config file.
