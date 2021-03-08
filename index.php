<?php
if (!empty($_GET['q'])) {
  switch ($_GET['q']) {
    case 'info':
      phpinfo();
      exit;
      break;
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Laragon</title>

  <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="./bootstrap-4.0.0-dist/css/bootstrap.css?t=<?php echo time(); ?>">


  <style>
    /*     html,
    body {
      height: 100%;
    } */

    body {
      margin-top: 10px;
      padding: 10px;
      width: 100%;
      display: table;
      font-weight: 100;
      font-family: 'Karla';
    }

    form {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: space-evenly;
    }

    /*      .container {
      text-align: center;
      display: table-cell;
      vertical-align: top;
    } */

    .content {
      text-align: center;
      display: inline-block;
    }

    .title {
      font-size: 60px;
    }

    .SubTitle {
      list-style-type: none;
    }

    .Help {
      margin-top: 10px;
      text-align: center;
      color: Black;
      font-weight: bold;
    }

    .Help a {
      text-decoration: none;
      font-size: 100%;
      color: black;
      font-style: italic;
    }

    ul {
      list-style-type: circle;
    }

    section {
      -webkit-column-count: 4;
      /* Opera, Safari, Google Chrome */
      -moz-column-count: 4;
      /* Firefox */
      column-count: 4;
      /* Internet Explorer */
    }

    .BorderBox {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: space-evenly;
      border: 1px solid grey;
      width: 100%;
      padding: 5px;
    }

    .Liens {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: space-evenly;
      width: 100%;
      padding: 5px;
      color: blueviolet;
      font-weight: bold;
    }
  </style>
</head>

<body>
    <?php echo 'We are the : ' . date("d F Y");?>
  <div class="container">
    <div class="content">
      <div>
        <div class="Help">
          <section>
            <ul class="SubTitle">
              <li><a title="Getting Started" href="https://laragon.org/docs" target="blank">- Getting Started with Laragon</a></li>
              <li>
                <div class="title" title="Laragon">Laragon</div>
              </li>
              <li><a tittle="Arts&Facts" href="https://artsetfacts.com/" target="blank">- Index Laragon V2.0 by Arts&Facts.com</a></li>
              <li>
            </ul>
          </section>
        </div>
        <hr>
        <div class="info">
          <div align="left"><br />
            <section>
              <ul>
                <li><?php print($_SERVER['SERVER_SOFTWARE']); ?></li>
                <li>PHP version: <?php print phpversion(); ?> <span><a title="phpinfo()" href="/?q=info">info</a></span></li>
                <li>Document Root: <?php print($_SERVER['DOCUMENT_ROOT']); ?></li>
              </ul>
            </section>
          </div>
          <hr>
          <div class="Liens">
            <section>
              <ul>
                <li><a title="Mozilla DOCS" href="https://developer.mozilla.org/fr/" target="blanck">Mozilla DOCS</a></li>
                <li><a title="SQL" href="https://sql.sh/" target="blanck">SQL</a></li>
                <li><a title="W3C" href="https://www.w3.org" target="blanck">W3C</a></li>
                <li><a title="W3school" href="https://www.w3schools.com" target="blanck">W3SCHOOLS</a></li>
                <li><a title="Bootstrap" href="https://getbootstrap.com" target="blank">Bootstrap</a></li>
                <li><a title="Jquery" href="https://jquery.com/" target="blank">JQuery</a></li>
                <li><a title="Alwaysdata" href="https://admin.alwaysdata.com" target="blank">Alwaysdata</a></li>
                <li><a title="Webflow" href="https://webflow.com" target="blank">Webflow</a></li>
                <li><a title="MyPeopleDoc" href="https://www.mypeopledoc.com" target="blank">MyPeopleDoc</a></li>
                <li><a title="Favicon Generator" href="https://favicon.io/" target="blank">Favicon Generator</a></li>
                <li><a title="Favicon Drawer" href="https://www.favicon.cc/" target="blank">Favicon Drawer</a></li>
                <li><a title="Trello" href="https://trello.com/" target="blank">Trello</a></li>
                <li><a title="Open Class Room" href="https://openclassrooms.com/" target="blank">Open Class Room</a></li>
                <li><a title="Code Pen" href="https://codepen.io/" target="blank">Code Pen</a></li>
                <li><a title="Electron" href="https://www.electronjs.org/" target="blank">Electron</a></li>
                <li><a title="Progresive Web App" href="https://progressive-web-apps.fr/definition-progressive-web-apps-pwa/" target="blank">Electron</a></li>
                <li><a title="JS Bin" href="https://jsbin.com/" target="blank">JS Bin</a></li>
                <li><a title="La Cascade" href="https://la-cascade.io/" target="blank">La Cascade</a></li>
              </ul>
            </section>
          </div>
        </div>
        <hr>
        <div class="BorderBox">
          <?php
          $foldername = !empty($_POST['foldername']) ? $_POST['foldername'] : NULL;
          $filename   = $foldername;
          $path       = __DIR__;
          $fullPath   = $path . "/" . $filename;
          echo "Enter name in the field to create directory in : laragon/www/";
          ?>
          <form action="index.php" method="post">
            <input type="text" name="foldername" id="foldername" value="">&nbsp;
            <input class="btn btn-success" type="submit" value="submit">&nbsp;
            <input class="btn btn-danger" type="reset" value="Reset">
          </form>
          <div>
            <?php
            if (!file_exists($fullPath)) {
              mkdir($fullPath, 0777);
              echo "<br />The following directory <b>" . $filename . " </b> was successfully created in www/ :";
            }
            ?>
          </div>
        </div>
        <div align=" left">
          <section>
            <ul>
              <?php
              function listcsvfile()
              {
                /* Listing of the CSV file(s) of the directory and reading of the content */
                if ($Directory_Scanned = opendir('.')) {
                  while (($File_To_List = readdir($Directory_Scanned)) !== false) {
                    echo $results_array[] = '<li><a href="' . $File_To_List . '">' . $File_To_List . '</a></li>';
                  }
                }
              }
              listcsvfile();
              ?>
            </ul>
          </section>
        </div>
      </div>
    </div>
              <hr>
          <div class="Liens">
            <section>
              <ul>
                <li><a title="REAC DWWM" href="https//www.banque.di.afpa.fr%2Fespaceemployeurscandidatsacteurs%2FDownload.aspx%3Fi%3D48e5e746-396c-42ef-bf6d-19c97c374960%26d%3D1&usg=AOvVaw150PGOBrK6gfMrCmK2T6RQ" target="blanck">REAC DWWM</a></li>
                <li><a title="RC DWWM" href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjdtNHC5aPuAhXFzIUKHTu1Az8QFjAAegQIARAC&url=https%3A%2F%2Fwww.banque.di.afpa.fr%2Fespaceemployeurscandidatsacteurs%2FDownload.aspx%3Fi%3Da636e6a8-8a35-4879-879e-81c75837da95%26d%3D1&usg=AOvVaw1a1tNEb2vtK7wuBxYjLK1g" target="blanck">RC DWWM</a></li>              </ul>
            </section>
          </div>
</body>

</html>