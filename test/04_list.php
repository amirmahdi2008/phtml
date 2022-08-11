<?php
include "../phtml.php";
$html = new phtml();
$html->htmldoctype();
$html->html(function(){
    return phtml::group([
        phtml::head(function(){
            return phtml::title(function (){return phtml::text('phtml list samples');});
        }),
        phtml::body(function(){
            return phtml::group([
                phtml::ul(function (){
                    return phtml::group([
                        phtml::li(function (){
                            return phtml::nodetext('welcome to phtml : this is li tag in ul ');
                        })
                    ]);
                }),
                phtml::ol(function(){
                    return phtml::group([
                        phtml::li(function (){
                            return phtml::nodetext('welcome to phtml : this is li tag in ol ');
                        })
                    ]);
                })
            ]);
        })
    ]);
});
$html->render();