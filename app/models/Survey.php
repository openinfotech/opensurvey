<?php

/**
 * This is Survey Model
 *
 * @author Codelord
 */
class Survey extends Eloquent {

    protected $fillable = array('Title', 'Description', 'Legal_Details', 'Survey_Category_Id',
        'Budget', 'Logo_Url', 'Team_Id', 'Uid_Id', 'SSL_Enable', 'No_Duplication',
        'Redirect_Url', 'Language', 'Template');
    public $primaryKey = 'Survey_Id';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'survey_master';

}
