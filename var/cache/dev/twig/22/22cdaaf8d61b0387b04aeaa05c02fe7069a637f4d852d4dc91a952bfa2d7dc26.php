<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_617bb965bb7c5306e469fd1ca5cd2e15779a55595c288381108f9ef9df52d4dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3df59e73ae3d6eb4e72fc5ced9c9f1480362d8a72e278fb3275492beb0c38b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3df59e73ae3d6eb4e72fc5ced9c9f1480362d8a72e278fb3275492beb0c38b5->enter($__internal_c3df59e73ae3d6eb4e72fc5ced9c9f1480362d8a72e278fb3275492beb0c38b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_48f3e1fdc4a36c17c38b86cf170551914168479d573f6c838e049b84fc99d70a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f3e1fdc4a36c17c38b86cf170551914168479d573f6c838e049b84fc99d70a->enter($__internal_48f3e1fdc4a36c17c38b86cf170551914168479d573f6c838e049b84fc99d70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_c3df59e73ae3d6eb4e72fc5ced9c9f1480362d8a72e278fb3275492beb0c38b5->leave($__internal_c3df59e73ae3d6eb4e72fc5ced9c9f1480362d8a72e278fb3275492beb0c38b5_prof);

        
        $__internal_48f3e1fdc4a36c17c38b86cf170551914168479d573f6c838e049b84fc99d70a->leave($__internal_48f3e1fdc4a36c17c38b86cf170551914168479d573f6c838e049b84fc99d70a_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_18fb31ba81345784a3fabc6cc372990dcf9681d50b4c2e7c07a68b9bcd0cfaac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18fb31ba81345784a3fabc6cc372990dcf9681d50b4c2e7c07a68b9bcd0cfaac->enter($__internal_18fb31ba81345784a3fabc6cc372990dcf9681d50b4c2e7c07a68b9bcd0cfaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_1be9b3aa520d73c3a56a9de88ab6145e994c4e7210f6aebb34b227387a3add61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be9b3aa520d73c3a56a9de88ab6145e994c4e7210f6aebb34b227387a3add61->enter($__internal_1be9b3aa520d73c3a56a9de88ab6145e994c4e7210f6aebb34b227387a3add61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1be9b3aa520d73c3a56a9de88ab6145e994c4e7210f6aebb34b227387a3add61->leave($__internal_1be9b3aa520d73c3a56a9de88ab6145e994c4e7210f6aebb34b227387a3add61_prof);

        
        $__internal_18fb31ba81345784a3fabc6cc372990dcf9681d50b4c2e7c07a68b9bcd0cfaac->leave($__internal_18fb31ba81345784a3fabc6cc372990dcf9681d50b4c2e7c07a68b9bcd0cfaac_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_9f7f632630277f427a5fa68c1ce5cb893b439a5130eb28a9ecd8d6d3ec552067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7f632630277f427a5fa68c1ce5cb893b439a5130eb28a9ecd8d6d3ec552067->enter($__internal_9f7f632630277f427a5fa68c1ce5cb893b439a5130eb28a9ecd8d6d3ec552067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_d24311ab94fcc7b54d740d440ef295e6cb469343076326f85930975ef8cb6e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24311ab94fcc7b54d740d440ef295e6cb469343076326f85930975ef8cb6e5f->enter($__internal_d24311ab94fcc7b54d740d440ef295e6cb469343076326f85930975ef8cb6e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_d24311ab94fcc7b54d740d440ef295e6cb469343076326f85930975ef8cb6e5f->leave($__internal_d24311ab94fcc7b54d740d440ef295e6cb469343076326f85930975ef8cb6e5f_prof);

        
        $__internal_9f7f632630277f427a5fa68c1ce5cb893b439a5130eb28a9ecd8d6d3ec552067->leave($__internal_9f7f632630277f427a5fa68c1ce5cb893b439a5130eb28a9ecd8d6d3ec552067_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_8ac0cbe6877c15697c2f0aa7bc52f342589ef655fad75b792049c5c4fb12614f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac0cbe6877c15697c2f0aa7bc52f342589ef655fad75b792049c5c4fb12614f->enter($__internal_8ac0cbe6877c15697c2f0aa7bc52f342589ef655fad75b792049c5c4fb12614f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_47785068863c60490b6ca614d6a28cfc1105bd1fef6dbfd698cbce7f60d2123c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47785068863c60490b6ca614d6a28cfc1105bd1fef6dbfd698cbce7f60d2123c->enter($__internal_47785068863c60490b6ca614d6a28cfc1105bd1fef6dbfd698cbce7f60d2123c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_47785068863c60490b6ca614d6a28cfc1105bd1fef6dbfd698cbce7f60d2123c->leave($__internal_47785068863c60490b6ca614d6a28cfc1105bd1fef6dbfd698cbce7f60d2123c_prof);

        
        $__internal_8ac0cbe6877c15697c2f0aa7bc52f342589ef655fad75b792049c5c4fb12614f->leave($__internal_8ac0cbe6877c15697c2f0aa7bc52f342589ef655fad75b792049c5c4fb12614f_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_ae52e07246a8018ba904fe66d44212e53d80b7bd3ecee91a6c778e9543a74e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae52e07246a8018ba904fe66d44212e53d80b7bd3ecee91a6c778e9543a74e04->enter($__internal_ae52e07246a8018ba904fe66d44212e53d80b7bd3ecee91a6c778e9543a74e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_98fba6626148cd44885e4eb1a9d2c9bbe84271cfa068c6ed2e7432f638c93bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98fba6626148cd44885e4eb1a9d2c9bbe84271cfa068c6ed2e7432f638c93bc7->enter($__internal_98fba6626148cd44885e4eb1a9d2c9bbe84271cfa068c6ed2e7432f638c93bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_f6088f5c97c98d23efe24e835187ddd352ca05ddda50644bbb98a8adc0930ee5 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_f2b95482efc0961a31163630fecf1a8076c30e31b6225f6e7783ad7829d5c69b = "{{") && ('' === $__internal_f2b95482efc0961a31163630fecf1a8076c30e31b6225f6e7783ad7829d5c69b || 0 === strpos($__internal_f6088f5c97c98d23efe24e835187ddd352ca05ddda50644bbb98a8adc0930ee5, $__internal_f2b95482efc0961a31163630fecf1a8076c30e31b6225f6e7783ad7829d5c69b)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_98fba6626148cd44885e4eb1a9d2c9bbe84271cfa068c6ed2e7432f638c93bc7->leave($__internal_98fba6626148cd44885e4eb1a9d2c9bbe84271cfa068c6ed2e7432f638c93bc7_prof);

        
        $__internal_ae52e07246a8018ba904fe66d44212e53d80b7bd3ecee91a6c778e9543a74e04->leave($__internal_ae52e07246a8018ba904fe66d44212e53d80b7bd3ecee91a6c778e9543a74e04_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_bf4c7b1079b7f366791cd3095874668c6907442cbe045aeac4baa4390252b0d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf4c7b1079b7f366791cd3095874668c6907442cbe045aeac4baa4390252b0d2->enter($__internal_bf4c7b1079b7f366791cd3095874668c6907442cbe045aeac4baa4390252b0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_3e412e7532ff55f067183b31c862dca18cf06e25f21b3959a75efdba33d2e982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e412e7532ff55f067183b31c862dca18cf06e25f21b3959a75efdba33d2e982->enter($__internal_3e412e7532ff55f067183b31c862dca18cf06e25f21b3959a75efdba33d2e982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_3e412e7532ff55f067183b31c862dca18cf06e25f21b3959a75efdba33d2e982->leave($__internal_3e412e7532ff55f067183b31c862dca18cf06e25f21b3959a75efdba33d2e982_prof);

        
        $__internal_bf4c7b1079b7f366791cd3095874668c6907442cbe045aeac4baa4390252b0d2->leave($__internal_bf4c7b1079b7f366791cd3095874668c6907442cbe045aeac4baa4390252b0d2_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_7cd8a5cea0821ab08ba77d4596abfccbac8065ca3733a50fe218fb0793514742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd8a5cea0821ab08ba77d4596abfccbac8065ca3733a50fe218fb0793514742->enter($__internal_7cd8a5cea0821ab08ba77d4596abfccbac8065ca3733a50fe218fb0793514742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_b0c80277d1fde2426a18768eca0d02a5e6defb8ea208caad84d61d5b6a4b447d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c80277d1fde2426a18768eca0d02a5e6defb8ea208caad84d61d5b6a4b447d->enter($__internal_b0c80277d1fde2426a18768eca0d02a5e6defb8ea208caad84d61d5b6a4b447d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_b0c80277d1fde2426a18768eca0d02a5e6defb8ea208caad84d61d5b6a4b447d->leave($__internal_b0c80277d1fde2426a18768eca0d02a5e6defb8ea208caad84d61d5b6a4b447d_prof);

        
        $__internal_7cd8a5cea0821ab08ba77d4596abfccbac8065ca3733a50fe218fb0793514742->leave($__internal_7cd8a5cea0821ab08ba77d4596abfccbac8065ca3733a50fe218fb0793514742_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_95de2602bcff9f1d9a52083e9ac3a80eaa8f67fb98e8827d09a4859ff916ba44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95de2602bcff9f1d9a52083e9ac3a80eaa8f67fb98e8827d09a4859ff916ba44->enter($__internal_95de2602bcff9f1d9a52083e9ac3a80eaa8f67fb98e8827d09a4859ff916ba44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_7bb792e5d2228dde86f8e47fa4ade36bf4b0cbad7ac5c6099b26be1e182b226d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb792e5d2228dde86f8e47fa4ade36bf4b0cbad7ac5c6099b26be1e182b226d->enter($__internal_7bb792e5d2228dde86f8e47fa4ade36bf4b0cbad7ac5c6099b26be1e182b226d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_7bb792e5d2228dde86f8e47fa4ade36bf4b0cbad7ac5c6099b26be1e182b226d->leave($__internal_7bb792e5d2228dde86f8e47fa4ade36bf4b0cbad7ac5c6099b26be1e182b226d_prof);

        
        $__internal_95de2602bcff9f1d9a52083e9ac3a80eaa8f67fb98e8827d09a4859ff916ba44->leave($__internal_95de2602bcff9f1d9a52083e9ac3a80eaa8f67fb98e8827d09a4859ff916ba44_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_1726a009390e5a39b2b9ead90f4eea2de45a543a699969cb2d386d5a2e98f2da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1726a009390e5a39b2b9ead90f4eea2de45a543a699969cb2d386d5a2e98f2da->enter($__internal_1726a009390e5a39b2b9ead90f4eea2de45a543a699969cb2d386d5a2e98f2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_0ca489bdbc9817d758d9b7dd190795e733bd20479aadd00064e4fd605e9c4004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca489bdbc9817d758d9b7dd190795e733bd20479aadd00064e4fd605e9c4004->enter($__internal_0ca489bdbc9817d758d9b7dd190795e733bd20479aadd00064e4fd605e9c4004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_0ca489bdbc9817d758d9b7dd190795e733bd20479aadd00064e4fd605e9c4004->leave($__internal_0ca489bdbc9817d758d9b7dd190795e733bd20479aadd00064e4fd605e9c4004_prof);

        
        $__internal_1726a009390e5a39b2b9ead90f4eea2de45a543a699969cb2d386d5a2e98f2da->leave($__internal_1726a009390e5a39b2b9ead90f4eea2de45a543a699969cb2d386d5a2e98f2da_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_b72d24f654e1ecde1e741ae46f72b14aae33931bf968ce4943fb7002f4ea1428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b72d24f654e1ecde1e741ae46f72b14aae33931bf968ce4943fb7002f4ea1428->enter($__internal_b72d24f654e1ecde1e741ae46f72b14aae33931bf968ce4943fb7002f4ea1428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_84121e05ca57bd98ab44d09e8e232d6937e1926324fc13b258ba5b29274d4436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84121e05ca57bd98ab44d09e8e232d6937e1926324fc13b258ba5b29274d4436->enter($__internal_84121e05ca57bd98ab44d09e8e232d6937e1926324fc13b258ba5b29274d4436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_84121e05ca57bd98ab44d09e8e232d6937e1926324fc13b258ba5b29274d4436->leave($__internal_84121e05ca57bd98ab44d09e8e232d6937e1926324fc13b258ba5b29274d4436_prof);

        
        $__internal_b72d24f654e1ecde1e741ae46f72b14aae33931bf968ce4943fb7002f4ea1428->leave($__internal_b72d24f654e1ecde1e741ae46f72b14aae33931bf968ce4943fb7002f4ea1428_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_a217cf10f7c63d5781e6d33aaf9fed7bcec3dfe93af37bba0daa92c897e015c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a217cf10f7c63d5781e6d33aaf9fed7bcec3dfe93af37bba0daa92c897e015c2->enter($__internal_a217cf10f7c63d5781e6d33aaf9fed7bcec3dfe93af37bba0daa92c897e015c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_bc5e1a9eb8ea0945231811c9080cb741acafd0e91ff52de3917e93520f390cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5e1a9eb8ea0945231811c9080cb741acafd0e91ff52de3917e93520f390cfd->enter($__internal_bc5e1a9eb8ea0945231811c9080cb741acafd0e91ff52de3917e93520f390cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_bc5e1a9eb8ea0945231811c9080cb741acafd0e91ff52de3917e93520f390cfd->leave($__internal_bc5e1a9eb8ea0945231811c9080cb741acafd0e91ff52de3917e93520f390cfd_prof);

        
        $__internal_a217cf10f7c63d5781e6d33aaf9fed7bcec3dfe93af37bba0daa92c897e015c2->leave($__internal_a217cf10f7c63d5781e6d33aaf9fed7bcec3dfe93af37bba0daa92c897e015c2_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_029490c41c1a73f7df942d6f98d43fc29e0db9c3f0dc0d430588f76785484012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_029490c41c1a73f7df942d6f98d43fc29e0db9c3f0dc0d430588f76785484012->enter($__internal_029490c41c1a73f7df942d6f98d43fc29e0db9c3f0dc0d430588f76785484012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_cdea02787b940919ff5fea1fab4e1c457dfc6b133b5dc47cbf488775e866bce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdea02787b940919ff5fea1fab4e1c457dfc6b133b5dc47cbf488775e866bce6->enter($__internal_cdea02787b940919ff5fea1fab4e1c457dfc6b133b5dc47cbf488775e866bce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_cdea02787b940919ff5fea1fab4e1c457dfc6b133b5dc47cbf488775e866bce6->leave($__internal_cdea02787b940919ff5fea1fab4e1c457dfc6b133b5dc47cbf488775e866bce6_prof);

        
        $__internal_029490c41c1a73f7df942d6f98d43fc29e0db9c3f0dc0d430588f76785484012->leave($__internal_029490c41c1a73f7df942d6f98d43fc29e0db9c3f0dc0d430588f76785484012_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_8a32d2fe402ca356964acb996a7ba207dbd5eac335d12c037da3bb8c203d789e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a32d2fe402ca356964acb996a7ba207dbd5eac335d12c037da3bb8c203d789e->enter($__internal_8a32d2fe402ca356964acb996a7ba207dbd5eac335d12c037da3bb8c203d789e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_a6dd3d729fc9a8c06a0a43f6c68a6a8f831016f9b23cff34d8452f0e53d4fa40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6dd3d729fc9a8c06a0a43f6c68a6a8f831016f9b23cff34d8452f0e53d4fa40->enter($__internal_a6dd3d729fc9a8c06a0a43f6c68a6a8f831016f9b23cff34d8452f0e53d4fa40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_a6dd3d729fc9a8c06a0a43f6c68a6a8f831016f9b23cff34d8452f0e53d4fa40->leave($__internal_a6dd3d729fc9a8c06a0a43f6c68a6a8f831016f9b23cff34d8452f0e53d4fa40_prof);

        
        $__internal_8a32d2fe402ca356964acb996a7ba207dbd5eac335d12c037da3bb8c203d789e->leave($__internal_8a32d2fe402ca356964acb996a7ba207dbd5eac335d12c037da3bb8c203d789e_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_831723bf02a4d96ed6143173d38275028776b86a6d6225697bdc6921c842a5e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831723bf02a4d96ed6143173d38275028776b86a6d6225697bdc6921c842a5e9->enter($__internal_831723bf02a4d96ed6143173d38275028776b86a6d6225697bdc6921c842a5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_14ce981df85a431ccac8b9f8d58025f5a30777c243276b669d680b99f01044ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ce981df85a431ccac8b9f8d58025f5a30777c243276b669d680b99f01044ce->enter($__internal_14ce981df85a431ccac8b9f8d58025f5a30777c243276b669d680b99f01044ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_14ce981df85a431ccac8b9f8d58025f5a30777c243276b669d680b99f01044ce->leave($__internal_14ce981df85a431ccac8b9f8d58025f5a30777c243276b669d680b99f01044ce_prof);

        
        $__internal_831723bf02a4d96ed6143173d38275028776b86a6d6225697bdc6921c842a5e9->leave($__internal_831723bf02a4d96ed6143173d38275028776b86a6d6225697bdc6921c842a5e9_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_23bbcbe2ef2a343ddbe5fa35fa218c3f58e5e4f8272ca7d80265905fe17ef011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23bbcbe2ef2a343ddbe5fa35fa218c3f58e5e4f8272ca7d80265905fe17ef011->enter($__internal_23bbcbe2ef2a343ddbe5fa35fa218c3f58e5e4f8272ca7d80265905fe17ef011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d79b2ac7698a5f311a8cbb3dc08458f2aa382c33310b675674dfca40a2318bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79b2ac7698a5f311a8cbb3dc08458f2aa382c33310b675674dfca40a2318bc8->enter($__internal_d79b2ac7698a5f311a8cbb3dc08458f2aa382c33310b675674dfca40a2318bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_d79b2ac7698a5f311a8cbb3dc08458f2aa382c33310b675674dfca40a2318bc8->leave($__internal_d79b2ac7698a5f311a8cbb3dc08458f2aa382c33310b675674dfca40a2318bc8_prof);

        
        $__internal_23bbcbe2ef2a343ddbe5fa35fa218c3f58e5e4f8272ca7d80265905fe17ef011->leave($__internal_23bbcbe2ef2a343ddbe5fa35fa218c3f58e5e4f8272ca7d80265905fe17ef011_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_56321b0128862a46095084a8904c33a7152293d28569e3ae8be9488426c29bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56321b0128862a46095084a8904c33a7152293d28569e3ae8be9488426c29bef->enter($__internal_56321b0128862a46095084a8904c33a7152293d28569e3ae8be9488426c29bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_f13c5ed7f19161d8d5849828901cd98b96d4bd3e4cc5248e1ef7d536ed2dfda4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13c5ed7f19161d8d5849828901cd98b96d4bd3e4cc5248e1ef7d536ed2dfda4->enter($__internal_f13c5ed7f19161d8d5849828901cd98b96d4bd3e4cc5248e1ef7d536ed2dfda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f13c5ed7f19161d8d5849828901cd98b96d4bd3e4cc5248e1ef7d536ed2dfda4->leave($__internal_f13c5ed7f19161d8d5849828901cd98b96d4bd3e4cc5248e1ef7d536ed2dfda4_prof);

        
        $__internal_56321b0128862a46095084a8904c33a7152293d28569e3ae8be9488426c29bef->leave($__internal_56321b0128862a46095084a8904c33a7152293d28569e3ae8be9488426c29bef_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_03596efbb038ef085c535dac742aa177aee40623ece84bd2a0ee448b3b751ac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03596efbb038ef085c535dac742aa177aee40623ece84bd2a0ee448b3b751ac7->enter($__internal_03596efbb038ef085c535dac742aa177aee40623ece84bd2a0ee448b3b751ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_bbc8f2ecfda49783d47d63f3f2d4a8193cf2b7c72679276ad7b99c95a5985221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc8f2ecfda49783d47d63f3f2d4a8193cf2b7c72679276ad7b99c95a5985221->enter($__internal_bbc8f2ecfda49783d47d63f3f2d4a8193cf2b7c72679276ad7b99c95a5985221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_bbc8f2ecfda49783d47d63f3f2d4a8193cf2b7c72679276ad7b99c95a5985221->leave($__internal_bbc8f2ecfda49783d47d63f3f2d4a8193cf2b7c72679276ad7b99c95a5985221_prof);

        
        $__internal_03596efbb038ef085c535dac742aa177aee40623ece84bd2a0ee448b3b751ac7->leave($__internal_03596efbb038ef085c535dac742aa177aee40623ece84bd2a0ee448b3b751ac7_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_84849b0224bbcbf8d9122049405b3e6f907b3ac2646f0ed64ab101e3641abee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84849b0224bbcbf8d9122049405b3e6f907b3ac2646f0ed64ab101e3641abee8->enter($__internal_84849b0224bbcbf8d9122049405b3e6f907b3ac2646f0ed64ab101e3641abee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_1b8476e212c47178432b51a9d022807da46ab578c29dc185f22b948c0b90829f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8476e212c47178432b51a9d022807da46ab578c29dc185f22b948c0b90829f->enter($__internal_1b8476e212c47178432b51a9d022807da46ab578c29dc185f22b948c0b90829f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_1b8476e212c47178432b51a9d022807da46ab578c29dc185f22b948c0b90829f->leave($__internal_1b8476e212c47178432b51a9d022807da46ab578c29dc185f22b948c0b90829f_prof);

        
        $__internal_84849b0224bbcbf8d9122049405b3e6f907b3ac2646f0ed64ab101e3641abee8->leave($__internal_84849b0224bbcbf8d9122049405b3e6f907b3ac2646f0ed64ab101e3641abee8_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_a3fe19f5ba0045d7a768b6f57ec15a6f011cbf327d7335fc69e8d355f2173c88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3fe19f5ba0045d7a768b6f57ec15a6f011cbf327d7335fc69e8d355f2173c88->enter($__internal_a3fe19f5ba0045d7a768b6f57ec15a6f011cbf327d7335fc69e8d355f2173c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_8578188fe11b135cd67a9b1caf3e2d96a3667dd2aa412cfee5a8a2bda41ac188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8578188fe11b135cd67a9b1caf3e2d96a3667dd2aa412cfee5a8a2bda41ac188->enter($__internal_8578188fe11b135cd67a9b1caf3e2d96a3667dd2aa412cfee5a8a2bda41ac188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 209
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_8578188fe11b135cd67a9b1caf3e2d96a3667dd2aa412cfee5a8a2bda41ac188->leave($__internal_8578188fe11b135cd67a9b1caf3e2d96a3667dd2aa412cfee5a8a2bda41ac188_prof);

        
        $__internal_a3fe19f5ba0045d7a768b6f57ec15a6f011cbf327d7335fc69e8d355f2173c88->leave($__internal_a3fe19f5ba0045d7a768b6f57ec15a6f011cbf327d7335fc69e8d355f2173c88_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0da80132b0ce8334962bb682b49d327557c05cd11b56c07678aade8e96fc7f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0da80132b0ce8334962bb682b49d327557c05cd11b56c07678aade8e96fc7f15->enter($__internal_0da80132b0ce8334962bb682b49d327557c05cd11b56c07678aade8e96fc7f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2665ee4678f14ee6ca04e773aca489f51af2be94c989951472bb64c1664848a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2665ee4678f14ee6ca04e773aca489f51af2be94c989951472bb64c1664848a6->enter($__internal_2665ee4678f14ee6ca04e773aca489f51af2be94c989951472bb64c1664848a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_2665ee4678f14ee6ca04e773aca489f51af2be94c989951472bb64c1664848a6->leave($__internal_2665ee4678f14ee6ca04e773aca489f51af2be94c989951472bb64c1664848a6_prof);

        
        $__internal_0da80132b0ce8334962bb682b49d327557c05cd11b56c07678aade8e96fc7f15->leave($__internal_0da80132b0ce8334962bb682b49d327557c05cd11b56c07678aade8e96fc7f15_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a575cc421b282a37de98f3bf20029ac632545a2e19a10b10bf9f64a9f7858d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a575cc421b282a37de98f3bf20029ac632545a2e19a10b10bf9f64a9f7858d50->enter($__internal_a575cc421b282a37de98f3bf20029ac632545a2e19a10b10bf9f64a9f7858d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_a0d8b690567ff9f324f7a128243b66090d059b4407d10a1f43593dc65cb437d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d8b690567ff9f324f7a128243b66090d059b4407d10a1f43593dc65cb437d6->enter($__internal_a0d8b690567ff9f324f7a128243b66090d059b4407d10a1f43593dc65cb437d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_a0d8b690567ff9f324f7a128243b66090d059b4407d10a1f43593dc65cb437d6->leave($__internal_a0d8b690567ff9f324f7a128243b66090d059b4407d10a1f43593dc65cb437d6_prof);

        
        $__internal_a575cc421b282a37de98f3bf20029ac632545a2e19a10b10bf9f64a9f7858d50->leave($__internal_a575cc421b282a37de98f3bf20029ac632545a2e19a10b10bf9f64a9f7858d50_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_a41f75cdc83b9d2513f7c1167b928536e2ef1d29fd23a36f72f64f780252d636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a41f75cdc83b9d2513f7c1167b928536e2ef1d29fd23a36f72f64f780252d636->enter($__internal_a41f75cdc83b9d2513f7c1167b928536e2ef1d29fd23a36f72f64f780252d636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_7b9fdbf761350100e95ddcfdc1857ecb50c6d827c46aaf64ecd3e5ecc812c493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9fdbf761350100e95ddcfdc1857ecb50c6d827c46aaf64ecd3e5ecc812c493->enter($__internal_7b9fdbf761350100e95ddcfdc1857ecb50c6d827c46aaf64ecd3e5ecc812c493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7b9fdbf761350100e95ddcfdc1857ecb50c6d827c46aaf64ecd3e5ecc812c493->leave($__internal_7b9fdbf761350100e95ddcfdc1857ecb50c6d827c46aaf64ecd3e5ecc812c493_prof);

        
        $__internal_a41f75cdc83b9d2513f7c1167b928536e2ef1d29fd23a36f72f64f780252d636->leave($__internal_a41f75cdc83b9d2513f7c1167b928536e2ef1d29fd23a36f72f64f780252d636_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_223e08c9c8264e3472c347a4de25d57bcb37d72d738a270100264f137dee0faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_223e08c9c8264e3472c347a4de25d57bcb37d72d738a270100264f137dee0faa->enter($__internal_223e08c9c8264e3472c347a4de25d57bcb37d72d738a270100264f137dee0faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_1db614fa05e4023a8410be273e0f10571199f08e9077bab1669900e956a56493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db614fa05e4023a8410be273e0f10571199f08e9077bab1669900e956a56493->enter($__internal_1db614fa05e4023a8410be273e0f10571199f08e9077bab1669900e956a56493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1db614fa05e4023a8410be273e0f10571199f08e9077bab1669900e956a56493->leave($__internal_1db614fa05e4023a8410be273e0f10571199f08e9077bab1669900e956a56493_prof);

        
        $__internal_223e08c9c8264e3472c347a4de25d57bcb37d72d738a270100264f137dee0faa->leave($__internal_223e08c9c8264e3472c347a4de25d57bcb37d72d738a270100264f137dee0faa_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_259dad8d52d472fcaa10973653107bb1ca7ec960c4559966810f517c79ed5b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259dad8d52d472fcaa10973653107bb1ca7ec960c4559966810f517c79ed5b4e->enter($__internal_259dad8d52d472fcaa10973653107bb1ca7ec960c4559966810f517c79ed5b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_e3751fb034980081b69b4a27e058caae34b32069d3138c004aa87918959ae1de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3751fb034980081b69b4a27e058caae34b32069d3138c004aa87918959ae1de->enter($__internal_e3751fb034980081b69b4a27e058caae34b32069d3138c004aa87918959ae1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e3751fb034980081b69b4a27e058caae34b32069d3138c004aa87918959ae1de->leave($__internal_e3751fb034980081b69b4a27e058caae34b32069d3138c004aa87918959ae1de_prof);

        
        $__internal_259dad8d52d472fcaa10973653107bb1ca7ec960c4559966810f517c79ed5b4e->leave($__internal_259dad8d52d472fcaa10973653107bb1ca7ec960c4559966810f517c79ed5b4e_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_d96680e3386611026635c88d604df6b7c97767e42052feecec10ea8c7ed2ee3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96680e3386611026635c88d604df6b7c97767e42052feecec10ea8c7ed2ee3d->enter($__internal_d96680e3386611026635c88d604df6b7c97767e42052feecec10ea8c7ed2ee3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_172fda5d3de39def5a49b000a41b5fdedd2f833c6a604a15aebb0670e78cf9db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172fda5d3de39def5a49b000a41b5fdedd2f833c6a604a15aebb0670e78cf9db->enter($__internal_172fda5d3de39def5a49b000a41b5fdedd2f833c6a604a15aebb0670e78cf9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_172fda5d3de39def5a49b000a41b5fdedd2f833c6a604a15aebb0670e78cf9db->leave($__internal_172fda5d3de39def5a49b000a41b5fdedd2f833c6a604a15aebb0670e78cf9db_prof);

        
        $__internal_d96680e3386611026635c88d604df6b7c97767e42052feecec10ea8c7ed2ee3d->leave($__internal_d96680e3386611026635c88d604df6b7c97767e42052feecec10ea8c7ed2ee3d_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5f524fe2c4fded481b767798af2e52963cc270d86a8e1d076fbb76ccb0cb58cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f524fe2c4fded481b767798af2e52963cc270d86a8e1d076fbb76ccb0cb58cd->enter($__internal_5f524fe2c4fded481b767798af2e52963cc270d86a8e1d076fbb76ccb0cb58cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_41032a1694fdc0a04d312e0b43765dd29216263d7c50f05c971ff296d5acace7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41032a1694fdc0a04d312e0b43765dd29216263d7c50f05c971ff296d5acace7->enter($__internal_41032a1694fdc0a04d312e0b43765dd29216263d7c50f05c971ff296d5acace7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_41032a1694fdc0a04d312e0b43765dd29216263d7c50f05c971ff296d5acace7->leave($__internal_41032a1694fdc0a04d312e0b43765dd29216263d7c50f05c971ff296d5acace7_prof);

        
        $__internal_5f524fe2c4fded481b767798af2e52963cc270d86a8e1d076fbb76ccb0cb58cd->leave($__internal_5f524fe2c4fded481b767798af2e52963cc270d86a8e1d076fbb76ccb0cb58cd_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_d938b5088fdb027345228b0753b93fea7acd83792598e5a1427a7a985bc93b3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d938b5088fdb027345228b0753b93fea7acd83792598e5a1427a7a985bc93b3f->enter($__internal_d938b5088fdb027345228b0753b93fea7acd83792598e5a1427a7a985bc93b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_a6dd30fe3271350e756997aee35d7120de2d3e078c8bdd25b33013fd2e0da080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6dd30fe3271350e756997aee35d7120de2d3e078c8bdd25b33013fd2e0da080->enter($__internal_a6dd30fe3271350e756997aee35d7120de2d3e078c8bdd25b33013fd2e0da080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_a6dd30fe3271350e756997aee35d7120de2d3e078c8bdd25b33013fd2e0da080->leave($__internal_a6dd30fe3271350e756997aee35d7120de2d3e078c8bdd25b33013fd2e0da080_prof);

        
        $__internal_d938b5088fdb027345228b0753b93fea7acd83792598e5a1427a7a985bc93b3f->leave($__internal_d938b5088fdb027345228b0753b93fea7acd83792598e5a1427a7a985bc93b3f_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_76192cf848010bf71a2039bbeae765c57c118b17c5c0da20ea1eb77511604ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76192cf848010bf71a2039bbeae765c57c118b17c5c0da20ea1eb77511604ecf->enter($__internal_76192cf848010bf71a2039bbeae765c57c118b17c5c0da20ea1eb77511604ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_7ebd228440aff89f31366cbf05e20698d23c6fbdc7a08f2e790b243afa805e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebd228440aff89f31366cbf05e20698d23c6fbdc7a08f2e790b243afa805e72->enter($__internal_7ebd228440aff89f31366cbf05e20698d23c6fbdc7a08f2e790b243afa805e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_7ebd228440aff89f31366cbf05e20698d23c6fbdc7a08f2e790b243afa805e72->leave($__internal_7ebd228440aff89f31366cbf05e20698d23c6fbdc7a08f2e790b243afa805e72_prof);

        
        $__internal_76192cf848010bf71a2039bbeae765c57c118b17c5c0da20ea1eb77511604ecf->leave($__internal_76192cf848010bf71a2039bbeae765c57c118b17c5c0da20ea1eb77511604ecf_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/html/Symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
