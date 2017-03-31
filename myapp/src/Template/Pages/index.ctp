<?php
/**
  * @var \App\View\AppView $this
  */

use Cake\ORM\TableRegistry;

$Categories = TableRegistry::get('Categories');
$Articles = TableRegistry::get('Articles');
$query = $Categories->find();
$article = $Articles->find();


?>
<section id="medical_technology_schools">
  <section id="mainpage">

 <section id="mts_seach_programs" >
      <div class="wrapper">
        <h1 class="wow fadeInUp data-wow-duration">This Is My App</h1>
        <div class="search_tool"><?=  $this->Html->image('search_tool.jpg')?></div>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
      </div>
    </section>    


<?php foreach ($query as $row) { ?>
    <Section class="mts_title">
      <div class="wrapper">
        <div class="heading">
          <h2 class="wow fadeInUp data-wow-duration"><?php echo $row->name;?></h2>
          <p><?php echo $row->description;?></p>
        </div>
  <div class="mts_title_programs">
     
      <?php foreach ($article as $row) { ?>
          <div class="medical_programs">
            <div class="medical_icon wow fadeInUp" data-wow-duration="3s"> <?=  $this->Html->image('anesthesia_technician_icon.png')?></div>
              <div class="medical_program_detail  wow fadeInLeft" data-wow-duration="3s">
             <h4><a href="#"><?php echo $row->name;?></a></h4>
              <span class="medical_brd"></span>
           <p><?php echo $row->description;?></p>
            </div>
          </div>
            <?php } ?>
          
    
         </div>
        </div>
      
    </section>
   <?php } ?>
  
  </section>
</section>
    <!-- end Page Content -->
