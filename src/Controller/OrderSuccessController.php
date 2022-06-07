<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Classe\mail;
use App\Entity\Order;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class OrderSuccessController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/commande/merci/{stripeSessionId}', name: 'app_order_validate')]
    public function index(Cart $cart, $stripeSessionId): Response
    {
        $order = $this->entityManager->getRepository(Order::class)->findOneByStripeSessionId($stripeSessionId);

        // if($order || $order->getUser()== $this->getUser()){
        //     return $this->redirectToRoute('app_home');
        // }

       
        if($order->getState() == 0){

            $cart->remove();

            $order->setState(1);
            $this->entityManager->flush();

            $mail = new mail();
            $content = "Bonjour ".$order->getUser()->getFirstname()."Merci pour votre commande <br><br> elle vous sera livrée dans les plus brefs délais";
            $mail->send($order->getUser()->getEmail(), $order->getUser()->getFirstname(), 'Votre commande sur La Boutique Française est bien validée', $content);

        }

        //dd($order);

        return $this->render('order_success/index.html.twig', [
            'order' => $order
        ]);
    }
}
