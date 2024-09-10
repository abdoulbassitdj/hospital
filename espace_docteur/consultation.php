<?php

session_start();
$_SESSION['id_pat'] = $_GET['id']

?>

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
        <!-- <a href="/hospital/fichiers/lettre_de_recommandationa2.docx">ouvrir</a> -->
    </header>

    <main>

        <div class="container">

            <h2>Nouvelle consultation</h2>

            <div class="progress-bar">

                <div class="step">
                    <p>Parametres vitaux 1</p>
                    <div class="bullet">
                        <span>1</span>
                    </div>
                    <div class="check icon-check"></div>
                </div>
                <div class="step">
                    <p>Parametres vitaux 2</p>
                    <div class="bullet">
                        <span>2</span>
                    </div>
                    <div class="check icon-check"></div>
                </div>
                <div class="step">
                    <p>Examen</p>
                    <div class="bullet">
                        <span>3</span>
                    </div>
                    <div class="check icon-check"></div>
                </div>
                <div class="step">
                    <p>Fichiers</p>
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
                            <div class="label">poids</div>
                            <input type="number" name="poids" id="">
                            <p class="unite">kg</p>
                        </div>

                        <div class="field">
                            <div class="label">taille</div>
                            <input type="number" name="taille" id="">
                            <p class="unite">m</p>
                        </div>

                        <div class="field">
                            <div class="label">groupe sanguin</div>
                            <select name="groupe" id="">
                                <option value="A">a</option>
                                <option value="B">b</option>
                                <option value="AB">ab</option>
                                <option value="O">o</option>
                            </select>
                        </div>

                        <div class="field">
                            <div class="label">rhesus</div>
                            <select name="rhesus" id="">
                                <option value="rh+">rh+</option>
                                <option value="rh-">Rh-</option>
                            </select>
                        </div>

                        <div class="field">
                            <div class="label">temperature</div>
                            <input type="number" name="temp" id="">
                            <p class="unite">&deg;C</p>
                        </div>


                        <div class="field">
                            <div class="label">taux de sucre</div>
                            <input type="number" name="sucre" id="">
                            <p class="unite">g/L</p>
                        </div>

                        <div class="field nextBtn">
                            <button type="button">Next</button>
                        </div>

                    </div>

                    <div class="page">

                        <div class="title">Contact info</div>

                        <div class="field tension">
                            <div class="label">pression arterielle</div>
                            <input type="number" name="p_systolique" id="" placeholder="systolique">
                            <input type="number" name="p_diastolique" id="" placeholder="diastolique">
                            <p class="unite">mmHg</p>
                        </div>

                        <div class="field">
                            <div class="label">ECG cardiaque</div>
                            <input type="number" name="ecg" id="">
                            <p class="unite">mV</p>
                        </div>

                        <div class="field">
                            <div class="label">pouls</div>
                            <input type="text" name="pouls" id="">
                            <p class="unite">bmp</p>
                        </div>

                        <div class="field">
                            <div class="label">frequence respiratoire</div>
                            <input type="number" name="frequence" id="">
                            <p class="unite">rpm</p>
                        </div>

                        <div class="field">
                            <div class="label">taux de cholesterol</div>
                            <input type="number" name="cholesterol" id="">
                            <p class="unite">mg/dL</p>
                        </div>

                        <div class="field">
                            <div class="label">debit cardiaque</div>
                            <input type="number" name="debit" id="">
                            <p class="unite">L/min</p>
                        </div>

                        <div class="field btns">
                            <button type="button" class="prev-1">Previous</button>
                            <button type="button" class="next-1">Next</button>
                        </div>

                    </div>

                    <div class="page">

                        <div class="title">Date of birth</div>

                        <div class="field">
                            <div class="label">resultats de l'examen</div>
                            <textarea type="text" name="resultats" id=""></textarea>
                        </div>

                        <div class="field">
                            <div class="label">diagnostique</div>
                            <textarea name="diagnostique" id=""></textarea>
                        </div>

                        <div class="field">
                            <div class="label">prescription</div>
                            <textarea name="prescription" id=""></textarea>
                        </div>

                        <div class="field btns">
                            <button type="button" class="prev-2">Previous</button>
                            <button type="button" class="next-2">Next</button>
                        </div>

                    </div>

                    <div class="page">

                        <div class="title">Fichiers attaches</div>

                        <div class="field">
                            <div class="label">Fichier attache 1</div>
                            <input type="file" name="fichier1" id="">
                        </div>

                        <div class="field">
                            <div class="label">Fichier attache 2</div>
                            <input type="file" name="fichier2" id="">
                        </div>

                        <div class="field">
                            <div class="label">Fichier attache 3</div>
                            <input type="file" name="fichier3" id="">
                        </div>

                        <div class="field btns">
                            <button type="button" class="prev-3">Previous</button>
                            <button class="submit" type="submit">Submit</button>
                        </div>

                    </div>

                </form>

            </div>

        </div>
        
    </main>

    <footer>
        
    </footer>

    <script src="consultation.js"></script>
</body>
</html>