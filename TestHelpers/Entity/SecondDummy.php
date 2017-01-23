<?php
namespace VKR\TranslationBundle\TestHelpers\Entity;

use VKR\TranslationBundle\Entity\TranslatableEntityInterface;
use VKR\TranslationBundle\Entity\TranslatableEntityTrait;

class SecondDummy implements TranslatableEntityInterface
{
    use TranslatableEntityTrait;

    public function getId()
    {
        return 0;
    }

    public function getTranslatableFields()
    {
        return [];
    }
}
