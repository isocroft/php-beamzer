<?php

/**
 * @copyright Copyright (c) 2018 Oparand Ltd - Synergixe
 *
 * @version v0.1.1
 *
 * @author Ifeora Okechukwu (https://twitter.com/isocroft)
 *
 * @license MIT 
 *
 */

namespace Synergixe\PHPBeamzer\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;


class LaravelNotificationLoadCommand extends Command {


	/**
 	 * @var string
	 */

	protected $signature = 'move:file';


	/**
 	 * @var string
	 */

	protected $description = 'Moving The PHPBeamzer Notification Files';

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */

	public function handle(){

		$this->call('make:listener', ['argument' => 'NotificableEventListener' ,  '--event' => '"Synergixe\PHPBeamzer\Events\NotificableEvent"');

		$file = app_path('Providers/EventServiceProvider.php');

		if(file_exists($file) && is_readable($file)){

			$this->info('Updating Events Service Providers...');

		}
	}

}

?>