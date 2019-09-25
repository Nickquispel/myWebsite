

<?php require "partials/head.php"; ?>
<?php require "../../core/database/Connection.php"; ?>

<h1> Contact</h1>

<div class="container">
  <form action="/core/form-to-email.php" method="post">

    <label for="name">First Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email..">

    <label for="country">Country</label>
    <select id="country" name="country">
    <?php 
    foreach ($countries as $country => $value) : ?>
      <option value="<?= $value['id'] ?>"><?= $value['country'] ?></option>
      <?php endforeach;?>
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
 



<?php require "partials/footer.php"; ?>