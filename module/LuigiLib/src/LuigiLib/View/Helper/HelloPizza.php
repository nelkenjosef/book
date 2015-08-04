<?php

namespace LuigiLib\View\Helper;

use Zend\Form\View\Helper\AbstractHelper;

class HelloPizza extends AbstractHelper
{
    public function __invoke()
    {
        return 'Hallo Pizza!!!';
    }
}
