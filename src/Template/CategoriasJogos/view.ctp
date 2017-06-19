<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\CategoriasJogo $categoriasJogo
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Editar Categorias'), ['action' => 'edit', $categoriasJogo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Categorias'), ['action' => 'delete', $categoriasJogo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriasJogo->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Categorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova Categoria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Jogos'), ['controller' => 'Jogos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Jogo'), ['controller' => 'Jogos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categoriasJogos view large-9 medium-8 columns content">
    <h3><?= h($categoriasJogo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= h($categoriasJogo->jogo_categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoriasJogo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data de Criacao') ?></th>
            <td><?= h($categoriasJogo->criacao_data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data de Modificao') ?></th>
            <td><?= h($categoriasJogo->modificao_data) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Jogos') ?></h4>
        <?php if (!empty($categoriasJogo->jogos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome Jogo') ?></th>
                <th scope="col"><?= __('Categorias Jogo Id') ?></th>
                <th scope="col"><?= __('Criacao Data') ?></th>
                <th scope="col"><?= __('Modificacao Data') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($categoriasJogo->jogos as $jogos): ?>
            <tr>
                <td><?= h($jogos->id) ?></td>
                <td><?= h($jogos->nome_jogo) ?></td>
                <td><?= h($jogos->categorias_jogo_id) ?></td>
                <td><?= h($jogos->criacao_data) ?></td>
                <td><?= h($jogos->modificacao_data) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Jogos', 'action' => 'view', $jogos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Jogos', 'action' => 'edit', $jogos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Jogos', 'action' => 'delete', $jogos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jogos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
