<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients view content">
            <h3><?= h($client->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nomclt') ?></th>
                    <td><?= h($client->nomclt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nomcontratclt') ?></th>
                    <td><?= h($client->nomcontratclt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emailcontratclt') ?></th>
                    <td><?= h($client->emailcontratclt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nomrespclt') ?></th>
                    <td><?= h($client->nomrespclt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Actif') ?></th>
                    <td><?= h($client->actif) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contratclt') ?></th>
                    <td><?= h($client->contratclt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($client->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Solution') ?></th>
                    <td><?= h($client->solution) ?></td>
                </tr>
                <tr>
                    <th><?= __('VersionIAM') ?></th>
                    <td><?= h($client->VersionIAM) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($client->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdResp') ?></th>
                    <td><?= $this->Number->format($client->idResp) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdChefP') ?></th>
                    <td><?= $this->Number->format($client->idChefP) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
