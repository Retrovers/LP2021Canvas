<?php

namespace App\Normalizer;

use App\Entity\Library;
use Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface;

class LibraryNormalizer implements ContextAwareNormalizerInterface
{
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
        return [
            'id' => $object->getId(),
            'name' => $object->getName(),
        ];
    }
}
