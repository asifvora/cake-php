<?= $this->element('header')?>
<?= $this->Flash->render()?>
</header>
<section id="medical_technology_schools">
    <section id="mainpage">
        <div class="container" ng-app="mainApp">
            <div ng-view></div>
            <?= $this->fetch('content')?>
        </div>
    </section>
</section>
<?= $this->element('footer')?>
