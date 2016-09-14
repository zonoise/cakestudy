<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Submission Entity
 *
 * @property int $id
 * @property string $contest_id
 * @property string $task_id
 * @property \Cake\I18n\Time $created
 * @property string $user_name
 * @property string $language
 * @property int $score
 *
 * @property \App\Model\Entity\Contest $contest
 * @property \App\Model\Entity\Task $task
 */
class Submission extends Entity
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
        '*' => true,
        'id' => false
    ];
    
    protected function _getFullUrl()
    {
        return 
        "http://".$this->_properties['contest_id'].".contest.atcoder.jp".$this->_properties['url'];
    }
}
