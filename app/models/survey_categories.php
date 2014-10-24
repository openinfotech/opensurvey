<?php

/**
 * This Model is used for Survey Category Table
 * @author Codelord <vikrambghadge@gmail.com>
 */
class survey_categories extends Eloquent {

    public $primaryKey = 'Survey_Category_Id';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'survey_category_table';

    public static function get_All_Survey_Category_As_Select_Option() {
        foreach (survey_categories::all() as $Survey_category) {
            echo '<option value="' . $Survey_category->Survey_Category_Id . '">' . $Survey_category->Category_Name . '</option>';
        }
    }

}
