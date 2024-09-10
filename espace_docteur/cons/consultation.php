<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connetion des Etudiants</title>
    <link rel="stylesheet" href="consultation.css">
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
</head>
<body>

    <header>
        
    </header>

    <main>

        <div class="container">

            <h2>FORMULAIRE D'INSCRIPTION DES ETUDIANTS</h2>

            <div class="progress-bar">

                <div class="step">
                    <p>Name</p>
                    <div class="bullet">
                        <span>1</span>
                    </div>
                    <div class="check icon-check"></div>
                </div>
                <div class="step">
                    <p>Contact</p>
                    <div class="bullet">
                        <span>2</span>
                    </div>
                    <div class="check icon-check"></div>
                </div>
                <div class="step">
                    <p>Birth</p>
                    <div class="bullet">
                        <span>3</span>
                    </div>
                    <div class="check icon-check"></div>
                </div>
                <div class="step">
                    <p>Submit</p>
                    <div class="bullet">
                        <span>4</span>
                    </div>
                    <div class="check icon-check"></div>
                </div>

            </div>

            <div class="form-outer">

                <form action="add_consult.php" enctype="multipart/form-data" method="post">

                    <div class="page slidepage">

                        <div class="title">Basic info</div>

                        <div class="field">
                            <div class="label">nom</div>
                            <input type="text" name="nom" id="">
                        </div>

                        <div class="field">
                            <div class="label">prenom</div>
                            <input type="text" name="prenom" id="">
                        </div>

                        <div class="field">
                            <div class="label">date de naissance</div>
                            <input type="text" name="date-naiss" id="">
                        </div>

                        <div class="field">
                            <div class="label">lieu de naissance</div>
                            <input type="text" name="lieu-naiss" id="">
                        </div>

                        <div class="field">
                            <div class="label">genre</div>
                            <select name="genre" id="">
                                <option value="F">feminin</option>
                                <option value="M">masculin</option>
                            </select>
                        </div>

                        <div class="field">
                            <div class="label">nationalite</div>
                            <input type="text" name="nationalite" id="">
                        </div>

                        <div class="field nextBtn">
                            <button type="button">Next</button>
                        </div>

                    </div>

                    <div class="page">

                        <div class="title">Contact info</div>

                        <div class="field">
                            <div class="label">addresse email</div>
                            <input type="text" name="email" id="">
                        </div>

                        <div class="field">
                            <div class="label">telephone (mobile)</div>
                            <input type="text" name="tel" id="">
                        </div>

                        <div class="field">
                            <div class="label">fixe</div>
                            <input type="text" name="fixe" id="">
                        </div>

                        <div class="field">
                            <div class="label">ville</div>
                            <input type="text" name="ville" id="">
                        </div>

                        <div class="field">
                            <div class="label">quartier</div>
                            <input type="text" name="quartier" id="">
                        </div>

                        <div class="field">
                            <div class="label">residence</div>
                            <input type="text" name="residence" id="">
                        </div>

                        <div class="field btns">
                            <button type="button" class="prev-1">Previous</button>
                            <button type="button" class="next-1">Next</button>
                        </div>

                    </div>

                    <div class="page">

                        <div class="title">Date of birth</div>

                        <div class="field">
                            <div class="label">matricule</div>
                            <input type="text" name="matricule" id="">
                        </div>

                        <div class="field">
                            <div class="label">departement</div>
                            <select name="departement" id="">
                                <option value="1">math / info</option>
                                <option value="2">geologie</option>
                            </select>
                        </div>

                        <div class="field">
                            <div class="label">filiere</div>
                            <select name="filiere" id="">
                                <option value="1">informatique</option>
                                <option value="2">mathematique</option>
                            </select>
                        </div>

                        <div class="field">
                            <div class="label">cycle</div>
                            <select name="cycle" id="">
                                <option value="licence">licence</option>
                                <option value="master">master</option>
                                <option value="doctorat">doctorat</option>
                            </select>
                        </div>

                        <div class="field">
                            <div class="label">niveau</div>
                            <select name="niveau" id="">
                                <option value="1">niveau 1</option>
                                <option value="2">niveau 2</option>
                            </select>
                        </div>

                        <div class="field">
                            <div class="label">photo</div>
                            <input type="file" name="photo">
                        </div>

                        <div class="field btns">
                            <button type="button" class="prev-2">Previous</button>
                            <button type="button" class="next-2">Next</button>
                        </div>

                    </div>

                    <div class="page">

                        <div class="title">Login details</div>

                        <div class="field">
                            <div class="label">nom d'utilisateur</div>
                            <input type="text" name="username" id="">
                        </div>

                        <div class="field">
                            <div class="label">mot de passe</div>
                            <input type="password" name="pass" id="">
                        </div>

                        <div class="field">
                            <div class="label">confimer le mot de passe</div>
                            <input type="password" name="cpass" id="">
                        </div>

                        <div class="field btns">
                            <button type="button" class="prev-3">Previous</button>
                            <button class="submit" type="submit">Submit</button>
                        </div>

                    </div>

                </form>

            </div>

        </div>

        <!-- <form action="">
            <select name="" id="">
                <option value="">AAAAAAAAAAA</option>
                <option value="">BBBBBBBBB</option>
                <option value="">CCCCCCCCCCCCC</option>
                <option value="">DDDDDDDDDDDD</option>
            </select>
        </form> -->
        
    </main>

    <footer>
        
    </footer>

    <script src="consultation.js"></script>
</body>
</html>