  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/init.js"></script>
  <script src="https://use.fontawesome.com/8172e32e19.js"></script>
  <script>
  function onSignIn(googleUser) {
      var profile = googleUser.getBasicProfile();
      console.log(profile);
      var id_token = googleUser.getAuthResponse().id_token;
      // TODO Send id_token to PHP Backend (This is in place of their user id for authentication)
  }
  </script>
  <meta name="google-signin-client_id" content="975332133771-b3j764j7oo8ikir7kiocd9uoush78mv2.apps.googleusercontent.com">
