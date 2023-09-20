<?php
/**
 * This file is just for testing the envato api
 */

// require_once(dirname(__DIR__) . '/wp-load.php');

// $personalToken = "7r4Zx70kv1i9VcaGnosCz9oxnDN4rdyF";
// $code   = "bcc38c9c-bb23-4440-ad83-7ae842310506";
// $url    = "https://api.envato.com/v3/market/author/sale?code={$code}";
// $response = wp_remote_get($url, array(
//     "headers" => array(
//         "Authorization" => "Bearer {$personalToken}",
//         "User-Agent"    => "Purchase code verification script"
//     )
// ));

// $body = json_decode(wp_remote_retrieve_body($response), true);

// $response = wp_remote_post("https://api.themepure.net/wp-json/wp/v2/purchase/",
//     array(
//         "headers" 			=> array(
//             "Authorization"	=> "Basic ".base64_encode("api:themeweb2023!"),
//         ),
//         "body" 	=> array(
//             "title" 	=> "Collax",
//             "status" 	=> "publish",
//             "purchase_category" => 3,
//             "acf" 		=> array(
//                 "item_id" 		=> 39566223,
//                 "purchase_code" => "93f26d74-0e95-4a3f-804a-aa33c0ae80e7",
//                 "client_name" 	=> "MD. Hamim",
//                 "client_domain" => $_SERVER['HTTP_HOST']
//             )
//         )
//     )
// );

// $response = wp_remote_get(
//     "https://api.themepure.net/wp-json/wp/v2/purchase/?meta_key=purchase_code&meta_value=93f26d74-0e95-4a3f-804a-aa33c0ae80e7&_fields=id"
// );

// $response = wp_remote_request("https://api.themepure.net/wp-json/wp/v2/purchase/24/", array(
//     "headers" => array(
//         "Authorization"	=> "Basic ".base64_encode("api:themeweb2023!"),
//     ),
//     "method" => "DELETE",
// ));


// $response_code = wp_remote_retrieve_response_code($response);

// $body = json_decode(wp_remote_retrieve_body( $response ), true);
// echo "<pre>";
// var_dump($response_code);






