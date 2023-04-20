<?php

use Phalcon\Mvc\Controller;
use countries\Countries;

class IndexController extends Controller
{
    public function indexAction()
    {
        // redirect to view
    }

    public function gettimeAction()
    {
        $coun = new Countries();
        $selected = $this->request->getPost('selectCountry');
        date_default_timezone_set($coun->arr[$selected]);
        echo "<h1>The time in <code>$selected</code> is <code>" . date("h:i:sa") . "</code></h1>";
    }
}
