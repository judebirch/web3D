<!doctype html>
<html lang="en">
<head>
<title>Coca Cola</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assignment/application/css/bootstrap.css" crossorigin="anonymous">
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
    body, html {
        height: 100%;
        margin: 0;
        padding: 0;
        overflow: auto; 
    }
    .background-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1; 
    }
    .full-screen-bg {
        height: 100vh;
        width: 100vw;
        background: linear-gradient(to bottom, #A71513, #D11C15); 
        display: flex;
        align-items: center; 
        justify-content: center; 
        margin: 0;
        padding: 0;
    }
    .content-wrapper {
        position: relative;
        z-index: 1; 
    }

    .thumbnail {
        position: relative;
        margin: 20px 0;
        border-radius: 15px;
        overflow: hidden;
    }

    .thumbnail .background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: darkred;
        z-index: -1;
    }

    .thumbnail img {
        width: 100%;
        height: auto;
    }

    .caption {
        padding-top: 10px; /* Add a small gap between title and image */
        color: white;
    }

</style>
</head>
<body>
    <div class="background-wrapper">
        <div class="full-screen-bg">
        </div>
    </div>

    <div class="content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <a class="navbar-brand" href="#">Coca Cola</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" id="navHome" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="navModels" href="#">Models</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- This is the home page contents -->
          <div id="home" class="main_contents">

          <div class="text-center">
          <img src="../assignment/application/assets/images/cocacolalogo.png" alt="Logo" style="width:25%">
          </div>

          <div id="home_title"></div>


          <div class="row justify-content-center">
    <div class="col-md-6 d-flex justify-content-center mt-3 mb-3">
        <div id="carouselControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../assignment/application/assets/images/carousel1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../assignment/application/assets/images/carousel2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../assignment/application/assets/images/carousel3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../assignment/application/assets/images/carousel4.jpg" alt="Fourth slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

          



          <div id="home_subtitle"></div>

          <div class="container">
  <div class="row text-center">


    <div class="col-md-4">
      <div class="thumbnail">
        <div class="background"></div>
        <a href="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste">
          <img src="../assignment/application/assets/images/gallery/ColaBottle.png" alt="Cola Bottle" style="width:100%">
          <div class="caption" id="home_gcb_title"></div>
          <div class="caption" id="home_gcb_caption"></div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <div class="background"></div>
        <a href="https://www.coca-cola.com/gb/en/brands/sprite">
          <img src="../assignment/application/assets/images/gallery/SpriteBottle.png" alt="Water Bottle" style="width:100%">
          <div class="caption" id="home_gsb_title"></div>
          <div class="caption" id="home_gsb_caption"></div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <div class="background"></div>
        <a href="https://www.coca-cola.com/gb/en/brands/fanta">
          <img src="../assignment/application/assets/images/gallery/FantaBottle.png" alt="Fanta Bottle" style="width:100%">
          <div class="caption" id="home_gfb_title"></div>
          <div class="caption" id="home_gfb_caption"></div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <div class="background"></div>
        <a href="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste">
          <img src="../assignment/application/assets/images/gallery/ColaCan.png" alt="Cola Can" style="width:100%">
          <div class="caption" id="home_gcc_title"></div>
          <div class="caption" id="home_gcc_caption"></div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <div class="background"></div>
        <a href="https://www.coca-cola.com/gb/en/brands/sprite">
          <img src="../assignment/application/assets/images/gallery/SpriteCan.png" alt="Sprite Can" style="width:100%">
          <div class="caption" id="home_gsc_title"></div>
          <div class="caption" id="home_gsc_caption"></div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <div class="background"></div>
        <a href="https://www.coca-cola.com/gb/en/brands/fanta">
          <img src="../assignment/application/assets/images/gallery/FantaCan.png" alt="Pepsi Bottle" style="width:100%">
          <div class="caption" id="home_gfc_title"></div>
          <div class="caption" id="home_gfc_caption"></div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <div class="background"></div>
        <a href="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste">
          <img src="../assignment/application/assets/images/gallery/ColaCup.png" alt="Water Bottle" style="width:100%">
          <div class="caption" id="home_gcCup_title"></div>
          <div class="caption" id="home_gcCup_caption"></div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <div class="background"></div>
        <a href="https://www.coca-cola.com/gb/en/brands/sprite">
          <img src="../assignment/application/assets/images/gallery/SpriteCup.png" alt="Water Bottle" style="width:100%">
          <div class="caption" id="home_gsCup_title"></div>
          <div class="caption" id="home_gsCup_caption"></div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <div class="background"></div>
        <a href="https://www.coca-cola.com/gb/en/brands/fanta">
          <img src="../assignment/application/assets/images/gallery/FantaCup.png" alt="Water Bottle" style="width:100%">
          <div class="caption" id="home_gfCup_title"></div>
          <div class="caption" id="home_gfCup_caption"></div>
        </a>
      </div>
    </div>

  </div>
</div>
            
          </div>  <!-- End home page contents-->

        <!-- This is the content for 3D models -->
        <div id="models" class="main_contents">

        <div id="model_title"></div>

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-8">
                    <iframe id="unityIframe" src="unityIndex.html" width="100%" height="600px" frameborder="0" allowfullscreen style="overflow:hidden;" scrolling="no"></iframe>
                    <div id="model_caption"></div>
                
                  </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column">
                        <button class="mb-2 btn btn-light" onclick="setCan()">Can</button>
                        <button class="mb-2 btn btn-light" onclick="setBottle()">Bottle</button>
                        <button class="mb-2 btn btn-light" onclick="setCup()">Cup</button>
                        <button class="mb-2 btn btn-primary" onclick="changeTexture()">Change Texture</button>
                        <button class="mb-2 btn btn-primary" onclick="changeLights()">Change Light</button>
                        <button class="mb-2 btn btn-info" onclick="toggleAnim()">Animate</button>
                        <button class="mb-2 btn btn-info" onclick="toggleIdle()">Idle</button>
                        <button class="mb-2 btn btn-success" onclick="toggleWireframe()">Wireframe</button>
                    </div>
                </div>
            </div>
        </div>

        

        </div> 

    </div>

    <script>
      var modelTextureId = 0;
      var modelId = 0;

      function sendMessageToUnity() {
        var iframe = document.getElementById('unityIframe');
        var message = ["Model", "SetDir", null];
        iframe.contentWindow.postMessage(message, '*');
      }

      function setCan() {
        modelId = 0;

        unityMessage("Model", "SetModel", 0);
        unityMessage("Model", "SetTexture", modelTextureId);

        updateCaption();
      }

      function setBottle() {
        modelId = 1;

        unityMessage("Model", "SetModel", 1);
        unityMessage("Model", "SetTexture", modelTextureId);

        updateCaption();
      }

      function setCup() {
        modelId = 2;

        unityMessage("Model", "SetModel", 2);
        unityMessage("Model", "SetTexture", modelTextureId);

        updateCaption();
      }
      
      function updateCaption()
      {
        // Map model id and model texture id to json access id for the item
        var id = 1;
        switch(modelId)
        {
          case 0:
            id += 3;
            break;
          case 1:
            id += 0;
            break;
          case 2:
            id += 6;
            break;
        }

        switch(modelTextureId)
        {
          case 0:
            id += 0;
            break;
          case 1:
            id += 2;
            break;
          case 2:
            id += 1;
            break;
        }

        updateModelCaption(id);
      }

      function changeLights() {
        unityMessage("Directional Light", "NextState", null);
      }

      function toggleAnim() {
        unityMessage("Model", "SetState", 1);
      }

      function toggleIdle() {
        unityMessage("Model", "SetState", 0);
      }

      function changeTexture() {
        modelTextureId = (modelTextureId + 1) % 3;

        unityMessage("Model", "SetTexture", modelTextureId)
        updateCaption();
      }

      function toggleWireframe() {
        unityMessage("Model", "ToggleWireframe", null);
        unityMessage("Model", "SetTexture", modelTextureId);
      }

      function unityMessage(objectName, method, argument)
      {
        var iframe = document.getElementById('unityIframe');
        var message = [objectName, method, argument];
        iframe.contentWindow.postMessage(message, '*');
      }


      </script>

    
    <script src="../assignment/application/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
    <script src="../assignment/application/js/modelInteractions.js"></script>
    <!-- Bootstrap JS and dependencies -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="../assignment/application/js/swap_restyle.js"></script>

    <!-- JQuery code to get content data from a backend JSON file -->
    <script src="../assignment/application/js/getJsonData.js"></script>
</body>
</html>
