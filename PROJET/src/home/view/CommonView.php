<?php


class CommonView
{
    public static function render(string $component, $withNavbar = true)
    {
        $head = self::htmlHeadComponent();
        $navbar = $withNavbar ? self::navbar() : '';
        $scripts = self::scripts();

        echo <<<HTML
      <!doctype html>
      <html lang="fr">
      <head>
        $head
      </head>
      
      <body>
      
      $navbar
      
      <main role="main" class="container py-4">
        $component
      </main>
      
      $scripts
      </body>
      </html>
HTML;
    }

    private static function htmlHeadComponent(): string
    {
        return <<<HTML
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      
      <title>Produit</title>
      
      <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
HTML;
    }

    private static function navbar(): string
    {
        return <<<HTML
      <nav class="navbar navbar-expand navbar-dark bg-dark">
	<a class="navbar-brand" href="site.html">eCommerce</a>
	<div class="navbar-nav">
		<a class="nav-item nav-link active" href="site.html">Connexion<span class="sr-only">(current)</span></a>
		<a class="nav-item nav-link disabled" href="site.html">Panier</a>
	</div>
</nav>
HTML;
    }

    private static function scripts(): string
    {
        return <<<HTML
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
              integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
              integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
HTML;
    }
}
