<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends AbstractController
{
    public function index()
    {
        /** @var Product $product */
        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->find(1);
        return new Response(
            '<html><body>Bienvenido. Hay 1 producto: '. $product->getName().'</body></html>'
        );
    }
}
