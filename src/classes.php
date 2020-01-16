<?php

namespace My;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class MyEntity
{
    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $username;
}

class Foo
{
	private function bar()
    {
        /** @var \Doctrine\ORM\EntityManagerInterface */
        $em = '';
        $em->getRepository(MyEntity::class)->findOneByUsername('foo');
        $em->getRepository(MyEntity::class)->findOneByXyz();
    }
}

