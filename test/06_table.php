<?php
include "../phtml.php";
$html = new phtml();
$html->htmldoctype();
$html->html(function(){
    return phtml::group([
        phtml::head(function(){
            return phtml::group([
                phtml::title(function (){return phtml::nodetext('phtml phtml sample');}),
                phtml::link(['rel'=>'stylesheet', 'href'=>'https://cdn.tondaar.ir/cdn/bootstrap/5.1.3/css/min.css'])
            ]);
        }),
        phtml::body(function(){
            return phtml::table(function (){
                return phtml::group([
                    phtml::thead(function (){
                        return phtml::tr(function (){
                            return phtml::group([
                                phtml::th(function (){return phtml::nodetext('person name');}),
                                phtml::th(function (){return phtml::nodetext("person family");})
                            ]);
                        });
                    }),
                    phtml::tbody(function (){
                        return phtml::tr(function (){
                                return phtml::group([
                                    phtml::td(function() {return phtml::nodetext('Amirmahdi');}),
                                    phtml::td(function (){return phtml::nodetext("Aboutalebi");})
                            ]);});})]);},['class'=>'table table-hover']);})]);});
$html->render();