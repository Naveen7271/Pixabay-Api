<?php

namespace App\Controllers;

use CodeIgniter\HTTP\CURLRequest;

class Search extends BaseController
{
    public function index()
    {   echo view('common/header');
        $query = $this->request->getGet('query');
        $type = $this->request->getGet('type');
        $results = null;

        if ($query && $type) {
            $apiKey = 'Enter your APi Key'; 
            $url = "https://pixabay.com/api/" . ($type == 'video' ? 'videos/' : '');
            
            $client = \Config\Services::curlrequest();
            $response = $client->request('GET', $url, [
                'query' => [
                    'key' => $apiKey,
                    'q' => $query,
                    'per_page' => 12
                ]
            ]);

            $results = json_decode($response->getBody());
        }

        return view('search', [
            'results' => $results,
            'type' => $type,
            'query' => $query
        ]);
    }
}