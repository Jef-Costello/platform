<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\User;

use Symfony\Component\HttpFoundation\JsonResponse;
use stdClass;
/**
 * Setup controller. generate random user data
 *
 */
class SetupController extends Controller {
	/**
	 * Lists all user entities.
	 *
	 */
	public function indexAction() {
		$em = $this->getDoctrine()->getManager();

		$users = $em->getRepository('AppBundle:User')->findAll();

		return $this->render('setup/index.html.twig', array('users' => $users, ));
	}

	public function createAction() {
	//create 10 random addresses around the city of Utrecht
	
		$faker = \Faker\Factory::create('nl_NL');
		
		for ($i = 0; $i <= 1; $i++) {
			
		
			$lng = number_format((float)(rand(4200000, 5800000) / 1000000), 6, '.', '');
			$lat = number_format((float)(rand(51500000, 52400000) / 1000000), 6, '.', '');
			$string = file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?latlng=" . $lat . "," . $lng . "&sensor=true");
			$json_a = json_decode($string, true);
			
			$user=new User();
			
			$streetadress =($json_a['results'][0]['address_components']['1']['long_name']." ".$json_a['results'][0]['address_components']['0']['long_name']);
			$user->setStreetaddress($streetadress);
			$city =($json_a['results'][0]['address_components']['2']['long_name']);
			$user->setCity($city);
			
			$user->setLng($lng);
		
			$user->setLat($lat);
		   
			$user->setName( $faker->name);
			
			$em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
			
			sleep(1);
		}
		
	
 		return $this->redirectToRoute('setup_index');
		
	}

	/**
	 * return json response.
	 *
	 */
	public function jsonAction(User $user) {

		$em = $this->getDoctrine()->getManager();

		$product = $em->getRepository('AppBundle:User')->findOneBy(array('id' => $user));

		$response = new JsonResponse();
		$response->setData(array('id' => $user->getId(), 'name' => $user->getName()));

		return $response;
	}

}
