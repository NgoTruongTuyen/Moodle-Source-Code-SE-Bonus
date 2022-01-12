<?php

class __Mustache_86fd1381fab282803252b540f1d4431a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'haschildren' section
        $value = $context->find('haschildren');
        $buffer .= $this->sectionC516844057352da7d04ae568de0a695e($context, $indent, $value);
        // 'haschildren' inverted section
        $value = $context->find('haschildren');
        if (empty($value)) {
            
            $buffer .= $indent . '    <li class="nav-item" role="none" data-forceintomoremenu="';
            // 'forceintomoremenu' section
            $value = $context->find('forceintomoremenu');
            $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
            // 'forceintomoremenu' inverted section
            $value = $context->find('forceintomoremenu');
            if (empty($value)) {
                
                $buffer .= 'false';
            }
            $buffer .= '">
';
            // 'tab' section
            $value = $context->find('tab');
            $buffer .= $this->section7abead6bab8c348095005d978e420bc9($context, $indent, $value);
            // 'tab' inverted section
            $value = $context->find('tab');
            if (empty($value)) {
                
                $buffer .= $indent . '            <a role="menuitem" class="nav-link ';
                // 'isactive' section
                $value = $context->find('isactive');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= ' ';
                // 'classes' section
                $value = $context->find('classes');
                $buffer .= $this->section5e96ec75439305fc88c78e77946e47bb($context, $indent, $value);
                $buffer .= '" ';
                // 'actionattributes' section
                $value = $context->find('actionattributes');
                $buffer .= $this->section801bcd19aebdc5786ad20c4358b88203($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= $value;
                $buffer .= '" ';
                // 'isactive' section
                $value = $context->find('isactive');
                $buffer .= $this->sectionFc0c0b051caebb6243b5c2bd6d728967($context, $indent, $value);
                $buffer .= ' tabindex="-1">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
            }
            $buffer .= $indent . '    </li>
';
        }

        return $buffer;
    }

    private function section03a2cb78adf693fb240638cbbc7ea15e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'true';
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
                
                $buffer .= 'true';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8754538c7bd3704980215db1258c2074(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="dropdown-divider"></div>
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
                
                $buffer .= $indent . '                    <div class="dropdown-divider"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1fafdb8a5211e77d123fdd2cb2cc862c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{^divider}}
                    <a class="dropdown-item" role="menuitem" href="{{{url}}}">{{{text}}}</a>
                {{/divider}}
                {{#divider}}
                    <div class="dropdown-divider"></div>
                {{/divider}}
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
                
                // 'divider' inverted section
                $value = $context->find('divider');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <a class="dropdown-item" role="menuitem" href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= $value;
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '</a>
';
                }
                // 'divider' section
                $value = $context->find('divider');
                $buffer .= $this->section8754538c7bd3704980215db1258c2074($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC516844057352da7d04ae568de0a695e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <li class="dropdown nav-item" role="none" data-forceintomoremenu="{{#forceintomoremenu}}true{{/forceintomoremenu}}{{^forceintomoremenu}}false{{/forceintomoremenu}}">
        <a class="dropdown-toggle nav-link" id="drop-down-{{moremenuid}}" role="menuitem" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-{{moremenuid}}" tabindex="-1">
            {{{text}}}
        </a>
        <div class="dropdown-menu" role="menu" id="drop-down-menu-{{moremenuid}}" aria-labelledby="drop-down-{{moremenuid}}">
            {{#children}}
                {{^divider}}
                    <a class="dropdown-item" role="menuitem" href="{{{url}}}">{{{text}}}</a>
                {{/divider}}
                {{#divider}}
                    <div class="dropdown-divider"></div>
                {{/divider}}
            {{/children}}
        </div>
    </li>
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
                
                $buffer .= $indent . '    <li class="dropdown nav-item" role="none" data-forceintomoremenu="';
                // 'forceintomoremenu' section
                $value = $context->find('forceintomoremenu');
                $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
                // 'forceintomoremenu' inverted section
                $value = $context->find('forceintomoremenu');
                if (empty($value)) {
                    
                    $buffer .= 'false';
                }
                $buffer .= '">
';
                $buffer .= $indent . '        <a class="dropdown-toggle nav-link" id="drop-down-';
                $value = $this->resolveValue($context->find('moremenuid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" role="menuitem" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-';
                $value = $this->resolveValue($context->find('moremenuid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" tabindex="-1">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '        <div class="dropdown-menu" role="menu" id="drop-down-menu-';
                $value = $this->resolveValue($context->find('moremenuid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" aria-labelledby="drop-down-';
                $value = $this->resolveValue($context->find('moremenuid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->section1fafdb8a5211e77d123fdd2cb2cc862c($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </li>
';
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

    private function section5e96ec75439305fc88c78e77946e47bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}} ';
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
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section801bcd19aebdc5786ad20c4358b88203(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{name}}="{{value}}"';
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
                
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7abead6bab8c348095005d978e420bc9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a role="menuitem" class="nav-link {{#isactive}}active{{/isactive}} {{#classes}}{{.}} {{/classes}}" {{#actionattributes}}{{name}}="{{value}}"{{/actionattributes}} href="{{tab}}" data-toggle="tab" data-text="{{{text}}}" aria-current="false" tabindex="-1">
                {{{text}}}
            </a>
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
                
                $buffer .= $indent . '            <a role="menuitem" class="nav-link ';
                // 'isactive' section
                $value = $context->find('isactive');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= ' ';
                // 'classes' section
                $value = $context->find('classes');
                $buffer .= $this->section5e96ec75439305fc88c78e77946e47bb($context, $indent, $value);
                $buffer .= '" ';
                // 'actionattributes' section
                $value = $context->find('actionattributes');
                $buffer .= $this->section801bcd19aebdc5786ad20c4358b88203($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('tab'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-toggle="tab" data-text="';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '" aria-current="false" tabindex="-1">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc0c0b051caebb6243b5c2bd6d728967(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-current="true"';
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
                
                $buffer .= 'aria-current="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
