<h1 class="text-center text-white p-3 mt-md-3">Récapitulatif de votre candidature</h1>
<div class="container">
    <div class="row">
        <div class="bg-white mx-auto rounded mb-md-5 p-3 p-md-4 col-10 col-md-8">
            <p>Merci d'avoir candidater , nous vous recontacterons d'ici 1 semaine</p> 
            <div class="bloc">
                <p>Prénom : <em><?=$lastname?></em></p>
                <p>Nom : <em><?=$firstname?></em></p>
                <p>Date de naissance : <em><?=date("d/m/Y",strtotime($birthday))?></em></p>
                <p>Pays de naissance : <em><?=$pays?></em></p>
                <p>Nationalité : <em><?=$nationalite?></em></p>
            </div>
            <div class="bloc">
                <p>Adresse: <em><?=$adresse?></em></p>
                <p>Code postal : <em><?=$adresse_cp?></em></p>
                <p>Ville : <em><?=$adresse_ville?></em></p>
                <p>Email : <em><?=$email?></em></p>
                <p>Téléphone : <em><?=$tel?></em></p>                
            </div>
            <div class="bloc">
                <p>Diplôme : <em><?=$diplome?></em></p>
                <p>Numéro Pôle Emploi : <em><?=$num_pe?></em></p>
                <p>Liens de votre profil Codecademy : </p>
                <p><em><?=$url_codecademy?></em></p>
                <p>Nombre de badge : <em><?=$badge_codecademy?></em></p>                
            </div>
            <div class="bloc">
                <p>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? :</p>
                <p><em><?=$hero?></em></p>                    
            </div>
            <div class="bloc">
                <p>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) : </p>
                <p><em><?=$hack?></em></p>                
            </div>
            <div class="bloc">
                <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? : </p>
                <p><em><?=$exp?></em></p>                
            </div>
        </div>
    </div>
</div>
