<?php

namespace App\Normalizer;

use App\Entity\Book;
use Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface;

class BookNormalizer implements ContextAwareNormalizerInterface
{
    public function supportsNormalization($data, string $format = null, array $context = [])
    {
        return $data instanceof Book;
    }

    /**
     * @param Book $object
     *
     * @return array|\ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, string $format = null, array $context = [])
    {
        $data = [
            'id' => $object->getId(),
            'label' => $object->getLabel(),
            'isbn' => $object->getIsbn(),
            'category' => $object->getCategory()->getId(),
        ];

        $viewCategory = $context['category'] ?? false;

        if ($viewCategory) {
            $data['category'] = [
                'id' => $object->getCategory()->getId(),
                'label' => $object->getCategory()->getLabel(),
            ];
        }

        return $data;
    }
}
