<?php

namespace appliedart\addressdata;

use Craft;
use craft\web\Controller;

class AddressDataController extends Controller {
	protected $allowAnonymous = true;

	public function actionStateList() {
		$result = 'Welcome to the DefaultController actionIndex() method';
		return $result;
	}
}
