<!DOCTYPE html>
<html lang="en-us">

<head>
  <script data-host="https://microanalytics.io" data-dnt="false" src="https://microanalytics.io/js/script.js" id="ZwSg9rf6GA" async defer></script>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>SpaceTracker - Explorez les missions spatiales française</title>
  <link rel="shortcut icon" href="TemplateData/">
  <link rel="stylesheet" href="TemplateData/style-v02.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="avicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" property="og:title" content="Découvrez les missions spatiales française à travers une simulation 3D du système solaire !">
  <meta name="description" property="og:description" content="Bienvenue sur cette simulation interactive du système solaire !
   Dans cette simulation, vous pourrez découvrir les missions spatiales du CNES (Centre national d’études spatiales) en cours, ainsi que celles auxquelles elle a participé.">
  <meta name="image" property="og:image" content="images/imagepublish.png">
  <meta name="author" content="Paul Joly">
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-XVG8RW7FLZ"></script>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


  <script src="TemplateData/UnityProgress.js"></script>
  <script src="Build/UnityLoader.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <script>
    var unityInstance = UnityLoader.instantiate("unityContainer", "Build/SpaceTrackerURP.json", {
      onProgress: UnityProgress
    });
  </script>

</head>

<body>

  <div class="ad">

    <template class="ad__mobile">
      <?php
      include 'mobile.php';
      ?>
    </template>

    <template class="ad__desktop">
      <?php
      include 'desktop.php';
      ?>
    </template>



    <script>
      const isMobile = matchMedia('(max-device-width: 1280px)').matches;
      const ad = document.currentScript.closest('.ad');
      const content = ad
        .querySelector(isMobile ? '.ad__mobile' : '.ad__desktop')
        .content;

      ad.appendChild(document.importNode(content, true));
    </script>



  

  </div>



</body>

</html>