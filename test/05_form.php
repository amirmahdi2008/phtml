<?php
include "../phtml.php";
$html = new phtml();
$html->htmldoctype();
$html->html(function(){
    return phtml::group([
        phtml::head(function(){
            return phtml::title(function (){return phtml::text('phtml forms sample');});
        }),
        phtml::body(function(){
            return phtml::group([
                phtml::h1(function(){
                    return phtml::nodetext("phtml test form");
                }),
                phtml::form(function (){
                    return phtml::group([
                        phtml::input(['placeholder'=>'please enter your name' , 'name'=>'person_name']),
                        phtml::input(['placeholder'=>'please enter your family' , 'name'=>'person_family']),
                        phtml::button(function(){
                            return phtml::nodetext('submit form');
                        },['type'=>'submit'])
                    ]);
                },['action'=>'testaction.php', 'mothod'=>'post'])
            ]);
        })
    ]);
});
$html->render();