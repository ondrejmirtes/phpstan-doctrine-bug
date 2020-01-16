<?php

namespace My;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class MyEntity
{

	/**
	 * @ORM\Id()
	 * @ORM\GeneratedValue()
	 * @ORM\Column(type="integer")
	 *
	 * @var int
	 */
	private $id;

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
        $username = $em->getRepository(MyEntity::class)->findOneByUsername('foo');
        $em->getRepository(MyEntity::class)->findOneByXyz();
    }
}

