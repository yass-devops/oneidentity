<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rc $rc
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Rc'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rc form content">
            <?= $this->Form->create($rc) ?>
            <fieldset>
                <legend><?= __('Add Rc') ?></legend>
                <?php
                    echo $this->Form->control('nomRC');
                    echo $this->Form->control('prenomRC');
                    echo $this->Form->control('emailRC');
                    echo $this->Form->control('clients');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
