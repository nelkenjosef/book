<?php

namespace Pizza\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $pizzaList = array(
            'Salami',
            'Hawaii',
            'Melone',
            'Chicken',
            'Thunfisch',
            'Speziale',
            'Calzone',
            'Vierjahreszeiten',
            'Spinat',
        );

        return new ViewModel(array(
            'pizzaList' => $pizzaList,
        ));
    }
}
