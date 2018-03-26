<?php

namespace blog;

/*
 * Copyright 2018 Shadab.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

class app {

    function __construct($controllerActionArray) {
        if (empty($controllerActionArray[0])) {
            $controllerActionArray[0] = "index";
        }
        if (file_exists('controllers/' . $controllerActionArray[0] . 'Controller.php')) {
            require_once('controllers/' . $controllerActionArray[0] . 'Controller.php');
            $this->defineControllerAction($controllerActionArray);
        } else {
            echo '<h1>404 : Not Found!</h1>';
            echo '<a href="/index">Back to Home</a>';
        }
    }

    function defineControllerAction($controllerAction) {
        if (empty($controllerAction[1])) {
            $controllerAction[1] = "index";
        }
        $controller = "index";


        switch ($controllerAction[0]) {
            case "index":
                $controller = new IndexController();
                break;
        }

        $action = method_exists($controller, $controllerAction[1]) ? $controllerAction[1] : 'index';

        $controller->{$action}();
    }

}
