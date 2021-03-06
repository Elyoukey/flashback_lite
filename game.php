<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/flashback.css?<?php echo rand();?>">

    <link rel="stylesheet" href="css/app.css?<?php echo rand();?>">

    <!-- preload images -->
    <link rel="preload" href="img/game/p-01color.jpg" as="image" >
    <link rel="preload" href="img/game/p-02color.jpg" as="image" >
    <link rel="preload" href="img/game/p-03color.jpg" as="image" >
    <link rel="preload" href="img/game/p-04color.jpg" as="image" >
    <link rel="preload" href="img/game/p-05color.jpg" as="image" >
    <link rel="preload" href="img/game/p-06color.jpg" as="image" >
    <link rel="preload" href="img/game/p-07color.jpg" as="image" >

    <meta name="theme-color" content="#fafafa">

</head>

<body>

<div id="container">

    <!-- ----------------------------------------------------------MENU --------------------------------------- -->
    <div class="card-menu" id="left-menu">
        <a class="menu-item active selected" id="menu1" href="#card1">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="img/game/p-01color.jpg" alt="First card" >
                </div>
                <div class="flip-card-back">
                    <img src="img/game/card-background-1.jpg" alt="First card" >
                </div>
            </div>
        </a>
        <a class="menu-item" id="menu2" href="#card2" >
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="img/game/p-02color.jpg" alt="2nd card" >
                </div>
                <div class="flip-card-back">
                    <img src="img/game/card-background-2.jpg" alt="2nd card" >
                </div>
            </div>
        </a>
        <a class="menu-item" id="menu3" href="#card3">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="img/game/p-03color.jpg" alt="3rd card" >
                </div>
                <div class="flip-card-back">
                    <img src="img/game/card-background-3.jpg" alt="3rd card" >
                </div>
            </div>
        </a>
        <a class="menu-item"  id="menu4" href="#card4">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="img/game/p-04color.jpg" alt="4th card" >
                </div>
                <div class="flip-card-back">
                    <img src="img/game/card-background-4.jpg" alt="4th card" >
                </div>
            </div>
        </a>
        <a class="menu-item" id="menu5" href="#card5">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="img/game/p-05color.jpg" alt="5th card" >
                </div>
                <div class="flip-card-back">
                    <img src="img/game/card-background-5.jpg" alt="5th card" >
                </div>
            </div>    </a>
        <a class="menu-item" id="menu6" href="#card6">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="img/game/p-06color.jpg" alt="6th card" >
                </div>
                <div class="flip-card-back">
                    <img src="img/game/card-background-6.jpg" alt="6th card" >
                </div>
            </div>
        </a>
        <a class="menu-item" id="menu7" href="#card7">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="img/game/p-07color.jpg" alt="7th card" >
                </div>
                <div class="flip-card-back">
                    <img src="img/game/card-background-7.jpg" alt="7th card" >
                </div>
            </div>
        </a>
        <a class="menu-item" id="menu8" href="#question-list">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="img/game/questions.jpg" alt="7th card" >
                </div>
                <div class="flip-card-back">
                    <img src="img/game/card-background.jpg" alt="7th card" >
                </div>
            </div>
        </a>
    </div>

    <!-- ----------------------------------------------------------CANVAS --------------------------------------- -->

    <div id="canvas">

        <div class="puzzlepiece first-selected" id="card1" data-scale="0" >
            <img src="img/game/p-01color.jpg" class="image" />

            <a id="hint-0-anchor" class="hiddenanchor" style=" position: absolute; left:50%; top:50%; width:0%;height:0%;"> </a>
            <a id="hint-doghead-anchor" class="hiddenanchor" style=" position: absolute; left:28%; top:48%; width:18%;height:18%;"> </a>
            <a id="hint-question1-anchor" class="hiddenbutton" style=" position: absolute; left: 68%; top: 62%; width: 14%; height:12%;"> </a>

            <a id="card1-doghead" class="hiddenbutton" href="#card2" style="position: absolute; left:28%; top:51%; width:15%;height:18%;"> </a>
            <a id="card1-retro" class="hiddenbutton" href="#card3" style=" position: absolute; left: 68%; top: 9%; width: 31%; height:24%;  transform: rotate(-30deg)"> </a>
            <a id="card1-question1" class="hiddenbutton" href="#question-list" style=" position: absolute; left: 70%; top: 66%; width: 12%; height:12%;"> </a>
        </div>
        <div class="puzzlepiece " id="card2" data-scale="0" >
            <img src="img/game/p-02color.jpg" class="image" />
            <a id="hint-boyhead-anchor" class="hiddenbutton" href="#card1" style="position: absolute; left: 47%; top: 2%; width: 16%; height: 20%; "> </a>

            <a id="card2-boy" class="hiddenbutton" href="#card1" style="position: absolute; left: 49%; top: 3%; width: 13%; height: 20%; "> </a>
            <a id="card2-zombie" class="hiddenbutton" href="#card4" style="position: absolute; left: 19%; top:50%; width: 11%;height:11%; "> </a>
            <a id="card2-question2" class="hiddenbutton" href="#question-list" style="position: absolute; left: 15%; top: 30%; width: 11%; height:12%; "> </a>
        </div>
        <div class="puzzlepiece " id="card3" data-scale="0" >
            <img src="img/game/p-03color.jpg"  class="image" />
            <a id="card3-visiere" class="hiddenbutton" href="#card5" style="position: absolute; left: 41%; top: 58%; width: 15%; height: 9%; "> </a>
        </div>
        <div class="puzzlepiece " id="card4" data-scale="0" >
            <img src="img/game/p-04color.jpg" class="image" />
            <a id="card4-dog" class="hiddenbutton" href="#card2" style="position: absolute; left: 63%; top: 11%; width: 9%; height: 12%; "> </a>
        </div>
        <div class="puzzlepiece " id="card5" data-scale="0" >
            <img src="img/game/p-05color.jpg" class="image" />
            <a id="card5-head" class="hiddenbutton" href="#card6" style="position: absolute; left: 31%; top: 43%; width: 10%; height: 15%; "> </a>
        </div>
        <div class="puzzlepiece " id="card6" data-scale="0" >
            <img src="img/game/p-06color.jpg" class="image" />
            <a id="card6-clown" class="hiddenbutton" href="#card7" style="position: absolute; left: 45%; top: 87%; width: 16%; height: 13%; "> </a>
            <a id="card6-question3" class="hiddenbutton" href="#question-list" style="position: absolute; left: 74%; top: 30%; width: 11%; height:11%; "> </a>
        </div>
        <div class="puzzlepiece " id="card7" data-scale="0" >
            <img src="img/game/p-07color.jpg" class="image" />
        </div>
        <div id="question-list" class="puzzlepiece" data-targeter="menu8">
            <img src="img/game/Cards_BG_S02.png" class="image" />
            <div class="question" id="question1" style="position: absolute; left: 5%; top: 5%; width: 25%; height: 25%; ">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="img/game/question1.jpg" alt="Quest ce qui a caus?? l'accident du kidz ?? v??lo ?" />
                    </div>
                    <div class="flip-card-back">
                        <img src="img/game/card-background.jpg" alt="background " />
                    </div>
                </div>
            </div>
            <div class="question" id="question2" style="position: absolute; left: 35%; top: 40%; width: 25%; height: 25%; ">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="img/game/question2.jpg" alt="7th card" >
                    </div>
                    <div class="flip-card-back">
                        <img src="img/game/card-background.jpg" alt="7th card" >
                    </div>
                </div>
            </div>
            <div class="question" id="question3" style="position: absolute; left: 70%; top: 70%; width: 25%; height: 25%; ">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="img/game/question3.jpg" alt="7th card" >
                    </div>
                    <div class="flip-card-back">
                        <img src="img/game/card-background.jpg" alt="7th card" >
                    </div>
                </div>
            </div>
            <button id="game-end" onclick="$('splash-2').classList.remove('fadded');" style="position: absolute; left: 45%; top: 87%; width: 16%; height: 10%;">
                Fin du jeu!
            </button>
        </div>



    </div>

</div>

<!-- ---------------------------------------------------------- TUTO --------------------------------------- -->

<!-- full overlay without the magnifying glass -->
<div id="first-overlay"></div>

<!-- Magnifier -->
<div id="hint-magnifier" class="hint">
    <img class="magnifying-glass" src="img/game/loupe.png" />
</div>

<!-- texts -->
<div id="texts-tuto">

    <div id="text-tuto-1" class="tuto-text">
        <p>Dans Flashback, tu voyages dans un souvenir. </p>
<p>            Chaque souvenir est une seconde pr??cise fig??e dans le temps.
</p>
        <p>
            Tout ce que tu y vois appartient au pass??.</p>
        <p>Voici la premi??re carte Histoire qui te permet de visiter le mini souvenir qui pr??c??de la grande

            histoire.</p>
        <button id="tuto-next-step1">Suivant</button>
    </div>
    <div id="text-tuto-2" class="tuto-text">
        <p>Tu peux voir ?? travers les yeux d???un personnage, d???un zombie, d???un animal et m??me de certains objets!
            </p>
        <button id="tuto-next-step2"><a href="#card2">Suivant</a></button>

    </div>
    <div id="text-tuto-3" class="tuto-text">
        <p>
            Un point de vue correspond ?? un num??ro de carte.</p>
        <p>
            Voyage d???un point de vue ?? un autre, parmi tous ceux que tu aper??ois sur la carte.
            Prends le temps de bien observer et de comprendre, sinon tu vas manquer des d??tails importants.
        </p>
        <button id="tuto-next-step3"><a href="#card1">Suivant</a></button>
    </div>
    <div id="text-tuto-4" class="tuto-text">
        <p>
            Tu peux voyager parmi les cartes que tu as d??j?? retourn??es.
        </p>
        <button id="tuto-next-step4">Suivant</button>
    </div>
    <div id="text-tuto-5" class="tuto-text">
        <p>
            D??bloque les myst??res en rep??rant ces symboles sur les cartes Histoire.
        </p>
        <button id="tuto-next-step5"><a href="#question-list">Suivant</a></button>
    </div>
    <div id="text-tuto-6" class="tuto-text">
        <p>
            Une fois les 3 cartes Sp??ciales d??bloqu??es, tu auras toutes les informations n??cessaires pour
            ??lucider le myst??re! Tu peux n??anmoins discuter et commencer ?? formuler des hypoth??ses avec
            ton ??quipe si vous avez des id??es.
        </p>
        <p>

        Les cartes Sp??ciales sont disponibles ?? tout moment de la partie.
        </p>
        <p>
            Tu as maintenant tout en main pour mener ta premi??re enqu??te, alors, ?? toi de jouer ! .
        </p>
        <button id="tuto-next-step6"><a href="#card1">Go !</a></button>
    </div>
</div>


<!-- -->
<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>

<script>
    /* ------------------------------------------------------Utilities */
    function $(id){ return document.getElementById(id);}
    function $_(q){ return document.querySelector(q);}
    function $_s(q){ return document.querySelectorAll(q);}

    /* --------------------------------------------------- Variables */
    var lastPosX = 0; // for image dragging
    var lastPosY = 0; // for image dragging
    var isDragging = false; // for image dragging
    var isPinching = false; // for image dragging

    /* ----------------------------------------------------- Dom elements */
    var $puzzlepieces;
    var $hiddenbuttons;
    var $menupieces;
    var $canvas;
    var $tutohintMagnifier;

    /* ----------------------------------------------------- DOM load */
    document.addEventListener("DOMContentLoaded", function() {

        // initiate dom elements
        $menupieces = $_s('#left-menu .menu-item');
        $puzzlepieces = $_s('#canvas .puzzlepiece');
        $firstpuzzlepiece = $_('#canvas .puzzlepiece.first-selected');
        $hiddenbuttons = $_s('.hiddenbutton');
        $tutoTexts = $_s('.tuto-text');
        $canvas = $('canvas');
        $tutohintMagnifier = $('hint-magnifier');
        $questionCards = $_s('#question-list .question');

        // redirect to card 1 if current #card is not active
        let hash = window.location.hash;
        if (hash) {
            if (!$_(hash).classList.contains('active')) {
                window.location = window.location.href.replace(window.location.hash, "");
            }
        }

        // menu selection
        for (let i = 0; i < $menupieces.length; i++) {
            $menupieces[i].addEventListener('click', function (e) {
                for (let i = 0; i < $menupieces.length; i++) {
                    $menupieces[i].classList.remove('selected');
                }
                this.classList.add('selected');
            });
        }

        // menu activation
        for (let i = 0; i < $hiddenbuttons.length; i++) {
            $hiddenbuttons[i].addEventListener('click', function (e) {
                $firstpuzzlepiece.classList.remove('first-selected'); //remove first selected
                activatePiece(this.getAttribute('href'));
            });
        }

        // question activation
        $('card1-question1').addEventListener('click',function(e){ activateQuestion($('question1'),0);} );
        $('card2-question2').addEventListener('click',function(e){ activateQuestion($('question2'),0);});
        $('card6-question3').addEventListener('click',function(e){ activateQuestion($('question3'),0);});

        // tuto positionning
        // tuto step 1
        showTutotext($('text-tuto-1'));

        // tuto step 2
        $('tuto-next-step1').addEventListener('click',function(){
            magnify($('hint-doghead-anchor'),0);
            showTutotext($('text-tuto-2'));
        });

        // tuto step 3
        $('tuto-next-step2').addEventListener('click',function(){
            showTutotext($('text-tuto-3'));
            activatePiece('card2');
            $firstpuzzlepiece.classList.remove('first-selected'); //remove first selected

            $('card2').classList.add('active');
            $('menu2').classList.add('active');
            $('card2').classList.add('selected');
            magnify($('hint-boyhead-anchor'),0);

        });

        // tuto step 4
        $('tuto-next-step3').addEventListener('click',function(){
            showTutotext($('text-tuto-4'));
            rotoMagnify($('menu5'),$('menu1'));
        });

        // tuto step 5
        $('tuto-next-step4').addEventListener('click',function(){
            showTutotext($('text-tuto-5'));
            magnify($('hint-question1-anchor'),0);
        });

        // tuto step 6
        $('tuto-next-step5').addEventListener('click',function(){
            activateQuestion($('question1'),0);
            showTutotext($('text-tuto-6'));
            $('hint-magnifier').style.display='none';
            $('first-overlay').style.display='block';

        });

        // tuto step 6
        $('tuto-next-step6').addEventListener('click',function(){
            $('hint-magnifier').style.display='none';
            $('first-overlay').classList.add('fadded');//style.display='none';
            $('texts-tuto').remove();

            // go to first piece
            resetGame();
            this.remove();
        });

    });

    function magnify(hintTarget, attempt) {
        let linkpos = hintTarget.getBoundingClientRect();
        if(linkpos.height==0 && attempt < 10 ){
            attempt++;
            setTimeout( magnify , 100, hintTarget, attempt);
            return;
        }
        let radius = Math.max( window.innerWidth,window.innerHeight);
        radius += 1000; // to be sure to be out of the window
        $tutohintMagnifier.style.borderWidth = radius+'px';

        let topPos = Math.ceil( radius - linkpos.top ) ;
        let leftPos = Math.ceil( radius - linkpos.left ) ;
        $tutohintMagnifier.style.top = '-'+topPos+'px';
        $tutohintMagnifier.style.left = '-'+leftPos+'px';
        $tutohintMagnifier.style.width = linkpos.width + 'px';
        $tutohintMagnifier.style.height = linkpos.width + 'px'; // square to get a circle

        // remove default overlay
        $('first-overlay').style.display='none';
    }

    var target;
    var rotoanim = [];
    function rotoMagnify(target1, target2){
        magnify(target1);
        rotoanim[0] = setTimeout( magnify, 700, target2,0 );
    }
    function resetRotoMagnify(){
        for(let i=0; i<3;i++){
            clearTimeout( rotoanim[i] );
        }
    }

    function showTutotext( textTuto ){
        for(let i =0; i< $tutoTexts.length; i++){
            $tutoTexts[i].style.display='none';
        }
        textTuto.style.display = 'block';
    }

    function activateQuestion(questionTarget, attempt) {
        let linkpos = questionTarget.getBoundingClientRect();
        if(linkpos.height==0 && attempt < 10 ){
            attempt++;
            setTimeout( activateQuestion , 100, questionTarget, attempt);
            return;
        }
        questionTarget.classList.add('active');
        let show = 0;
        for(let i=0;i<$questionCards.length;i++) {
            show += ($questionCards[i].classList.contains('active'))?1:0;
        }
        if(show>=3) {
            $('game-end').classList.add('active');
        }
    }

    function activatePiece( pieceId ){
        for (let i = 0; i < $menupieces.length; i++) {

            if (pieceId == $menupieces[i].getAttribute('href')) {
                $menupieces[i].classList.add('active');
                for (let j = 0; j < $menupieces.length; j++) {
                    $menupieces[j].classList.remove('selected');
                }
                $menupieces[i].classList.add('selected');
            }
        }
    }

    // remove all active menus, questions and go back to card 1
    function resetGame(){
        for (let j = 0; j < $menupieces.length; j++) {
            $menupieces[j].classList.remove('active');
        }
        for (let j = 0; j < $puzzlepieces.length; j++) {
            $puzzlepieces[j].classList.remove('active');
        }
        for (let j = 0; j < $questionCards.length; j++) {
            $questionCards[j].classList.remove('active');
        }
        for (let i = 0; i < $menupieces.length; i++) {
            $menupieces[i].classList.remove('selected');
        }
        $('game-end').classList.remove = 'active';
        $('menu1').classList.add('selected');
        $('menu1').classList.add('active');
        window.location.hash = 'card1';
    }

</script>
</body>

</html>
