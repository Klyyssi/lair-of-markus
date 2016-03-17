<!DOCTYPE html>
<html>
<head>    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=2.0">
        <link rel="stylesheet" type="text/css" href="cvstyle.css">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans">
        <title>CV - Markus Mulkahainen</title>
</head>
<body>
<?php $language = "en"; $hideAddress = true;?>
<div class="center">  
    <img id="cvimg" class="right" src="images/kuvaCVsmall.JPG" alt="me" />
    <h1>Markus Mulkahainen</h1>
    <?php if (!$hideAddress) { ?>
    <div class="date inner">
        16.03.1992 </br>
        Polttolinja 10 C 31 </br>
        40520 Jyväskylä</br>
        <?php echo ($language == 'fi') ? "044 075 7692" : "+358 440 757 692" ?> </br>
        markus.v.m.mulkahainen@student.jyu.fi</br>  
        www.thelairofmarkus.com</br>
    </div>   
    <?php } ?>
    
    <h4 class="nomarginbtm"><?php echo ($language == 'fi') ? "Ohjelmointitaidot" : "Programming skills" ?></h4>
    
    <div>        
        <div class="inlineblock inner">
            <p class="pl">Java</p>
            <div class="progressbar">
                <div class="bar" style="width: 80%; background: #06960F "></div>
            </div>
            <p class="pl">HTML & CSS</p>
            <div class="progressbar">
                <div class="bar" style="width: 50%; background: #06960F"></div>
            </div>
            <p class="pl">C#</p>
            <div class="progressbar">
                <div class="bar" style="width: 75%; background: #06960F"></div>
            </div>
            <p class="pl">PHP</p>
            <div class="progressbar">
                <div class="bar" style="width: 55%; background: #06960F "></div>
            </div>
            <p class="pl">SQL</p>
            <div class="progressbar">
                <div class="bar" style="width: 50%; background: #06960F"></div>
            </div>
            <p class="pl">Scala</p>
            <div class="progressbar">
                <div class="bar" style="width: 65%; background: #06960F"></div>
            </div>
        </div>
        <div class="inlineblock inner">
            <p class="pl">C / C++</p>
            <div class="progressbar">
                <div class="bar" style="width: 40%; background: #06960F"></div>
            </div>
            <p class="pl">Assembly</p>
            <div class="progressbar">
                <div class="bar" style="width: 30%; background: #06960F "></div>
            </div>
            <p class="pl">Javascript</p>
            <div class="progressbar">
                <div class="bar" style="width: 50%; background: #06960F"></div>
            </div>
            <p class="pl">Python</p>
            <div class="progressbar">
                <div class="bar" style="width: 35%; background: #06960F"></div>
            </div>
            <p class="pl">Clojure</p>
            <div class="progressbar">
                <div class="bar" style="width: 40%; background: #06960F"></div>
            </div>
        </div>
    </div>   
    <h4 class="nomarginbtm"><?php echo ($language == 'fi') ? "Koulutus" : "Education" ?></h4>   
        <ul class="first nomarginbtm">
            <li class="listitem margintop"><?php echo ($language == 'fi') ? "Jyväskylän yliopisto" : "University of Jyväskylä" ?></li>
            <ul>
                <li class="field"><?php echo ($language == 'fi') ? "Tietotekniikka" : "Department of Mathematical Information Technology" ?></li>                
                <li class="date"><?php echo ($language == 'fi') ? "Luonnontieteiden kandidaatti (arvioitu 2016)" : "Bachelor of Science (estimated 2016)" ?></li>
                <li class="date"><?php echo ($language == 'fi') ? "Filosofian maisteri (arvioitu 2018)" : "Master of Science (estimated 2018)" ?></li>
                <li class="date"><?php echo ($language == 'fi') ? "2013 alkaen" : "2013 - Present" ?></li>
            </ul>
            <li class="listitem margintop"><?php echo ($language == 'fi') ? "NTNU - Norjan teknillis-luonnontieteellinen yliopisto" : "NTNU - Norwegian University of Science and Technology" ?></li>
            <ul>
                <li class="field"><?php echo ($language == 'fi') ? "Informaatioteknologia" : "Computer science" ?></li>                
                <li class="date"><?php echo ($language == 'fi') ? "Vaihto-oppilas" : "Exchange student" ?></li>
                <li class="date"><?php echo ($language == 'fi') ? "Syksy 2015" : "Autumn 2015" ?></li>
            </ul>
            <li class="listitem margintop"><?php echo ($language == 'fi') ? "Satakunnan ammattikorkeakoulu" : "Satakunta University of Applied Sciences" ?></li>
            <ul>
                <li class="field"><?php echo ($language == 'fi') ? "Merenkulku" : "Maritime management" ?></li>
                <li class="date">2012 - 2013</li>
            </ul>
            <li class="listitem margintop">SRO - Musiikkilinja</li>
            <ul>
                <li class="field"><?php echo ($language == 'fi') ? "Soitin- ja yhtyetaidot, musiikin teoria" : "Music performance, music theory" ?></li>
                <li class="date">2012</li>
            </ul> 
            <li class="listitem margintop"><?php echo ($language == 'fi') ? "Sotkamon lukio" : "Sotkamo High School" ?></li>
            <ul>
                <li class="field"><?php echo ($language == 'fi') ? "Ylioppilastutkinto" : "Matriculation examination" ?></li>
                <li class="date">2008 - 2011</li>
            </ul>
        </ul>   
    <h4 class="nomarginbtm"><?php echo ($language == 'fi') ? "Työkokemus" : "Work experience" ?></h4>
    
    <ul class="first">
        <li class="listitem margintop"><?php echo ($language == 'fi') ? "Ohjelmoija/harjoittelija" : "Programmer/trainee" ?></li>
        <ul>
            <li class="field">Taloushallintaan fi Oy</li>
            <li class="date"><?php echo ($language == 'fi') ? "Maaliskuu - Elokuu" : "March - August" ?>, 2015</li>     
            <li class="description"><?php echo ($language == 'fi') ? "Budjetointi- ja raportointiohjelmiston C#-ohjelmointi, dokumentointi ja testaus sekä asiakaspalvelun työt." : "C# programming, testing and documentation of a budgeting and reporting software." ?></li>
        </ul>  
        <li class="listitem margintop"><?php echo ($language == 'fi') ? "Sijaisopettaja" : "Substitute teacher" ?></li>
        <ul>
            <li class="field"><?php echo ($language == 'fi') ? "Sotkamon lukio" : "Sotkamo High School" ?></li>
            <li class="date"><?php echo ($language == 'fi') ? "Tammikuu" : "January" ?>, 2015</li>     
            <li class="description"><?php echo ($language == 'fi') ? "Terveystiedon ja liikunnan opetus" : "Teaching health education and physical education" ?></li>
        </ul>     
        <li class="listitem margintop"><?php echo ($language == 'fi') ? "Harjoittelija laivassa M.T. Mastera" : "Trainee at ship M.T. Mastera" ?></li>
        <ul>
            <li class="field">Neste Oil</li>
            <li class="date"><?php echo ($language == 'fi') ? "Helmikuu - Maaliskuu" : "February - March" ?>, 2013</li>     
            <li class="description"><?php echo ($language == 'fi') ? "Laivan kunnossapito ja huoltotyöt, meri- ja satamavahdinpito ja ohjaaminen" : "Guarding, general maintenance, conning the ship" ?></li>
        </ul>        
        <li class="listitem margintop"><?php echo ($language == 'fi') ? "Katinkullan golfkenttien ja viheralueiden hoito" : "Golf course maintenance and gardening" ?></li>
        <ul>
            <li class="field">Vuokatin Nurmi Oy</li>
            <li class="date"><?php echo ($language == 'fi') ? "Heinäkuu - Elokuu" : "July - August" ?>, 2012</li>
            <li class="date"><?php echo ($language == 'fi') ? "Työskentelin yrityksessä myös vuosina" : "Also in years" ?> 2009, 2010, 2011</li>
            <li class="description"><?php echo ($language == 'fi') ? "Nurmikon leikkuu ja kylvö, bunkkerien kunnossapito" : "Mowing and sowing, bunker maintenance" ?></li>
        </ul>
    </ul>
    <h4 class="nomarginbtm"><?php echo ($language == 'fi') ? "Kielitaito" : "Languages" ?></h4>
    <ul class="first">
        <li class="listitem margintop"><?php echo ($language == 'fi') ? "Suomi" : "Finnish" ?> &nbsp;<div class="inlineblock field"><?php echo ($language == 'fi') ? "Äidinkieli" : "Native" ?></div></li>
        <li class="listitem"><?php echo ($language == 'fi') ? "Englanti" : "English" ?> &nbsp;<div class="inlineblock field"><?php echo ($language == 'fi') ? "Erinomainen" : "Excellent" ?></div></li>
        <li class="listitem"><?php echo ($language == 'fi') ? "Ruotsi" : "Swedish" ?> &nbsp;<div class="inlineblock field"><?php echo ($language == 'fi') ? "Tyydyttävä" : "Average" ?></div></li> 
    </ul>
    <h4><?php echo ($language == 'fi') ? "Harrastukset" : "Hobbies" ?></h4>
    <div class="inner field">
        <?php if ($language == 'fi') { ?>
        Rumpujen- ja bassonsoitto, punttisali, leijalautailu, retkeily, ohjelmointi ja mikrokontrollerit
        <?php } else { ?>
        Drum and bass playing, gym, kiteboarding, outdoor activities, programming and microcontrollers
        <?php } ?>
    </div>
    <h4><?php echo ($language == 'fi') ? "Tunnen tai osaan" : "Know-how" ?></h4>
    <div class="inner field">
        <?php echo ($language == 'fi') ? "TCP/IP, Spring Boot, REST, MVC, MVVM, JSP, PostgreSQL, Linux, Windows, Test-driven-development, mikrokontrollerit, git, kuvankäsittely" : "TCP/IP, Spring Boot, REST, MVC, MVVM, JSP, PostgreSQL, Linux, Windows, Test-driven-development, microcontrollers, git, image processing" ?>
         
    </div>
</div>
</body>
</html>

