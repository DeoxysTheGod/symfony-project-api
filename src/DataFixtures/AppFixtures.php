<?php

namespace App\DataFixtures;

use App\Entity\Language;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $languages = [
            ["code" => "fr", "name" => "France"],
            ["code" => "en", "name" => "English"],
            ["code" => "es", "name" => "España"]
        ];

        foreach ($languages as $data) {
            $language = new Language();
            $language->setCode($data['code']);
            $language->setName($data['name']);
            $language->setFlag("/images/flags/{$data['code']}.png");
            $manager->persist($language);
        }

        $manager->flush();
    }
}
