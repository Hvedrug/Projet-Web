<?php
require_once __DIR__ . '/../view/BuildView.php';

class SiteController
{
  private $authenticationService;
  private $siteRepository;

  public function __construct(AuthenticationService $authenticationService, SiteRepository $siteRepository)
  {
    $this->authenticationService = $authenticationService;
    $this->siteRepository = $siteRepository;
  }

  public function viewAction(): string {
    if (!$this->authenticationService->isUserConnected()) {
      $this->redirectToLogin();
    }

    $this->siteRepository->incrementCount();
    return buildCounterView($this->siteRepository->getCount());
  }

  private function redirectToLogin(): void {
    header('Location: /tp_compeur_avec_bdd/src/user/login.php');
  }
}
