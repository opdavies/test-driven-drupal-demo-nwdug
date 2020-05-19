<?php

namespace Drupal\blog\Repository;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\node\NodeInterface;

class ArticleRepository {

  private $nodeStorage;

  private $entityTypeManager;

  public function __construct(EntityTypeManagerInterface $entityTypeManager) {
    $this->nodeStorage = $entityTypeManager->getStorage('node');
  }

  public function getAll(): array {
    $articles =  $this->nodeStorage->loadByProperties([
      'status' => NodeInterface::PUBLISHED,
      'type' => 'article',
    ]);

    uasort($articles, function (NodeInterface $a, NodeInterface $b): bool {
     return $a->getCreatedTime() < $b->getCreatedTime();
    });

    return $articles;
  }

}
