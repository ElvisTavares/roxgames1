<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Categorias de Jogos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Jogos'), ['controller' => 'Jogos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Jogo'), ['controller' => 'Jogos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoriasJogos form large-9 medium-8 columns content">
    <?= $this->Form->create($categoriasJogo) ?>
    <fieldset>
        <legend><?= __('Adicionar Categorias') ?></legend>
        <?php
            echo $this->Form->control('jogo_categoria');
            echo $this->Form->control('criacao_data');
            echo $this->Form->control('modificao_data', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
