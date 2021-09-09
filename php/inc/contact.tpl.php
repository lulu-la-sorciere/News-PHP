<main class="right">
  <h2 class="right__title">Contact</h2>
  <div class="posts">
    <div class="post post--solo">
      <!-- 
        Formulaire de contact 

        - L'attribut "action" permet d'indiquer l'url du fichier
        qui traitera les données saisies dans le formulaire
        ==> Toutes les infos saisies dans le formulaire seront
        donc envoyées au fichier traitement.php
        ==> On répond ici à la questiou "OU"

        ==> Si on laisse l'attribut "action" à vide, les données
        seront envoyées vers l'url courante

        - L'attribut method permet d'indiquer COMMENT les données
         sont transmises au serveur (traitement.php). Il s'agira du 
         moyen de transport de l'information
         ==> On répond ici à la question "COMMENT"

         La méthode GET permet de transporter les informations saisies
         via l'URL du navigateur
         ==> GET est intéressant si on souhaite ajouter nos urls en favoris
         ==> Cas d'utilisations : moteur de recherche

         La méthode POST permet de transporter les informations saisies
         via les entêtes HTTP (Pour transmettre des données sensibles)
         ==> Cas d'utilisations : formulaire de login, ... 

         Si on ne précise pas de valeur pour l'attribut method,
         le navigateur utiliser GET par défaut
      -->
      <!-- <form action="traitement.php" method="post"> -->
      <form class="contact-form" method="post">
          <fieldset>
              <legend>Identité</legend>
              <div class="contact-form__row">
                  <p>Je suis</p>
                  <div>
                      <input type="radio" name="gender" id="genderMrs" value="madame">
                      <label for="genderMrs">une femme</label> /
                      <input type="radio" name="gender" id="genderMr" value="monsieur">
                      <label for="genderMr">un homme</label>
                  </div>
              </div>
              <div class="contact-form__row">
                  <label for="firstname">Mon prénom est</label>
                  <input type="text" name="firstname" placeholder="Prénom" value="" class="contact-form__item">
              </div>
              <div class="contact-form__row">
                  <label for="lastname">Et mon nom est </label>
                  <input type="text" name="lastname" placeholder="Nom" value="" class="contact-form__item">
              </div>
              <div class="contact-form__row">
                  <label for="source" class="contact-form__label">J'ai connu ce site grâce à</label>
                  <select name="source" id="source" class="contact-form__item">
                      <option value="">choisir</option>
                      <option value="fb">Facebook</option>
                      <option value="twitter">Twitter</option>
                      <option value="google">Google</option>
                      <option value="bouche-a-oreilles">Bouche à oreilles</option>
                      <option value="jpp">JT de 13h de Jean-Pierre Pernault</option>
                      <option value="autre">Autre</option>
                  </select>
              </div>
          </fieldset>
          <fieldset>
              <legend>Message</legend>
              <div class="contact-form__row">
                  <label for="email">Répondez-moi via</label>
                  <input type="email" name="email" placeholder="Adresse e-mail" class="contact-form__item">
              </div>
              <div class="contact-form__row">
                  <label for="message" class="contact-form__label">Je voulais vous dire que</label>
                  <textarea name="message" id="message" placeholder="Votre message" class="contact-form__item contact-form__item--textarea "></textarea>
              </div>
              <div class="contact-form__row">
                  <label for="fileUpload">Et vous montrer ça aussi:</label>&nbsp;
                  <input type="file" name="fileUpload" id="fileUpload">
              </div>
              <div class="contact-form__row">
                  <label for="infos-ok">Je certifie la véracité de ces informations</label>
                  <input type="checkbox" name="infos-ok" id="infos-ok" class="contact-form__item contact-form__item--checkbox">
              </div>
              <button class="contact-form__submit">Envoyer</button>
          </fieldset>
      </form>

      <a href="./index.php" class="post__link">back to home</a>
    </div>
  </div>
</main>