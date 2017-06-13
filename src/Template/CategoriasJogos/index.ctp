<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\CategoriasJogo[]|\Cake\Collection\CollectionInterface $categoriasJogos
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Categorias Jogo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Jogos'), ['controller' => 'Jogos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Jogo'), ['controller' => 'Jogos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoriasJogos index large-9 medium-8 columns content">
    <h3><?= __('Categorias Jogos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jogo_categoria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('criacao_data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modificao_data') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoriasJogos as $categoriasJogo): ?>
            <tr>
                <td><?= $this->Number->format($categoriasJogo->id) ?></td>
                <td><?= h($categoriasJogo->jogo_categoria) ?></td>
                <td><?= h($categoriasJogo->criacao_data) ?></td>
                <td><?= h($categoriasJogo->modificao_data) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $categoriasJogo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoriasJogo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoriasJogo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriasJogo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
