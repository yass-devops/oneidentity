<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Hiba') ?></h4>
            <?= $this->Html->link(__('List Clients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients form content">
            <?= $this->Form->create($client) ?>
            <fieldset>
                <legend><?= __('Add Client') ?></legend>
                <?php
                    echo $this->Form->control('nomclt',['label' => 'Nom client :']);
                    echo $this->Form->control('nomcontratclt',['label' => 'Nom Contrat Client :']);
                    echo $this->Form->control('emailcontratclt',['label' => 'Email Contrat Client :']);
                    echo $this->Form->control('nomrespclt',['label' => 'Nom Responsable Client :']);

                   
                    
                    echo $this->Form->label('Actif :');
                    echo $this->Form->radio(
                        'actif',
                        [
                            ['value' => 'Oui', 'text' => 'Oui'],
                            ['value' => 'Non', 'text' => 'Non'],
                            
                        ],
                        
                    );
                    echo $this->Form->label('Contrat Client :');
                    echo $this->Form->select('contratclt', [
                        'Cloud' => 'Cloud',
                        'Processing' => 'Processing',
                        'Hébergement' => 'Hébergement',
                        'BPO' => 'BPO',
                                               
                    ]);
                    echo $this->Form->label('Type :');
                    echo $this->Form->radio(
                        'type',
                        [
                            ['value' => 'Data Privacy', 'text' => 'Data Privacy'],
                            ['value' => 'Non Data Privacy', 'text' => 'Non Data Privacy'],
                        ]
                    );
                    echo $this->Form->label('Solution :');
                    echo $this->Form->select('solution', [
                        'HRA' => 'HRA',
                        'Pleiades' => 'Pleiades',
                        '4YOU' => '4YOU',
                        'GP4YOU' => 'GP4YOU',
                        'DSN' => 'DSN',
                                              
                    ]);
  
                    echo $this->Form->label('Version IAM :');

                    echo $this->Form->radio(
                        'VersionIAM',
                        [
                            ['value' => 'V2', 'text' => 'V2'],
                            ['value' => 'V3', 'text' => 'V3'],
                        ]
                    );

                    echo $this->Form->control('idResp');
                    
                    echo $this->Form->control('idChefP');

                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
