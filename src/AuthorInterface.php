<?php

namespace Drupal\mediacorp_author;


use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

interface AuthorInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}