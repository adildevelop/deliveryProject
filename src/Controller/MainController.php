<?php

namespace App\Controller;

use App\Entity\Delivery;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/delivery', name: 'app_delivery')]
    public function delivery(Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($request->getMethod() == 'POST') {
            $delivery = new Delivery();
            $delivery->setReceiverAddress($request->request->get('receiverAddress'));
            $delivery->setSenderAddress($request->request->get('senderAddress'));
            $delivery->setDeliveryType($request->request->get('deliveryType'));
            $delivery->setReceiverName($request->request->get('receiverName'));
            $delivery->setSenderName($request->request->get('senderName'));
            $delivery->setPhone($request->request->get('phone'));

            $entityManager->persist($delivery);
            $entityManager->flush();

            return $this->redirectToRoute('app_main');
        }

        return $this->render('delivery/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
