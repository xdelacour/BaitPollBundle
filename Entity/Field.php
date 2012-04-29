<?php

/*
 * This file is part of the BaitPollBundle package.
 *
 * (c) BAIT s.r.o. <http://www.bait.sk/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bait\PollBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Bait\PollBundle\Model\Field as FieldModel;

/**
 * Base Field ORM entity
 *
 * @author Ondrej Slintak <ondrowan@gmail.com>
 *
 * @ORM\MappedSuperclass
 */
abstract class Field extends FieldModel
{
    /**
     * @ORM\Column(name="title", type="string", length=255)
     */
    protected $title;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $createdAt;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    protected $isActive;

    /**
     * @ORM\Column(name="type", type="string")
     */
    protected $type;

    /**
     * @ORM\Column(name="required", type="boolean")
     */
    protected $required;

    /**
     * @ORM\Column(name="validation_constraints", type="array")
     */
    protected $validationConstraints;
}
