<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Responsableserviceprodop[]|\Cake\Collection\CollectionInterface $responsableserviceprodops
 */
?>
<div class="responsableserviceprodops index content">
    <?= $this->Html->link(__('New Responsableserviceprodop'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Responsableserviceprodops') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idRespProdops') ?></th>
                    <th><?= $this->Paginator->sort('nomRespProdops') ?></th>
                    <th><?= $this->Paginator->sort('prenomRespProdops') ?></th>
                    <th><?= $this->Paginator->sort('emailRespProdops') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($responsableserviceprodops as $responsableserviceprodop): ?>
                <tr>
                    <td><?= $this->Number->format($responsableserviceprodop->idRespProdops) ?></td>
                    <td><?= h($responsableserviceprodop->nomRespProdops) ?></td>
                    <td><?= h($responsableserviceprodop->prenomRespProdops) ?></td>
                    <td><?= h($responsableserviceprodop->emailRespProdops) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $responsableserviceprodop->idRespProdops]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $responsableserviceprodop->idRespProdops]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $responsableserviceprodop->idRespProdops], ['confirm' => __('Are you sure you want to delete # {0}?', $responsableserviceprodop->idRespProdops)]) ?>
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
