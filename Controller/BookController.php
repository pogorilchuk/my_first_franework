<?php

/**
 * Created by PhpStorm.
 * User: PHP acedemy
 * Date: 07.07.2016
 * Time: 19:10
 */
class BookController extends Controller
{
    public function indexAction(Request $request)
    {
        $bookModel = new BookModel();
        $books = $bookModel->findAll();

        return $this->render('index', array('books' => $books));
    }

    public function showAction(Request $request)
    {
        $id = $request->get('id');

        $bookModel = new BookModel();
        $book = $bookModel->find($id);

        $args = array(
            'book' => $book
        );
        return $this->render('show', $args);
    }
}