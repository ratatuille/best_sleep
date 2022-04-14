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

/* navbar.html.twig */
class __TwigTemplate_e7d8c80b7e3ef7322a47a8c2e6ceff1a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 2
        echo "
<!-- Navbar -->
  
<nav class=\"navbar navbar-expand-lg navbar-light\" style=\"background-color:#F9E1EC;\"> 
  <!-- Container wrapper -->
  ";
        // line 8
        echo "  <div class=\"container\">
  ";
        // line 10
        echo "    <!-- Toggle button -->
    <button
      class=\"navbar-toggler\"
      type=\"button\"
      data-mdb-toggle=\"collapse\"
      data-mdb-target=\"#navbarSupportedContent\"
      aria-controls=\"navbarSupportedContent\"
      aria-expanded=\"false\"
      aria-label=\"Toggle navigation\"
    >
      <i class=\"fas fa-bars\"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      
      <!-- Navbar Logo -->
      <a class=\"navbar-brand mt-2 mt-lg-0\" href=\"#\">
        <img class=\"logo\"
          src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/sleepy.png"), "html", null, true);
        echo "\"
          height=\"15\"
          alt=\"best_sleep Logo\"
          loading=\"lazy\"
        />
      </a>
      <!-- Left links -->
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\">Accueil</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Shop</a>
        </li>
          <a class=\"nav-link\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact</a>
          </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements Search  -->
    <div class=\"d-flex align-items-center\">
      <!-- Icon -->
      <a class=\"text-reset me-3\" href=\"#\">
        <i class=\"fa-solid fa-magnifying-glass\"></i>
      </a>

      <!-- Shopping Cart -->
      <i class=\"fa-brands fa-shopify\"></i>
      
      <!-- Profile Picture Connect & Deconect Inscription & Log In -->
      <div class=\"dropdown\">
        <a
          class=\"dropdown-toggle d-flex align-items-center hidden-arrow\"
          href=\"#\"
          id=\"navbarDropdownMenuAvatar\"
          role=\"button\"
          data-mdb-toggle=\"dropdown\"
          aria-expanded=\"false\"
        >
          <img
            src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/dezzy.png"), "html", null, true);
        echo "\"
            class=\"rounded-circle\"
            height=\"30\"
            width=\"30\"
            alt=\"Avatar\"
            loading=\"lazy\"
          />
        </a>
        <ul
          class=\"dropdown-menu dropdown-menu-end\"
          aria-labelledby=\"navbarDropdownMenuAvatar\"
        >
          <li>
            <a class=\"dropdown-item\" href=\"#\">My profile</a>
          </li>
          <li>
            <a class=\"dropdown-item\" href=\"#\">Settings</a>
          </li>
          <li>
            <a class=\"dropdown-item\" href=\"#\">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 70,  94 => 43,  86 => 38,  74 => 29,  53 => 10,  50 => 8,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Ici je mis mon code Navbar du Bootstrap #}

<!-- Navbar -->
  
<nav class=\"navbar navbar-expand-lg navbar-light\" style=\"background-color:#F9E1EC;\"> 
  <!-- Container wrapper -->
  {# Disparetre le Fluid #}
  <div class=\"container\">
  {# <div class=\"container-fluid\"> #}
    <!-- Toggle button -->
    <button
      class=\"navbar-toggler\"
      type=\"button\"
      data-mdb-toggle=\"collapse\"
      data-mdb-target=\"#navbarSupportedContent\"
      aria-controls=\"navbarSupportedContent\"
      aria-expanded=\"false\"
      aria-label=\"Toggle navigation\"
    >
      <i class=\"fas fa-bars\"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      
      <!-- Navbar Logo -->
      <a class=\"navbar-brand mt-2 mt-lg-0\" href=\"#\">
        <img class=\"logo\"
          src=\"{{ asset('asset/img/sleepy.png') }}\"
          height=\"15\"
          alt=\"best_sleep Logo\"
          loading=\"lazy\"
        />
      </a>
      <!-- Left links -->
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{path('app_accueil')}}\">Accueil</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Shop</a>
        </li>
          <a class=\"nav-link\" href=\"{{path('app_contact') }}\">Contact</a>
          </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements Search  -->
    <div class=\"d-flex align-items-center\">
      <!-- Icon -->
      <a class=\"text-reset me-3\" href=\"#\">
        <i class=\"fa-solid fa-magnifying-glass\"></i>
      </a>

      <!-- Shopping Cart -->
      <i class=\"fa-brands fa-shopify\"></i>
      
      <!-- Profile Picture Connect & Deconect Inscription & Log In -->
      <div class=\"dropdown\">
        <a
          class=\"dropdown-toggle d-flex align-items-center hidden-arrow\"
          href=\"#\"
          id=\"navbarDropdownMenuAvatar\"
          role=\"button\"
          data-mdb-toggle=\"dropdown\"
          aria-expanded=\"false\"
        >
          <img
            src=\"{{asset('asset/img/dezzy.png') }}\"
            class=\"rounded-circle\"
            height=\"30\"
            width=\"30\"
            alt=\"Avatar\"
            loading=\"lazy\"
          />
        </a>
        <ul
          class=\"dropdown-menu dropdown-menu-end\"
          aria-labelledby=\"navbarDropdownMenuAvatar\"
        >
          <li>
            <a class=\"dropdown-item\" href=\"#\">My profile</a>
          </li>
          <li>
            <a class=\"dropdown-item\" href=\"#\">Settings</a>
          </li>
          <li>
            <a class=\"dropdown-item\" href=\"#\">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->", "navbar.html.twig", "/Users/dezzy/Desktop/Pro/best_sleep/templates/navbar.html.twig");
    }
}
