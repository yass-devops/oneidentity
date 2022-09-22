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
            <?= $this->Html->link(__('Edit Rc'), ['action' => 'edit', $rc->idRC], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rc'), ['action' => 'delete', $rc->idRC], ['confirm' => __('Are you sure you want to delete # {0}?', $rc->idRC), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rc'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rc'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rc view content">
            <h3><?= h($rc->idRC) ?></h3>
            <table>
                <tr>
                    <th><?= __('NomRC') ?></th>
                    <td><?= h($rc->nomRC) ?></td>
                </tr>
                <tr>
                    <th><?= __('PrenomRC') ?></th>
                    <td><?= h($rc->prenomRC) ?></td>
                </tr>
                <tr>
                    <th><?= __('EmailRC') ?></th>
                    <td><?= h($rc->emailRC) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clients') ?></th>
                    <td><?= h($rc->clients) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdRC') ?></th>
                    <td><?= $this->Number->format($rc->idRC) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
