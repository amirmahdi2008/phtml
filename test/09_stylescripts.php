<?php
include "../phtml.php";

$html = new phtml();
$html->htmldoctype();
$html->html(function(){
    return phtml::group([
        phtml::head(function(){
            return phtml::group([
                phtml::title(function (){
                    return phtml::text('phtml styles and scripts sample');
                }),
                phtml::link(['href'=>'https://cdn.tondaar.ir/cdn/bootstrap/5.1.3/css/min.css' , 'rel'=>'stylesheet']),
                phtml::script(function (){return phtml::empty();},['src'=>'https://cdn.tondaar.ir/cdn/jquery/min.js']),
                phtml::style(function (){return phtml::nodetext(".sample{background-color:lightgreen}");})
            ]);
        }),
        phtml::body(function(){
            return phtml::group([
                phtml::div(function (){
                    return phtml::p(function(){
                        return phtml::nodetext("hello world");
                    });},['class'=>'sample container','id'=>'sample']),
                phtml::script(function (){
                    return phtml::nodetext("$('#sample').html('welcome to phtml')");})
            ]);
        })
    ]);
});
$html->render();