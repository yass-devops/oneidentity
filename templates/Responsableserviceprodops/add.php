<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Responsableserviceprodop $responsableserviceprodop
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Responsableserviceprodops'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="responsableserviceprodops form content">
            <?= $this->Form->create($responsableserviceprodop) ?>
            <fieldset>
                <legend><?= __('Add Responsableserviceprodop') ?></legend>
                <?php
                    echo $this->Form->control('nomRespProdops');
                    echo $this->Form->control('prenomRespProdops');
                    echo $this->Form->control('emailRespProdops');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
