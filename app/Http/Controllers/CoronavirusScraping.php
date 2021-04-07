<?php

namespace App\Http\Controllers;

use Goutte;
use Illuminate\Http\Request;

class CoronavirusScraping extends Controller
{
    public function scrap()
    {
        $this->data = array();

        $crawler = Goutte::request('GET', 'https://www.worldometers.info/coronavirus/');
        $crawler->filter('#main_table_countries_today > tbody > tr')->each(function ($node) {
            $record = [];
            $id = $node->filter('td:nth-child(1)')->text();
            if ($id) {
                return;
            }

            $name = $node->filter('td:nth-child(2)')->text();
            array_push($this->data, [$id, $name]);
        });
        return $this->data;
    }
}
