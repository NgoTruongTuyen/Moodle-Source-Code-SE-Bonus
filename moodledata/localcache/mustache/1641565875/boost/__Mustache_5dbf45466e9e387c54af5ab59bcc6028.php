<?php

class __Mustache_5dbf45466e9e387c54af5ab59bcc6028 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="btn-group">
';
        $buffer .= $indent . '    <!-- Set as a link to appease Goutte behat. -->
';
        $buffer .= $indent . '    <a href="#" class="btn btn-link btn-icon icon-size-3 rounded-circle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionCe65cc59832348d184573af1bbb90aa8($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <i class="fa fa-ellipsis-v text-dark  py-2" aria-hidden="true"></i>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '    <div class="dropdown-menu dropdown-menu-right">
';
        $buffer .= $indent . '        <a class="dropdown-item" href="';
        $value = $this->resolveValue($context->find('newcourseurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section45fa045a20a700836bee54f962d54aae($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '        <a class="dropdown-item" href="';
        $value = $this->resolveValue($context->find('manageurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionAfcc826bc3fc756a6645e32600fb8b3d($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionCe65cc59832348d184573af1bbb90aa8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'coursemanagementoptions, my';
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
                
                $buffer .= 'coursemanagementoptions, my';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section45fa045a20a700836bee54f962d54aae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'newcourse, core';
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
                
                $buffer .= 'newcourse, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAfcc826bc3fc756a6645e32600fb8b3d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'managecourses, core';
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
                
                $buffer .= 'managecourses, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
