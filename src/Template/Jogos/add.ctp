<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Jogos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categorias Jogos'), ['controller' => 'CategoriasJogos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categorias Jogo'), ['controller' => 'CategoriasJogos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jogos form large-9 medium-8 columns content">
    <?= $this->Form->create($jogo) ?>
    <fieldset>
        <legend><?= __('Add Jogo') ?></legend>
        <?php
            echo $this->Form->control('nome_jogo');
            echo $this->Form->control('categorias_jogo_id', ['options' => $categoriasJogos]);
            echo $this->Form->control('criacao_data');
            echo $this->Form->control('modificacao_data', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
