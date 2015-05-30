<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use JMS\Serializer\SerializerBuilder;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

	/**
	 * @Rest\Get(path="/api/submenu")
	 * @Rest\View()
	 */
	public function fetchSubMenus()
	{
		$submenus = array();
		$em = $this->getDoctrine();


		$menu = $em->getRepository('AppBundle:Menus')->findBy(array(
			'name' => $_GET["menu"],
		));


		foreach($menu as $m){
			$submenu=$em->getRepository('AppBundle:Submenus')->findByMenu($m->getId());
			foreach($submenu as $sb){
				$submenus[$sb->getId()] = array(
					"id" => $sb->getId(),
					"name" => $sb->getName(),
				);
			}
		}
		return new JsonResponse($submenus);
	}

}
