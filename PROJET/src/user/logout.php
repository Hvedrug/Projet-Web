<?php
require_once '../common/AuthenticationService.php';

$authenticationService = new AuthenticationService();
$authenticationService->logoutUser();
header('Location: /tp_compeur_avec_bdd/src/user/login.php');
