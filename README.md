# ImgBB

A simple package to upload your images to ImgBB server withour any fuss. Where 'ImgBB' is Free image hosting and sharing service, upload pictures, photo host that Offers integration solutions for uploading images to forums.
[![Latest Version on Packagist](https://img.shields.io/packagist/v/101infotech/imgbb.svg?style=flat-square)](https://github.com/101infotech/imgbb)
[![Total Downloads](https://img.shields.io/packagist/dt/101infotech/imgbb.svg?style=flat-square)](https://packagist.org/packages/101infotech/imgbb)

## Installation

You can install the ImgBB via composer:

`composer require 101infotech/imgbb`


## Usage
`


### Uploading images



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
    "expiration":"0",
    "image": {
      "filename": "c1f64245afb2.gif",
      "name": "c1f64245afb2",
      "mime": "image/gif",
      "extension": "gif",
      "url": "https://i.ibb.co/w04Prt6/c1f64245afb2.gif",
    },
    "thumb": {
      "filename": "c1f64245afb2.gif",
      "name": "c1f64245afb2",
      "mime": "image/gif",
      "extension": "gif",
      "url": "https://i.ibb.co/2ndCYJK/c1f64245afb2.gif",
    },
    "medium": {
      "filename": "c1f64245afb2.gif",
      "name": "c1f64245afb2",
      "mime": "image/gif",
      "extension": "gif",
      "url": "https://i.ibb.co/98W13PY/c1f64245afb2.gif",
    },
    "delete_url": "https://ibb.co/2ndCYJK/670a7e48ddcb85ac340c717a41047e5c"
  },
  "success": true,
  "status": 200
}
```
