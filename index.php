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

if (isset($_SERVER['REQUEST_URI'])) {
    $path = $_SERVER['REQUEST_URI'];
    $path_split = explode('/', ltrim($path, '/'));
}
//print_r(__DIR__);
//exit;
require_once('app.php');
$app = new app($path_split);
