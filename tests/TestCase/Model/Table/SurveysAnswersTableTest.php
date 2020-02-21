<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SurveysAnswersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SurveysAnswersTable Test Case
 */
class SurveysAnswersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SurveysAnswersTable
     */
    public $SurveysAnswers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SurveysAnswers',
        'app.Answers',
        'app.Survey',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SurveysAnswers') ? [] : ['className' => SurveysAnswersTable::class];
        $this->SurveysAnswers = TableRegistry::getTableLocator()->get('SurveysAnswers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SurveysAnswers);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
