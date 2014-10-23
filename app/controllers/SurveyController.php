<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SurveyController
 *
 * @author Codelord
 */
class SurveyController extends BaseController {

    public function showServey() {
        return View::make('pages.survey.index');
    }

}
