<?php
namespace Core;

class Controller 
{
    protected $layout = 'default';
    protected $title = 'document';
    
    protected function render($view, $data) {
            return new Page($this->layout, $this->title, $view, $data);
    }
}
?>