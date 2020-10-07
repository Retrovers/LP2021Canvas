<?php

namespace App\Normalizer;

use App\Model\Book;
use Symfony\Component\Serializer\Exception\CircularReferenceException;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Exception\LogicException;
use Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface;

class BookNormalizer implements ContextAwareNormalizerInterface {

    public function supportsNormalization($data, string $format = null, array $context = [])
    {
        return $data instanceof Book;
    }

    /**
     * @param Book $object
     * @param string|null $format
     * @param array $context
     * @return array|\ArrayObject|bool|float|int|string|void|null
     */
    public function normalize($object, string $format = null, array $context = [])
    {
        return json_encode([
            'id' => $object->getId(),
            'category' => $object->getCategory(),
            'label' => $object->getLabel(),
            'isbn' => $object->getIsbn()
        ]);
    }
}