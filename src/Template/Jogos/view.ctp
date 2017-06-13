<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Jogo $jogo
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Jogo'), ['action' => 'edit', $jogo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Jogo'), ['action' => 'delete', $jogo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jogo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jogos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jogo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias Jogos'), ['controller' => 'CategoriasJogos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categorias Jogo'), ['controller' => 'CategoriasJogos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jogos view large-9 medium-8 columns content">
    <h3><?= h($jogo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Jogo') ?></th>
            <td><?= h($jogo->nome_jogo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categorias Jogo') ?></th>
            <td><?= $jogo->has('categorias_jogo') ? $this->Html->link($jogo->categorias_jogo->id, ['controller' => 'CategoriasJogos', 'action' => 'view', $jogo->categorias_jogo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($jogo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criacao Data') ?></th>
            <td><?= h($jogo->criacao_data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificacao Data') ?></th>
            <td><?= h($jogo->modificacao_data) ?></td>
        </tr>
    </table>
</div>
