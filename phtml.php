<?php
/*
 * phtml library : make html codes in php and render it !
 * github : github.com/amirmahdi2008/phtml
 * licence : GNU GPL V3 Licence
 * copyright : all rights reserved for explorer project authors
 */

class phtml_render{
    public static function render_attributes($attributes=[]){
        $str ="";
        if (gettype($attributes)=="array"){
            if (count($attributes)>0){
                foreach ($attributes as $attribute_key=>$attribute_value){
                    $str.=" $attribute_key='$attribute_value'";
                }
            }
        }
        return $str;
    }
    public static function render_tag($tag_name , $attributes , $content =null, $openclose=true){
        $str_content = "";
        if ($content!=null){
            if (gettype($content)=="string"){
                $str_content.=$content;
            }
            elseif (gettype($content)=="array"){
                foreach ($content as $item){
                    $str_content.=$item;
                }
            }
        }
        $attributes = phtml_render::render_attributes($attributes);
        $tag = "<$tag_name $attributes>";
        if($openclose==true){
            $tag.=$str_content." </$tag_name>";
        }

        return $tag;
    }
}
class phtml{
    protected $document = [];
    protected function add_element($element){
        array_push($this->document , $element);
    }
    public static function validate($type , $data){
        if (gettype($data) != $type){
            throw new Exception('EXPLORER Type Error');
        }
    }
    public static function func($code){
        $group = $code();
        return phtml::group($group);
    }
    public static function group($elements){
        return $elements;
    }
    public static function empty(){
        return null;
    }
    public static function text($text){
        return [$text];
    }
    public static function nodetext($text){
        return $text;
    }

    public function htmldoctype(){
        $this->add_element("<!doctype html>");
    }
    public function html($childs, $attributes=['lang'=>'en']){
        $this->add_element(phtml_render::render_tag("html" , $attributes , $childs()));
    }
    public static function head($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("head" , $attributes , $childs());
    }
    public static function body($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("body" , $attributes , $childs());
    }
    public static function header($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("header" , $attributes , $childs());
    }
    public static function footer($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("footer" , $attributes , $childs());
    }
    public static function main($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("main" , $attributes , $childs());
    }
    public static function div($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("div" , $attributes , $childs());
    }
    public static function title($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("title" , $attributes ,$childs());
    }
    public static function script($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("script" , $attributes , $childs());
    }
    public static function p($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("p" , $attributes , $childs());
    }
    public static function details($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("details" , $attributes , $childs());
    }
    public static function nav($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("nav" , $attributes , $childs());
    }
    public static function kbd($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("nav" , $attributes , $childs());
    }
    public static function label($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("label" , $attributes , $childs());
    }
    public static function legend($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("legend" , $attributes , $childs());
    }
    public static function meter($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("meter" , $attributes , $childs());
    }
    public static function menu($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("menu" , $attributes , $childs());
    }
    public static function dialog($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("dialog" , $attributes , $childs());
    }
    public static function summary($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("summary" , $attributes , $childs());
    }
    public static function h1($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("h1" , $attributes , $childs());
    }
    public static function h2($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("h2" , $attributes , $childs());
    }
    public static function h3($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("h3" , $attributes , $childs());
    }
    public static function h4($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("h4" , $attributes , $childs());
    }
    public static function h5($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("h5" , $attributes , $childs());
    }
    public static function h6($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("h6" , $attributes , $childs());
    }
    public static function span($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("span" , $attributes , $childs());
    }
    public static function video($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("video" , $attributes , $childs());
    }
    public static function button($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("button" , $attributes , $childs());
    }
    public static function a($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("a" , $attributes , $childs());
    }
    public static function ul($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("ul" , $attributes , $childs());
    }
    public static function ol($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("ol" , $attributes , $childs());
    }
    public static function b($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("b" , $attributes , $childs());
    }
    public static function em($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("em" , $attributes , $childs());
    }
    public static function strong($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("strong" , $attributes , $childs());
    }
    public static function form($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("form" , $attributes , $childs());
    }
    public static function li($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("li" , $attributes , $childs());
    }
    public static function table($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("table" , $attributes , $childs());
    }
    public static function tbody($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("tbody" , $attributes , $childs());
    }
    public static function thead($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("thead" , $attributes , $childs());
    }
    public static function tr($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("tr" , $attributes , $childs());
    }
    public static function th($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("th" , $attributes , $childs());
    }
    public static function td($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("td" , $attributes , $childs());
    }
    public static function article($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("article" , $attributes , $childs());
    }
    public static function picture($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("picture" , $attributes , $childs());
    }
    public static function audio($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("audio" , $attributes , $childs());
    }
    public static function iframe($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("iframe" , $attributes , $childs());
    }
    public static function blockquote($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("blockquote" , $attributes , $childs());
    }
    public static function abbr($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("abbr" , $attributes , $childs());
    }
    public static function address($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("address" , $attributes , $childs());
    }
    public static function bdo($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("bdo" , $attributes , $childs());
    }
    public static function select($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("select" , $attributes , $childs());
    }
    public static function option($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("option" , $attributes , $childs());
    }
    public static function optgroup($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("optgroup" , $attributes , $childs());
    }
    public static function section($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("section" , $attributes , $childs());
    }
    public static function del($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("del" , $attributes , $childs());
    }
    public static function cite($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("cite" , $attributes , $childs());
    }
    public static function embed($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("embed" , $attributes , $childs());
    }
    public static function fieldset($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("fieldset" , $attributes , $childs());
    }
    public static function datalist($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("datalist" , $attributes , $childs());
    }
    public static function figure($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("figure" , $attributes , $childs());
    }
    public static function i($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("i" , $attributes , $childs());
    }
    public static function ins($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("ins" , $attributes , $childs());
    }
    public static function mark($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("mark" , $attributes , $childs());
    }
    public static function noscript($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("fieldset" , $attributes , $childs());
    }
    public static function object($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("fieldset" , $attributes , $childs());
    }
    public static function pre($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("pre" , $attributes , $childs());
    }
    public static function progress($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("progress" , $attributes , $childs());
    }
    public static function q($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("q" , $attributes , $childs());
    }
    public static function s($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("s" , $attributes , $childs());
    }
    public static function style($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("style" , $attributes , $childs());
    }
    public static function template($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("template" , $attributes , $childs());
    }
    public static function textarea($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("textarea" , $attributes , $childs());
    }
    public static function u($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("u" , $attributes , $childs());
    }
    public static function tfoot($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("tfoot" , $attributes , $childs());
    }
    public static function caption($childs , $attributes=[]){
        phtml::validate("array" , $attributes);
        return phtml_render::render_tag("caption" , $attributes , $childs());
    }

    public static function meta( $attributes=[]){
        return phtml_render::render_tag("meta" , $attributes, "",false);
    }
    public static function track( $attributes=[]){
        return phtml_render::render_tag("track" , $attributes, "",false);
    }
    public static function param( $attributes=[]){
        return phtml_render::render_tag("param" , $attributes, "",false);
    }
    public static function source( $attributes=[]){
        return phtml_render::render_tag("source" , $attributes, "",false);
    }
    public static function img( $attributes=[]){
        return phtml_render::render_tag("img" , $attributes, "",false);
    }
    public static function input( $attributes=[]){
        return phtml_render::render_tag("input" , $attributes, "",false);
    }
    public static function link( $attributes=['rel'=>'stylesheet' , 'href'=>'/css/app.css']){
        return phtml_render::render_tag("link" , $attributes, "",false);
    }
    public static function br( $attributes=[]){
        return phtml_render::render_tag("br" , $attributes, "",false);
    }
    public static function hr( $attributes=[]){
        return phtml_render::render_tag("hr" , $attributes, "",false);
    }

    public function render(){
        foreach ($this->document as $element){
            echo $element;
        }
    }

}

