<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client[]|\Cake\Collection\CollectionInterface $clients
 */
?>
<div class="clients index content">
    <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clients') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nomclt') ?></th>
                    <th><?= $this->Paginator->sort('nomcontratclt') ?></th>
                    <th><?= $this->Paginator->sort('emailcontratclt') ?></th>
                    <th><?= $this->Paginator->sort('nomrespclt') ?></th>
                    <th><?= $this->Paginator->sort('actif') ?></th>
                    <th><?= $this->Paginator->sort('contratclt') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('solution') ?></th>
                    <th><?= $this->Paginator->sort('VersionIAM') ?></th>
                    <th><?= $this->Paginator->sort('idResp') ?></th>
                    <th><?= $this->Paginator->sort('idChefP') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?= $this->Number->format($client->id) ?></td>
                    <td><?= h($client->nomclt) ?></td>
                    <td><?= h($client->nomcontratclt) ?></td>
                    <td><?= h($client->emailcontratclt) ?></td>
                    <td><?= h($client->nomrespclt) ?></td>
                    <td><?= h($client->actif) ?></td>
                    <td><?= h($client->contratclt) ?></td>
                    <td><?= h($client->type) ?></td>
                    <td><?= h($client->solution) ?></td>
                    <td><?= h($client->VersionIAM) ?></td>
                    <td><?= $this->Number->format($client->idResp) ?></td>
                    <td><?= $this->Number->format($client->idChefP) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $client->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?>
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
