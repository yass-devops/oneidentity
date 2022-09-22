<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chefprojet $chefprojet
 * @var \App\Model\Entity\Client[]|\Cake\Collection\CollectionInterface $clients
 */
use App\Model\Entity\Client;
use App\Model\Entity\Rc;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;

?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Chefprojet'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chefprojet form content">
            <?= $this->Form->create($chefprojet) ?>
            <fieldset>
                <legend><?= __('Add Chefprojet') ?></legend>
                <?php
                
                
                    echo $this->Form->control('nomchef');
                    echo $this->Form->control('prenomchef');
                    echo $this->Form->control('emailchef');
                    
                    
                                     $query = TableRegistry::getTableLocator()->get('Clients')->find('all')->select('nomclt');
                    
                    
                    $res=$query->toArray();
                    $query->execute();

                    $i=0;
                    $j=0;
                    $tab=[];
                    for ($i = 0 ; $i<count($res) ; $i++)
                    {
                        $tab[$j]=$res[$i]['nomclt'];
                        $j++;
                    }
                   


                    
                
                       echo $this->Form->select('clientsCP', 
                        [
                            $tab
                            
                            ]
                                                  
                        );
                        
                       

                    
                                     
                   
                    
                       
                        
                                            
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
