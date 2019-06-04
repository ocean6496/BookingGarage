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
		});

		
		$botman->hears('bmw', function (BotMan $bot) {
			$attachment = new Image('https://s.aolcdn.com/dims-global/dims3/GLOB/legacy_thumbnail/640x400/quality/80/https://s.aolcdn.com/commerce/autodata/images/USC80BMC111A021001.jpg', [
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
