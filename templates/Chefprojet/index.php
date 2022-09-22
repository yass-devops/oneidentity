<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chefprojet[]|\Cake\Collection\CollectionInterface $chefprojet
 */
?>
<div class="chefprojet index content">
    <?= $this->Html->link(__('New Chefprojet'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Chefprojet') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idchef') ?></th>
                    <th><?= $this->Paginator->sort('nomchef') ?></th>
                    <th><?= $this->Paginator->sort('prenomchef') ?></th>
                    <th><?= $this->Paginator->sort('emailchef') ?></th>
                    <th><?= $this->Paginator->sort('clientsCP') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($chefprojet as $chefprojet): ?>
                <tr>
                    <td><?= $this->Number->format($chefprojet->idchef) ?></td>
                    <td><?= h($chefprojet->nomchef) ?></td>
                    <td><?= h($chefprojet->prenomchef) ?></td>
                    <td><?= h($chefprojet->emailchef) ?></td>
                    <td><?= h($chefprojet->clientsCP) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $chefprojet->idchef]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chefprojet->idchef]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chefprojet->idchef], ['confirm' => __('Are you sure you want to delete # {0}?', $chefprojet->idchef)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
