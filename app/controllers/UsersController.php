<?php

class UsersController extends BaseController {
     
        public function add() {
            return View::make('users');
        }
     
                public function create() {
            //check if its our form
            if ( Session::token() !== Input::get( '_token' ) ) {
                return Response::json( array(
                    'msg' => 'Unauthorized attempt to create setting'
                ) );
            }
            $usersNum = Input::get('usersNum');


            $users = array();

            for($i = 0; $i < $usersNum; $i++){
                $users[$i] = array();

                $faker = Faker\Factory::create();

                $users[$i]['name'] = $faker->name.'<br />';
                $users[$i]['bday'] = $faker->dateTimeThisCentury->format('Y-m-d').'<br />';
                $users[$i]['email'] = $faker->email.'<br />';
            }
     
            return Response::json(array('type' => 'message', 'msg' => $users));
        }
    
}

