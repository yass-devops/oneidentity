<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rc[]|\Cake\Collection\CollectionInterface $rc
 */
?>
<div class="rc index content">
    <?= $this->Html->link(__('New Rc'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rc') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idRC') ?></th>
                    <th><?= $this->Paginator->sort('nomRC') ?></th>
                    <th><?= $this->Paginator->sort('prenomRC') ?></th>
                    <th><?= $this->Paginator->sort('emailRC') ?></th>
                    <th><?= $this->Paginator->sort('clients') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rc as $rc): ?>
                <tr>
                    <td><?= $this->Number->format($rc->idRC) ?></td>
                    <td><?= h($rc->nomRC) ?></td>
                    <td><?= h($rc->prenomRC) ?></td>
                    <td><?= h($rc->emailRC) ?></td>
                    <td><?= h($rc->clients) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rc->idRC]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rc->idRC]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rc->idRC], ['confirm' => __('Are you sure you want to delete # {0}?', $rc->idRC)]) ?>
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
