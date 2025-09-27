<?php

namespace App\Controller;

use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BooksController extends AbstractController
{
    public function index(BookRepository $repo): Response
    {
        $books = $repo->findBy([], ['publishedAt' => 'DESC']);
        return $this->render('books/index.html.twig', ['books' => $books]);
    }
}
