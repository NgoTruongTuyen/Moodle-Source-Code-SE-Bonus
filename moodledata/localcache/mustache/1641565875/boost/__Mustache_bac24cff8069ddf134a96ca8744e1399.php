<?php

class __Mustache_bac24cff8069ddf134a96ca8744e1399 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav class="moremenu navigation">
';
        $buffer .= $indent . '    <ul id="moremenu-';
        $value = $this->resolveValue($context->find('moremenuid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-';
        $value = $this->resolveValue($context->find('navbarstyle'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" role="menubar" class="nav more-nav ';
        $value = $this->resolveValue($context->find('navbarstyle'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        // 'nodecollection' section
        $value = $context->find('nodecollection');
        $buffer .= $this->section1d31938f1cb388cf82cc153df7f564a2($context, $indent, $value);
        // 'nodearray' section
        $value = $context->find('nodearray');
        $buffer .= $this->section4213da759f792f3d1f25aa954c90ca3a($context, $indent, $value);
        $buffer .= $indent . '        <li role="none" class="nav-item dropdown dropdownmoremenu d-none" data-region="morebutton">
';
        $buffer .= $indent . '            <a class="dropdown-toggle nav-link ';
        // 'isactive' section
        $value = $context->find('isactive');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '" href="#" id="moremenu-dropdown-';
        $value = $this->resolveValue($context->find('moremenuid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" role="menuitem" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="-1">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section5575f70c07cf53c82349ae8d67eb5e68($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '            <ul class="dropdown-menu dropdown-menu-left" data-region="moredropdown" aria-labelledby="moremenu-dropdown-';
        $value = $this->resolveValue($context->find('moremenuid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" role="menu">
';
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '</nav>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section959b7a1506f4d5c3c0b4e21402dfcca2($context, $indent, $value);

        return $buffer;
    }

    private function section71e0bd77552c30eb67db8ce19bbe2aab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> core/moremenu_children}}
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/moremenu_children')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d31938f1cb388cf82cc153df7f564a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#children}}
                {{> core/moremenu_children}}
            {{/children}}
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->section71e0bd77552c30eb67db8ce19bbe2aab($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4213da759f792f3d1f25aa954c90ca3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> core/moremenu_children}}
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/moremenu_children')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5575f70c07cf53c82349ae8d67eb5e68(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'moremenu, core';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'moremenu, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section959b7a1506f4d5c3c0b4e21402dfcca2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'core/moremenu\'], function(moremenu) {
        moremenu(document.querySelector(\'#moremenu-{{moremenuid}}-{{navbarstyle}}\'));
    });
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'core/moremenu\'], function(moremenu) {
';
                $buffer .= $indent . '        moremenu(document.querySelector(\'#moremenu-';
                $value = $this->resolveValue($context->find('moremenuid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-';
                $value = $this->resolveValue($context->find('navbarstyle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\'));
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
