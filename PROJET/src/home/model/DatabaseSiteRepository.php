<?php
require_once __DIR__ . '/SiteRepository.php';
require_once __DIR__ . '/../../common/DatabaseClient.php';

class DatabaseSiteRepository implements SiteRepository
{
  private $database;

  public function __construct()
  {
    $this->database = DatabaseClient::getDatabase();
  }

  public function getAllArticles()
  {
    $query = $this->database->prepare('SELECT * FROM article');
    $query->execute();

    return $query->fetchAll(); //PDO::FETCH_OBJ);
  }

  public function decrementArticleQuantity(): void
  {
    /*
    A CODER
    $request = $this->database->prepare('UPDATE counter SET value = :value');
    $request->execute(['value' => $this->getCount() + 1]);
    */
  }
}
