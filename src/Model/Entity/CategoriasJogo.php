<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CategoriasJogo Entity
 *
 * @property int $id
 * @property string $jogo_categoria
 * @property \Cake\I18n\FrozenTime $criacao_data
 * @property \Cake\I18n\FrozenTime $modificao_data
 *
 * @property \App\Model\Entity\Jogo[] $jogos
 */
class CategoriasJogo extends Entity
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
}
