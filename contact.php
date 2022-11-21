<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css.css" rel="stylesheet">
    <title>Contact</title>
</head>
<body>
    <header>
        <?php require "header.php" ?>
    </header>
    <main class="main3">
        <h1 id="qsn">Vous souhaitez des informations ou candidater à La Plateforme_ ?</h1>
        <form action="tcontact.php" method="post">
            <div class="cform0">
                <div class="cform1">    
                    <div class="bform1">
                        <select name="formation" id="formation">
                            <option>indiquer la formation qui vous intèresse</option>
                            <option>Coding school</option>
                            <option>Ai School</option>
                            <option>Security School</option>
                            <option>Executive Education</option>
                            <option>AWS re/start</option>
                            <option>Innovation Lab</option>
                        </select><br>
                        <input type="text" name="prenom" placeholder="prenom" id="cformi"><br>
                        <input type="email" name="email" placeholder="email" id="cformi"><br>
                        <input type="text" name="adresse" placeholder="adresse" id="cformi"><br>
                        <input type="text" name="codepostale" placeholder="code postale" id="cformi"><br>
                        <input type=text name="cnavc" placeholder="Comment nous avez-vous connu ?" id="cformi"><br>
                        <input type="text" name="message" placeholder="Message" id="cformi">
                    </div>
                    <div class="bform2">
                        <select name="entretien">
                            <option>Souhaitez-vous passer un entretien préalable</option>
                            <option>Oui,je souhaite passer un entretien avec un membre de l'équipe pour avoir de plus amples informations</option>
                            <option>Non,je souhaite candidater et passer le test d'entrée sans passer d'entretien préalable</option>
                        </select><br>
                        <input type="text" name="nom" placeholder="nom" id="cformi"><br>
                        <input type="text" name="telephone" placeholder="telephone" id="cformi"><br>
                        <input type="text" name="ville" placeholder="ville" id="cformi"><br>
                        <input type="text" name="qevnd" placeholder="Quel est votre niveau d'étude" id="cformi">
                    </div>
                </div>
            </div>
            <div class="formv">
                <div class="cformv">
                    <div>
                        <input type="checkbox" name="checkbox" id="newsl"><label>Inscrivez-vous à notre newsletter</label>
                    </div>
                    <div class="sub">
                        <input type="submit" name="submit" value="envoyer" id="submit">
                    </div>
                </div>
            <div>
        </form>
        <div class="intq">
            <h2>Une autre question ?</h2>
            <p> Nous sommes aussi joignables :<br>
                <br>
                – Par email <a href="mailto:contact@laplateforme.io">contact@laplateforme.io</a><br>
                – Par téléphone au 04.84.89.43.69 du lundi au vendredi de 9h à 17h<br>
                – Sur les réseaux sociaux></p>
                <div class="logoftb">
                    <img id="logo2" src="https://cdn-icons-png.flaticon.com/512/174/174848.png">
                    <img id="logo3" src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png">
                    <img id="logo4" src="https://cdn-icons-png.flaticon.com/512/3536/3536505.png">
                    <img id="logo5" src="https://cdn-icons-png.flaticon.com/512/3938/3938037.png">
                    <img id="logo6" src="https://cdn-icons-png.flaticon.com/512/3256/3256013.png">
                </div>
        </div>
        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d185877.08725176513!2d5.389104887558264!3d43.286421163383444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9c13ddc0211b9%3A0xd1642ae4b32c4bc4!2sEcole%20La%20Plateforme%2C%20le%20Campus%20M%C3%A9diterran%C3%A9en%20du%20Num%C3%A9rique!5e0!3m2!1sfr!2sfr!4v1633799516481!5m2!1sfr!2sfr" width="800" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </main>
    <footer>
        <?php require "footer.php"?>
    </footer>
</body>
</html>