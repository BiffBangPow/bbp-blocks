SilverStripe BBP Blocks
====================================
Adds some basic blocks and extensions to allow for rapid SilverStripe development.

## Requirements
1. sheadawson/silverstripe-blocks: "^1.1"
2. Bootstrap 4 as your front end framework (looking to expand in the future but this is the one we use)

## Installation
```
composer require BiffBangPow/bbp-blocks
```

## Usage
1. Composer install or unpack the module in the root of your project
2. Add what you need to your config.yml from the [blocks module](https://github.com/sheadawson/silverstripe-blocks) to get the blocks working
4. Do a ```dev/build```.
5. Head to a page to begin adding the blocks.

## Styling
The blocks included here are designed to have only enough styles for basic layout, try adding some basic styles and going from there, for example the following scss:
```html
.text-and-media-block {
  .text, .content {
      min-height: 400px;
  }
  .text {
    padding: 50px;
  }
}

.text-and-image-block {
  color: white;
  background-color: #3F51B5;
}

.call-to-action-block {
  .call-to-action-content {
    width: 100%;
    text-align: center;
  }
}
```

## Extensions
The extensions in this bundle are designed to be added to your blocks to add easy functionality. They are mostly centered around responsive showing and hiding of content, as we found this gave a lot of control to the end user.
