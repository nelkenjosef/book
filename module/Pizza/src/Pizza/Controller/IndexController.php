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

    public function nameAction()
    {
        $pizzaName = $this->params()->fromRoute('name');

        return new ViewModel(array(
            'pizzaName' => $pizzaName,
        ));
    }
}
