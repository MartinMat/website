<?php

include 'connection.php';
include 'compteurvisite.php';
$conn->close();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Martin Matavka</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css">
    <script src="node_modules/chart.js/dist/Chart.js"></script>
    <script src="node_modules/aos/dist/aos.js"></script>
    <script type="text/javascript" src="https://cdn.emailjs.com/sdk/2.3.2/email.min.js"></script>
    <script type="text/javascript">
      (function(){
        emailjs.init("user_P4BYRgiRA2uyftgWHtYse");
      })();
    </script>
  </head>

<body id="body">

<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-light" id="NameTitle">Martin Matavka</h1>
        <p class="lead" id="FunctionTitle">Ingénieur généraliste - Développeur web fullstack - Administrateur système</p>
      </div>
    </div>
    <div class="col-12 text-center">
    <img id="martin" src="images/martin.png" />
  </div>
  </div>
</header>



<div id="sections">

<section class="py-3" id="section1" data-aos="fade-up">
  <div class="container">
    <div class="row">
      <div class="col-md-7 mb-4">
        <h2 class="font-weight-normal" id="TitreFondBlanc"><strong>Bonjour ! Je m'appelle Martin Matavka </strong></h2>
        <p id="presentation">Jeune récemment diplômé de l'ENIB, je cherche à me construire un socle de compétences et d'expériences pour supporter ma carrière professionnelle. Rigoureux, curieux et ouvert, j'essaye toujours d'être une plus-value pour mon équipe. L'informatique est ma vocation, mais je me passionne pour beaucoup de sujets différents, tels que la musique, la photographie ou la cuisine pour en citer quelques-uns. </p>
        <span style="margin:auto; display:table;">
          <button onClick="location.href='download/CVMartinMatavka.pdf'"  target="_blank" class="button hvr-float-shadow" id="button1">Télécharger CV</button>
          <button type="button" class="button hvr-float-shadow" id="button2"  onclick="smoothScroll(document.getElementById('Contact'))">Me contacter</button>
        </span>
      </div>
      <div class="col-md-5">
        <div class="row">
          <div class="col-5">
            <p id ="categoryp"><span id="category"> Naissance : </span></p>
            <p id ="categoryp"><span id="category"> Job : </span></p>
            <p id ="categoryp"><span id="category"> Nationalité : </span></p>
            <p id ="categoryp"><span id="category"> Adresse : </span></p>
            <p id ="categoryp"><span id="category"> Téléphone : </span></p>
            <p id ="categoryp"><span id="category"> Mail : </span></p>
          </div>
          <div class="col-7">
            <p id="answer">26/07/1994</p>
            <p id="answer"><a href="https://lrtechnologies.fr/fr/" target="_blank" id="url">Consultant LR Technologies</a></p>
            <p id="answer">Français</p>
            <p id="answer">100 rue Hoche 29200 Brest</p>
            <p id="answer"><a href="tel:0664720461" id="url">+33 6 64 72 04 61</a></p>
            <p id="answer"><a href="mailto:martinmat@hotmail.fr" id="url">martinmat@hotmail.fr</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="col-12 text-center" data-aos="fade-up">
  <h2 class="font-weight-light" id="Competences">Compétences</h1>
</div>

<div class="container">
  <div class="row" id="rowcompetences">
    <div class="col-lg-6" data-aos="fade-up">
      <section class="py-3" id="section2">
        <div class="col-12 text-center">
          <h5 class="font-weight-normal" >Techniques</h1>
          <canvas id="myChart1" width="300" height="300"></canvas>
        </div>
      </section>
    </div>
    <div class="col-lg-6" data-aos="fade-up">
      <section class="py-3" id="section2">
        <div class="col-12 text-center">
          <h5 class="font-weight-normal" >Métier</h1>
          <canvas id="myChart2" width="300" height="300"></canvas>
        </div>
      </section>
    </div>
  </div>
</div>

<div class="col-12 text-center" data-aos="fade-up">
  <h2 class="font-weight-light" id="Experiences">Expériences</h1>
</div>

<ul class="timeline" data-aos="fade-up">
        <li>
          <div class="timeline-badge"></div>
          <div class="timeline-panel" data-aos="fade-left">
            <div class="timeline-heading">
              <h4 class="timeline-title">Ingénieur Système - Poste de travail</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>Crédit Mutuel Arkea. Février 2018 - Juin 2019</small></p>
            </div>
            <div class="timeline-body">
              <p>Assistance de l’équipe système dans ses projets et activités quotidiennes. Mise en place d’une infrastructure virtuelle de postes de travail sous VMWare 7. Maintenance et support de l’ancienne infrastructure VMWare 5. Mises à jour et support sur l’Active Directory d’Arkéa, gestion des stratégies de groupe (GPO). Migration de l’environnement de travail : Firefox+Zimbra -> Chrome+Gsuite ; Windows 7 -> Windows 10. Écriture de script powershell et VBS. Télédistribution de packages.</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge"></i></div>
          <div class="timeline-panel" data-aos="fade-right">
            <div class="timeline-heading">
              <h4 class="timeline-title">Stage ingénieur développement fullstack</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>Asamgo. Septembre 2017 - Janvier 2018</small></p>
            </div>
            <div class="timeline-body">
              <p>Développement de l’application web «OfiPro» destinée à récupérer les informations des clients d’Asamgo dans une base de données et de les afficher dans une interface homme machine ergonomique pour un usage professionel. Développement frontend et backend en autonomie complète, sans préexistant. Mise en ligne par solution d’hébergement. Écriture de documentations.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge"></div>
          <div class="timeline-panel" data-aos="fade-left">
            <div class="timeline-heading">
              <h4 class="timeline-title">Stage assistant ingénieur développement Android</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>Spirale Production. Juin 2016 - Novembre 2016</small></p>
            </div>
            <div class="timeline-body">
              <p>Développement d’une application de computer vision pour Android à partir d’un préexistant. Recherche de solutions techniques pour optimiser les temps de calcul, la robustesse, et la précision de l’application. Développement d’une interface homme-machine. Écriture de documentations.</p>
            </div>
          </div>
        </li>

</ul>

<div class="col-12 text-center" data-aos="fade-up">
  <h2 class="font-weight-light" id="Formations">Formations</h1>
</div>

<ul class="timeline formation" data-aos="fade-up">
        <li>
          <div class="timeline-badge"></div>
          <div class="timeline-panel" data-aos="fade-left">
            <div class="timeline-heading">
              <h4 class="timeline-title">Formation VMWare Horizon 7</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>Orsys. Décembre 2018</small></p>
            </div>
            <div class="timeline-body">
              <p>Formation de 4 jours dédiée à : l’installation de VMWare Horizon 7, la mise en place d’une infrastructure de machines virtuelles, la création et réplication d’une image en différents types de pools de machines virtuelles, la virtualisation d’applications via différentes techniques.</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge"></i></div>
          <div class="timeline-panel" data-aos="fade-right">
            <div class="timeline-heading">
              <h4 class="timeline-title">Diplôme d’Ingénieur</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>École Nationale d’Ingénieurs de Brest. Septembre 2012 - Janvier 2018</small></p>
            </div>
            <div class="timeline-body">
              <p>Formation d’ingénieur généraliste en 5 années centrée autour de l’informatique, l’électronique et la mécatronique. Spécialisation en informatique. Accent porté sur l’humain à travers de nombreux projets non-techniques.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge"></div>
          <div class="timeline-panel" data-aos="fade-left">
            <div class="timeline-heading">
              <h4 class="timeline-title">Baccalauréat STI Génie Electrotechnique</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>Lycée Ferdinand Buisson Voiron. Septembre 2009 - Juillet 2012</small></p>
            </div>
            <div class="timeline-body">
              <p>Mention bien.</p>
            </div>
          </div>
        </li>

</ul>

<div class="col-12 text-center" data-aos="fade-up">
  <h2 class="font-weight-light" id="Contact">Me contacter</h1>
</div>


<section class="py-3" id="section1" data-aos="fade-up" style="margin-top:-50px">
  <div class="container">
  <h2 class="font-weight-normal" id="TitreFondBlanc" style="margin-bottom:30px"><strong>Envie de me contacter ?</strong></h2>
  <div id="messagemail"></div>
  <form id="contactform">
  <div class="form-group">
    <input type="text" class="form-control" id="nominput" placeholder="Votre nom" required="required">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="emailinput" placeholder="Votre email" required="required" data-error="Valid email is required.">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="objetinput" placeholder="Objet" required="required">
  </div>
  <div class="form-group">
    <textarea class="form-control" id="messageinput" rows="5" placeholder="Votre message" required="required"></textarea>
  </div>
  <span><button type="submit" class="button hvr-float-shadow" id="button1">Envoyer !</button><span id="loading"></span></span>

</form>

</div>
</section>

</div>

<footer class="page-footer font-small" style="background-color: #003b80; padding-top:50px">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center" style="margin:auto; display:table;">
          <a class="fb-ic" style="padding-right:20px">
            <svg onClick="location.href='https://www.linkedin.com/in/martin-matavka-16499b106/'" class="button hvr-float-shadow" id="linkedin" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="48" height="48"
            viewBox="0 0 192 192"
            style=" fill:#000000; cursor: pointer;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,192v-192h192v192z" fill="none"></path><g id="Layer_1" fill="#ffffff"><path d="M33.684,56h0.208v0c11.16,0 18.108,-8 18.108,-18c-0.208,-10.22 -6.948,-18 -17.896,-18c-10.948,0 -18.104,7.78 -18.104,18c0,10 6.944,18 17.684,18z"></path><rect x="4" y="17" transform="scale(4,4)" width="9" height="26"></rect><path d="M176,106c0,-20.988 -17.012,-38 -38,-38c-12.212,0 -23.048,5.784 -30,14.736v-14.736h-36v104h36v-60v0c0,-8.836 7.164,-16 16,-16c8.836,0 16,7.164 16,16v60h36c0,0 0,-60.18 0,-66z"></path></g></g></svg>
          </a>
          <a class="ins-ic">
            <svg onClick="location.href='https://github.com/MartinMat'" class="button hvr-float-shadow"  id="git" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="50" height="50"
viewBox="0 0 192 192"
style=" fill:#000000; cursor: pointer;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,192v-192h192v192z" fill="none"></path><g fill="#ffffff"><path d="M96,19.2c-42.4128,0 -76.8,34.3872 -76.8,76.8c0,35.9872 24.7808,66.0992 58.1888,74.432c-0.3584,-1.0368 -0.5888,-2.24 -0.5888,-3.7312v-13.1264c-3.1168,0 -8.3392,0 -9.6512,0c-5.2544,0 -9.9264,-2.2592 -12.192,-6.4576c-2.5152,-4.6656 -2.9504,-11.8016 -9.184,-16.1664c-1.8496,-1.4528 -0.4416,-3.1104 1.6896,-2.8864c3.936,1.1136 7.2,3.8144 10.272,7.8208c3.0592,4.0128 4.4992,4.9216 10.2144,4.9216c2.7712,0 6.9184,-0.16 10.8224,-0.7744c2.0992,-5.3312 5.728,-10.24 10.1632,-12.5568c-25.5744,-2.6304 -37.7792,-15.3536 -37.7792,-32.6272c0,-7.4368 3.168,-14.6304 8.5504,-20.6912c-1.7664,-6.016 -3.9872,-18.2848 0.6784,-22.9568c11.5072,0 18.464,7.4624 20.1344,9.4784c5.7344,-1.9648 12.032,-3.0784 18.6496,-3.0784c6.6304,0 12.9536,1.1136 18.7008,3.0912c1.6512,-2.0032 8.6144,-9.4912 20.1472,-9.4912c4.6848,4.6784 2.4384,16.9984 0.6528,23.0016c5.3504,6.048 8.4992,13.2224 8.4992,20.6464c0,17.2608 -12.1856,29.9776 -37.7216,32.6208c7.0272,3.6672 12.1536,13.9712 12.1536,21.7344v17.4976c0,0.6656 -0.1472,1.1456 -0.224,1.7152c29.9264,-10.4896 51.424,-38.9056 51.424,-72.416c0,-42.4128 -34.3872,-76.8 -76.8,-76.8z"></path></g></g></svg>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
          </a>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="background-color: #002147; color: white">© 2019 Copyright: Martin Matavka. Hosted on my own
    <a href="https://www.raspberrypi.org/products/raspberry-pi-3-model-b/" target="_blank"> Raspberry PI 3.</a>
  </div>
  <!-- Copyright -->

</footer>

</body>

</html>

<script>

  var ctx2 = document.getElementById('myChart2');
  var myRadarChart = new Chart(ctx2, {
    type: 'radar',
    data: {
      labels: ['Communication', 'Rédaction', 'Anglais', 'Adaptabilité', 'Créativité', 'Initiative','Gestion projet','Leadership',"Esprit d'équipe"],
      datasets: [{
        label: "Niveau (sur 10)",
        data: [8, 6.5, 9, 10, 7.5, 5.5, 5, 6, 8],
        backgroundColor: 'rgba(0, 86, 186, 0.4)',
        borderColor: 'rgba(0, 86, 186, 0.7)',
        borderJoinStyle: 'round',
        borderWidth: "2",
        pointRadius: 4,
        pointBackgroundColor: 'rgba(0, 33, 71, 1)',
        lineTension: 0.1
      }
    ]
    },
    options: {
      scale: {
        pointLabels: { fontSize: 11 },
        ticks:{
          beginAtZero: true,
          max: 10
        }
      }
    }
  });

  var ctx1 = document.getElementById('myChart1');
  var myBarChart = new Chart(ctx1, {
      type: 'horizontalBar',
      data: {
          labels: ['C++','C', 'Java','Javascript','Golang','Python','Windows','Linux','VMWare','Réseau','Android','Web frontend','Web backend'],
          datasets: [{
              label: "Niveau (sur 10)",
              data : [5.5,4,4,8,6.5,5,9,3.5,6,2,5,8,6],
              backgroundColor: 'rgba(0, 86, 186, 0.4)',
              borderColor:'rgba(0, 33, 71, 1)',
              borderWidth: 1
          }]
      },
      options: {
        scales: {
          xAxes: [{
              ticks: {
                  display: false,
                  beginAtZero: true,
                  max: 10
                },
              gridLines: {
                display:false,
                drawBorder: false
              }
          }],
          yAxes: [{
              gridLines: {
                display:false,
                drawBorder: false
              },
              ticks: {
                  fontSize: 13,
                  fontStyle: "bold"
                },
          }]
        }
      }
  });

  AOS.init({
  duration: 1200,
})

window.smoothScroll = function(target) {
    var scrollContainer = target;
    do { //find scroll container
        scrollContainer = scrollContainer.parentNode;
        if (!scrollContainer) return;
        scrollContainer.scrollTop += 1;
    } while (scrollContainer.scrollTop == 0);

    var targetY = 0;
    do { //find the top of target relatively to the container
        if (target == scrollContainer) break;
        targetY += target.offsetTop;
    } while (target = target.offsetParent);

    scroll = function(c, a, b, i) {
        i++; if (i > 30) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(function(){ scroll(c, a, b, i); }, 25);
    }
    // start scrolling
    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}

var name;
var email;
var object;
var message;

$(document).ready(function () {
    $('#contactform').on('submit', function(e) {
      console.log("test")
        name = document.getElementById("nominput").value;
        email =document.getElementById("emailinput").value;
        object =document.getElementById("objetinput").value;
        message = document.getElementById("messageinput").value;
        e.preventDefault();
        sendmail(name, email, object, message);
        document.getElementById("nominput").value ="";
        document.getElementById("emailinput").value ="";
        document.getElementById("objetinput").value ="";
        document.getElementById("messageinput").value ="";
        var loading = "<img src='images/gear-4.5s-30px.svg'></img>"
        document.getElementById('loading').innerHTML=loading;
      });
  });


function sendmail(name, email, object, message){
  var templateParams = {
      from_name: name,
      from_email: email,
      from_object: object,
      message_html: message
  };

  emailjs.send('gmail', 'template_JlxZ5DDr', templateParams)
      .then(function(response) {
        var alertBox = '<div class="alert ' + 'alert-success' + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + 'Votre message a bien été envoyé. Je vous répondrai aussitôt que possible !' + '</div>';
        document.getElementById('messagemail').innerHTML=alertBox;
        document.getElementById('loading').innerHTML="";
      }, function(error) {
         console.log('FAILED...', error);
         var alertBox = '<div class="alert ' + 'alert-error' + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + "Oups... Il semblerait qu'une erreur ce soit produite. Veuillez réessayer ultérieurement." + '</div>';
         document.getElementById('messagemail').innerHTML=alertBox;
         document.getElementById('loading').innerHTML="";
      });
}
</script>
