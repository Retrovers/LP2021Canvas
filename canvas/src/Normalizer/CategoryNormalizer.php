<?php

namespace App\Normalizer;

use App\Entity\Category;
use Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface;

class CategoryNormalizer implements ContextAwareNormalizerInterface
{
    public function supportsNormalization($data, string $format = null, array $context = [])
    {
        return $data instanceof Category;
    }

    /**
     * @param Category $object
     *
     * @return array|\ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, string $format = null, array $context = [])
    {
        return [
            'id' => $object->getId(),
            'label' => $object->getLabel(),
        ];
    }
}
