<?php
include "../phtml.php";
$html = new phtml();
$html->htmldoctype();
$html->html(function(){
    return phtml::group([
        phtml::head(function(){
            return phtml::title(function (){return phtml::text('phtml text samples');});
        }),
        phtml::body(function(){
            return phtml::group([
                phtml::p(function(){
                    return phtml::nodetext("welcome to phtml : this is p tag");
                }),
                phtml::h1(function (){
                    return phtml::nodetext('welcome to phtml : this is h1 tag . phtml support h tags(1 , ... , 6)');
                }),
                phtml::em(function(){
                    return phtml::nodetext('welcome to phtml : this em tag');
                }),
                phtml::br(),
                phtml::b(function(){
                    return phtml::nodetext("phtml support a , br , hr , em , strong , b , span , code , blockquote and more");
                })
            ]);
        })
    ]);
});
$html->render();