<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CategoriasJogos Model
 *
 * @property \App\Model\Table\JogosTable|\Cake\ORM\Association\HasMany $Jogos
 *
 * @method \App\Model\Entity\CategoriasJogo get($primaryKey, $options = [])
 * @method \App\Model\Entity\CategoriasJogo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CategoriasJogo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasJogo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategoriasJogo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasJogo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasJogo findOrCreate($search, callable $callback = null, $options = [])
 */
class CategoriasJogosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('categorias_jogos');
        $this->setDisplayField('jogo_categoria');
        $this->setPrimaryKey('id');

        $this->hasMany('Jogos', [
            'foreignKey' => 'categorias_jogo_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('jogo_categoria', 'create')
            ->notEmpty('jogo_categoria');

        $validator
            ->dateTime('criacao_data')
            ->requirePresence('criacao_data', 'create')
            ->notEmpty('criacao_data');

        $validator
            ->dateTime('modificao_data')
            ->allowEmpty('modificao_data');

        return $validator;
    }
}
