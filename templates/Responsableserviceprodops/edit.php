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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $responsableserviceprodop->idRespProdops],
                ['confirm' => __('Are you sure you want to delete # {0}?', $responsableserviceprodop->idRespProdops), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Responsableserviceprodops'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="responsableserviceprodops form content">
            <?= $this->Form->create($responsableserviceprodop) ?>
            <fieldset>
                <legend><?= __('Edit Responsableserviceprodop') ?></legend>
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
