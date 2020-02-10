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

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Karla';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .opt {
                margin-top: 30px;
            }

            .opt a {
              text-decoration: none;
              font-size: 150%;
            }
            
            a:hover {
              color: red;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title" title="Laragon">Laragon</div>
                <div>
				Index page by Nicolas Degabriel - <a href="www.artsetfacts.com" target="_blank">www.artsetfacts.com</a>				</div>
    
                <div class="info">
                  <div align="left"><br />
				  	<ul>
                      <li><?php print($_SERVER['SERVER_SOFTWARE']); ?></li>
                      <li>PHP version: <?php print phpversion(); ?>   <span><a title="phpinfo()" href="/?q=info">info</a></span></li>
                      <li>Document Root: <?php print ($_SERVER['DOCUMENT_ROOT']); ?></li>
					  <li><a title="Mozilla DOCS" href="https://developer.mozilla.org/fr/" target="blanck">Mozilla DOCS</a></li>
					  <li><a title="W3C" href="https://www.w3.org" target="blanck">W3C</a></li>
					  
					</ul>
                  </div>
                </div>
                <div class="opt">
                  <div>
                    <div align="left"><a title="Getting Started" href="https://laragon.org/docs">Getting Started</a></div>
                  </div>
                </div>
				<div align="left"><ul>
				<?php
				function listcsvfile() {
	/* Listing of the CSV file(s) of the directory and reading of the content */
        if ($Directory_Scanned = opendir('.')) {
        while (($File_To_List = readdir($Directory_Scanned)) !== false) {
                echo $results_array[] = '<li><a href="' . $File_To_List . '">' . $File_To_List . '</a><br/></li>';
				/* <a href="page2.htm">Votre lien</a> */
        }
    }
}
listcsvfile();
?></ul>
				</div>
            </div>

        </div>
    </body>
</html>