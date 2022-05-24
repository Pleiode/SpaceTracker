<div id="GoToSolarSystem" style="display: none; position:absolute; left:15px; top:15px; z-index:1; cursor:pointer;">
    <svg onclick="unityInstance.SendMessage('SceneManager', 'GoFade'); BackToSolarSystem();" xmlns="http://www.w3.org/2000/svg" width="159" height="38" viewBox="0 0 159 38">
        <g transform="translate(-15 -15)">
            <g transform="translate(15 15)" fill="none" stroke="#fff" stroke-width="2">
                <rect width="159" height="38" rx="8" stroke="none" />
                <rect x="1" y="1" width="157" height="36" rx="7" fill="none" />
            </g>
            <path d="M-1350.087,1334.752l-7.588,7.587,7.588,7.587" transform="translate(1384.745 -1308.111)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" /><text transform="translate(74.866 39)" fill="#fff" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                <tspan x="0" y="0">Quitter Mars</tspan>
            </text>
            <g transform="translate(44.118 21.555)">
                <path d="M9.255,8.818,8.168,8.763a3.112,3.112,0,0,0-2.353.9L4.187,11.295a.589.589,0,0,0,.191.961l2.437,1.009a14.591,14.591,0,0,0-.488,1.72.421.421,0,0,0,.114.387l3.07,3.07a.421.421,0,0,0,.387.114,14.644,14.644,0,0,0,1.72-.488l1.011,2.439a.589.589,0,0,0,.961.191l1.627-1.627a3.108,3.108,0,0,0,.9-2.353l-.055-1.087c3.566-2.8,5.707-6.97,6.367-12.393a.707.707,0,0,0-.786-.786C16.225,3.111,12.058,5.254,9.255,8.818ZM21.579,3.306C20.912,8.5,18.826,12.468,15.384,15.1a.421.421,0,0,0-.164.355l.067,1.306a2.267,2.267,0,0,1-.66,1.716l-1.36,1.36-1.026-2.462a.421.421,0,0,0-.538-.231,14.065,14.065,0,0,1-1.76.543L7.209,14.951a14.088,14.088,0,0,1,.542-1.76.421.421,0,0,0-.231-.538L5.06,11.631l1.36-1.36a2.269,2.269,0,0,1,1.716-.66l1.306.067A.421.421,0,0,0,9.787,9.5C12.417,6.059,16.385,3.973,21.579,3.306Zm-5.318,7.4a2.086,2.086,0,1,0-1.472-.61A2.086,2.086,0,0,0,16.261,10.71Zm-.877-2.967a1.245,1.245,0,1,1-.366.881A1.245,1.245,0,0,1,15.384,7.743ZM3.018,22.445h0a6.729,6.729,0,0,0,5.555-2.6.524.524,0,0,0-.549-.814,3.663,3.663,0,0,1-1.352.093,1.051,1.051,0,0,1-.917-.917,3.671,3.671,0,0,1,.1-1.346.524.524,0,0,0-.814-.553,6.734,6.734,0,0,0-2.6,5.549.58.58,0,0,0,.578.589ZM4.91,17.54a4.437,4.437,0,0,0,.025.767,1.892,1.892,0,0,0,1.651,1.651,4.456,4.456,0,0,0,.767.025A6.135,6.135,0,0,1,3.3,21.594a6.141,6.141,0,0,1,1.6-4.056Z" transform="translate(0 0)" fill="#fff" stroke="#fff" stroke-width="1" />
            </g>
        </g>
    </svg>
</div>

<div id="SolarSystem" style="display: block; position:absolute;  z-index:1; cursor:pointer; top: 96%; left: 50%; transform: translate(-50%, -50%) ">



</div>


<svg style="padding:15px; position:absolute; z-index:1" onclick="openNav()" xmlns="http://www.w3.org/2000/svg" width="14.142" height="26.285" viewBox="0 0 14.142 26.285">
    <path id="Tracé_15" data-name="Tracé 15" d="M-1345.947,1334.752l-11.728,11.728,11.728,11.728" transform="translate(-1344.532 1359.623) rotate(180)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
</svg>


<img style="position:absolute; left:15px; bottom:15px; z-index:1; transform: none;" src="logo.grey.png" alt="logo.grey">


<!--//////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////// MENU ////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////-->



<div style="display: none;" id="mySidenav" class="sidenav menu scroller">



    <img style="display:block; margin-left: auto; margin-right:auto; color:red; transform: none;" src="logo.svg" alt="logo">

    <svg onclick="closeNav()" style="float: right;" xmlns="http://www.w3.org/2000/svg" width="14.142" height="26.285" viewBox="0 0 14.142 26.285">
        <path id="Tracé_8" data-name="Tracé 8" d="M-1345.947,1334.752l-11.728,11.728,11.728,11.728" transform="translate(1358.675 -1333.338)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
    </svg>
    <h1 style="margin-top: 70px;">Explorez</h1>

    

    <!--//////////////// SECTION DES PAGES OBJETS ////////////////////////////-->


    <div>
        <h2>Satellite</h2>
        <ul>

            <li onclick="unityInstance.SendMessage('Image', 'FadeBlack',); unityInstance.SendMessage('UIManager', 'SwitchToDetailedPlanetView', 'Calipso'); unityInstance.SendMessage('ConfigController', 'SetDistanceSatellite'); CalipsoButton(); closeNav();  ">


                <div style="display: flex;">
                    <img style="margin: auto; margin-right:20px; margin-left:10px; " src="images/satellite.svg" alt="satellite">
                    <div>
                        <h3>Calipso</h3>
                        <h4>En orbit autour de la Terre</h4>
                    </div>
                </div>
            </li>

            <li onclick="unityInstance.SendMessage('Image', 'FadeBlack',); unityInstance.SendMessage('UIManager', 'SwitchToDetailedPlanetView', 'Juno'); unityInstance.SendMessage('ConfigController', 'SetDistanceSatellite'); JunoButton(); closeNav(); ">


                <div style="display: flex;">
                    <img style="margin: auto; margin-right:20px; margin-left:10px; " src="images/satellite.svg" alt="satellite">
                    <div>
                        <h3>Juno</h3>
                        <h4>En orbite autour de Jupiter</h4>
                    </div>
                </div>
            </li>

            <li onclick="unityInstance.SendMessage('Image', 'FadeBlack',); unityInstance.SendMessage('UIManager', 'SwitchToDetailedPlanetView', 'Jason'); unityInstance.SendMessage('ConfigController', 'SetDistanceSatellite'); JasonButton(); closeNav();">


                <div style="display: flex;">
                    <img style="margin: auto; margin-right:20px; margin-left:10px; " src="images/satellite.svg" alt="satellite">
                    <div>
                        <h3>Jason</h3>
                        <h4>En orbite autour de la Terre</h4>
                    </div>
                </div>
            </li>


            <div style="background-color: rgba(20, 20, 20, 0.7); padding:2px; border-radius: 8px; margin-top: 15px; text-align:center; width:16em;">
                <h4>Plus de missions à venir…</h4>
            </div>
        </ul>


    </div>

    <div style="margin-top:50px;">
        <h2>Rover</h2>
        <ul>
            <li onclick="unityInstance.SendMessage('SceneManager', 'GoFade');  PerseveranceButton(); closeNav(); ViewInPlanet();">


                <div style="display: flex;">
                    <img style="margin: auto; margin-right:20px; margin-left:10px; " src="images/rover.svg" alt="rover">
                    <div>
                        <h3>Perseverance</h3>
                        <h4>A atterri sur Mars</h4>
                    </div>
                </div>
            </li>

            <div style="background-color: rgba(20, 20, 20, 0.7); padding:2px; border-radius: 8px; margin-top: 15px; text-align:center; width:16em;">
                <h4>Plus de missions à venir…</h4>
            </div>
        </ul>
    </div>

    <div style="margin-top:50px; margin-bottom:10vh">
        <h2>Planète</h2>

        <ul>

            <li onclick="unityInstance.SendMessage('Image', 'FadeBlack',); unityInstance.SendMessage('UIManager', 'SwitchToDetailedPlanetView', 'Mercury'); MercureButton(); closeNav(); ">
                <div style="display: flex;">
                    <img style="margin: auto; margin-right:20px; margin-left:10px; " src="images/planete.svg" alt="satellite">
                    <div>
                        <h3>Mercure</h3>
                        <h4>Planète rocheuse</h4>
                    </div>
                </div>
            </li>

            <li onclick="unityInstance.SendMessage('Image', 'FadeBlack',); unityInstance.SendMessage('UIManager', 'SwitchToDetailedPlanetView', 'Venus'); VenusButton(); closeNav(); ">
                <div style="display: flex;">
                    <img style="margin: auto; margin-right:20px; margin-left:10px; " src="images/planete.svg" alt="satellite">
                    <div>
                        <h3>Venus</h3>
                        <h4>Planète rocheuse</h4>
                    </div>
                </div>
            </li>

            <li onclick="unityInstance.SendMessage('Image', 'FadeBlack',); unityInstance.SendMessage('UIManager', 'SwitchToDetailedPlanetView', 'Earth'); EarthButton(); closeNav(); ">
                <div style="display: flex;">
                    <img style="margin: auto; margin-right:20px; margin-left:10px; " src="images/planete.svg" alt="satellite">
                    <div>
                        <h3>Terre</h3>
                        <h4>Notre belle Planète</h4>
                    </div>
                </div>
            </li>

            <li onclick="unityInstance.SendMessage('Image', 'FadeBlack',); unityInstance.SendMessage('UIManager', 'SwitchToDetailedPlanetView', 'Mars');MarsButton(); closeNav();">

                <div style="display: flex;">
                    <img style="margin: auto; margin-right:20px; margin-left:10px; " src="images/planete.svg" alt="satellite">
                    <div>
                        <h3>Mars</h3>
                        <h4>Planète rocheuse</h4>
                    </div>
                </div>
            </li>

            <li onclick="unityInstance.SendMessage('Image', 'FadeBlack',); unityInstance.SendMessage('UIManager', 'SwitchToDetailedPlanetView', 'Jupiter');  JupiterButton(); closeNav();">
                <div style="display: flex;">
                    <img style="margin: auto; margin-right:20px; margin-left:10px; " src="images/planete.svg" alt="satellite">
                    <div>
                        <h3>Jupiter</h3>
                        <h4>Planète gazeuse</h4>
                    </div>
                </div>
            </li>

            <li onclick="unityInstance.SendMessage('Image', 'FadeBlack',); unityInstance.SendMessage('UIManager', 'SwitchToDetailedPlanetView', 'Saturn');  SaturneButton(); closeNav();">
                <div style="display: flex;">
                    <img style="margin: auto; margin-right:20px; margin-left:10px; " src="images/planete.svg" alt="satellite">
                    <div>
                        <h3>Saturne</h3>
                        <h4>Planète gazeuse</h4>
                    </div>
                </div>
            </li>

            <li onclick="unityInstance.SendMessage('Image', 'FadeBlack',); unityInstance.SendMessage('UIManager', 'SwitchToDetailedPlanetView', 'Uranus');  UranusButton(); closeNav();">
                <div style="display: flex;">
                    <img style="margin: auto; margin-right:20px; margin-left:10px; " src="images/planete.svg" alt="satellite">
                    <div>
                        <h3>Uranus</h3>
                        <h4>Planète gazeuse</h4>
                    </div>
                </div>
            </li>

            <li onclick="unityInstance.SendMessage('Image', 'FadeBlack',); unityInstance.SendMessage('UIManager', 'SwitchToDetailedPlanetView', 'Neptune'); NeptuneButton(); closeNav(); ">
                <div style="display: flex;">
                    <img style="margin: auto; margin-right:20px; margin-left:10px; " src="images/planete.svg" alt="satellite">
                    <div>
                        <h3>Neptune</h3>
                        <h4>Planète gazeuse</h4>
                    </div>
                </div>
            </li>

            <li onclick="unityInstance.SendMessage('Image', 'FadeBlack',); unityInstance.SendMessage('UIManager', 'SwitchToDetailedPlanetView', 'Pluto'); PlutonButton(); closeNav(); ">
                <div style="display: flex;">
                    <img style="margin: auto; margin-right:20px; margin-left:10px; " src="images/planete.svg" alt="satellite">
                    <div>
                        <h3>Pluton</h3>
                        <h4>Planète rocheuse</h4>
                    </div>
                </div>
            </li>

        </ul>



    </div>
</div>


<!--//////////////// SECTION BOUTON INFO ET SETTINGS ////////////////////////////-->
<a class="buttoninfo" onclick="informations()">
    <img src="images/info.svg" alt="informations">
</a>

<div style="display: none;" id="informations">
    <div data-aos="zoom-out-right" style="background-color: rgba(0, 0, 0, 0.7);; width:100%; height:100%; ; z-index:2; position:absolute; ">
        <div class="rect">


            <svg style="float:right;" onclick="closeinformation()" xmlns="http://www.w3.org/2000/svg" width="23.044" height="23.044" viewBox="0 0 23.044 23.044">
                <g id="Groupe_52" data-name="Groupe 52" transform="translate(-1411.086 -202.086)">
                    <line id="Ligne_9" data-name="Ligne 9" x2="20.216" y2="20.216" transform="translate(1412.5 203.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3" />
                    <line id="Ligne_10" data-name="Ligne 10" x1="20.216" y2="20.216" transform="translate(1412.5 203.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3" />
                </g>
            </svg>

            <img style="width: 30%; display:block; margin:30px; margin-left: auto; margin-right:auto; color:red;" src="logo.svg" alt="logo">

            <h1>Un référencement des missions spatiales françaises 🇫🇷</h1>

            <p style="margin-top: 40px;">
                Bienvenue sur cette simulation interactive du système solaire ! <br> <br>

                Dans cette simulation, vous pourrez découvrir les missions spatiales du <a target="_blank" style="color:#436EFF" href="https://cnes.fr/fr">CNES (Centre national d’études spatiales)</a> en cours, ainsi que celles auxquelles il a participé. Des missions vont fréquemment être ajoutées !

                Cette simulation n’est pas le système solaire en temps réel, les positons des planètes, des satellites ou tout autre objet n’est pas exact. <br> <br>

                Toutes les textures ont été récupérées via <a style="color:#436EFF" target="_blank" href="https://www.solarsystemscope.com/textures">Solarsystemscope.com</a>.
                Les modèles des planètes ont été faits main. Certains modèles de satellites, rovers et sondes, ont été récupéré via la bibliothèque des modèles 3D de l’ESA et de la <a style="color:#436EFF" target="_blank" href="https://nasa3d.arc.nasa.gov/models">NASA</a> .
                En revanche, certains modèles ont été faits main.
                Les textes et informations ont été récupérés via le site du <a target="_blank" style="color:#436EFF" href="https://calipso.cnes.fr/fr/fiches_mission_alpha">CNES</a> ,du <a target="_blank" style="color:#436EFF" href="https://www.cnrs.fr/fr/page-daccueil">CNRS</a>, ainsi que Wikipédia.<br> <br>

                Cette plateforme est le fruit de plusieurs heures de travail, mais un travail de pure passion 😉.<br>
                Alors n’hésitez pas à me soutenir en m’offrant un café 😃 (D’ailleurs ce sera un thé pour ma part, je n’aime pas le café) <br> <br>


            </p>

            <a class="tea-button" href="https://lydia-app.com/collect/82129-don-a-space-tracker/fr" target="_blank">☕️ Offrez-moi un thé</a>

            <p>
                Pour toutes questions, contactez-moi via mon adresse mail: <a target="_blank" style="color:#436EFF" href="mailto:paul.joly03@gmail.com">paul.joly03@gmail.com</a>
            </p>


            <footer style="margin-top: 50px;">
                <div style="display: flex; align-content: center;">
                    <div style="margin:0;  ">
                        <h5> 2021 - Paul Joly - Tous droits réservés
                        </h5>
                    </div>

                    <div style="margin:0; position:absolute; right: 15px;  ">
                        <a href="mentions.php">
                            <h5>Mentions légales</h5>
                        </a>
                    </div>/div>

            </footer>

        </div>
    </div>
</div>

<!--
  <a class="buttonsetting" href="">
    <img src="images/settings.svg" alt="settings">
  </a> -->


<!--//////// FONCTION ANIMATION MENU //////////////////////////////////////-->

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "17em";
        document.getElementById("mySidenav").style.padding = "15px";
        jQuery('#Tracé_15').hide();
        jQuery('#mySidenav').show();

    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav").style.padding = "0";
        jQuery('#Tracé_15').show();
    }
</script>


<!--/////////////////////////////////////////////////////////////////////////////////
  /////////////////////////////////////////////////////////////////////////////////-->











<!--//////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////// UNITY ////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////-->



<div style="width: 100%; height: 100vh; " class="webgl-content">
    <div id="unityContainer" style="width: 100%; height: 100vh;"></div>
</div> -->



<!--/////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////-->











<!--////////////////////////////////////////////////////////////
  ////////////// CARDs D'INFORMATIONS //////////////////////////
  ////////////////////////////////////////////////////////////-->

<div class="cardtemplate" style="display: none;" id="calipso">
    <?php
    include 'missions/calipso.php';
    ?>
</div>
<div class="cardtemplatebutton" id="calipsobutton">
    <h1>Calipso</h1>
    <svg style="margin-top: 10px;" onclick="Calipso();" xmlns="http://www.w3.org/2000/svg" width="103" height="28" viewBox="0 0 103 28">
        <g id="Groupe_66" data-name="Groupe 66" transform="translate(-20.495 -20)">
            <g id="Rectangle_31" data-name="Rectangle 31" transform="translate(20.495 20)" fill="none" stroke="#fff" stroke-width="2">
                <rect width="103" height="28" rx="8" stroke="none" />
                <rect x="1" y="1" width="101" height="26" rx="7" fill="none" />
            </g>
            <g id="Groupe_62" data-name="Groupe 62" transform="translate(27.495 26)">
                <text id="Informations" transform="translate(0 13)" fill="#fff" font-size="14" font-family="Poppins-Regular, Poppins">
                    <tspan x="0" y="0">Informations</tspan>
                </text>
            </g>
        </g>
    </svg>
</div>



<div class="cardtemplate" style="display: none;" id="mars">
    <?php
    include 'planetes/mars.php';
    ?>
</div>
<div class="cardtemplatebutton" id="marsbutton">
    <h1>Mars</h1>
    <svg style="margin-top: 10px;" onclick="Mars();" xmlns="http://www.w3.org/2000/svg" width="103" height="28" viewBox="0 0 103 28">
        <g id="Groupe_66" data-name="Groupe 66" transform="translate(-20.495 -20)">
            <g id="Rectangle_31" data-name="Rectangle 31" transform="translate(20.495 20)" fill="none" stroke="#fff" stroke-width="2">
                <rect width="103" height="28" rx="8" stroke="none" />
                <rect x="1" y="1" width="101" height="26" rx="7" fill="none" />
            </g>
            <g id="Groupe_62" data-name="Groupe 62" transform="translate(27.495 26)">
                <text id="Informations" transform="translate(0 13)" fill="#fff" font-size="14" font-family="Poppins-Regular, Poppins">
                    <tspan x="0" y="0">Informations</tspan>
                </text>
            </g>
        </g>
    </svg>
</div>



<div class="cardtemplate" style="display: none;" id="jason">
    <?php
    include 'missions/jason.php';
    ?>
</div>
<div class="cardtemplatebutton" id="jasonbutton">
    <h1>Jason</h1>
    <svg style="margin-top: 10px;" onclick="Jason();" xmlns="http://www.w3.org/2000/svg" width="103" height="28" viewBox="0 0 103 28">
        <g id="Groupe_66" data-name="Groupe 66" transform="translate(-20.495 -20)">
            <g id="Rectangle_31" data-name="Rectangle 31" transform="translate(20.495 20)" fill="none" stroke="#fff" stroke-width="2">
                <rect width="103" height="28" rx="8" stroke="none" />
                <rect x="1" y="1" width="101" height="26" rx="7" fill="none" />
            </g>
            <g id="Groupe_62" data-name="Groupe 62" transform="translate(27.495 26)">
                <text id="Informations" transform="translate(0 13)" fill="#fff" font-size="14" font-family="Poppins-Regular, Poppins">
                    <tspan x="0" y="0">Informations</tspan>
                </text>
            </g>
    </svg>
</div>



<div class="cardtemplate" style="display: none;" id="jupiter">
    <?php
    include 'planetes/jupiter.php';
    ?>
</div>
<div class="cardtemplatebutton" id="jupiterbutton">
    <h1>Jupiter</h1>
    <svg style="margin-top: 10px;" onclick="Jupiter();" xmlns="http://www.w3.org/2000/svg" width="103" height="28" viewBox="0 0 103 28">
        <g id="Groupe_66" data-name="Groupe 66" transform="translate(-20.495 -20)">
            <g id="Rectangle_31" data-name="Rectangle 31" transform="translate(20.495 20)" fill="none" stroke="#fff" stroke-width="2">
                <rect width="103" height="28" rx="8" stroke="none" />
                <rect x="1" y="1" width="101" height="26" rx="7" fill="none" />
            </g>
            <g id="Groupe_62" data-name="Groupe 62" transform="translate(27.495 26)">
                <text id="Informations" transform="translate(0 13)" fill="#fff" font-size="14" font-family="Poppins-Regular, Poppins">
                    <tspan x="0" y="0">Informations</tspan>
                </text>
            </g>
        </g>
    </svg>
</div>



<div class="cardtemplate" style="display: none;" id="perseverance">
    <?php
    include 'missions/perseverance.php';
    ?>
</div>
<div class="cardtemplatebutton" id="perseverancebutton">
    <h1>Perseverance</h1>
    <svg style="margin-top: 10px;" onclick="Perseverance();" xmlns="http://www.w3.org/2000/svg" width="103" height="28" viewBox="0 0 103 28">
        <g id="Groupe_66" data-name="Groupe 66" transform="translate(-20.495 -20)">
            <g id="Rectangle_31" data-name="Rectangle 31" transform="translate(20.495 20)" fill="none" stroke="#fff" stroke-width="2">
                <rect width="103" height="28" rx="8" stroke="none" />
                <rect x="1" y="1" width="101" height="26" rx="7" fill="none" />
            </g>
            <g id="Groupe_62" data-name="Groupe 62" transform="translate(27.495 26)">
                <text id="Informations" transform="translate(0 13)" fill="#fff" font-size="14" font-family="Poppins-Regular, Poppins">
                    <tspan x="0" y="0">Informations</tspan>
                </text>
            </g>
        </g>
    </svg>
</div>



<div class="cardtemplate" style="display: none;" id="venus">
    <?php
    include 'planetes/venus.php';
    ?>
</div>
<div class="cardtemplatebutton" id="venusbutton">
    <h1>Venus</h1>
    <svg style="margin-top: 10px;" onclick="Venus();" xmlns="http://www.w3.org/2000/svg" width="103" height="28" viewBox="0 0 103 28">
        <g id="Groupe_66" data-name="Groupe 66" transform="translate(-20.495 -20)">
            <g id="Rectangle_31" data-name="Rectangle 31" transform="translate(20.495 20)" fill="none" stroke="#fff" stroke-width="2">
                <rect width="103" height="28" rx="8" stroke="none" />
                <rect x="1" y="1" width="101" height="26" rx="7" fill="none" />
            </g>
            <g id="Groupe_62" data-name="Groupe 62" transform="translate(27.495 26)">
                <text id="Informations" transform="translate(0 13)" fill="#fff" font-size="14" font-family="Poppins-Regular, Poppins">
                    <tspan x="0" y="0">Informations</tspan>
                </text>
            </g>
        </g>
    </svg>
</div>


<div class="cardtemplate" style="display: none;" id="terre">
    <?php
    include 'planetes/terre.php';
    ?>
</div>
<div class="cardtemplatebutton" id="terrebutton">
    <h1>Terre</h1>
    <svg style="margin-top: 10px;" onclick="Terre();" xmlns="http://www.w3.org/2000/svg" width="103" height="28" viewBox="0 0 103 28">
        <g id="Groupe_66" data-name="Groupe 66" transform="translate(-20.495 -20)">
            <g id="Rectangle_31" data-name="Rectangle 31" transform="translate(20.495 20)" fill="none" stroke="#fff" stroke-width="2">
                <rect width="103" height="28" rx="8" stroke="none" />
                <rect x="1" y="1" width="101" height="26" rx="7" fill="none" />
            </g>
            <g id="Groupe_62" data-name="Groupe 62" transform="translate(27.495 26)">
                <text id="Informations" transform="translate(0 13)" fill="#fff" font-size="14" font-family="Poppins-Regular, Poppins">
                    <tspan x="0" y="0">Informations</tspan>
                </text>
            </g>
        </g>
    </svg>
</div>


<div class="cardtemplate" style="display: none;" id="mercure">
    <?php
    include 'planetes/mercure.php';
    ?>
</div>
<div class="cardtemplatebutton" id="mercurebutton">
    <h1>Mercure</h1>
    <svg style="margin-top: 10px;" onclick="Mercure();" xmlns="http://www.w3.org/2000/svg" width="103" height="28" viewBox="0 0 103 28">
        <g id="Groupe_66" data-name="Groupe 66" transform="translate(-20.495 -20)">
            <g id="Rectangle_31" data-name="Rectangle 31" transform="translate(20.495 20)" fill="none" stroke="#fff" stroke-width="2">
                <rect width="103" height="28" rx="8" stroke="none" />
                <rect x="1" y="1" width="101" height="26" rx="7" fill="none" />
            </g>
            <g id="Groupe_62" data-name="Groupe 62" transform="translate(27.495 26)">
                <text id="Informations" transform="translate(0 13)" fill="#fff" font-size="14" font-family="Poppins-Regular, Poppins">
                    <tspan x="0" y="0">Informations</tspan>
                </text>
            </g>
        </g>
    </svg>
</div>



<div class="cardtemplate" style="display: none;" id="saturne">
    <?php
    include 'planetes/saturne.php';
    ?>
</div>
<div class="cardtemplatebutton" id="saturnebutton">
    <h1>Saturne</h1>
    <svg style="margin-top: 10px;" onclick="Saturne();" xmlns="http://www.w3.org/2000/svg" width="103" height="28" viewBox="0 0 103 28">
        <g id="Groupe_66" data-name="Groupe 66" transform="translate(-20.495 -20)">
            <g id="Rectangle_31" data-name="Rectangle 31" transform="translate(20.495 20)" fill="none" stroke="#fff" stroke-width="2">
                <rect width="103" height="28" rx="8" stroke="none" />
                <rect x="1" y="1" width="101" height="26" rx="7" fill="none" />
            </g>
            <g id="Groupe_62" data-name="Groupe 62" transform="translate(27.495 26)">
                <text id="Informations" transform="translate(0 13)" fill="#fff" font-size="14" font-family="Poppins-Regular, Poppins">
                    <tspan x="0" y="0">Informations</tspan>
                </text>
            </g>
        </g>
    </svg>
</div>



<div class="cardtemplate" style="display: none;" id="uranus">
    <?php
    include 'planetes/uranus.php';
    ?>
</div>
<div class="cardtemplatebutton" id="uranusbutton">
    <h1>Uranus</h1>
    <svg style="margin-top: 10px;" onclick="Uranus();" xmlns="http://www.w3.org/2000/svg" width="103" height="28" viewBox="0 0 103 28">
        <g id="Groupe_66" data-name="Groupe 66" transform="translate(-20.495 -20)">
            <g id="Rectangle_31" data-name="Rectangle 31" transform="translate(20.495 20)" fill="none" stroke="#fff" stroke-width="2">
                <rect width="103" height="28" rx="8" stroke="none" />
                <rect x="1" y="1" width="101" height="26" rx="7" fill="none" />
            </g>
            <g id="Groupe_62" data-name="Groupe 62" transform="translate(27.495 26)">
                <text id="Informations" transform="translate(0 13)" fill="#fff" font-size="14" font-family="Poppins-Regular, Poppins">
                    <tspan x="0" y="0">Informations</tspan>
                </text>
            </g>
        </g>
    </svg>
</div>



<div class="cardtemplate" style="display: none;" id="neptune">
    <?php
    include 'planetes/neptune.php';
    ?>
</div>
<div class="cardtemplatebutton" id="neptunebutton">
    <h1>Neptune</h1>
    <svg style="margin-top: 10px;" onclick="Neptune();" xmlns="http://www.w3.org/2000/svg" width="103" height="28" viewBox="0 0 103 28">
        <g id="Groupe_66" data-name="Groupe 66" transform="translate(-20.495 -20)">
            <g id="Rectangle_31" data-name="Rectangle 31" transform="translate(20.495 20)" fill="none" stroke="#fff" stroke-width="2">
                <rect width="103" height="28" rx="8" stroke="none" />
                <rect x="1" y="1" width="101" height="26" rx="7" fill="none" />
            </g>
            <g id="Groupe_62" data-name="Groupe 62" transform="translate(27.495 26)">
                <text id="Informations" transform="translate(0 13)" fill="#fff" font-size="14" font-family="Poppins-Regular, Poppins">
                    <tspan x="0" y="0">Informations</tspan>
                </text>
            </g>
        </g>
    </svg>
</div>



<div class="cardtemplate" style="display: none;" id="pluton">
    <?php
    include 'planetes/pluton.php';
    ?>
</div>
<div class="cardtemplatebutton" id="plutonbutton">
    <h1>Pluton</h1>
    <svg style="margin-top: 10px;" onclick="Pluton();" xmlns="http://www.w3.org/2000/svg" width="103" height="28" viewBox="0 0 103 28">
        <g id="Groupe_66" data-name="Groupe 66" transform="translate(-20.495 -20)">
            <g id="Rectangle_31" data-name="Rectangle 31" transform="translate(20.495 20)" fill="none" stroke="#fff" stroke-width="2">
                <rect width="103" height="28" rx="8" stroke="none" />
                <rect x="1" y="1" width="101" height="26" rx="7" fill="none" />
            </g>
            <g id="Groupe_62" data-name="Groupe 62" transform="translate(27.495 26)">
                <text id="Informations" transform="translate(0 13)" fill="#fff" font-size="14" font-family="Poppins-Regular, Poppins">
                    <tspan x="0" y="0">Informations</tspan>
                </text>
            </g>
        </g>
    </svg>
</div>




<div class="cardtemplate" style="display: none;" id="juno">
    <?php
    include 'missions/juno.php';
    ?>
</div>
<div class="cardtemplatebutton" id="junobutton">
    <h1>Juno</h1>
    <svg style="margin-top: 10px;" onclick="Juno();" xmlns="http://www.w3.org/2000/svg" width="103" height="28" viewBox="0 0 103 28">
        <g id="Groupe_66" data-name="Groupe 66" transform="translate(-20.495 -20)">
            <g id="Rectangle_31" data-name="Rectangle 31" transform="translate(20.495 20)" fill="none" stroke="#fff" stroke-width="2">
                <rect width="103" height="28" rx="8" stroke="none" />
                <rect x="1" y="1" width="101" height="26" rx="7" fill="none" />
            </g>
            <g id="Groupe_62" data-name="Groupe 62" transform="translate(27.495 26)">
                <text id="Informations" transform="translate(0 13)" fill="#fff" font-size="14" font-family="Poppins-Regular, Poppins">
                    <tspan x="0" y="0">Informations</tspan>
                </text>
            </g>
        </g>
    </svg>
</div>

<!--/////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////-->









<!--////////////////////////////////////////////////////////////
  //////// FONCTION APPELANT LES CARDs D'INFORMATIONS /////////
  ////////////////////////////////////////////////////////////-->

<script>
    function ToggleSlider() {
       
    }

    function CalipsoButton() {
        jQuery('.cardtemplatebutton').hide();
        jQuery('#calipsobutton').show();
    }

    function JunoButton() {
        jQuery('.cardtemplatebutton').hide();
        jQuery('#junobutton').show();
    }

    function JasonButton() {
        jQuery('.cardtemplatebutton').hide();
        jQuery('#jasonbutton').show();
    }

    function PerseveranceButton() {
        jQuery('.cardtemplatebutton').hide();
        jQuery('#perseverancebutton').show();
    }

    function JupiterButton() {
        jQuery('.cardtemplatebutton').hide();
        jQuery('#jupiterbutton').show();
    }

    function VenusButton() {
        jQuery('.cardtemplatebutton').hide();
        jQuery('#venusbutton').show();
    }

    function MercureButton() {
        jQuery('.cardtemplatebutton').hide();
        jQuery('#mercurebutton').show();
    }

    function SaturneButton() {
        jQuery('.cardtemplatebutton').hide();
        jQuery('#saturnebutton').show();
    }

    function PlutonButton() {
        jQuery('.cardtemplatebutton').hide();
        jQuery('#plutonbutton').show();
    }

    function UranusButton() {
        jQuery('.cardtemplatebutton').hide();
        jQuery('#uranusbutton').show();
    }

    function NeptuneButton() {
        jQuery('.cardtemplatebutton').hide();
        jQuery('#neptunebutton').show();
    }

    function MarsButton() {
        jQuery('.cardtemplatebutton').hide();
        jQuery('#marsbutton').show();
    }

    function EarthButton() {
        jQuery('.cardtemplatebutton').hide();
        jQuery('#terrebutton').show();
    }



    function informations() {
        jQuery('#informations').show();
    }

    function closeinformation() {
        jQuery('#informations').hide();
    }

    function closeinformationmission() {
        jQuery('.cardtemplate').hide();
    }


    function Mars() {
        jQuery('.cardtemplate').hide();
        jQuery('#mars').show();
    }

    function Jupiter() {
        jQuery('.cardtemplate').hide();
        jQuery('#jupiter').show();
    }

    function Calipso() {
        jQuery('.cardtemplate').hide();
        jQuery('#calipso').show();
    }

    function Mercure() {
        jQuery('.cardtemplate').hide();
        jQuery('#mercure').show();
    }

    function Neptune() {
        jQuery('.cardtemplate').hide();
        jQuery('#neptune').show();
    }

    function Pluton() {
        jQuery('.cardtemplate').hide();
        jQuery('#pluton').show();
    }

    function Saturne() {
        jQuery('.cardtemplate').hide();
        jQuery('#saturne').show();
    }

    function Terre() {
        jQuery('.cardtemplate').hide();
        jQuery('#terre').show();
    }

    function Uranus() {
        jQuery('.cardtemplate').hide();
        jQuery('#uranus').show();
    }

    function Venus() {
        jQuery('.cardtemplate').hide();
        jQuery('#venus').show();
    }

    function ViewInPlanet() {
        jQuery('#mySidenav').hide();
        jQuery('#Tracé_15').hide();
        jQuery('#GoToSolarSystem').show();
    }

    function BackToSolarSystem() {
        jQuery('#mySidenav').show();
        jQuery('#Tracé_15').show();
        jQuery('#GoToSolarSystem').hide();
        jQuery('.cardtemplate').hide();
        jQuery('#SolarSystem').show();
        jQuery('.cardtemplatebutton').hide();
    }

    function SolarSystem() {
        jQuery('.cardtemplate').hide();
    }

    function Perseverance() {
        jQuery('.cardtemplate').hide();
        jQuery('#perseverance').show();
        jQuery('#SolarSystem').hide();
    }

    function Juno() {
        jQuery('.cardtemplate').hide();
        jQuery('#juno').show();
    }

    function Jason() {
        jQuery('.cardtemplate').hide();
        jQuery('#jason').show();
    }
</script>