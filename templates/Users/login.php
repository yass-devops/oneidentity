<!-- dans /templates/Users/login.php -->
<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Connexion</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __("Veuillez sil vous plaît entrer votre nom dutilisateur et votre mot de passe") ?></legend>
        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>

    <?= $this->Html->link("Ajouter un utilisateur", ['action' => 'add']) ?>
</div>