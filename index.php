<!DOCTYPE html>
<html lang="fr_FR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="Site de gestion de l'avancé dans le programme d'entrainement La Voie Des Légendes"
    />
    <meta name="keywords" content="League of Legends, Entrainement" />
    <meta name="author" content="Jérémy Monatte" />
    <title>La Voie Des Légendes</title>

    <link rel="stylesheet" href="style/main.css" />

    <meta property="og:url" content="url" />
    <meta property="og:type" content="Datavisualisation" />
    <meta property="og:title" content="La Voie Des Légendes" />
    <meta
      property="og:description"
      content="Site de gestion de l'avancé dans le programme d'entrainement La Voie Des Légendes"
    />
    <meta property="og:image" content="img/main.jpg" />
    <meta property="og:locale" content="fr_FR" />
  </head>
  <body>
    <link rel="shortcut icon" type="image/x-icon" href="img/top.svg" />

    <div class="paris">
      <a href="https://www.rebatirnotredamedeparis.fr/" style="display:none;"
        >Bravo, vous avez eu la curiosité d'arriver jusqu'ici. Ce lien n'a
        d'autre but que de soutenir à mon échelle la reconstruction de
        Notre-Dame de Paris.</a
      >
      <div class="notreDame">
        <div class="murG"></div>
        <div class="murD"></div>
        <div class="toit"></div>
      </div>
    </div>

    <div class="macdo">
      <div class="hamburger">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
    </div>

    <main role-aria="main" class="notBackStyle">
      <h1>Rejoignez la <br /><strong>Voie des Légendes</strong></h1>
      <div class="voieSelector">
        <div class="voie">
          <div data-id="1" class="thumbnail" id="farming">
            <div class="contentThumb">
              <?php include "asset/farming.php"?>
              <h3>Farming</h3>
            </div>
            <div class="back3d backTop"></div>
            <div class="back3d backBot"></div>
            <div class="back3d backRight"></div>
            <div class="back3d backLeft"></div>
          </div>
        </div>
        <div class="voie">
          <div class="thumbnail" id="adapt">
            <div class="contentThumb">
              <?php include "asset/adaptabilite.php"?>
              <h3>Adaptabilité</h3>
            </div>
            <div class="back3d backTop"></div>
            <div class="back3d backBot"></div>
            <div class="back3d backRight"></div>
            <div class="back3d backLeft"></div>
          </div>
        </div>
        <div class="voie">
          <div class="thumbnail" id="mental">
            <div class="contentThumb">
              <?php include "asset/mental.php"?>
              <h3>Mental</h3>
            </div>
            <div class="back3d backTop"></div>
            <div class="back3d backBot"></div>
            <div class="back3d backRight"></div>
            <div class="back3d backLeft"></div>
          </div>
        </div>
        <div class="voie">
          <div class="thumbnail" id="vision">
            <div class="contentThumb">
              <?php include "asset/vision.php"?>
              <h3>Vision</h3>
            </div>
            <div class="back3d backTop"></div>
            <div class="back3d backBot"></div>
            <div class="back3d backRight"></div>
            <div class="back3d backLeft"></div>
          </div>
        </div>

        <div class="voie">
          <div class="thumbnail">
            <img src="img/top.svg" alt="" />
            <div class="back3d backTop"></div>
            <div class="back3d backBot"></div>
            <div class="back3d backRight"></div>
            <div class="back3d backLeft"></div>
          </div>
        </div>
        <div class="voie">
          <div class="thumbnail">
            <img src="img/top.svg" alt="" />
            <div class="back3d backTop"></div>
            <div class="back3d backBot"></div>
            <div class="back3d backRight"></div>
            <div class="back3d backLeft"></div>
          </div>
        </div>
      </div>
      <div class="voieContainer">
        <div class="voie1 voieItem">
          <nav class="voieNav">
            <ul>
              <li>Introduction</li>
              <li>Exercice 1</li>
              <li>Exercice 2</li>
              <li>Exercice 3</li>
              <li>Récapitulatif de l'avancement</li>
            </ul>
          </nav>
          <aside class="voieDesc">
            <h2>Le Farming</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
              nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
              erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
              tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
              consequat. Duis autem vel eum iriure dolor in hendrerit in
              vulputate velit esse molestie consequat, vel illum dolore eu
              feugiat nulla facilisis at vero eros et accumsan et iusto odio
              dignissim qui blandit praesent luptatum zzril delenit augue duis
              dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,
              consectetuer adipiscing elit, sed diam nonummy nibh euismod
              tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
              enim ad minim veniam, quis nostrud exerci tation ullamcorper
              suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis
              autem vel eum iriure dolor in hendrerit in vulputate velit esse
              molestie consequat, vel illum dolore eu feugiat nulla facilisis at
              vero eros et accumsan et iusto odio dignissim qui blandit praesent
              luptatum zzril delenit augue duis dolore te feugait nulla
              facilisi.lor Lorem ipsum dolor sit amet, consectetuer adipiscing
              elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
              magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
              nostrud exerci tation ullamcorper suscipit lobortis nisl ut
              aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor
              in hendrerit in vulputate velit esse molestie consequat, vel illum
              dolore eu feugiat nulla facilisis at vero eros et accumsan et
              iusto odio dignissim qui blandit praesent luptatum zzril delenit
              augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit
              amet consectetur adipisicing elit. Labore consequuntur ipsa,
              aliquid cupiditate praesentium veniam repudiandae laboriosam
              quaerat odio, vel quis ducimus optio. Molestias sed eaque beatae
              possimus perspiciatis cupiditate?<br />Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Facilis mollitia rerum dignissimos
              beatae ipsum vero nemo reprehenderit totam explicabo ad laudantium
              nobis, repudiandae labore dolorum aperiam unde. Officia, tenetur
              debitis! Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Assumenda veniam autem nobis nisi quo saepe maxime voluptate
              laborum, eius magni est commodi libero ullam sint ducimus quos
              explicabo placeat aliquid. Lorem ipsum dolor sit amet,
              consectetuer adipiscing elit, sed diam nonummy nibh euismod
              tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
              enim ad minim veniam, quis nostrud exerci tation ullamcorper
              suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis
              autem vel eum iriure dolor in hendrerit in vulputate velit esse
              molestie consequat, vel illum dolore eu feugiat nulla facilisis at
              vero eros et accumsan et iusto odio dignissim qui blandit praesent
              luptatum zzril delenit augue duis dolore te feugait nulla
              facilisi.Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
              sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
              aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
              exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
              commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
              vulputate velit esse molestie consequat, vel illum dolore eu
              feugiat nulla facilisis at vero eros et accumsan et iusto odio
              dignissim qui blandit praesent luptatum zzril delenit augue duis
              dolore te feugait nulla facilisi.
            </p>
          </aside>
        </div>
        <div class="voie2 voieItem">
          <nav class="voieNav"></nav>
          <aside class="voieDesc"></aside>
        </div>
        <div class="voie3 voieItem">
          <nav class="voieNav"></nav>
          <aside class="voieDesc"></aside>
        </div>
        <div class="voie4 voieItem">
          <nav class="voieNav"></nav>
          <aside class="voieDesc"></aside>
        </div>
        <div class="voie5 voieItem">
          <nav class="voieNav"></nav>
          <aside class="voieDesc"></aside>
        </div>
        <div class="voie6 voieItem">
          <nav class="voieNav"></nav>
          <aside class="voieDesc"></aside>
        </div>
      </div>
    </main>
    <div class="cleaner"></div>

    <script type="text/javascript" src="script/jquery.js"></script>
    <script type="text/javascript" src="script/main.js"></script>
  </body>
</html>
