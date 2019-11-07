<?php

namespace appliedart\addressdata;

use Craft;
use craft\base\Plugin;
use yii\base\Event;

class AddressDataPlugin extends Plugin
{
	/** @var array */
	public $controllerMap = [
		'default' => AddressDataController::class,
	];

	public function init()
	{
		parent::init();

		// Custom initialization code goes here...
		Event::on(UrlManager::class, UrlManager::EVENT_REGISTER_SITE_URL_RULES, function (RegisterUrlRulesEvent $event) {
			$event->rules['data/state-list/<countryCode:\w+>'] = 'site-dom-injector/default/state-list';
		});
	}
}
