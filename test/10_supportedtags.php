<?php
include "../phtml.php";
$html = new phtml();
$html->htmldoctype();
$html->html(function(){
    return phtml::group([
        phtml::head(function(){
            return phtml::group([
                phtml::title(function (){
                    return phtml::text('phtml supported tags');
                }),
                phtml::link(['rel'=>'stylesheet' , 'href'=>'https://cdn.tondaar.ir/cdn/bootstrap/5.1.3/css/min.css'])
            ]);
        }),
        phtml::body(function(){
            return phtml::div(function (){
                return phtml::group([
                    phtml::h1(function (){
                        return phtml::nodetext('phtml Supported Tags');
                    }),
                    phtml::ul(function (){
                        return phtml::func(function(){
                            $supported_tags = ['html','head','body','header','footer',
                                'main','div' , 'title' , 'script','p','details',
                                'nav' ,'kbd','label' , 'legend' , 'meter','dialog',
                                'summary','h1','h2','h3','h4','h5','h6','span' , 'video','button',
                                'a','ul','ol','b','em','strong','form','li','table',
                                'tbody','thead','tr','th','td','article','picture',
                                'audio','iframe','blockquote','abbr','address',
                                'bdo','select','option','optgroup','section',
                                'del','cite','embed','fieldset','datalist','figure',
                                'i','ins','mark','noscript','object','pre','progress',
                                'g','s','style' , 'template','textarea','u','tfoot',
                                'caption','meta','track','param','source','img','input',
                                'link','br','hr'];
                            $group = [];
                            foreach ($supported_tags as $tag){
                                array_push($group , "<li>$tag</li>");
                            }
                            return $group;
                        });
                    })
                ]);
            } , ['class'=>'container']);
        })
    ]);
});
$html->render();