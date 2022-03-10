<?php

namespace Drupal\custom_users\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Drupal\user\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MyProfileController extends ControllerBase {

	public function updateUserWithVacinationStatus(request $request) {
		$html = [];
		$postReq = \Drupal::request()->request->all();
		$nid = !empty($postReq['nid']) 	? $postReq['nid'] 	: '';

		$user = User::load(\Drupal::currentUser()->id());

		$vaccination_status = $user->get('field_vaccination_status')->getValue()[0]['value'];

		if($vaccination_status == 'no'){

			$date = date("d-m-Y");
			$user->set("field_vaccination_status","yes");
			$user->set("field_vaccination_date",$date);
			$user->set("field_vaccination_center_id",$nid);
			$user->save();

			$node = Node::load($nid);
			$slots = $node->get('field_slots')->getValue()[0]['value'];
			$newslot = $slots - 1; 
			$node->set("field_slots",$newslot);
			$node->save();

			$html = ['status' => 1, 'message' => 'Successfully Vaccination registered!!'];
		}else{
			$html = ['status' => 1, 'message' => 'Some issue found!!'];
		}
		return new JsonResponse($html);
	}
}