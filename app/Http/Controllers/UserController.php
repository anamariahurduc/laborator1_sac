<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Recombee\RecommApi\Client;
use Illuminate\Http\Request;
use Recombee\RecommApi\Requests\AddDetailView;
use Recombee\RecommApi\Requests\AddUser;
use Recombee\RecommApi\Requests\DeleteUser;
use Recombee\RecommApi\Requests\SetUserValues;

class UserController extends Controller
{
    public function addUsersDataToRecombee () {
        $client = new Client("universitatea-politehnica-smartphones", 'Sn13D8D3UL5nrNJGRVdL05CcSGIrJmB2qnLPfN7iBmKKqbQnqgjeKh8eWjBbOvrK', ['region' => 'eu-west']);

        for($i = 1; $i <= 10; $i++){
            $userId = $i;
            $userProperties = [
                'user_id' => $userId,
            ];

            $addUserRequest = new AddUser($userId, $userProperties);

            try {
                $client->send($addUserRequest);
                echo "User with ID $userId has been added to Recombee.<br>";
            } catch (Recombee\RecombeeAPI\Exceptions\ResponseException $e) {
                echo 'Error: ' . $e->getMessage() . '<br>';
            }
        }
    }

    public function addUserViews() {
        $client = new Client("universitatea-politehnica-smartphones", 'Sn13D8D3UL5nrNJGRVdL05CcSGIrJmB2qnLPfN7iBmKKqbQnqgjeKh8eWjBbOvrK', ['region' => 'eu-west']);

        $userId = '2';
        $itemId = '10';

        $addDetailViewRequest = new AddDetailView($userId, '12');

        try {
            $client->send($addDetailViewRequest);
            echo "User $userId viewed item $itemId in Recombee.";
        } catch (Recombee\RecombeeAPI\Exceptions\ResponseException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function deleteUser() {
        $client = new Client("universitatea-politehnica-smartphones", 'Sn13D8D3UL5nrNJGRVdL05CcSGIrJmB2qnLPfN7iBmKKqbQnqgjeKh8eWjBbOvrK', ['region' => 'eu-west']);

        for($i = 1; $i <= 10; $i++){
            $userId = $i;

            $deleteUserRequest = new DeleteUser($userId);

            try {
                $client->send($deleteUserRequest);
                echo "User with ID $userId has been deleted from Recombee.";
            } catch (Recombee\RecombeeAPI\Exceptions\ResponseException $e) {
                echo 'Error: ' . $e->getMessage() . '<br>';
            }
        }
    }

}
