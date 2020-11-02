<?php

namespace App\Normalizer;

use App\Entity\Author;
use Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface;

class AuthorNormalizer implements ContextAwareNormalizerInterface
{
    public function supportsNormalization($data, string $format = null, array $context = [])
    {
        return $data instanceof Author;
    }

    /**
     * @param Author $object
     *
     * @return array|\ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, string $format = null, array $context = [])
    {
        return [
            'id' => $object->getId(),
            'firstName' => $object->getFirstName(),
            'lastName' => $object->getLastName(),
            'birthDate' => $object->getBirthDate(),
        ];
    }
}
