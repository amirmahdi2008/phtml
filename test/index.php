<?php
include "../phtml.php";

$html = new phtml();
$html->htmldoctype();
$html->html(function(){
    return phtml::group([
        phtml::head(function(){
            return phtml::group([
                phtml::title(function (){
                    return phtml::text('phtml index page');
                }),
                phtml::link(['rel'=>'stylesheet','href'=>'https://cdn.tondaar.ir/cdn/bootstrap/5.1.3/css/min.css'])
            ]);
        }),
        phtml::body(function() {
            return phtml::div(function (){
                return phtml::group([
                    phtml::h1(function (){
                        return phtml::nodetext('Tests Of phtml Library');
                    }),
                    phtml::a(function (){
                        return phtml::h3(function (){
                            return phtml::nodetext("Heading Document in phtml ");
                        });
                    },['href'=>'01_heading.php']),
                    phtml::a(function (){
                        return phtml::h3(function (){
                            return phtml::nodetext("Body Document in phtml");
                        });
                    },['href'=>'02_body.php']),
                    phtml::a(function (){
                        return phtml::h3(function (){
                            return phtml::nodetext("Text in phtml");
                        });
                    },['href'=>'03_text.php']),
                    phtml::a(function (){
                        return phtml::h3(function (){
                            return phtml::nodetext("List in phtml");
                        });
                    },['href'=>'04_list.php']),
                    phtml::a(function (){
                        return phtml::h3(function (){
                            return phtml::nodetext("Form in phtml ");
                        });
                    },['href'=>'05_form.php']),
                    phtml::a(function (){
                        return phtml::h3(function (){
                            return phtml::nodetext("Table in phtml ");
                        });
                    },['href'=>'06_table.php']),
                    phtml::a(function (){
                        return phtml::h3(function (){
                            return phtml::nodetext("Media in phtml");
                        });
                    },['href'=>'07_media.php']),
                    phtml::a(function (){
                        return phtml::h3(function (){
                            return phtml::nodetext("iframe in phtml ");
                        });
                    },['href'=>'08_iframe.php']),
                    phtml::a(function (){
                        return phtml::h3(function (){
                            return phtml::nodetext("css and javascripts in phtml ");
                        });
                    },['href'=>'09_stylescripts.php']),
                    phtml::a(function (){
                        return phtml::h3(function (){
                            return phtml::nodetext("All Supported Tags in phtml");
                        });
                    },['href'=>'10_supportedtags.php'])
                ]);
            } , ['class'=>'container']);
        })
    ]);
});
$html->render();
