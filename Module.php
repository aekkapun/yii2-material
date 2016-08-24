<?php

namespace culturePnPsu\material;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'culturePnPsu\material\controllers';

    
    
    public function init()
    {
        $this->layout = 'left-menu.php';
        parent::init();

        // custom initialization code goes here
    }
}
