<!DOCTYPE html>
<!-- ICS2O-Unit2-03-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Address, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Bain Liao" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.light_blue-orange.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Address, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Address, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/street.jpg" alt="street" />
      </div>
      <h1 class="page-content">Please enter the following:</h1>
      <br />
      <form action="answer.php" method="GET">
        <p>Street Number</p>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" name="number">
          <label class="mdl-textfield__label" for="street-number">Street number ...</label>
        </div>
        <br />
        <p>Street Name</p>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="name">
          <label class="mdl-textfield__label" for="street-name">Street name ...</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <br />
        <!-- Accent-colored raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit">
          Enter
        </button>
      </form>
      <br />
      <div class="page-content-answer">
        <div id="user-address">
          <p>Your address is:</p>
        </div>
    </main>
  </div>
</body>

</html>