<?php

class LoremController extends BaseController {

public function add() {
    return View::make( 'lorem_ipsum' );
}
     
public function create() {
    $parNumber = Input::get( 'parNumber' );
    $generator = new Badcow\LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs($parNumber);
    $result = implode('<p>', $paragraphs);
 
return Response::json(array('type' => 'message', 'msg' => $result));
        }
     }