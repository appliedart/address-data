<?php

namespace appliedart\addressdata;

use Craft;
use craft\web\Controller;
use CommerceGuys\Addressing\Subdivision\SubdivisionRepository;

class AddressDataController extends Controller {
	protected $allowAnonymous = true;

	public function actionStateList($countryCode) {
		$subdivisionRepository = new SubdivisionRepository();
		$states = $subdivisionRepository->getList([$countryCode]);
	
		return $this->asJson($states);
	}
}
