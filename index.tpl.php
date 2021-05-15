<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Kávévilág</title>
  <link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="wrapper">
    <header>
      <h1>Ikarus BSE Atlétika</h1> 
    </header>
    <nav>
      <ul>
      <?php
      foreach ($oldalak as $oldalnev => $oldalleir) {
        if ($oldalleir == $keres) {
          echo '<li><a class="aktiv" href="?pid='.$oldalnev.'">'.$oldalleir["menuszoveg"].'</a></li>';
        } else {
          echo '<li><a href="?pid='.$oldalnev.'">'.$oldalleir["menuszoveg"].'</a></li>';
        }
      }
      ?>
      </ul>
    </nav>
    <div class="main">
      <aside>
        <section>
          <h2>Hasznos linkek</h2>
          <ul>
            <li><a href="https://atletika.hu/hu">MASZ</a></li>
            <li><a href="https://www.ikarusatletika.hu">Ikarus Atlétika Hírei</a></li>
            <li><a href="https://www.facebook.com/IkarusBseAtletikaiSzakosztaly/">Ikarus facebook</a></li>
          </ul>
        </section>
      </aside>
      <div class="content">
        <?php
          include("contents/".$keres["fajl"].".php");
        ?>
      </div>
    </div>
    <footer>
      &copy; 2021 - Ikarus BSE Atlétika |
      eredeti oldal: <a href="https://atletika.hu/hu">Ikarus.hu</a>
    </footer>
  </div>
</body>
</html>
