<?php
include "../phtml.php";

$html = new phtml();
$html->htmldoctype();
$html->html(function(){
    return phtml::head(function(){
        return phtml::group([
            phtml::title(function (){
                return phtml::text('phtml heading sample');
            }),
            phtml::meta([
                'name'=>'description',
                'content'=>'phtml is a library for developing html in php !'
            ]),
            phtml::link([
                'rel'=>'stylesheet',
                'href'=>'https://cdn.tondaar.ir/cdn/bootstrap/5.1.3/css/min.css'
            ])
        ]);
    });
});
