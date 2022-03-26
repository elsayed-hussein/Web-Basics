<?php
// require_once 'vendor/autoload.php';

// $faker = Faker\Factory::create();

function gen_uuid()
{
        return sprintf(
                '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                // 32 bits for "time_low"
                mt_rand(0, 0xffff),
                mt_rand(0, 0xffff),

                // 16 bits for "time_mid"
                mt_rand(0, 0xffff),

                // 16 bits for "time_hi_and_version",
                // four most significant bits holds version number 4
                mt_rand(0, 0x0fff) | 0x4000,

                // 16 bits, 8 bits for "clk_seq_hi_res",
                // 8 bits for "clk_seq_low",
                // two most significant bits holds zero and one for variant DCE1.1
                mt_rand(0, 0x3fff) | 0x8000,

                // 48 bits for "node"
                mt_rand(0, 0xffff),
                mt_rand(0, 0xffff),
                mt_rand(0, 0xffff)
        );
}

// $sizes = ["XLarge", "Large", "Medium", "Small"];


// function generateRandomString($length = 10)
// {
//     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $charactersLength = strlen($characters);
//     $randomString = '';
//     for ($i = 0; $i < $length; $i++) {
//         $randomString .= $characters[rand(0, $charactersLength - 1)];
//     }
//     return $randomString;
// }

// $products = [];

// for ($i = 0; $i < 60; $i++) {
//     array_push(
//         $products,
//         [
//             "id" => gen_uuid(),
//             "size" => $sizes[array_rand($sizes, 1)],
//             "name" => $faker->name(),
//             "image" => ""https://placeimg.com/500/500",",
//             "about" => generateRandomString(rand(50, 100))
//         ]
//     );
// };

// echo $faker->name();
// echo "<hr/><br/>";
// echo gen_uuid();
// echo "<hr/><br/>";
// echo $sizes[array_rand($sizes, 1)];
// echo "<hr/><br/>";
// echo "<img src=\""https://placeimg.com/500/500",\">";
// echo "<hr/><br/>";
// echo generateRandomString(rand(50, 100));
// echo "<pre/>";
// print_r($products);


$products = [
        0 => [
                "id" => "f9aee650-6fa7-4fb9-a319-d477451afc90",
                "size" => "Medium",
                "name" => "Jerrold West",
                "image" => "https://placeimg.com/500/500",
                "about" => "FKccnRELGppUeXf02SMwnoGbPTfvVCvO3dGpInUsRhT9jMkgndvkOm7wr0ug7Xw1a7reAne7yMv8LvSZRvuCphxOZeZZ1U"
        ],
        1 => [
                "id" => "bb5399a9-b552-4a1e-91d4-21479da43950",
                "size" => "Small",
                "name" => "Amara Haley",
                "image" => "https://placeimg.com/500/500",
                "about" => "hWYipZ9pQNp1LvzytluT36sER1BsY0XcUHCplloNPMA5nG6VerANjHY69xj67ex"
        ],
        2 => [
                "id" => "3f5a4997-d339-46d4-a0fe-62825e647cd8",
                "size" => "Large",
                "name" => "Mrs. Jayne Rohan PhD",
                "image" => "https://placeimg.com/500/500",
                "about" => "vJOptv5606Gjp7AHxeWLkY1RaO5lurfjOheEeZc2E0F0v8sm6uRKceBFoUAHBSEyuWBbOmg68358o53FdMiHUkUtxSOdOS"
        ],
        3 => [
                "id" => "53965388-3b77-44ab-80ba-fdae2ffa268a",
                "size" => "Medium",
                "name" => "Mr. Davin Hoppe IV",
                "image" => "https://placeimg.com/500/500",
                "about" => "laY6jojFxZgg8PBYMp4vkjO07S2Vqik6hpGtP9rLkyo4OMFqjgKpJ34"
        ],
        4 => [
                "id" => "4c8ef1f8-2c3b-4ac7-b5c1-d30edcc6f516",
                "size" => "XLarge",
                "name" => "Raymundo Mueller",
                "image" => "https://placeimg.com/500/500",
                "about" => "j9eQx6WZM985z3AbRZItyMuOhdFHpbJ0r9xXqpPF0zKzgdmEPZhaq3lCgOjw"
        ],
        5 => [
                "id" => "bc448f91-bbc7-420a-adb3-248dd274de55",
                "size" => "Medium",
                "name" => "Gene Cartwright",
                "image" => "https://placeimg.com/500/500",
                "about" => "9ALLJP6Ffus93ByfONDez9yQtLRAfAJIe6THRf8nzt3qycvqpxmOVhhhYuubTcZB",
        ],
        6 => [
                "id" => "ec0dc0f5-956f-4eb7-a7c7-1ab15aafcb86",
                "size" => "Medium",
                "name" => "Orville Green",
                "image" => "https://placeimg.com/500/500",
                "about" => "mrcEiNhD8iDUz7o4sqoC9PVKBq9zAvQ57eFGOlaWtB6KNNQroSLPErOD6uTwvXG2sXqiNm7uKzV"
        ],
        7 => [
                "id" => "b8fa4566-807a-4be7-a7c5-5f3e0232a85b",
                "size" => "Medium",
                "name" => "Elenora Leuschke",
                "image" => "https://placeimg.com/500/500",
                "about" => "G6eiLyvFyMyMa4SGUkheNNBSxYUOUEc05L2nFupdlYe8lb3whEW8bE5cbqk1blYy",
        ],
        8 => [
                "id" => "2d3fe9d7-628e-496e-9660-1b8858cf5287",
                "size" => "Medium",
                "name" => "Palma Bradtke",
                "image" => "https://placeimg.com/500/500",
                "about" => "jlClrmcUGj8jgs9xawyX4linuAZlyjn3SpZl2helpVTWjZyfATt"
        ],
        9 => [
                "id" => "959d43b4-6f7d-4d48-82f0-d3abc6000a18",
                "size" => "Large",
                "name" => "Ladarius Okuneva",
                "image" => "https://placeimg.com/500/500",
                "about" => "CUZ4ktRjNUDTOBID2NEcHRiVrhcVv6jYYaGesAVgxLMxnslynAQuYyOzLhir4Ydra521Q3iNZf4xY"
        ],
        10 => [
                "id" => "2b9412ef-2409-4e04-a362-a6d6696a0466",
                "size" => "XLarge",
                "name" => "Prof. Keegan Fadel III",
                "image" => "https://placeimg.com/500/500",
                "about" => "7x8ujFMZeWWMpkxTopue9UKYGw9KwCbZliEACKoGf57Sqy3Cv1RnlNo2qxTheLlTWApTVPe2OaT8Q3Q4vk25eOxBnoX"
        ],
        11 => [
                "id" => "4d729d96-8cfa-4f1b-8a85-39aee4bf9e92",
                "size" => "Small",
                "name" => "Americo Medhurst",
                "image" => "https://placeimg.com/500/500",
                "about" => "cr02ev95Zv7b7Qp2XpdQrxhIRC88avJ3JDhmUzOf38kVCpUrqT7"
        ],
        12 => [
                "id" => "b86da7b0-d725-4e7b-aea6-45f39ba35b75",
                "size" => "Medium",
                "name" => "Lonie Pfeffer I",
                "image" => "https://placeimg.com/500/500",
                "about" => "3OgMKTYGC61wVTnby8t7b4yGWaRnhCwv06ti1BjsOvJwQnpGChJIp73iB1MUWxeasMf7rRHInaLheCNeysJQEbvnA2JO5"
        ],
        13 => [
                "id" => "55738a2a-da59-426b-b8ee-64550744931f",
                "size" => "Large",
                "name" => "Mr. Loyal Marvin Jr.",
                "image" => "https://placeimg.com/500/500",
                "about" => "7rjtHyvY0kOPmOP0HJJBGVBlIZ267jFiJRkyQmeGqNIyjDurdR3nUVMk17V7qBnQvS4i4Lz6VY4i1UMrH0jw69icpe02mA5ahbW"
        ],
        14 => [
                "id" => "126a12cc-93a1-4b61-b966-cc090014fbcb",
                "size" => "XLarge",
                "name" => "Mr. Cedrick Veum",
                "image" => "https://placeimg.com/500/500",
                "about" => "tIWORfnASN53xxA3FlehuUjBblR9kxyRTE6fAKAoNiAnaMSSCYPCq6"
        ],
        15 => [
                "id" => "d76d73ec-4429-4533-a6b7-96647f6e86c0",
                "size" => "Medium",
                "name" => "Lacey Kihn",
                "image" => "https://placeimg.com/500/500",
                "about" => "1RAmU1bNxNRdzcqHOhCrEYxFhfDfsD32BZCp18WyQGYbx6zLyKQnnCrEGZdkbM"
        ],
        16 => [
                "id" => "f31c4c76-abe8-43ea-8659-9408ccfaf445",
                "size" => "Medium",
                "name" => "Mrs. Natasha Waelchi",
                "image" => "https://placeimg.com/500/500",
                "about" => "mk0hhwvAy6nWS0NQCkPcOXFSWYq1k28udSyfjemDY0OY5hCh3hz7qP1yVcBoCNMmgQgReyO8eHzZaG24P0vx3AyTyFXpDDVnR3s6"
        ],
        17 => [
                "id" => "bbf2cd5a-c1e6-4a4e-9c0c-03ce6e03f693",
                "size" => "Large",
                "name" => "Madison Schowalter",
                "image" => "https://placeimg.com/500/500",
                "about" => "WoerW2H2iL9v7QWnnrdKP6MbDSNiqKijRjXI7LABItcQIyjUfoE8cIaULW8GVypHeavBqz"
        ],
        18 => [
                "id" => "9e7910a5-c835-49e8-9d4a-14858ffc51d3",
                "size" => "Small",
                "name" => "Marquis Labadie",
                "image" => "https://placeimg.com/500/500",
                "about" => "hAv9o5PjNbfgkMkfk1gAbrTaRajLCGTcH3eL7J6ulNgPYqkKqcmYx0qhHujCQj"
        ],
        19 => [
                "id" => "6c5e6565-7029-4ca4-a8ed-c314dd9e171d",
                "size" => "XLarge",
                "name" => "Miss Ressie Ratke",
                "image" => "https://placeimg.com/500/500",
                "about" => "omvRLL3UgzAKACljQnNmzsjZC1EPvpHukODLf8eJOWFd2bCvWVR6dRHJS6KoHh0VPF29"
        ],
        20 => [
                "id" => "c2dd0427-ebae-434a-b87d-4e850b2c9e62",
                "size" => "XLarge",
                "name" => "Miss Princess Towne",
                "image" => "https://placeimg.com/500/500",
                "about" => "vd7rii6cAC4Xv20I4i5dbj9MlXtk6z5TrppVIT3tF7EqIQH1R34vWrrtyMk2sZkVZrfQ0bBk9XJ8I"
        ],
        21 => [
                "id" => "ec33a47c-c8bf-40c4-af1b-96241a464638",
                "size" => "Small",
                "name" => "Joy Orn I",
                "image" => "https://placeimg.com/500/500",
                "about" => "MKdptNZt7Xr7i7CJ5l3e7wqbQdDrN2m0rYeot4IvoqV8jCvZC7VLDBFp65"
        ],
        22 => [
                "id" => "9cd2e955-6fab-4dad-99e2-a248757fa1da",
                "size" => "Medium",
                "name" => "Mr. Demarcus Lowe",
                "image" => "https://placeimg.com/500/500",
                "about" => "KbPGsjjVLZ1I8jZIxbsC1w8PK163aph8GYRji5yGDYYYPYX6Z1jwXI05TFqnHnqtnzhtrUZuk"
        ],
        23 => [
                "id" => "6d2f2e4b-783c-476e-b367-91add8d0b416",
                "size" => "XLarge",
                "name" => "Dr. Paul Littel II",
                "image" => "https://placeimg.com/500/500",
                "about" => "qpVbKyaOE4B5n0BSXgangdjLO4YWMop5m1EaaOggFRa68XDhPQkTK25W"
        ],
        24 => [
                "id" => "a29e6770-8799-4936-9eeb-41ec94012d9b",
                "size" => "Medium",
                "name" => "Meda Goldner",
                "image" => "https://placeimg.com/500/500",
                "about" => "NpYVgVcXQCCQW5POWbbXYHzqNzCfcxIu6IrWJcRclPOQCtmsct6va6npz"
        ],
        25 => [
                "id" => "db403837-7d76-4639-a679-21a2306b9a08",
                "size" => "XLarge",
                "name" => "Loma Kozey",
                "image" => "https://placeimg.com/500/500",
                "about" => "1GqFwZxCgXukeSFgi9Y79GenYTPgFUEsHYIS5UHhfFceVa7LcPVD7BOghqVjWH2cOvTqCAZZN0tjv1s8Wi"
        ],
        26 => [
                "id" => "d38a6abe-01bd-410e-8c08-1b6b032ba8a7",
                "size" => "Medium",
                "name" => "Eladio Schoen DDS",
                "image" => "https://placeimg.com/500/500",
                "about" => "8a0nm6mateJzzoyq51oHEAG2FpjjCEMrcfg0sPhCjakEbmSquqLs0aSDRCwDVh60QfuA7boJ19DpVDwLwYzc1Y"
        ],
        27 => [
                "id" => "e734bb6b-774c-4daf-b8bf-3fc8aea0cebd",
                "size" => "XLarge",
                "name" => "Dr. Kris Feil",
                "image" => "https://placeimg.com/500/500",
                "about" => "lq6lTilxOpUxlYeJqRk5OMwDn2MY9ZQgmKrEXgGAmdURs04n3iEqrq4G5lIVJpuy2LlaDSd5h7CPLgaGTTAdufT"
        ],
        28 => [
                "id" => "b0799871-beac-452a-90ad-14e8b1783ad3",
                "size" => "XLarge",
                "name" => "Prof. Amos Gleason",
                "image" => "https://placeimg.com/500/500",
                "about" => "27y9Q3l9qoH8ss63nhPX6i1VLp9XyyV8F8QO9doUk6dUaj05zXE"
        ],
        29 => [
                "id" => "00d2e16a-fae1-40c0-830d-73e59b812629",
                "size" => "XLarge",
                "name" => "Felix Wiza",
                "image" => "https://placeimg.com/500/500",
                "about" => "NBy69OrhXu6kS8wC3fWUgcbxgiDg8FaaYRv8eVJfsvLl7si3XnYNhWCe0MqCmtXHu0sTev3kNBWGugtjR9VRAYDjVptlrkv9Tg5u"
        ],
        30 => [
                "id" => "4b66e6ab-f12f-4871-bbfc-bb26fdaf1836",
                "size" => "Small",
                "name" => "Dianna Erdman",
                "image" => "https://placeimg.com/500/500",
                "about" => "GSQUbATozI7NsuIHxPkxMxRSz4eViVt2p4kTEgJr8jG8MMHtHOoTN2QxW6fdowI4azAoHIGq7laB5LO2bzazLqApsQSn"
        ],
        31 => [
                "id" => "3271527a-46bb-418e-a642-a40b87531188",
                "size" => "Small",
                "name" => "Prof. Dimitri Corwin",
                "image" => "https://placeimg.com/500/500",
                "about" => "3aGXJnbMPgBdjlHx46tu1rtdHq8MIVsYFHaNk6gZDlhBc10uR2PdkbNOdoAh3EyG7Wm4N9XFYpFEebBuZDwgpSEBoaBVhk0v"
        ],
        32 => [
                "id" => "7943e201-629e-4968-9aa6-07a44aaf1b69",
                "size" => "XLarge",
                "name" => "Bernhard Sawayn",
                "image" => "https://placeimg.com/500/500",
                "about" => "VIkNu3ryIZNfoj2cYRPeabEvBUwXmMZtzN3J3d39WWKkAWsIF241HYn3wJqQH5JveRPY0o8pQgSOlikXCRtzefAtPCarayJuqq"
        ],
        33 => [
                "id" => "b805ff42-a64a-4b68-86f6-b43ad7a95c3e",
                "size" => "XLarge",
                "name" => "Kristofer Kerluke",
                "image" => "https://placeimg.com/500/500",
                "about" => "xNQyQBLXk6koxW5DNzhqYVPZecrZvt8V19reo6m7bdgugjR7IAK6fmB3X"
        ],
        34 => [
                "id" => "9b6697cf-fec4-4080-996e-e33ea1b031c4",
                "size" => "Medium",
                "name" => "Ms. Kimberly Mueller PhD",
                "image" => "https://placeimg.com/500/500",
                "about" => "vsP0KbgmwTjgKdfA7B98iW0KOMM024IaHG5r6AY7fM6iINU557ZqF4mxzjN0iK"
        ],
        35 => [
                "id" => "517fe394-7838-490d-ab80-e91b2fee0e62",
                "size" => "XLarge",
                "name" => "Earlene Heidenreich",
                "image" => "https://placeimg.com/500/500",
                "about" => "fnz2kwDohWKg6O3R26SVtDPUpUXK3lRvqa6cav1V9rrez5Y9moftOv51"
        ],
        36 => [
                "id" => "ce396f9e-a49e-484d-b17b-5d0cd932a005",
                "size" => "Medium",
                "name" => "Alycia Hoppe",
                "image" => "https://placeimg.com/500/500",
                "about" => "Mgta0VhCmRuxeZ8vn64Qj7ueLWRu92MmRiiFJYlJtS8IRRjB2N2doxgNupRIiTdSxPUl4JpQ8wj0VKaC0BJdIAOo1lZPG"
        ],
        37 => [
                "id" => "32cae662-2b67-4908-89ea-858a904cd5a5",
                "size" => "Medium",
                "name" => "Izaiah Tillman",
                "image" => "https://placeimg.com/500/500",
                "about" => "WZDih8UkDh6eM1XUfwUdbmaOj3O1KcIlpDYr4C2W7KJfiWx5SHP"
        ],
        38 => [
                "id" => "23eea923-1ea7-4a60-872f-51d928ab5d03",
                "size" => "Large",
                "name" => "Jacquelyn Labadie",
                "image" => "https://placeimg.com/500/500",
                "about" => "WsCFHYandmbwBPP3HIWfEo4izPOn0WByeDjSweT84dby1hsq1C3rAoIrWqcPmFfGWZ"
        ],
        39 => [
                "id" => "e9f52bb0-5aa6-4859-b2ee-4b03dac8be45",
                "size" => "Medium",
                "name" => "Crystal Pouros",
                "image" => "https://placeimg.com/500/500",
                "about" => "nbxR0AeB5K83xIcgFSezdflkKJxbk5oYajFHRJpJeoZ7S9sGMQGU15DGK1ucch89oPVnAvdtZYGimUR6zHcavTPnPTcQrqJs4F"
        ],
        40 => [
                "id" => "615bcfb3-923c-483b-86bc-2b1187ed18af",
                "size" => "Medium",
                "name" => "Emerson Dickens",
                "image" => "https://placeimg.com/500/500",
                "about" => "7TX91TpHh1A1i4sJJlMbve1LOgL92C2ZoUiwEspwvuR8UpvRvsDxq3A07uUbiJCQj1dnBImDDBNc9TaBF0z8P8ivDlLrLnvP"
        ],
        41 => [
                "id" => "97e24623-a739-45a4-84d9-4d558e257008",
                "size" => "XLarge",
                "name" => "Dr. Al Kuhn I",
                "image" => "https://placeimg.com/500/500",
                "about" => "7381ZF9eSV8YBD8HAqWAQk0kf8IJdFkduoPLrTcLbtDisSZ3ws7LgypOQ1GnxNOWj81BDr76lm6KQGvaEEu3aqNoI5"
        ],
        42 => [
                "id" => "64c48266-13d3-45bb-8ed6-cb11ab89c077",
                "size" => "Medium",
                "name" => "Sydney Anderson Jr.",
                "image" => "https://placeimg.com/500/500",
                "about" => "ygg73fw9x65HnXJz1AxHzmyimL2FYM5WSMVLn9tCzCIGEnur7ANjFQBSLIkJkhpa1WXWPKaEtVnNEwbQpWeDO26OhrxwkSTGQk4"
        ],
        43 => [
                "id" => "b4be80eb-ca48-4754-9777-e0d236ebc477",
                "size" => "Large",
                "name" => "Dannie Nader",
                "image" => "https://placeimg.com/500/500",
                "about" => "95TU4YmaA3IYnkBP5OaBnW7iv8b4noOeWNiIncLaMqxXNiSHaRz4GnqSos5tqnMK0Dp92C5F"
        ],
        44 => [
                "id" => "10db07d1-1e00-433f-94dc-289c92343b27",
                "size" => "Large",
                "name" => "Dr. Guiseppe Stroman Sr.",
                "image" => "https://placeimg.com/500/500",
                "about" => "j4OdXYbKGTqxxnry4sphoBxtoSJb0l9zO5h2tBSqo6emaTZz3mW9wbxH3qXXEyQRcQKmnhtu4ossz5FABZ7JhNE"
        ],
        45 => [
                "id" => "f6ec5622-2841-4b1f-9db1-dfdb221fab62",
                "size" => "XLarge",
                "name" => "Mr. Joaquin Bauch IV",
                "image" => "https://placeimg.com/500/500",
                "about" => "cWVEhtR0W6uGUypTe0m5Gr2AjjMUc9DghHKA4gA72NXWlf7rjkKKar81RC7fAqZ6yaqu1V9P6kvfP1W7VBT3dhpwy"
        ],
        46 => [
                "id" => "f11308ad-1413-4715-9d9b-a922636da46a",
                "size" => "Large",
                "name" => "Kattie Turcotte",
                "image" => "https://placeimg.com/500/500",
                "about" => "hJBREHAelL8mpppiVRPVjXw1FaTO8sDd3XQ5Yf8ZhStesu4KrM1ZaHmipS"
        ],
        47 => [
                "id" => "8dd6b246-5694-4ac7-9e00-fef5c23af2fa",
                "size" => "XLarge",
                "name" => "Gonzalo Hudson",
                "image" => "https://placeimg.com/500/500",
                "about" => "AB3GoX7YzsDqpxtls8DeFPcySCZ7AfldwTwYgXcbxNQrTV3lLWyXurDlmNG1Qwy0WJXdazmvdw"
        ],
        48 => [
                "id" => "607583d7-77d9-4675-978b-2ee760146951",
                "size" => "Small",
                "name" => "Mr. Abraham Lueilwitz",
                "image" => "https://placeimg.com/500/500",
                "about" => "kkxhdXTNYfAHs5kccebIvsP2AcjNCSBMk3Fs6uTh1l5lUCBil1B6M5WPfgiEpzAjOq4IpGbC6COVYsGeDNPVEMRnuPf"
        ],
        49 => [
                "id" => "1d051d0b-532b-4df5-b7a4-3d8d4ea84d4a",
                "size" => "Small",
                "name" => "Kiarra Considine",
                "image" => "https://placeimg.com/500/500",
                "about" => "6UEQgz3sJh5OIPOAg9qie0FS1w1dlXLSiR2inpZmgMQGTFt98pabLRsAMnBI1H5e1lJPvld"
        ],
        50 => [
                "id" => "8bdfa590-5620-4253-bcf7-34a7a200bfc2",
                "size" => "Medium",
                "name" => "Leif Christiansen",
                "image" => "https://placeimg.com/500/500",
                "about" => "T1smJv4ujqMToUI93EFOFCdaujcfSB1yVvpCv2kJDGerkyaas99l5m5SxwT3k3AjaHgd2rNDsOe"
        ],
        51 => [
                "id" => "c8530d05-fde7-46d5-b45a-91567a3567f4",
                "size" => "Medium",
                "name" => "Payton Denesik",
                "image" => "https://placeimg.com/500/500",
                "about" => "eB793dkjn4mgq8vslDI56eOcHpjNj3c7td0vH5OktCeHPpZN8ZnlA7qnLlOwvywZ40"
        ],
        52 => [
                "id" => "b899d64e-8b20-4849-912c-ead9109fa20f",
                "size" => "XLarge",
                "name" => "Floy Little",
                "image" => "https://placeimg.com/500/500",
                "about" => "SBVSAVyqqqauunkrgsLPa3nouIFRKCqHpTmxCik4OG8Ade093twGPxUNwFu3BhZRjBHKAplhfEvvG20w3iM9kf5XaG"
        ],
        53 => [
                "id" => "c34f878c-7aa0-40ec-bfd7-f01077fcd086",
                "size" => "XLarge",
                "name" => "Miss Lucienne Boehm",
                "image" => "https://placeimg.com/500/500",
                "about" => "5IyY2Vn3jN356MgbGTZwIPE9oUnahuZMWMlCqTEcJbjxXZXorbCfeEMv"
        ],
        54 => [
                "id" => "c4f1f82e-a3ac-479d-9952-05830a24ddbc",
                "size" => "Small",
                "name" => "Branson Schamberger Sr.",
                "image" => "https://placeimg.com/500/500",
                "about" => "xk4J3siQ6GUc3bqtiQmjLpmczOGZDToe1nefGB7H777AkMIC6kLdMjrcMo3mDXVNpl4sxMCvIj"
        ],
        55 => [
                "id" => "99975d98-0732-4463-9ade-543bb7ac7f5c",
                "size" => "Large",
                "name" => "Aleen Mitchell",
                "image" => "https://placeimg.com/500/500",
                "about" => "e6SQjIm8d1H2QNenHz1aI9TwsekNUaBiEsiH9A3EfM2YuUwM2NLb9ZQd4hpN9z2tN6nsqgAcF9ibhMbTRE5Ns1I6"
        ],
        56 => [
                "id" => "abfe2b03-bb3e-4fed-8a12-411bf2f6abe6",
                "size" => "Small",
                "name" => "Savanah Koch",
                "image" => "https://placeimg.com/500/500",
                "about" => "BHO8yD1GfXknTOE7j3LZMT9nbmct8opbcZeaP24TYqenzHbyb3N1hFPDVTs8FlHBXurdfIZUCLqIwxbF9suoyJIaCU"
        ],
        57 => [
                "id" => "f395904c-5e4b-46d3-8ae8-1541b0676270",
                "size" => "Large",
                "name" => "Megane Borer Sr.",
                "image" => "https://placeimg.com/500/500",
                "about" => "HeJ4uRJZyyVxBHalHsgrMh6p4K2sxyXb7evPQ7yhjVPomKHuEvCRHW0QwEmeeLCID4FBlNmFMUl9aHG"
        ],
        58 => [
                "id" => "2b6f54e8-1335-4564-afb8-13e17d00188d",
                "size" => "Small",
                "name" => "Miss Susie Funk",
                "image" => "https://placeimg.com/500/500",
                "about" => "ghI9lh2ocXhRPFwekZZTvHsEsMUCZDMfV4codkoQPyq2aRUZFcAO2xSFg9OkAY7Tbc2CNQdQ4Z46xo3NIv"
        ],
        59 => [
                "id" => "a84ef48e-5ca2-4f39-98bd-18565b67ff9b",
                "size" => "Large",
                "name" => "Dr. Ludie Kuvalis",
                "image" => "https://placeimg.com/500/500",
                "about" => "n7AJlFFo6QgnxGxEBvGcwl0tJINiC8HiSRlN1yWBtDOrPmAqvwxZph50MlZn5bKWRMBfrOSy81E"
        ]
];
