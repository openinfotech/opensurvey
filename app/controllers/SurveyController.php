<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * This is Survey Controller which used to controll survey.
 *
 * @author Codelord
 */
class SurveyController extends BaseController {

    /**
     * This Method is used to display all survey.
     * @return type Show survey view
     */
    public function showServey() {
        return View::make('pages.survey.index');
    }

    public function getCreateSurvey() {
        return View::make('pages.survey.create');
    }

    public function postCreateSurvey() {

        $validator = Validator::make(Input::all(), array(
                    'Title' => 'required|min:2|unique:survey_master',
                    'Description' => 'required|min:2',
                    'Survey_Category' => 'required',
                    'Template' => 'required',
                    'Language' => 'required',
                        )
        );


        if ($validator->fails()) {

            return Response::json($validator->messages()->toArray());
        } else {

            $Survey = Survey::create(array(
                        'Title' => Input::get('Title'),
                        'Description' => Input::get('Description'),
                        'Survey_Category_Id' => Input::get('Survey_Category'),
                        'Uid_Id' => Auth::user()->Uid,
                        'Language' => Input::get('Language'),
                        'Template' => Input::get('Template')
            ));
            if ($Survey) {

                $response = array(
                    'success' => '1',
                    'message' => 'Survey Created Successfully !',
                    'Redirect_URL' => URL::route('survey-dashbaord', $Survey->Survey_Id),
                );

                return Response::json($response);
            }

            $response = array(
                'success' => '0',
                'message' => 'Cant create survey'
            );

            return Response::json($response);
        }
    }

    public function getSurvey($Survey_Id) {
        return View::make('pages.survey.dashboard')
                        ->with('Survey_Id', $Survey_Id);
    }

    public function getAdminPage($Survey_Id) {
        return View::make('pages.survey.admin')
                        ->with('Survey_Id', $Survey_Id);
    }

    public function getSurveyBuild($Survey_Id) {
        return View::make('pages.survey.build')
                        ->with('Survey_Id', $Survey_Id);
    }

}
