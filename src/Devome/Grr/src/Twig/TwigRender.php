<?php

namespace Devome\Grr\Twig;

use Twig\Environment;

class TwigRender
{
    public function __construct(private Environment $environment)
    {
    }

    public function twig(): Environment
    {
      return  $this->environment;
    }
}