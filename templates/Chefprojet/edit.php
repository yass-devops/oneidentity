<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chefprojet $chefprojet
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $chefprojet->idchef],
                ['confirm' => __('Are you sure you want to delete # {0}?', $chefprojet->idchef), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Chefprojet'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chefprojet form content">
            <?= $this->Form->create($chefprojet) ?>
            <fieldset>
                <legend><?= __('Edit Chefprojet') ?></legend>
                <?php
                    echo $this->Form->control('nomchef');
                    echo $this->Form->control('prenomchef');
                    echo $this->Form->control('emailchef');
                    echo $this->Form->control('clientsCP');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
