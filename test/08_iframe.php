<?php
include "../phtml.php";

$html = new phtml();
$html->htmldoctype();
$html->html(function(){
    return phtml::group([
        phtml::head(function(){
            return phtml::title(function (){
                return phtml::text('phtml media sample');
            });
        }),
        phtml::body(function(){
            return phtml::iframe(function (){
                return phtml::empty();
            },["src"=>"https://example.com","width"=>"100%","height"=>"500px"]);
        })
    ]);
});
$html->render();

