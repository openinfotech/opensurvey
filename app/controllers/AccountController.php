<?php

class AccountController extends BaseController {

    public function getResendActivationEmail($Redirect_URL) {
        if (Auth::user()->Active == 0) {
            $code = '';
            if (Auth::user()->Code == '') {
                $code = str_random(60);
            } else {
                $code = Auth::user()->Code;
            }

            $user = Auth::user();
            $user->Code = $code;
            if ($user->save()) {


                Mail::send('emails.auth.activate', array('link' => URL::route('account-activate', $code), 'Name' => Auth::user()->First_Name . ' ' . Auth::user()->Last_Name), function($message) use ($user) {
                    $message->to($user->Email_Id, $user->Username)->subject('Activate Open Survet Account');
                });
                return Redirect::to(urldecode($Redirect_URL))
                                ->with('global', 'Please check your Email for Verification Email !');
            } else {
                return Redirect::to(urldecode($Redirect_URL))
                                ->with('global', 'Sorry for inconvenience, there is problem in sendin Verification Email.');
            }
        }
        return Redirect::to(urldecode($Redirect_URL))
                        ->with('global', 'you are already verified !');
    }

    public function getProfile() {
        return View::make('pages.account.profile');
    }

    public function getForgotPassword() {
        return View::make('pages.account.forgotpassword');
    }

    public function postForgotPassword() {

        $validator = Validator::make(Input::all(), array(
                    'Email_Id' => 'required|max:50|email',
                        )
        );


        if ($validator->fails()) {
            return Redirect:: route('account-forgot-password')
                            ->withErrors($validator)
                            ->withInput();
        } else {

            $user = User::where('Email_Id', '=', Input::get('Email_Id'));
            if ($user->count()) {
                $user = $user->first();
                $code = str_random(60);
                $user->Code = $code;
                if ($user->save()) {
                    Mail::send('emails.auth.activate', array('link' => URL::route('reset-password', $code), 'Name' => Input::get('First_Name') . ' ' . Input::get('Last_Name')), function($message) use ($user) {
                        $message->to($user->Email_Id, $user->Username)->subject('Activate Open Survet Account');
                    });
                    return Redirect:: route('account-sign-in')
                                    ->with('global', 'Check your email for reset password !');
                }
            }
            return Redirect::route('account-forgot-password')->with('global', 'We could not find your email !');
//            //activation code
//            if ($user) {
//
//                Mail::send('emails.auth.activate', array('link' => URL::route('account-activate', $code), 'Name' => Input::get('First_Name') . ' ' . Input::get('Last_Name')), function($message) use ($user) {
//                    $message->to($user->Email_Id, $user->Username)->subject('Activate Open Survet Account');
//                });
//                return Redirect:: route('account-forgot-password')
//                                ->with('global', 'Your account has been created ! We have sent you email !');
//            }
        }
        return Redirect:: route('account-forgot-password')
                        ->with('global', 'Your can`t create account');
    }

    public function getSignIn() {
        return View::make('pages.account.signin');
    }

    public function postSignIn() {

        $validator = Validator::make(Input::all(), array(
                    'Username' => 'required|max:50|min:3',
                    'Password' => 'required|min:6',
                        )
        );

        if ($validator->fails()) {
//            return 'fails';   
            return Redirect:: route('account-sign-in')
                            ->withErrors($validator)
                            ->withInput();
        } else {
//            return 'success';
            $auth = Auth::attempt(array(
                        'username' => Input::get('Username'),
                        'password' => Input::get('Password')
            ));
            if ($auth) {

                return Redirect::intended('/');
            } else {
                return Redirect::route('account-sign-in')->with('global', 'There is problem for authentication , please check your Username or Password');
            }
        }
    }

    public function getSignOut() {
        if (Auth::check()) {
            Auth::logout();
            return Redirect::route('account-sign-in');
        } else {
            return Redirect::route('account-sign-in');
        }
    }

    public function getCreate() {
        return View::make('pages.account.create');
    }

    public function postCreate() {
        $validator = Validator::make(Input::all(), array(
                    'First_Name' => 'required|max:50',
                    'Last_Name' => 'required|max:50',
                    'Email_Id' => 'required|max:50|email|unique:users',
                    'Phone' => 'required|max:15|min:10|unique:users',
                    'Username' => 'required|max:50|min:3|unique:users',
                    'Password' => 'required|min:6',
                    'Password_again' => 'required|same:Password',
                    'Country_Name' => 'required|max:50',
                    'City_Name' => 'required|max:50',
                    'Zip_Code' => 'required|max:6|min:6'
                        )
        );


        if ($validator->fails()) {
            return Redirect:: route('account-create')
                            ->withErrors($validator)
                            ->withInput();
        } else {

//            //activation code
            $code = str_random(60);
            $user = User::create(array(
                        'First_Name' => Input::get('First_Name'),
                        'Last_Name' => Input::get('Last_Name'),
                        'Email_Id' => Input::get('Email_Id'),
                        'Phone' => Input::get('Phone'),
                        'username' => Input::get('Username'),
                        'password' => Hash::make(Input::get('Password')),
                        'Country_Name' => Input::get('Country_Name'),
                        'City_Name' => Input::get('City_Name'),
                        'Zip_Code' => Input::get('Zip_Code'),
                        'Occupation' => '',
                        'Activate' => 0,
                        'Code' => $code
            ));
            if ($user) {

                Mail::send('emails.auth.activate', array('link' => URL::route('account-activate', $code), 'Name' => Input::get('First_Name') . ' ' . Input::get('Last_Name')), function($message) use ($user) {
                    $message->to($user->Email_Id, $user->Username)->subject('Activate Open Survet Account');
                });
                return Redirect:: route('account-sign-in')
                                ->with('global', 'Your account has been created ! We have sent you email !');
            }
        }
        return Redirect:: route('account-create')
                        ->with('global', 'Your can`t create account');
    }

    public function getActivate($code) {
        $user = User::where('Code', '=', $code)->where('Active', '=', '0');
        if ($user->count()) {
            $user = $user->first();

            $user->Active = 1;
            $user->Code = '';

            if ($user->save()) {
                if (Auth::check()) {
                    //do something
                    return Redirect:: route('home')
                                    ->with('global', 'Your account is activated !');
                } else {
                    return Redirect:: route('account-sign-in')
                                    ->with('global', 'Your account is activated !');
                }
            }
        }
        return Redirect::route('account-sign-in')->with('global', 'We could not activate accaount');
    }

    public function getResetPassword($code) {

        $user = User::where('Code', '=', $code);
        if ($user->count()) {
            $user = $user->first();
            return View::make('pages.account.resetpassword')
                            ->with('Uid', $user->Uid)->with('Code', $code);
//            return Redirect:: route('account-sign-in')
//                            ->with('global', 'Your account has been created ! We have sent you email !');
        }
        return Redirect::route('account-sign-in')
                        ->with('global', 'We could not activate accaount');
    }

    public function postResetPassword() {
        $validator = Validator::make(Input::all(), array(
                    'Password' => 'required|min:6',
                    'Password_again' => 'required|same:Password',
                        )
        );
        if ($validator->fails()) {
            return Redirect:: route('reset-password', Input::get('Code'))
                            ->withErrors($validator)
                            ->withInput();
        } else {

            $user = User::where('Uid', '=', Input::get('Version_Id'))->where('Code', '=', Input::get('Code'));
            if ($user->count()) {
                $user = $user->first();
                $user->Code = '';
                $user->password = Hash::make(Input::get('Password'));
                if ($user->save()) {
                    return Redirect:: route('account-sign-in')
                                    ->with('global', 'Password is Chaged Please Login !');
                }
            }
            return Redirect:: route('account-sign-in')
                            ->with('global', 'Password is not changed please , try again for process !');
        }
    }

}

?>