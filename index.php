<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grobo.com - Absolutamente quase nada sobre notícias, esportes e entretenimento</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    <div class="container-main">
      <div class="header" id='header'>
        <div class="header-left">Header Left</div>
        <div class="header-center">Header Center</div>
        <div class="header-right">Header Right</div>
      </div>
      <div class="horizontal-menu" id='horizontal-menu'>
        <div class="horizontal-menu-item">Item</div>
        <div class="horizontal-menu-item">Item</div>
        <div class="horizontal-menu-item">Item</div>
        <div class="horizontal-menu-item">Item</div>
        <div class="horizontal-menu-item">Item</div>
        <div class="horizontal-menu-item">Item</div>
        <div class="horizontal-menu-item">Item</div>
        <div class="horizontal-menu-item">Item</div>
        <div class="horizontal-menu-item">Item</div>
        <div class="horizontal-menu-item">Item</div>
      </div>

      <div class="container-frontpage">

        <div class="frontpage-row-left">

          <div class="frontpage-spotlight">
            <?php include 'includes/frontpage-spotlight.php' ?>
          </div>

          <div class="frontpage-jornalismo-a">

            <div class="headline-a">
              <?php include 'includes/headline-a-1.php' ?>
            </div>

            <div class="headline-a">
              <?php include 'includes/headline-a-2.php' ?>
            </div>

            <div class="headline-a">
              <?php include 'includes/headline-a-3.php' ?>
            </div>

          </div>

          <div class="frontpage-jornalismo-b">

            <div class="headline-b">
              <?php include 'includes/headline-b-1.php' ?>
            </div>

            <div class="headline-b">
              <?php include 'includes/headline-b-2.php' ?>
            </div>

            <div class="headline-b">
              <?php include 'includes/headline-b-3.php' ?>
            </div>

          </div>

          <div class="frontpage-jornalismo-b">

            <div class="headline-b">
              <?php include 'includes/headline-b-1.php' ?>
            </div>

            <div class="headline-b">
              <?php include 'includes/headline-b-2.php' ?>
            </div>

            <div class="headline-b">
              <?php include 'includes/headline-b-3.php' ?>
            </div>

          </div>
          <div class="frontpage-jornalismo-b">

            <div class="headline-b">
              <?php include 'includes/headline-b-1.php' ?>
            </div>

            <div class="headline-b">
              <?php include 'includes/headline-b-2.php' ?>
            </div>

            <div class="headline-b">
              <?php include 'includes/headline-b-3.php' ?>
            </div>

          </div>
          <div class="frontpage-jornalismo-b">

            <div class="headline-b">
              <?php include 'includes/headline-b-1.php' ?>
            </div>

            <div class="headline-b">
              <?php include 'includes/headline-b-2.php' ?>
            </div>

            <div class="headline-b">
              <?php include 'includes/headline-b-3.php' ?>
            </div>

          </div>
          <div class="frontpage-jornalismo-b">

            <div class="headline-b">
              <?php include 'includes/headline-b-1.php' ?>
            </div>

            <div class="headline-b">
              <?php include 'includes/headline-b-2.php' ?>
            </div>

            <div class="headline-b">
              <?php include 'includes/headline-b-3.php' ?>
            </div>

          </div>
          <div class="frontpage-jornalismo-b">

            <div class="headline-b">
              <?php include 'includes/headline-b-1.php' ?>
            </div>

            <div class="headline-b">
              <?php include 'includes/headline-b-2.php' ?>
            </div>

            <div class="headline-b">
              <?php include 'includes/headline-b-3.php' ?>
            </div>

          </div>
          <div class="frontpage-jornalismo-b">

            <div class="headline-b">
              <?php include 'includes/headline-b-1.php' ?>
            </div>

            <div class="headline-b">
              <?php include 'includes/headline-b-2.php' ?>
            </div>

            <div class="headline-b">
              <?php include 'includes/headline-b-3.php' ?>
            </div>

          </div>

        </div>
        <div class="frontpage-row-right">

          <div class="frontpage-esporte">

            <div class="headline-c">
              <?php include 'includes/headline-c-1.php' ?>
            </div>

            <div class="headline-c">
              <?php include 'includes/headline-c-2.php' ?>
            </div>

            <div class="headline-b">
              <?php include 'includes/headline-b-4.php' ?>
            </div>

          </div>
          <div class="frontpage-entretenimento">
            <div class="headline-c">
              <?php include 'includes/headline-c-4.php' ?>
            </div>

            <div class="headline-c">
              <?php include 'includes/headline-c-5.php' ?>
            </div>

            <div class="headline-b">
              <?php include 'includes/headline-b-5.php' ?>
            </div>

          </div>
        </div>
      </div>
    </div>
  </body>
  <script>
function displayHeader(){
  if(isViewportAtTop()){
    console.log('full-size header');
    displayHeaderAtTop();
  } else if(isScrollingUp()){
    console.log('small-size header');
    displayStickyHeader();
  } else{
    console.log('no header');
    displayHeaderAtTop();
  }
  console.log('viewport is at '+ window.visualViewport.pageTop);
}

function displayHeaderAtTop(){
  let header = document.getElementById('header');
  let horizontalMenu = document.getElementById('horizontal-menu');
  header.style.position = '';
  header.style.top = '';
  horizontalMenu.style.position = '';
  horizontalMenu.style.top = '';
}

function displayStickyHeader(){
  let header = document.getElementById('header');
  let horizontalMenu = document.getElementById('horizontal-menu');
  header.style.position = 'sticky';
  header.style.top = '0px';
  horizontalMenu.style.position = 'sticky';
  horizontalMenu.style.top = '100px';
}

function isViewportAtTop(){
  if(window.visualViewport.pageTop < 50){
    return true;
  }else{
    return false;
  }

}

function isScrollingUp(){
  getLatestViewportPositions();
  let lastViewportPosition = latestViewportPositions[
    latestViewportPositions.length - 1
  ];
  let earlierViewportPosition = latestViewportPositions[
    latestViewportPositions.length - 6
  ];
  if(lastViewportPosition < earlierViewportPosition){
    console.log('Scrolling Up!');
    return true;
  } else {
    console.log('Scrolling Down!');
    return false;
  }
}

const latestViewportPositions = [];
latestViewportPositions.length = 10;

function getLatestViewportPositions(){
  let currentPosition = window.visualViewport.pageTop;
  latestViewportPositions.push(currentPosition);
}	

window.visualViewport.addEventListener('scroll', displayHeader);
  </script>	
</html>
