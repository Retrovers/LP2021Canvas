<?php

namespace App\Normalizer;

use App\Entity\BookLibrary;
use App\Entity\Library;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface;

class LibraryNormalizer implements ContextAwareNormalizerInterface
{
    private $entityManager;
    /**
     * @var BookNormalizer
     */
    private $bookNormalizer;

    /**
     * LibraryNormalizer constructor.
     * @param $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager, BookNormalizer $bookNormalizer)
    {
        $this->entityManager = $entityManager;
        $this->bookNormalizer = $bookNormalizer;
    }


    public function supportsNormalization($data, string $format = null, array $context = [])
    {
        return $data instanceof Library;
    }

    /**
     * @param Library $object
     *
     * @return array|\ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, string $format = null, array $context = [])
    {
        $data = [
            'id' => $object->getId(),
            'name' => $object->getName(),
        ];
        if(array_key_exists('book', $context)) {
            $data['books'] = $this->fillWithBooks($object);
        }
        return $data;
    }

    /**
     * @param Library $object
     * @return array
     */
    private function fillWithBooks(Library $object): array
    {
        $books = [];
        $booksOfLibrary =
            $this->entityManager->getRepository(BookLibrary::class)->findBy(['library' => $object->getId()]);
        foreach ($booksOfLibrary as $bookOfLibrary) {
            /** @var BookLibrary $bookOfLibrary */
            $books[] = $this->bookNormalizer->normalize($bookOfLibrary->getBook());
        }
        return $books;
    }
}
