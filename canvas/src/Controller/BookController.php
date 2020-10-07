<?php


namespace App\Controller;


use App\Model\Book;
use App\Normalizer\BookNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BookController extends AbstractController
{

    public function postBook(Request $request) {
        $id = $request->get('id');
        $label = $request->get('label');
        $category = $request->get('category');
        $isbn = $request->get('isbn');

        if (empty($id) || empty($label) || empty($category) || empty($isbn)) return new \Exception("Info manquantes");

        $book = new Book($id, $label,$isbn, $category);
        $bookNormalize = new BookNormalizer();

        return new Response($bookNormalize->normalize($book));
    }

    public function getBook() {
        $book = new Book(1, "d", true, "é");
        $bookNormalize = new BookNormalizer();
        return new Response($bookNormalize->normalize($book));
    }

    public function patchBook(Request $request) {
        $initialBook = new Book(1, "Mon livre", true, "Enfant");

        foreach ($request->query->all() as $key => $val) {
            switch ($key) {
                case 'id' :
                    $initialBook->setId($val);
                    break;
                case 'label' :
                    $initialBook->setLabel($val);
                    break;
                case 'category' :
                    $initialBook->setCategory($val);
                    break;
                case 'isbn' :
                    $initialBook->setIsbn($val);
            }
        }
        $bookNormalize = new BookNormalizer();
        return new Response($bookNormalize->normalize($initialBook));

    }
}