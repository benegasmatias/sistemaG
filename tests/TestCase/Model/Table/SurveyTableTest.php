<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SurveyTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SurveyTable Test Case
 */
class SurveyTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SurveyTable
     */
    public $Survey;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Survey',
        'app.SurveysAnswers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Survey') ? [] : ['className' => SurveyTable::class];
        $this->Survey = TableRegistry::getTableLocator()->get('Survey', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Survey);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
