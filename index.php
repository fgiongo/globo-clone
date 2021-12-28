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
      <div id='header-box'>
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

    let header = document.getElementById('header-box');

    const latestViewportPositions = [];
    latestViewportPositions.length = 10;

    function displayHeader(){
      if(viewportIsAtTop()){
        displayStickyHeader();
        console.log('sticking header');
      } else if(isScrollingUp()){
        lowerHeader();
        console.log('lowering header');
      } else{
        raiseHeader();
        console.log('raising header');
      }
    }

    function viewportIsAtTop(){
      if(window.pageYOffset < 200){
        return true;
      }else{
        return false;
      }
    }

    function displayStickyHeader(){
      header.style.position = 'sticky';
      header.style.top = '0px';
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

    function getLatestViewportPositions(){
      let currentPosition = window.pageYOffset;
      latestViewportPositions.push(currentPosition);
    }	

    function lowerHeader(){
      let headerTopStr = header.style.top;
      let headerTopStrSliced = headerTopStr.slice(0, (headerTopStr.length - 2));
      let headerTop = parseFloat(headerTopStrSliced);
      if(headerTop < 0){
        let newHeaderTop = headerTop + 10;
        let newHeaderTopStr = newHeaderTop.toString() + 'px';
        header.style.top = newHeaderTopStr;
      }
    }


    function raiseHeader(){
      let headerTopStr = header.style.top;
      let headerTopStrSliced = headerTopStr.slice(0, (headerTopStr.length - 2));
      let headerTop = parseFloat(headerTopStrSliced);
      if(headerTop > -300){
        let newHeaderTop = headerTop - 10;
        let newHeaderTopStr = newHeaderTop.toString() + 'px';
        header.style.top = newHeaderTopStr;
      }
    }

    window.addEventListener('scroll', displayHeader);

  </script>	
</html>
