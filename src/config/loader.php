<?php

function loadModel($modelName){
    require_once(MODEL_PATH . "/{$modelName}.php");

}
function loadView($viewName){
    require_once(VIEW_PATH . "/{$viewName}.php");
}