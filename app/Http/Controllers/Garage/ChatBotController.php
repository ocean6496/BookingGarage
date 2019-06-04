<?php

namespace App\Http\Controllers\Garage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Attachments\Location;
use BotMan\BotMan\Messages\Attachments\Video;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;

class ChatBotController extends Controller
{
     public function chatBot()
    {
    	$config = [
		    // Your driver-specific configuration
		    // "telegram" => [
		    //    "token" => "TOKEN"
		    // ]
		];
    	
		DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

   		$botman = BotManFactory::create($config);

  		// Give the bot something to listen for.
		$botman->hears('hi', function (BotMan $bot) {
		    $bot->reply('Hello you.');
		    $bot->reply('You want to find car or garge?');
		});

		$botman->hears('car', function (BotMan $bot) {
		    $bot->reply('What is your car name?');
		});

		$botman->hears('garage', function (BotMan $bot) {
		    $bot->reply('Where does garage you want to find?');
		});

		$botman->hears('da nang', function (BotMan $bot) {
		    $attachment = new Image('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDZ15czK1xNVWmdfmPv1HVBSfXawX3Up9lnom2jYkNiUcmBJC_', [
			    'custom_payload' => true,
			]);

			$attachment1 = new Image('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFgUsnLQgIi3co5_fvpxnaTMciSQu_HWMIA9Z8YBs_nIDD2WAe', [
			    'custom_payload' => true,
			]);
			 $arr = array($attachment, $attachment1);

			$message = OutgoingMessage::create('There are garage')
		            ->withAttachment($attachment);

		    $message1 = OutgoingMessage::create()
		            ->withAttachment($attachment1);

		    $bot->reply($message);
		    $bot->reply($message1);
		});

		$botman->hears('bmw', function (BotMan $bot) {
			$attachment = new Image('https://s.aolcdn.com/dims-global/dims3/GLOB/legacy_thumbnail/640x400/quality/80/https://s.aolcdn.com/commerce/autodata/images/USC80BMC111A021001.jpg', [
			    'custom_payload' => true,
			]);

			$message = OutgoingMessage::create('This is your car')
		            ->withAttachment($attachment);

		    $bot->reply($message);
		});

		$botman->hears('camry', function (BotMan $bot) {
			$attachment = new Image('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMUNv0kMLVqen1dzIuPYG2V-0AtN9dxjoxVlbN3Po0K-tantM5', [
			    'custom_payload' => true,
			]);

			$message = OutgoingMessage::create('This is your car')
		            ->withAttachment($attachment);

		    $bot->reply($message);
		});

		$botman->hears('loca', function(BotMan $bot) {
			// Create attachment
			$attachment = new Location(61.766130, -6.822510);

			// Build message object
			$message = OutgoingMessage::create('This is my text')
			            ->withAttachment($attachment);

			// Reply message object
			            $bot->typesAndWaits(2);
			$bot->reply($message);
		});

		$botman->fallback(function($bot) {
		    $bot->reply('Sorry, I did not understand these commands. Here is a list of commands I understand: ...');
		});
		
		// Start listening
		$botman->listen();
    }
}
