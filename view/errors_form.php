<h1 class="text-center text-white p-3 mt-md-3">Formulaire de candidature</h1>
<div class="container">
    <div class="row ">
        <form class="bg-white mx-auto rounded mb-md-5 p-4 col-10 col-md-8" method="POST" action="index.php" enctype="multipart/form-data" novalidate>
            <p class="obligation">Les champs indiqués par une * sont obligatoires</p>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="lastname"><span>*</span>Prénom</label>
                    <input type="text" class="form-control <?=!empty($erreurs['lastname']) ? 'is-invalid' : 'is-valid'?>" id="lastname" value="<?=$lastname?>" name="lastname" required>
                    <?php if(!empty($erreurs['lastname'])){ foreach($erreurs['lastname'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                    <?php }}?>
                </div>
                <div class="form-group col-md-6">
                    <label for="firstname"><span>*</span> Nom</label>
                    <input type="text" class="form-control <?=!empty($erreurs['firstname']) ? 'is-invalid' : 'is-valid'?>" id="firstname" value="<?=$firstname?>" name="firstname" required>
                    <?php if(!empty($erreurs['firstname'])){ foreach($erreurs['firstname'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                    <?php }} ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="birthday"><span>*</span>Date de naissance</label>
                    <input type="date" class="form-control <?=!empty($erreurs['birthday']) ? 'is-invalid' : 'is-valid';?>" id="birthday" value="<?=$birthday?>" name="birthday" required>
                    <?php if(!empty($erreurs['birthday'])){ foreach($erreurs['birthday'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                    <?php }} ?>
                </div>
                <div class="form-group col-md-4">
                    <label for="pays"><span>*</span>Pays de naissance</label>
                    <input type="text" class="form-control <?=!empty($erreurs['pays']) ? 'is-invalid' : 'is-valid';?>" id="pays" value="<?=$pays?>" name="pays" required>
                    <?php if(!empty($erreurs['pays'])){ foreach($erreurs['pays'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                    <?php }} ?>
                </div>
                <div class="form-group col-md-4">
                    <label for="nationalite"><span>*</span>Nationalité</label>
                    <input type="text" class="form-control <?=!empty($erreurs['nationalite']) ? 'is-invalid' : 'is-valid';?>" id="nationalite" value="<?=$nationalite?>" name="nationalite" required>
                    <?php if(!empty($erreurs['nationalite'])){ foreach($erreurs['nationalite'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                    <?php }} ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="adresse"><span>*</span>Adresse</label>
                    <input type="text" class="form-control <?=!empty($erreurs['adresse']) ? 'is-invalid' : 'is-valid';?>" id="adresse" value="<?=$adresse?>" name="adresse" required>
                    <?php if(!empty($erreurs['adresse'])){ foreach($erreurs['adresse'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                    <?php }} ?>
                </div>
                <div class="form-group col-md-4">
                    <label for="adresse_cp"><span>*</span>Code Postal</label>
                    <input type="number" class="form-control <?=!empty($erreurs['adresse_cp']) ? 'is-invalid' : 'is-valid';?>" id="adresse_cp" value="<?=$adresse_cp?>" name="adresse_cp" min="0" max="99999" required> 
                    <?php if(!empty($erreurs['adresse_cp'])){ foreach($erreurs['adresse_cp'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                    <?php }} ?>
                </div>
                <div class="form-group col-md-4">
                    <label for="adresse_ville"><span>*</span>Ville</label>
                    <input type="text" class="form-control <?=!empty($erreurs['adresse_ville']) ? 'is-invalid' : 'is-valid'?>" id="adresse_ville" value="<?=$adresse_ville?>" name="adresse_ville" required>
                    <?php if(!empty($erreurs['adresse_ville'])){ foreach($erreurs['adresse_ville'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                    <?php }} ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email"><span>*</span>Email</label>
                    <input type="email" class="form-control <?=!empty($erreurs['email']) ? 'is-invalid' : 'is-valid'?>" id="email" value="<?=$email?>" name="email" required>
                    <?php if(!empty($erreurs['email'])){ foreach($erreurs['email'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                    <?php }} ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="tel"><span>*</span>Téléphone</label>
                    <input type="number" class="form-control <?=!empty($erreurs['tel']) ? 'is-invalid' : 'is-valid'?>" id="tel" value="<?=$tel?>" name="tel" minlength="10" maxlength="10" required> 
                    <?php if(!empty($erreurs['tel'])){ foreach($erreurs['tel'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                    <?php }} ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="diplome"><span>*</span>Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)</label>
                    <input type="text" class="form-control <?=!empty($erreurs['diplome']) ? 'is-invalid' : 'is-valid'?>" id="diplome" value="<?=$diplome?>" name="diplome" required>
                    <?php if(!empty($erreurs['diplome'])){ foreach($erreurs['diplome'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                    <?php }} ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="num_pe"><span>*</span>Numéro Pôle Emploi</label>
                    <input type="text" class="form-control <?=!empty($erreurs['num_pe']) ? 'is-invalid' : 'is-valid'?>" id="num_pe" value="<?=$num_pe?>" name="num_pe" minlength="8" maxlength="12" required> 
                    <?php if(!empty($erreurs['num_pe'])){ foreach($erreurs['num_pe'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                    <?php }} ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="url_codecademy">Lien de votre profil Codecademy</label>
                    <input type="url" class="form-control <?=!empty($erreurs['url_codecademy']) ? 'is-invalid' : 'is-valid'?>" id="url_codecademy" value="<?=$url_codecademy?>" name="url_codecademy">
                    <?php if(!empty($erreurs['url_codecademy'])){ foreach($erreurs['url_codecademy'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                    <?php }} ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="badge_codecademy">Nombre de badge Codecademy</label>
                    <input type="number" class="form-control <?=!empty($erreurs['badge_codecademy']) ? 'is-invalid' : 'is-valid'?>" id="badge_codecademy" value="<?=$badge_codecademy?>" name="badge_codecademy" minlength="0" maxlength="1000"> 
                    <?php if(!empty($erreurs['badge_codecademy'])){ foreach($erreurs['badge_codecademy'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                    <?php }} ?>
                </div>
            </div>
            <div class="form-group">
                <label for="hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? (500 caractères max)</label>
                <textarea class="form-control <?=!empty($erreurs['hero']) ? 'is-invalid' : 'is-valid'?>" id="hero" name="hero" rows="3"><?=$hero?></textarea>
                <?php if(!empty($erreurs['hero'])){ foreach($erreurs['hero'] as $erreur){?>
                    <p class="obligation"><?=$erreur?></p>
                <?php }} ?>
            </div>
            <div class="form-group">
                <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) (500 caractères max)</label>
                <textarea class="form-control <?=!empty($erreurs['hack']) ? 'is-invalid' : 'is-valid'?>" id="hack" name="hack" rows="3"><?=$hack?></textarea>
                <?php if(!empty($erreurs['hack'])){ foreach($erreurs['hack'] as $erreur){?>
                    <p class="obligation"><?=$erreur?></p>
                <?php }} ?>
            </div>
            <div class="form-group">
                <label for="exp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? (500 caractères max)</label>
                <textarea class="form-control <?=!empty($erreurs['exp']) ? 'is-invalid' : 'is-valid'?>" id="exp" name="exp" rows="3"><?=$exp?></textarea>
                <?php if(!empty($erreurs['exp'])){ foreach($erreurs['exp'] as $erreur){?>
                    <p class="obligation"><?=$erreur?></p>
                <?php }} ?>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="check" name="check">
                <label class="custom-control-label" for="check" ><span>*</span> J'ai bien noté que les informations personnelles communiquées sont utilisées uniquement pour traiter ma demande et ne sont jamais cédées à des tiers. Pour exercer mon droit d'accès, je peux joindre La Manu par courrier postal.</label>
                <?php if(!empty($erreurs['check'])){ foreach($erreurs['check'] as $erreur){?>
                    <p class="obligation"><?=$erreur?></p>
                <?php }} ?>
            </div>
            <button type="submit" name="submit" class="btn btn-primary float-right">Envoyer</button>
        </form>            
    </div>
</div>