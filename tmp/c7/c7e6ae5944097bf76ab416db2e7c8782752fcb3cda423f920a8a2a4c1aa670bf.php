<?php

/* index.twig */
class __TwigTemplate_f77d7e7f1d293544f2b9181d8ee18ad987b31842cbe106140328e06d0d5247c8 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<title>TODO</title>
</head>
<body>
\t<style>
    table { 
        border-spacing: 0;
        border-collapse: collapse;
    }

    table td, table th {
        border: 1px solid #ccc;
        padding: 5px;
    }
    
    table th {
        background: #eee;
    }
</style>

<h1>Список дел на сегодня</h1>
<div style=\"float: left\">
    <form  method=\"POST\">
    <label for=\"save\">Новая задача:</label>
        <input type=\"text\"  name=\"description\" placeholder=\"Описание задачи\" value=\"\" />
        <input type=\"submit\" name=\"save\" value=\"Добавить\" />
    </form>
</div>
<div style=\"float: left; margin-left: 20px;\">
    <form method=\"POST\">
        <label for=\"sort\">Сортировать по:</label>
        <select name=\"sort_by\">
            <option value=\"date_added\">Дате добавления</option>
            <option value=\"is_done\">Статусу</option>
            <option value=\"description\">Описанию</option>
        </select>
        <input type=\"submit\" name=\"sort\" value=\"Отсортировать\" />
    </form>
</div>
<div style=\"clear: both\"></div>
<br>
<table>
    <tr>
        <th>Описание задачи</th>
        <th>Дата добавления</th>
        <th>Статус</th>
        <th>Автор</th>
        <th></th>
    </tr>
    <tr>
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sql"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 55
            echo "            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "description", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "date_added", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "is_done", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "login", array()), "html", null, true);
            echo "</td>
            <td> 
                <a href=\"edit.php?id=";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "id", array(), "array"), "html", null, true);
            echo "&action=edit\">Изменить</a>
                <a href=\"?id=";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "id", array(), "array"), "html", null, true);
            echo "&action=done\">Выполнить</a>
                <a href=\"?id=";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "id", array(), "array"), "html", null, true);
            echo "&action=delete\">Удалить</a>
            </td>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </tr>
        
    <!-- <?php  show_data(\$task,\$sql)?> -->


</table>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 65,  104 => 62,  100 => 61,  96 => 60,  91 => 58,  87 => 57,  83 => 56,  78 => 55,  74 => 54,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.twig", "C:\\xampp\\htdocs\\5_2\\templates\\index.twig");
    }
}
