<?php

namespace Application\Classes;

use \Iterator as Iterator;

class View
    implements Iterator
{

    protected $data = [];

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }

    public function render($template)
    {   foreach ($this->data as $key => $val) {
            $$key = $val;
        }


        ob_start();
        include __DIR__ . '/../views/' . $template;
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }

    public function display($template)
    {
        echo $this->render($template);
    }
    //now
    public function current()
    {
        $data = current($this->data);
        return $data;
    }

    public function next()
    {
        $data = next($this->data);
        return $data;
    }

    public function key()
    {
        $data = key($this->data);
        return $data;
    }

    public function valid()
    {
        $key = key($this->data);
        $data = ($key !== NULL && $key !== FALSE);
        return $data;
    }
    // to begin
    public function rewind()
    {
        reset($this->data);
    }
}