<x-app-layout>
    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title>bs4 create resume page - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style type="text/css">
      body {
        background-color: #eee;
        margin-top: 20px;
      }
      .job-detail {
        border: 1px solid #ececec;
        border-radius: 6px;
        background-color: #fff;
      }
      .form-button .nice-select {
        width: 100%;
        height: 39px;
        line-height: 37px;
        color: #6b757d;
        margin-bottom: 1rem;
        border: solid 1px #e9e9e9;
      }

      .resume-user {
        position: relative;
        width: 100px;
        height: 100px;
        line-height: 100px;
        font-size: 66px;
        border-radius: 50px;
        top: 0;
        left: 0;
        right: 0;
        margin: 0 auto;
        background-color: #e9e9e9;
        color: #ff4f6c;
        -webkit-transition: all 0.5s;
        transition: all 0.5s;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.9.95/css/materialdesignicons.css"
      rel="stylesheet"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
      integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo="
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
      integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4="
      crossorigin="anonymous"
    />
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="text-dark">Information General</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="job-detail mt-2 p-4">
            <div class="custom-form">
              <form>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group app-label">
                      <label for="frist-name" class="text-muted"
                        >Nom du poste</label
                      >
                      <input
                        id="frist-name"
                        type="text"
                        class="form-control resume"
                        placeholder
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group app-label">
                      <label for="middle-name" class="text-muted"
                        >Nom de l'entreprise</label
                      >
                      <input
                        id="middle-name"
                        type="text"
                        class="form-control resume"
                        placeholder
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group app-label">
                      <label for="surname-name" class="text-muted"
                        >Titre Annonce</label
                      >
                      <input
                        id="surname-name"
                        type="text"
                        class="form-control resume"
                        placeholder
                      />
                    </div>
                  </div>



                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <h3 class="text-dark mt-5">Poste Information</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="job-detail mt-2 p-4">
            <div class="custom-form">
              <form>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group app-label">
                      <label for="citys" class="text-muted">Localisation</label>
                      <input
                        id="surname-name"
                        type="text"
                        class="form-control resume"
                        placeholder
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group app-label">
                      <label for="state" class="text-muted">Statut Temps</label>
                      <div class="form-button">
                        <select class="nice-select">
                          <option data-display="State">Statut Temps</option>
                          <option value="1">À pleine temps</option>
                          <option value="3">À temps partiel</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group app-label">
                      <label for="country" class="text-muted">Salaire</label>
                      <input
                        id="surname-name"
                        type="text"
                        class="form-control resume"
                        placeholder
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group app-label">
                      <label for="phone" class="text-muted">Date de début</label>
                      <input
                        id="phone"
                        type="date"
                        class="form-control resume"
                        placeholder
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group app-label">
                      <label for="e-mail" class="text-muted">Date Line</label>
                      <input
                        id="e-mail"
                        type="date"
                        class="form-control resume"
                        placeholder
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group app-label">
                      <label for="website" class="text-muted">Catégorie</label>
                      <div class="form-button">
                        <select class="nice-select">
                          <option data-display="State">Statut Temps</option>
                          <option >Design & Création</option>
                          <option >Enseignement & Éducation</option>
                          <option >Ventes & Communication</option>
                          <option >Business Development</option>
                          <option >Gestion De Projet</option>
                          <option >Ressource Humaine</option>
                          <option >Service Client</option>
                          <option >Marketing</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group app-label">
                      <label for="address">Description du Poste</label>
                      <textarea
                        id="address"
                        rows="4"
                        class="form-control resume"
                        placeholder
                      ></textarea>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <h3 class="text-dark mt-5">Details Annonces</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="job-detail mt-2 p-4">
            <div class="custom-form">
              <form>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group app-label">
                      <label for="addition-information"
                        >Responsabilité Poste 1</label
                      >
                      <textarea
                        id="addition-information"
                        rows="4"
                        class="form-control resume"
                        placeholder
                      ></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group app-label">
                        <label for="addition-information"
                          >Responsabilité Poste 2</label
                        >
                        <textarea
                          id="addition-information"
                          rows="4"
                          class="form-control resume"
                          placeholder
                        ></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group app-label">
                        <label for="addition-information"
                          >Responsabilité Poste 3</label
                        >
                        <textarea
                          id="addition-information"
                          rows="4"
                          class="form-control resume"
                          placeholder
                        ></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group app-label">
                        <label for="addition-information"
                          >Responsabilité Poste 4</label
                        >
                        <textarea
                          id="addition-information"
                          rows="4"
                          class="form-control resume"
                          placeholder
                        ></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group app-label">
                        <label for="addition-information"
                          >Qualification Poste 1</label
                        >
                        <textarea
                          id="addition-information"
                          rows="4"
                          class="form-control resume"
                          placeholder
                        ></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group app-label">
                        <label for="addition-information"
                          >Qualification Poste 2</label
                        >
                        <textarea
                          id="addition-information"
                          rows="4"
                          class="form-control resume"
                          placeholder
                        ></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group app-label">
                        <label for="addition-information"
                          >Qualification Poste 3</label
                        >
                        <textarea
                          id="addition-information"
                          rows="4"
                          class="form-control resume"
                          placeholder
                        ></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group app-label">
                        <label for="addition-information"
                          >Qualification Poste 4</label
                        >
                        <textarea
                          id="addition-information"
                          rows="4"
                          class="form-control resume"
                          placeholder
                        ></textarea>
                      </div>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-lg-12">
          <div class="text-center">
            <input
              type="submit"
              id="submit"
              name="send"
              class="submitBnt btn btn-custom mt-5"
              value="Créer Maintenant"
              style="color: #fff; background:blue;"
            />
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      (function ($) {
        // Nice Select
        $(".nice-select").niceSelect();
      })(jQuery);
    </script>
  </body>
</html>

</x-app-layout>
