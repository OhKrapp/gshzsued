<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

<?php $parents = yaml($page->parents()) ?>
    <table>
<tr><th>Name</th><th>Rolle</th><th>Email</th></tr>
    <?php foreach($parents as $parent): ?>

<tr><td><?php echo $parent['Name']  ?></td>
  <td><?php echo $parent['Rolle'] ?></td>
 <td><?php echo $parent['Email'] ?> </td>
</div>
<?php endforeach ?>

</tr>

</table>



 </main>

<?php snippet('footer') ?>

