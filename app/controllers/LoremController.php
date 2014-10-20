<?php

class LoremController extends BaseController {

public function add() {
    return View::make( 'lorem' );
}
     
public function create() {
            //check if its our form
            if ( Session::token() !== Input::get( '_token' ) ) {
                return Response::json( array(
                    'msg' => 'Unauthorized attempt to create setting'
                ) );
            }

    
    $parNumber = Input::get( 'parNumber' );
    $generator = new Badcow\LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs($parNumber);
    $result = implode('</p><p>', $paragraphs);
 
            return Response::json(array('type' => 'message', 'msg' => $result));
        }
     }