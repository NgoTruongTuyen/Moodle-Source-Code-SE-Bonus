<?php

class __Mustache_7146fedfb715eb28211a60be4946b823 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="w-100">
';
        $buffer .= $indent . '    ';
        if ($parent = $this->mustache->loadPartial('core/search_input_auto')) {
            $context->pushBlockContext(array(
                'label' => array($this, 'block361b6ccf4d82c11b0525546f507d3845'),
                'placeholder' => array($this, 'block361b6ccf4d82c11b0525546f507d3845'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= '</div>
';

        return $buffer;
    }

    private function section3758675655fa466b507460be07eca5cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            searchevents, block_timeline
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
                
                $buffer .= '
';
                $buffer .= $indent . '            searchevents, block_timeline
';
                $buffer .= $indent . '        ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block361b6ccf4d82c11b0525546f507d3845($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section3758675655fa466b507460be07eca5cb($context, $indent, $value);
    
        return $buffer;
    }
}
