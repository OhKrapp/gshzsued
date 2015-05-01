<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

<?php $teachers = yaml($page->teachers()) ?>
    <table>
<tr><th>Name</th><th>Position</th><th>Klasse</th></tr>
    <?php foreach($teachers as $teacher): ?>

<tr><td><?php echo $teacher['Name']  ?></td>
  <td><?php echo $teacher['Stelle'] ?></td>
 <td><?php echo $teacher['Klasse'] ?> </td>
</div>
<?php endforeach ?>

<?php a::show($array) ?>

</table>



 </main>

<?php snippet('footer') ?>

