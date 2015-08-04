<?php

namespace Pizza;

use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;

class Module implements BootstrapListenerInterface
{
    public function onBootstrap(EventInterface $e)
    {
        echo '<div class="container">';
        echo '    <div class="hero-unit">';
        echo '        <h1>Hello Pizza!</h1>';
        echo '    </div>';
        echo '</div>';
    }
}
