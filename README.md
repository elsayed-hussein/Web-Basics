# Web-Basics

## Instructions

1. Add a static array that has 60 products and then:
2. Display only 15 products.
3. Based on the URL:

   - Search about and get a specific product using search, for example:
   - If a website is built to display clothing products, return all products whose size is mentioned as XLarge in product info.
   - Create a form for adding a new product.

   - Save/Store favorite's products using session.
   - Save the last 3 products that the user searched about using Cookies.

- Example on how the `$products` array might look like:

```php
<?php

$products = [
  0 => [
       "id" => "137bbdfb-88a1-428c-ab9d-07778de4a67e",
        "size" => "XLarge",
        "name" => "Land Rover",
        "image" => "https://placeimg.com/500/500",
        "about" => "Vel provident ab nemo...."
  ],
  1 => [
      "id" => "2178262a-3e6f-4e4e-8343-e14601e90fdd",
      "size" => "Large",
      "name" => "Tesla",
      "image" => "https://placeimg.com/500/500",
      "about" => "Sint id odit. Tenetur..."
  ]
];
```
