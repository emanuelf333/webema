<div class="container" style="position:relative">
      <div class="carouselTitle">
        <h2><img src="./img/Logo.png" alt="Björk Utopia"></h1>
      </div>
      <div id="carouselTop" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./img/carousel1.jpg" alt="Björk Utopia 1">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/carousel2.jpg" alt="Björk Utopia 2">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/carousel3.jpg" alt="Björk Utopia 3">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselTop" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselTop" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> <!-- cierra carrousel -->
    </div>

    <div class="container cardContainer" id="utopiaNews">
      <div class="row">
        <?php
            $query = "SELECT * FROM news";
            $result = mysqli_query($connect, $query);
            
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)) {
                    $newsTitle = $row["newsTitle"];
                    $newsImg = $row["newsImg"];
                    $newsContent = $row["newsContent"];
                echo "
                <div class='col-md-6 col-lg-4'>
                  <div class='card'>
                    <img class='card-img-top' src='./img/{$newsImg}'>
                    <div class='card-body'>
                      <h5 class='card-title'>{$newsTitle}</h5>
                      <p class='card-text'>{$newsContent}</p>
                      <a href='#!' class='btn btnBjork'>+</a>
                    </div>
                  </div>
                </div>";
                }
            }
        ?>
      </div> <!-- cierra row -->
    </div>

    <div class="container-fluid albumContainer" id="utopiaAlbum">
      <div class="container">
        <div class="row featurette">
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" alt="Utopia Cassette" src="./img/b8.jpg">
            <img src="./img/Logo3.jpg" alt="pollito" class="imageTag">
          </div>
          <div class="col-md-7 albumTxt">
            <h2 class="featurette-heading">Utopia <span class="text-muted">by Björk</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
              semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
              commodo.</p>
          </div>
        </div>
      </div>
    </div>