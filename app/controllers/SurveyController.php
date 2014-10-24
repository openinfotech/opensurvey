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

}
