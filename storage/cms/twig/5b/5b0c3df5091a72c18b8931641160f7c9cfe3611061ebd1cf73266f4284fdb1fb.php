<?php

/* C:\xampp\htdocs\octoberLite/themes/laratify-octobercms-octaskin/partials/pages-portfolio/header.htm */
class __TwigTemplate_6d4d358dbe37effce625c5a6396009f5a0cf5f45b7ecb96a7ce3daf30eb68d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"lt-row row\">
  <div class=\"lt-col col s12\">
    <div class=\"lt-parallax-header parallax-container\" style=\"height: 400px;\">
      <div class=\"lt-parallax parallax\"><img src=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/portfolio/header/img-01.jpg");
        echo "\" alt=\"image\"></div>
      <div class=\"lt-parallax-content\">
        <div class=\"valign-wrapper\" style=\"height: 400px;\">
          <div class=\"valign\">
            <h2 class=\"lt-title\">Portfolio</h2>
            <p class=\"lt-subtitle flow-text\">Our Work</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberLite/themes/laratify-octobercms-octaskin/partials/pages-portfolio/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"lt-row row\">
  <div class=\"lt-col col s12\">
    <div class=\"lt-parallax-header parallax-container\" style=\"height: 400px;\">
      <div class=\"lt-parallax parallax\"><img src=\"{{ 'assets/img/pages/portfolio/header/img-01.jpg'|theme }}\" alt=\"image\"></div>
      <div class=\"lt-parallax-content\">
        <div class=\"valign-wrapper\" style=\"height: 400px;\">
          <div class=\"valign\">
            <h2 class=\"lt-title\">Portfolio</h2>
            <p class=\"lt-subtitle flow-text\">Our Work</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>", "C:\\xampp\\htdocs\\octoberLite/themes/laratify-octobercms-octaskin/partials/pages-portfolio/header.htm", "");
    }
}
