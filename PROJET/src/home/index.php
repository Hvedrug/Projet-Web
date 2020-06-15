<?php
require_once '../common/AuthenticationService.php';
require_once '../common/CommonComponents.php';
require_once './model/DatabaseSiteRepository.php';
require_once './controller/SiteController.php';

$AS = new AuthenticationService();
$DSR = new DatabaseSiteRepository();


$SiteController = new SiteController($AS, $DSR);

$article_list = $DSR->getAllArticles();


CommonComponents::render(BuildView($article_list),true);

?>