<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Answer Entity
 *
 * @property int $id_answer
 * @property int $question_id
 * @property string $answer_string
 *
 * @property \App\Model\Entity\Question $question
 * @property \App\Model\Entity\AnswersForEachAnswer[] $answers_for_each_answer
 * @property \App\Model\Entity\SurveysAnswer[] $surveys_answers
 */
class Answer extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'question_id' => true,
        'answer_string' => true,
        'question' => true,
        'answers_for_each_answer' => true,
        'surveys_answers' => true,
    ];
}
