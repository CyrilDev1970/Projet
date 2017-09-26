<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Roles;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\User;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("test")
     */
    public function testAction()
    {
        //$userAdmin = new User();
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->createUser();

        $repository = $this->getDoctrine()->getRepository(Roles::class);

        // query for a single product by its primary key (usually "id")
        $role = $repository->find(1);

        if (!$role) {
            throw $this->createNotFoundException(
                'Pas de rôle trouvé pour l\'id 1'
            );
        }

        $user->setUsername('System');
        $user->setNom("AIT MEDDOUR");
        $user->setPrenom("Latamen");
        $user->setMail("ait.latamene@live.fr");
        $user->setDateNaissance(new \DateTime("1994-12-17 00:00:00"));
        $user->setEmail('system@example.com');
        $user->setPlainPassword('test');
        $user->setRole($role);
        $user->setEnabled(true);

        die(dump($user));

        $userManager->updateUser($user, true);
        die('la');
    }
}
