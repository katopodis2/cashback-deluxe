<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 03.04.2020
 * Time: 15:27
 */

namespace App\traits;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;


trait HttpDaisycon
{
    public function post($url, array $headers, array $body)
    {
        $client = new Client(['headers' => $headers]);
        $response = [];

        try {
            $result = $client->post($url, ['json' => $body]);
        } catch (ClientException $e) {
            $response['success'] = false;
            $response['data'] = $e->getMessage();
        }

        $result = json_decode($result->getBody()->getContents(), true);

        $response['success'] = true;
        $response['data'] = $result;

        return $response;
    }

    public function get($url, array $body)
    {
        $username = 'info@cashbackdeluxe.nl';
        $password = '@Achilles10';
        $client = new Client([
            'auth' => [$username,$password],
        ]);
        $response = [];
        try {

            $result = $client->get($url, ['query' => $body]

            );
        } catch (ClientException $e) {
            $response['success'] = false;
            $response['data'] = $e->getMessage();
        }
        $result = json_decode($result->getBody()->getContents(), true);

        $response['success'] = true;
        $response['data'] = $result;
        return $response;

    }

    public function put($url, array $headers, array $body)
    {

        $client = new Client(['headers' => $headers]);
        $response = [];


        try {
            $result = $client->put($url, ['json' => $body]);
        } catch (ClientException $e) {
            $response['success'] = false;
            $response['data'] = $e->getMessage();
        }
        $result = json_decode($result->getBody()->getContents(), true);
        $response['success'] = true;
        $response['data'] = $result;
        return $response;

    }


}