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
            <?= $this->Html->link(__('Edit Chefprojet'), ['action' => 'edit', $chefprojet->idchef], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Chefprojet'), ['action' => 'delete', $chefprojet->idchef], ['confirm' => __('Are you sure you want to delete # {0}?', $chefprojet->idchef), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Chefprojet'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Chefprojet'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chefprojet view content">
            <h3><?= h($chefprojet->idchef) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nomchef') ?></th>
                    <td><?= h($chefprojet->nomchef) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prenomchef') ?></th>
                    <td><?= h($chefprojet->prenomchef) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emailchef') ?></th>
                    <td><?= h($chefprojet->emailchef) ?></td>
                </tr>
                <tr>
                    <th><?= __('ClientsCP') ?></th>
                    <td><?= h($chefprojet->clientsCP) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idchef') ?></th>
                    <td><?= $this->Number->format($chefprojet->idchef) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
