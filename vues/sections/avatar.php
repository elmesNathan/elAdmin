  <div id="login-page">
    <div class="container">
      <form class="form-login" action="" method="POST">
        <h2 class="form-login-heading">DESCRIPTION</h2>
        <div class="login-wrap">
          <p>
            <?php
            if (isset($_GET['message'])) {
              echo $_GET['message'];
            }
            ?>
          </p>
          <div class="fileupload fileupload-new" data-provides="fileupload">
            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
              <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
            </div>
            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
            <div>
              <span class="btn btn-theme02 btn-file">
                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Selectionner une image</span>
              <span class="fileupload-exists"><i class="fa fa-undo"></i> Changer</span>
              <input type="file" class="default" />
              </span>
              <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Supprimer</a>
            </div>
          </div>
          <textarea class="form-control" name="message" id="contact-message" placeholder="Votre description" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
          
          <hr>
         <div class="login-social-link centered">
            <a class="btn btn-default" type="submit" href="index.php">ANNULER
            </a>
            <input type="submit" name="valider" class="btn btn-theme " value="VALIDER">
          </div>
        </div>