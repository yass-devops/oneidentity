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
            <?= $this->Html->link(__('Edit Responsableserviceprodop'), ['action' => 'edit', $responsableserviceprodop->idRespProdops], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Responsableserviceprodop'), ['action' => 'delete', $responsableserviceprodop->idRespProdops], ['confirm' => __('Are you sure you want to delete # {0}?', $responsableserviceprodop->idRespProdops), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Responsableserviceprodops'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Responsableserviceprodop'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="responsableserviceprodops view content">
            <h3><?= h($responsableserviceprodop->idRespProdops) ?></h3>
            <table>
                <tr>
                    <th><?= __('NomRespProdops') ?></th>
                    <td><?= h($responsableserviceprodop->nomRespProdops) ?></td>
                </tr>
                <tr>
                    <th><?= __('PrenomRespProdops') ?></th>
                    <td><?= h($responsableserviceprodop->prenomRespProdops) ?></td>
                </tr>
                <tr>
                    <th><?= __('EmailRespProdops') ?></th>
                    <td><?= h($responsableserviceprodop->emailRespProdops) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdRespProdops') ?></th>
                    <td><?= $this->Number->format($responsableserviceprodop->idRespProdops) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
