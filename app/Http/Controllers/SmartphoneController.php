<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Recombee\RecommApi\Client;
use Recombee\RecommApi\Requests\AddItem;
use Recombee\RecommApi\Requests\AddItemProperty;
use Recombee\RecommApi\Requests\SetItemValues;

class SmartphoneController extends Controller
{
    public function addSmartphonesDataToRecombee() {
        $client = new Client("universitatea-politehnica-smartphones", 'Sn13D8D3UL5nrNJGRVdL05CcSGIrJmB2qnLPfN7iBmKKqbQnqgjeKh8eWjBbOvrK', ['region' => 'eu-west']);
        $csvData = array_map('str_getcsv', file(public_path('Smartphones.csv')));
        $current_smartphone = $csvData[1][0];
        $counter = 0;
        $index = 0;
        $client->send(new AddItemProperty('brand', 'string'));
        $client->send(new AddItemProperty('model', 'string'));
        $client->send(new AddItemProperty('os', 'string'));
        $client->send(new AddItemProperty('release_date', 'string'));
        $client->send(new AddItemProperty('battery', 'string'));
        $client->send(new AddItemProperty('processor', 'string'));
        $client->send(new AddItemProperty('memory', 'string'));
        $client->send(new AddItemProperty('primary_storage', 'string'));
        $client->send(new AddItemProperty('external_storage', 'string'));
        $client->send(new AddItemProperty('display_size', 'string'));
        $client->send(new AddItemProperty('display_resolution', 'string'));
        $client->send(new AddItemProperty('display_refresh_rate', 'string'));
        $client->send(new AddItemProperty('primary_camera', 'string'));
        $client->send(new AddItemProperty('front_camera', 'string'));

        for($i = 1; $i < 900; $i++){
            $brand = $csvData[$i][0];
            if (!isset($csvData[$i][1]) || $csvData[$i][1] == '' || !$csvData[$i][1]) {
                $model = '';
            } else {
                $model = $csvData[$i][1];
            }
            $os = $csvData[$i][2];
            if (!isset($csvData[$i][3]) || $csvData[$i][3] == '' || !$csvData[$i][3]) {
                $release_date = '';
            } else {
                $release_date = $csvData[$i][3];
            }
            if (!isset($csvData[$i][4]) || $csvData[$i][4] == '' || !$csvData[$i][4]) {
                $battery = '';
            } else {
                $battery = $csvData[$i][4];
            }
            if (!isset($csvData[$i][5]) || $csvData[$i][5] == '' || !$csvData[$i][5]) {
                $processor = '';
            } else {
                $processor = $csvData[$i][5];
            }
            if (!isset($csvData[$i][6]) || $csvData[$i][6] == '' || !$csvData[$i][6]) {
                $memory = '';
            } else {
                $memory = $csvData[$i][6];
            }
            if (!isset($csvData[$i][7]) || $csvData[$i][7] == '' || !$csvData[$i][7]) {
                $primary_storage = '';
            } else {
                $primary_storage = $csvData[$i][7];
            }
            if (!isset($csvData[$i][8]) || $csvData[$i][8] == '' || !$csvData[$i][8]) {
                $external_storage = '';
            } else {
                $external_storage = $csvData[$i][8];
            }
            if (!isset($csvData[$i][9]) || $csvData[$i][9] == '' || !$csvData[$i][9]) {
                $display_size = '';
            } else {
                $display_size = $csvData[$i][9];
            }
            if (!isset($csvData[$i][10]) || $csvData[$i][10] == '' || !$csvData[$i][10]) {
                $display_resolution = '';
            } else {
                $display_resolution = $csvData[$i][10];
            }
            if (!isset($csvData[$i][11]) || $csvData[$i][11] == '' || !$csvData[$i][11]) {
                $display_refresh_rate = '';
            } else {
                $display_refresh_rate = $csvData[$i][11];
            }
            if (!isset($csvData[$i][12]) || $csvData[$i][12] == '' || !$csvData[$i][12]) {
                $primary_camera = '';
            } else {
                $primary_camera = $csvData[$i][12];
            }
            if (!isset($csvData[$i][13]) || $csvData[$i][13] == '' || !$csvData[$i][13]) {
                $front_camera = '';
            } else {
                $front_camera = $csvData[$i][13];
            }

            $index++;
            $client->send(new AddItem($index));
                $client->send(new SetItemValues($index, ['brand' => $brand, 'model' => $model, 'os' => $os, 'release_date' => $release_date,
                    'battery' => $battery, 'processor' => $processor, 'memory' => $memory, 'primary_storage' => $primary_storage, 'external_storage' => $external_storage,
                    'display_size' => $display_size, 'display_resolution' => $display_resolution, 'display_refresh_rate' => $display_refresh_rate,
                    'primary_camera' => $primary_camera, 'front_camera' => $front_camera
                ]));


        }
        for($i = 1; $i < 900; $i++){
            $brand = $csvData[$i][0];
            if (!isset($csvData[$i][1]) || $csvData[$i][1] == '' || !$csvData[$i][1]) {
                $model = '';
            } else {
                $model = $csvData[$i][1];
            }
            $os = $csvData[$i][2];
            if (!isset($csvData[$i][3]) || $csvData[$i][3] == '' || !$csvData[$i][3]) {
                $release_date = '';
            } else {
                $release_date = $csvData[$i][3];
            }
            if (!isset($csvData[$i][4]) || $csvData[$i][4] == '' || !$csvData[$i][4]) {
                $battery = '';
            } else {
                $battery = $csvData[$i][4];
            }
            if (!isset($csvData[$i][5]) || $csvData[$i][5] == '' || !$csvData[$i][5]) {
                $processor = '';
            } else {
                $processor = $csvData[$i][5];
            }
            if (!isset($csvData[$i][6]) || $csvData[$i][6] == '' || !$csvData[$i][6]) {
                $memory = '';
            } else {
                $memory = $csvData[$i][6];
            }
            if (!isset($csvData[$i][7]) || $csvData[$i][7] == '' || !$csvData[$i][7]) {
                $primary_storage = '';
            } else {
                $primary_storage = $csvData[$i][7];
            }
            if (!isset($csvData[$i][8]) || $csvData[$i][8] == '' || !$csvData[$i][8]) {
                $external_storage = '';
            } else {
                $external_storage = $csvData[$i][8];
            }
            if (!isset($csvData[$i][9]) || $csvData[$i][9] == '' || !$csvData[$i][9]) {
                $display_size = '';
            } else {
                $display_size = $csvData[$i][9];
            }
            if (!isset($csvData[$i][10]) || $csvData[$i][10] == '' || !$csvData[$i][10]) {
                $display_resolution = '';
            } else {
                $display_resolution = $csvData[$i][10];
            }
            if (!isset($csvData[$i][11]) || $csvData[$i][11] == '' || !$csvData[$i][11]) {
                $display_refresh_rate = '';
            } else {
                $display_refresh_rate = $csvData[$i][11];
            }
            if (!isset($csvData[$i][12]) || $csvData[$i][12] == '' || !$csvData[$i][12]) {
                $primary_camera = '';
            } else {
                $primary_camera = $csvData[$i][12];
            }
            if (!isset($csvData[$i][13]) || $csvData[$i][13] == '' || !$csvData[$i][13]) {
                $front_camera = '';
            } else {
                $front_camera = $csvData[$i][13];
            }

            $index++;
            $client->send(new AddItem($index));
                $client->send(new SetItemValues($index, ['brand' => $brand, 'model' => $model, 'os' => $os, 'release_date' => $release_date,
                    'battery' => $battery, 'processor' => $processor, 'memory' => $memory, 'primary_storage' => $primary_storage, 'external_storage' => $external_storage,
                    'display_size' => $display_size, 'display_resolution' => $display_resolution, 'display_refresh_rate' => $display_refresh_rate,
                    'primary_camera' => $primary_camera, 'front_camera' => $front_camera
                ]));


        }
        return "Data imported successfully";
    }
}
