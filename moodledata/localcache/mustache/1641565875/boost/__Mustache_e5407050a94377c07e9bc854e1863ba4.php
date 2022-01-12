<?php

class __Mustache_e5407050a94377c07e9bc854e1863ba4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="usermenu">
';
        // 'unauthenticateduser' section
        $value = $context->find('unauthenticateduser');
        $buffer .= $this->section047fa3e98bd36ff72ce4871bc41cc84d($context, $indent, $value);
        // 'unauthenticateduser' inverted section
        $value = $context->find('unauthenticateduser');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="dropdown show">
';
            $buffer .= $indent . '            <a href="#" role="button" id="user-menu-toggle" data-toggle="dropdown" aria-label="';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section4e1672c73dd70427ed6b223d1fa8d13b($context, $indent, $value);
            $buffer .= '"
';
            $buffer .= $indent . '               aria-haspopup="true" aria-controls="user-action-menu" class="btn dropdown-toggle">
';
            $buffer .= $indent . '                <span class="userbutton">
';
            if ($partial = $this->mustache->loadPartial('core/user_menu_metadata')) {
                $buffer .= $partial->renderInternal($context, $indent . '                    ');
            }
            $buffer .= $indent . '                </span>
';
            $buffer .= $indent . '            </a>
';
            $buffer .= $indent . '            <div id="user-action-menu" class="dropdown-menu dropdown-menu-right">
';
            $buffer .= $indent . '                <div id="usermenu-carousel" class="carousel slide" data-touch="false" data-interval="false" data-keyboard="false">
';
            $buffer .= $indent . '                    <div class="carousel-inner">
';
            $buffer .= $indent . '                        <div id="carousel-item-main" class="carousel-item active" role="menu" tabindex="-1" aria-label="';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionC9f8116799aecab2a637bf9b97e3b17a($context, $indent, $value);
            $buffer .= '">
';
            if ($partial = $this->mustache->loadPartial('core/user_action_menu_items')) {
                $buffer .= $partial->renderInternal($context, $indent . '                            ');
            }
            $buffer .= $indent . '                        </div>
';
            // 'submenus' section
            $value = $context->find('submenus');
            $buffer .= $this->sectionD6d9d73696e2dad5973a30eec67996fe($context, $indent, $value);
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section9fabd883c42f661de9048a32b433b843($context, $indent, $value);

        return $buffer;
    }

    private function section372dada88a87ec5a5336cd0b597b76c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loggedinasguest, core ';
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
                
                $buffer .= ' loggedinasguest, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD182cc626edac9168314bb67933bb372(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#str}} loggedinasguest, core {{/str}}
                <div class="divider border-left h-75 align-self-center mx-2"></div>
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
                
                $buffer .= $indent . '                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section372dada88a87ec5a5336cd0b597b76c0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                <div class="divider border-left h-75 align-self-center mx-2"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section709c7103df2192436d0891976f85ca16(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' login, core ';
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
                
                $buffer .= ' login, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFd69bbef7e7b9e9a4517306133eac6d3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{url}}">{{#str}} login, core {{/str}}</a>
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
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section709c7103df2192436d0891976f85ca16($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section047fa3e98bd36ff72ce4871bc41cc84d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="login pl-2">
            {{#guest}}
                {{#str}} loggedinasguest, core {{/str}}
                <div class="divider border-left h-75 align-self-center mx-2"></div>
            {{/guest}}
            {{#url}}
                <a href="{{url}}">{{#str}} login, core {{/str}}</a>
            {{/url}}
        </span>
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
                
                $buffer .= $indent . '        <span class="login pl-2">
';
                // 'guest' section
                $value = $context->find('guest');
                $buffer .= $this->sectionD182cc626edac9168314bb67933bb372($context, $indent, $value);
                // 'url' section
                $value = $context->find('url');
                $buffer .= $this->sectionFd69bbef7e7b9e9a4517306133eac6d3($context, $indent, $value);
                $buffer .= $indent . '        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e1672c73dd70427ed6b223d1fa8d13b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'usermenu';
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
                
                $buffer .= 'usermenu';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC9f8116799aecab2a637bf9b97e3b17a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'user';
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
                
                $buffer .= 'user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f5fb4563075558fe19532db49b843db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'usermenugoback';
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
                
                $buffer .= 'usermenugoback';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1ae1ec3288c57cc16cf11024cfaa8d4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/arrow-left';
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
                
                $buffer .= 'i/arrow-left';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3fb306b309973c917530dde4229e8877(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/arrow-right';
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
                
                $buffer .= 'i/arrow-right';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6d9d73696e2dad5973a30eec67996fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div id="carousel-item-{{id}}" class="carousel-item submenu" tabindex="-1" aria-label="{{title}}">
                                <div class="d-flex flex-column h-100">
                                    <div class="header">
                                        <button type="#" class="btn btn-icon carousel-navigation-link text-decoration-none text-body" data-carousel-target-id="carousel-item-main" aria-label="{{#str}}usermenugoback{{/str}}">
                                            <span class="dir-rtl-hide">{{#pix}}i/arrow-left{{/pix}}</span>
                                            <span class="dir-ltr-hide">{{#pix}}i/arrow-right{{/pix}}</span>
                                        </button>
                                        <span class="pl-2" id="carousel-item-title-{{id}}">{{title}}</span>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="items h-100 overflow-auto" role="menu" aria-labelledby="carousel-item-title-{{id}}">
                                        {{> core/user_action_menu_submenu_items }}
                                    </div>
                                </div>
                            </div>
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
                
                $buffer .= $indent . '                            <div id="carousel-item-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="carousel-item submenu" tabindex="-1" aria-label="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <div class="d-flex flex-column h-100">
';
                $buffer .= $indent . '                                    <div class="header">
';
                $buffer .= $indent . '                                        <button type="#" class="btn btn-icon carousel-navigation-link text-decoration-none text-body" data-carousel-target-id="carousel-item-main" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section9f5fb4563075558fe19532db49b843db($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                            <span class="dir-rtl-hide">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section1ae1ec3288c57cc16cf11024cfaa8d4e($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                            <span class="dir-ltr-hide">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section3fb306b309973c917530dde4229e8877($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                        </button>
';
                $buffer .= $indent . '                                        <span class="pl-2" id="carousel-item-title-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="dropdown-divider"></div>
';
                $buffer .= $indent . '                                    <div class="items h-100 overflow-auto" role="menu" aria-labelledby="carousel-item-title-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                if ($partial = $this->mustache->loadPartial('core/user_action_menu_submenu_items')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                        ');
                }
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9fabd883c42f661de9048a32b433b843(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'core/usermenu\'], function(UserMenu) {
        UserMenu.init();
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
                
                $buffer .= $indent . '    require([\'core/usermenu\'], function(UserMenu) {
';
                $buffer .= $indent . '        UserMenu.init();
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
