<?php
interface SiteRepository {
  public function getAllArticles();

  public function decrementArticleQuantity(): void;
}
