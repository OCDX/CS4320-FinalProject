<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<script>
  function onSignIn(googleUser) {
      var profile = googleUser.getBasicProfile();

      //Display Info from Google
      $('#profile-image').attr('src', profile.getImageUrl());
      $("#name").html(profile.getName());
      $("#email").html(profile.getEmail());
  }
</script>

<style media="screen">
  .img-circle {
    border-radius: 50%;
  }
  .row {
    font-size: 2rem;
  }
  label {
    font-size: 3rem;
  }
</style>

  <body>
    <?php include "nav.php"; ?>
    <main>
      <div class="container center-align">
        <h2 class="header teal-text text-lighten-2">Profile</h2>
        <div class="row">
          <img id="profile-image" class="img-circle">
        </div>

        <label for="name">Name</label>
        <div id="name" class="row"></div>

        <label for="email">Email</label>
        <div id="email" class="row"></div>

        <label for="manifests">My Manifests</label>
        <div id="manifests" class="row">You have no manifests. :(</div>

      </div>
    </main>
  </body>
</html>
