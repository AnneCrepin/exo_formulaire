<?php 
function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}
function validateDate($date, $format = 'Y-m-d'){
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}
if(isset($_POST['submit'])){

    $lastname = valid_donnees($_POST["lastname"]);
    $firstname = valid_donnees($_POST["firstname"]);
    $birthday = valid_donnees($_POST["birthday"]);
    $pays = valid_donnees($_POST["pays"]);

    $list_pays = array("Afghanistan","Afrique du Sud",	"Albanie","Algérie","Allemagne","Andorre","Angola","Anguilla","Antigua-et-Barbuda","Antilles" ,"Néerlandaises","Arabie Saoudite","Argentine","Arménie","Aruba","Australie","Autriche","Azerbaïdjan","Bahamas","Bahreïn","Bangladesh","Barbade","Belgique","Belize","Bénin","Bermudes","Bhoutan","Biélorussie","Birmanie","Bolivie","Bosnie-Herzégovine","Botswana","Brésil","Brunei","Bulgarie","Burkina Faso","Burundi","Cambodge","Cameroun","Canada","Cap-vert","Chili","Chine","Chypre","Colombie","Comores","Corée du Nord","Corée du Sud","Costa Rica","Côte d\'Ivoire","Croatie","Cuba","Danemark","Djibouti","Dominique","Égypte","Émirats Arabes Unis","Équateur","Érythrée","Espagne","Estonie","États Fédérés de Micronésie","États-Unis","Éthiopie","Fidji","Finlande","France","Gabon","Gambie","Géorgie","Géorgie du Sud et les Îles Sandwich du Sud	Ghana","Gibraltar","Grèce","Grenade","Groenland","Guadeloupe","Guam","Guatemala","Guinée","Guinée-Bissau","Guinée","Équatoriale","Guyana","Guyane Française","Haïti","Honduras","Hong-Kong","Hongrie","Île Christmas","Île de Man","Île Norfolk","Îles Åland","Îles Caïmanes","Îles Cocos","Îles Cook","Îles Féroé","Îles Malouines","Îles Mariannes du Nord","Îles Marshall	Îles Pitcairn","Îles Salomon","Îles Turks et Caïques","Îles Vierges Britanniques","Îles Vierges des États-Unis","Inde","Indonésie","Iran","Iraq","Irlande","Islande","Israël","Italie","Jamaïque","Japon","Jordanie","Kazakhstan","Kenya","Kirghizistan","Kiribati","Koweït","Laos","Le Vatican","Lesotho","Lettonie","Liban","Libéria","Libye","Liechtenstein","Lituanie","Luxembourg","Macao","Madagascar","Malaisie","Malawi","Maldives","Mali","Malte","Maroc","Martinique","Maurice","Mauritanie","Mayotte","Mexique","Moldavie","Monaco","Mongolie","Monténégro","Montserrat","Mozambique","Namibie","Nauru","Népal","Nicaragua","Niger","Nigéria","Niué","Norvège","Nouvelle-Calédonie","Nouvelle-Zélande","Oman","Ouganda","Ouzbékistan","Pakistan","Palaos","Panama","Papouasie-Nouvelle-Guinée","Paraguay","Pays-Bas","Pérou","Philippines","Pologne","Polynésie Française","Porto Rico","Portugal","Qatar","République Centrafricaine","République de Macédoine","République Démocratique du Congo","République Dominicaine","République du Congo","République Tchèque","Réunion","Roumanie","Royaume-Uni","Russie","Rwanda","Sahara","Occidental","Saint-Kitts-et-Nevis","Saint-Marin","Saint-Pierre-et-Miquelon","Saint-Vincent-et-les Grenadines","Sainte-Hélène","Sainte-Lucie","Salvador","Samoa","Samoa Américaines","Sao","Tomé-et-Principe","Sénégal","Serbie","Seychelles","Sierra Leone","Singapour","Slovaquie","Slovénie","Somalie","Soudan","Sri Lanka","Suède","Suisse","Suriname","Svalbard et Jan Mayen","Swaziland","Syrie","Tadjikistan","Taïwan","Tanzanie","Tchad","Terres Australes Françaises","Thaïlande","Timor Oriental","Togo","Tonga","Trinité-et-Tobago","Tunisie","Turkménistan","Turquie","Tuvalu","Ukraine","Uruguay","Vanuatu","Venezuela","Viet Nam","Wallis et Futuna","Yémen","Zambie","Zimbabwe");

    $nationalite = valid_donnees($_POST["nationalite"]);
    $adresse = valid_donnees($_POST["adresse"]);
    $adresse_cp = valid_donnees($_POST["adresse_cp"]);
    $adresse_ville = valid_donnees($_POST["adresse_ville"]);
    $email = valid_donnees($_POST["email"]);
    $tel = valid_donnees($_POST["tel"]);
    $diplome = valid_donnees($_POST["diplome"]);
    $num_pe = valid_donnees($_POST["num_pe"]);
    $url_codecademy = valid_donnees($_POST["url_codecademy"]);
    $badge_codecademy = valid_donnees($_POST["badge_codecademy"]);
    $hero = nl2br(valid_donnees($_POST["hero"]));
    $hack = nl2br(strip_tags(valid_donnees($_POST["hack"])));
    $exp = nl2br(strip_tags(valid_donnees($_POST["exp"])));

    $erreurs = array();
    $notification = array();

    if(empty($lastname)){

        $erreurs['lastname'][] ='Veuillez renseigner votre prénom';

    }if( preg_match("#^[A-Za-z ç'-]+$#", $lastname) == false ){

        $erreurs['lastname'][] ='Le prénom doit comporter uniquement des lettres';

    }if(strlen($lastname) > 30){

        $erreurs['lastname'][] ='Le prénom ne doit pas excéder 30 caractères';

    }if(empty($firstname)){
                
        $erreurs['firstname'][] ='Veuillez renseigner votre nom';

    }if(preg_match("#^[A-Za-z ç'-]+$#", $firstname) == false ){

        $erreurs['firstname'][] ='Le nom doit comporter uniquement des lettres';

    }if(strlen($firstname) > 30){

        $erreurs['firstname'][] ='Le nom ne doit pas excéder 30 caractères';

    }if(empty($birthday)){

        $erreurs['birthday'][] ='Veuillez renseigner votre date de naissance';

    }if(!validateDate($birthday)){

        $erreurs['birthday'][] ='Date de naissance invalide';

    }if(substr($birthday, 0,4) < 1900 || $birthday > date("Y-m-d")){

        $erreurs['birthday'][] ='Date de naissance improbable';

    }if(intval(substr($birthday, 0 ,4)) > date("Y") - 18  && intval(substr($birthday, 0 ,4)) <= date("Y") ){

        $erreurs['birthday'][] ='Vous êtes trop jeune pour candidater';

    }if(empty($pays)){

        $erreurs['pays'][] ='Veuillez renseigner votre pays de naissance';

    }if(!in_array(strtolower($pays), array_map('strtolower', $list_pays))){

        $erreurs['pays'][] ='Ce pays n\'existe pas (il doit être ecrit en français)';

    }if(empty($nationalite)){
        
        $erreurs['nationalite'][] ='Veuillez renseigner votre nationalité';

    }if(preg_match("#^[A-Za-z ç'-]+$#", $nationalite) == false ){

        $erreurs['nationalite'][] ='La nationalité doit comporter uniquement des lettres';
        
    }if(strlen($nationalite) > 30){
        
        $erreurs['nationalite'][] ='La nationalité ne doit pas excéder 30 caractères';

    }if(empty($adresse)){
        
        $erreurs['adresse'][] ='Veuillez renseigner votre adresse';

    }if(empty($adresse_cp)){
        
        $erreurs['adresse_cp'][] ='Veuillez renseigner votre code postal';

    }if(preg_match("#^[0-9]{5}$#", $adresse_cp) == false ){
        
        $erreurs['adresse_cp'][] ='Votre code postal ne doit contenir 5 chiffres';

    }if($adresse_cp == 00000 ){
        
        $erreurs['adresse_cp'][] ='Votre code postal n\'existe pas';

    }if(empty($adresse_ville)){
        
        $erreurs['adresse_ville'][] ='Veuillez renseigner votre ville';

    }if(strlen($adresse_ville) > 45){
        
        $erreurs['adresse_ville'][] ='Votre ville ne peut pas contenir plus de 45 caractères';

    }if(preg_match("#^[A-Za-z '-]+$#", $adresse_ville) == false){
        
        $erreurs['adresse_ville'][] ='Votre ville ne doit contenir que des lettres';

    }if(empty($email)){
        
        $erreurs['email'][] ='Veuillez renseigner votre email';

    }if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

        $erreurs['email'][] ='Adresse mail invalide';

    }if(empty($tel)){
        
        $erreurs['tel'][] ='Veuillez renseigner votre téléphone';

    }if(strlen($tel) !== 10){
        
        $erreurs['tel'][] ='Votre numéro de téléphone doit contenir 10 chiffres';

    }if(substr($tel, 0,1) != 0){
        
        $erreurs['tel'][] ='Votre numéro de téléphone doit commencer par 0';

    }if(empty($diplome)){
        
        $erreurs['diplome'][] ='Veuillez renseigner votre diplôme';

    }if(empty($num_pe)){
        
        $erreurs['num_pe'][] ='Veuillez renseigner votre numéro Pôle Emploi';
        
    }if(strlen($num_pe) <= 8 && strlen($num_pe) >= 12){
        
        $erreurs['num_pe'][] ='Le numero doit contenir de 8 à 12 caractères';
        
    }if(substr($url_codecademy, 0 ,36) != 'https://www.codecademy.com/profiles/'){
        
        $erreurs['url_codecademy'][] ='Le lien doit diriger vers votre profil codecademy <br> https://www.codecademy.com/profiles/  ...';
        
    }if($badge_codecademy > 500 && $badge_codecademy < 0){
        
        $erreurs['badge_codecademy'][] ='Ce nombre de badge est improbable';
        
    }if(strlen($hero) > 500){
        
        $erreurs['hero'][] ='Le contenu ne doit pas dépasser 500 caractères';
        
    }if(strlen($hack) > 500){
        
        $erreurs['hack'][] ='Le contenu ne doit pas dépasser 500 caractères';
        
    }if(strlen($exp) > 500){
        
        $erreurs['exp'][] ='Le contenu ne doit pas dépasser 500 caractères';
        
    }if(!isset($_POST['check'])){
        
        $erreurs['check'][] ='Vous devez accepter';
        
    }if(empty($erreurs)){

        // pas d'erreurs ? 
        $notification[] ='Les données ont bien étaient envoyées merci !';
    }


}