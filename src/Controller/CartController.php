<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class CartController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this -> entityManager = $entityManager;
    }





    #[Route('/mon-panier', name: 'app_cart')]
    public function getFull(Cart $cart): Response
    {
        $cartComplete = [];

        if($cart->get()){
             foreach ($cart->get() as $id => $quantity){
            $cartComplete[]= [
                'product' => $this->entityManager->getRepository(Product::class)->findOneById($id),
                'quantity' => $quantity
            ];
        }
        }

       return $this->render('cart/index.html.twig', [
            'cart' =>$cartComplete
        ]);
    }





    #[Route('/cart/add/{id}', name: 'add_to_cart')]
    public function add(Cart $cart, $id): Response
    {
        $cart->add($id);

        return $this->redirectToRoute('app_cart');
    }


    #[Route('/cart/remove', name: 'remove_my_cart')]
    public function remove(SessionInterface $cart): Response
    {
        $cart->remove("cart");

        return $this->redirectToRoute('app_product');
    }



    #[Route('/cart/delete/{id}', name: 'delete_to_cart')]
    public function delete(SessionInterface $session, $id): Response
    {
        // $cart->remove($id);

        $panier = $session->get('cart', []);
        if(!empty($panier[$id])){
            unset($panier[$id]);
        }

        $session->set('cart', $panier);


        return $this->redirectToRoute('app_cart');

}


#[Route('/cart/decrease/{id}', name: 'decrease_to_cart')]
public function decrease(SessionInterface $session, $id): Response
{
    // $cart->remove($id);
    $panier = $session->get('cart', []);

    if(!empty($panier[$id])){
    if($panier[$id] > 1){
        $panier[$id]--;
    } elseif($panier[$id] == 1) {
        unset($panier[$id]);
    }
        
    }else {
        unset($panier[$id]);
    }
    $session->set('cart', $panier);
    return $this->redirectToRoute('app_cart');
    //
    //

}









// #[Route('/cart/decrease/{id}', name: 'decrease_to_cart')]
// public function decrease(Cart $cart, $id)
// {
//     $cart->decrease($id);
//     return $this->redirectToRoute('app_cart');
// }
   

}




