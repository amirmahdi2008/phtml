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
            return phtml::group([
                phtml::audio(function (){
                    return phtml::source(['src'=>'media/test.mp3']);
                },['controls'=>'true','loop'=>'loop']),
                phtml::video(function (){
                    return phtml::source(['src'=>'media/test.mp4']);
                },['width'=>'100%','height'=>'100%' , 'controls'=>'true']),
                phtml::img(['src'=>'media/test.png','width'=>'100%','height'=>'100%'])
            ]);
        })
    ]);
});
$html->render();