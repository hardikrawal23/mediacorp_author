<?php

namespace Drupal\mediacorp_author;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Url;

/**
 * Provides a list controller for author entity.
 *
 * @ingroup author
 */
class AuthorListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   *
   * Building the header and content lines for the author list.
   */
  public function buildHeader() {
    $header['id'] = $this->t('ID');
    $header['name'] = $this->t('Name');
    $header['age'] = $this->t('Age');
    $header['api_key'] = $this->t('API Key');
    $header['operations'] = $this->t('Operations');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    $row['id'] = $entity->id();
    $row['name'] = $entity->toLink()->toString();
    $row['age'] = $entity->age->value;
    $row['api_key'] = $entity->api_key->value;
    return $row + parent::buildRow($entity);
  }

}