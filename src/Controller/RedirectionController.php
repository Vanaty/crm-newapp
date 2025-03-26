<?php
namespace App\Controller;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/")]
class RedirectionController extends BaseController
{
    #[Route('/', name: 'app_redirection')]
    public function home(): Response
    {
        return $this->redirectToRoute('app_dashboard');
    }
}
