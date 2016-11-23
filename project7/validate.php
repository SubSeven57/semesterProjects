<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You!</title>
  <link rel="stylesheet" property="stylesheet" href="css/styles.css" type="text/css" />
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
  <body class="m0">
    <div id="pageContainer">
      <header>
        <h1>Thank you!</h1>
      </header>

      <section class="content">
        <p>
        Thank you! <?php echo $_POST["firstname"] ?><br>
        We will be getting in touch with you at <?php echo $_POST["email"]; ?>
        </p>

        <p>In the meantime, let us know what you think.</p>
    </div>
  </section>

    <footer>
      <a href ="https://www.gnu.org/licenses/lgpl-3.0.en.html">Legal</a> | <a href="https://github.com/SubSeven57/semesterProjects">Github</a> | <a href="credits.php">Credits</a>
    </footer>

  </body>
</html>
