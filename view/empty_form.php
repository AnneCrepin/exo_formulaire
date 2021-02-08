<h1 class="text-center text-white p-3 mt-md-3">Formulaire de candidature</h1>
<div class="container">
    <div class="row">
        <form class="bg-white mx-auto rounded mb-md-5 p-4 col-10 col-md-8" method="POST" action="index.php" enctype="multipart/form-data" novalidate>
            <p class="obligation">Les champs indiqués par une * sont obligatoires</p>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="lastname"><span>*</span>Prénom</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Votre prénom" name="lastname" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="firstname"><span>*</span> Nom</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Votre nom" name="firstname" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="birthday"><span>*</span>Date de naissance</label>
                    <input type="date" class="form-control" id="birthday" placeholder="Date de naissance" name="birthday" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="pays"><span>*</span>Pays de naissance</label>
                    <input type="text" class="form-control" id="pays" placeholder="Votre pays de naissance" name="pays" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="nationalite"><span>*</span>Nationalité</label>
                    <input type="text" class="form-control" id="nationalite" placeholder="Votre nationalité" name="nationalite" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="adresse"><span>*</span>Adresse</label>
                    <input type="text" class="form-control" id="adresse" placeholder="Adresse" name="adresse" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="adresse_cp"><span>*</span>Code Postal</label>
                    <input type="number" class="form-control" id="adresse_cp" placeholder="Code postal" name="adresse_cp" min="0" max="99999" required> 
                </div>
                <div class="form-group col-md-4">
                    <label for="adresse_ville"><span>*</span>Ville</label>
                    <input type="text" class="form-control" id="adresse_ville" placeholder="Ville" name="adresse_ville" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email"><span>*</span>Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="tel"><span>*</span>Téléphone</label>
                    <input type="number" class="form-control" id="tel" placeholder="Téléphone" name="tel" minlength="10" maxlength="10" required> 
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="diplome"><span>*</span>Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)</label>
                    <input type="text" class="form-control" id="diplome" placeholder="Votre diplôme" name="diplome" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="num_pe"><span>*</span>Numéro Pôle Emploi</label>
                    <input type="text" class="form-control" id="num_pe" placeholder="Numéro Pôle Emploi" name="num_pe" minlength="8" maxlength="12" required> 
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="url_codecademy">Lien de votre profil Codecademy</label>
                    <input type="url" class="form-control" id="url_codecademy" placeholder="Liens de votre profil Codecademy" name="url_codecademy">
                </div>
                <div class="form-group col-md-6">
                    <label for="badge_codecademy">Nombre de badge Codecademy</label>
                    <input type="number" class="form-control" id="badge_codecademy" placeholder="Nombre de badges codecademy" name="badge_codecademy" minlength="0" maxlength="1000"> 
                </div>
            </div>
            <div class="form-group">
                <label for="hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
                <textarea class="form-control" id="hero" name="hero" rows="3" maxlength="500"></textarea>
            </div>
            <div class="form-group">
                <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                <textarea class="form-control" id="hack" name="hack" rows="3" maxlength="500"></textarea>
            </div>
            <div class="form-group">
                <label for="exp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                <textarea class="form-control" id="exp" name="exp" rows="3" maxlength="500"></textarea>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="check" name="check">
                <label class="custom-control-label" for="check" ><span>*</span> J'ai bien noté que les informations personnelles communiquées sont utilisées uniquement pour traiter ma demande et ne sont jamais cédées à des tiers. Pour exercer mon droit d'accès, je peux joindre La Manu par courrier postal.</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary float-right">Envoyer</button>
        </form>            
    </div>
</div>