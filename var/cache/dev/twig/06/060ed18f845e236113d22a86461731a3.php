<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* footer.html.twig */
class __TwigTemplate_37251e037a63c814e5a262437343f74a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<footer class=\"bg-light text-center text-white\">
  <!-- Grid container -->
  <div class=\"container p-4 pb-0\">
    <!-- Section: Social media -->
    <section class=\"mb-4\">
      <!-- Facebook -->
      <a
        class=\"btn btn-primary btn-floating m-1\"
        style=\"background-color: #3b5998;\"
        href=\"#!\"
        role=\"button\"
        ><i class=\"fab fa-facebook-f\"></i
      ></a>

      <!-- Twitter -->
      <a
        class=\"btn btn-primary btn-floating m-1\"
        style=\"background-color: #55acee;\"
        href=\"#!\"
        role=\"button\"
        ><i class=\"fab fa-twitter\"></i
      ></a>

      <!-- Google -->
      <a
        class=\"btn btn-primary btn-floating m-1\"
        style=\"background-color: #dd4b39;\"
        href=\"#!\"
        role=\"button\"
        ><i class=\"fab fa-google\"></i
      ></a>

      <!-- Instagram -->
      <a
        class=\"btn btn-primary btn-floating m-1\"
        style=\"background-color: #ac2bac;\"
        href=\"#!\"
        role=\"button\"
        ><i class=\"fab fa-instagram\"></i
      ></a>

      <!-- Linkedin -->
      <a
        class=\"btn btn-primary btn-floating m-1\"
        style=\"background-color: #0082ca;\"
        href=\"#!\"
        role=\"button\"
        ><i class=\"fab fa-linkedin-in\"></i
      ></a>
      <!-- Github -->
      <a
        class=\"btn btn-primary btn-floating m-1\"
        style=\"background-color: #333333;\"
        href=\"#!\"
        role=\"button\"
        ><i class=\"fab fa-github\"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
    © 2020 Copyright:
    <a class=\"text-white\" href=\"https://mdbootstrap.com/\">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"bg-light text-center text-white\">
  <!-- Grid container -->
  <div class=\"container p-4 pb-0\">
    <!-- Section: Social media -->
    <section class=\"mb-4\">
      <!-- Facebook -->
      <a
        class=\"btn btn-primary btn-floating m-1\"
        style=\"background-color: #3b5998;\"
        href=\"#!\"
        role=\"button\"
        ><i class=\"fab fa-facebook-f\"></i
      ></a>

      <!-- Twitter -->
      <a
        class=\"btn btn-primary btn-floating m-1\"
        style=\"background-color: #55acee;\"
        href=\"#!\"
        role=\"button\"
        ><i class=\"fab fa-twitter\"></i
      ></a>

      <!-- Google -->
      <a
        class=\"btn btn-primary btn-floating m-1\"
        style=\"background-color: #dd4b39;\"
        href=\"#!\"
        role=\"button\"
        ><i class=\"fab fa-google\"></i
      ></a>

      <!-- Instagram -->
      <a
        class=\"btn btn-primary btn-floating m-1\"
        style=\"background-color: #ac2bac;\"
        href=\"#!\"
        role=\"button\"
        ><i class=\"fab fa-instagram\"></i
      ></a>

      <!-- Linkedin -->
      <a
        class=\"btn btn-primary btn-floating m-1\"
        style=\"background-color: #0082ca;\"
        href=\"#!\"
        role=\"button\"
        ><i class=\"fab fa-linkedin-in\"></i
      ></a>
      <!-- Github -->
      <a
        class=\"btn btn-primary btn-floating m-1\"
        style=\"background-color: #333333;\"
        href=\"#!\"
        role=\"button\"
        ><i class=\"fab fa-github\"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
    © 2020 Copyright:
    <a class=\"text-white\" href=\"https://mdbootstrap.com/\">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>", "footer.html.twig", "/Users/dezzy/Desktop/Pro/best_sleep/templates/footer.html.twig");
    }
}
