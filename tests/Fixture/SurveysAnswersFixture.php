<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SurveysAnswersFixture
 */
class SurveysAnswersFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_survey_answer' => ['type' => 'integer', 'length' => 100, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'answer_id' => ['type' => 'integer', 'length' => 100, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'survey_id' => ['type' => 'integer', 'length' => 100, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'answer_id' => ['type' => 'index', 'columns' => ['answer_id'], 'length' => []],
            'survey_id' => ['type' => 'index', 'columns' => ['survey_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_survey_answer'], 'length' => []],
            'surveys_answers_ibfk_1' => ['type' => 'foreign', 'columns' => ['answer_id'], 'references' => ['answers', 'id_answer'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'surveys_answers_ibfk_2' => ['type' => 'foreign', 'columns' => ['survey_id'], 'references' => ['survey', 'id_survey'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id_survey_answer' => 1,
                'answer_id' => 1,
                'survey_id' => 1,
            ],
        ];
        parent::init();
    }
}
