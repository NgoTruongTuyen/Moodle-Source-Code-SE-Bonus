<?php

class __Mustache_086824c139da724b35de607803cdbf84 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'welcomemessage' section
        $value = $context->find('welcomemessage');
        $buffer .= $this->section06790c1c0cece16c4122876a43d1d2bd($context, $indent, $value);

        return $buffer;
    }

    private function section06790c1c0cece16c4122876a43d1d2bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<h2 class="mb-3 mt-3">
    {{.}}
</h2>
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
                
                $buffer .= $indent . '<h2 class="mb-3 mt-3">
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
