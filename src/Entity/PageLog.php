<?php

namespace BlackStork\Core\Entity;

use Gedmo\Loggable\Entity\MappedSuperclass\AbstractLogEntry;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="page_log")
 * @ORM\Entity(repositoryClass="Gedmo\Loggable\Entity\Repository\LogEntryRepository")
 *
 */
class PageLog extends AbstractLogEntry
{
}