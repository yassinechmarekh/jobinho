<x-app-layout>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashborad du Candidat</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <style type="text/css">
            body {
                background: #eee;
            }

            .card {
                box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
            }

            .card {
                position: relative;
                display: flex;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border: 0 solid rgba(0, 0, 0, 0.125);
                border-radius: 1rem;
            }

            .card-body {
                -webkit-box-flex: 1;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                padding: 1.5rem 1.5rem;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="container">
                <div
                  class="d-flex justify-content-between align-items-lg-center py-3 flex-column flex-lg-row"
                >
                  <h2 class="h5 mb-3 mb-lg-0">
                    <a href="../../pages/admin/customers.html" class="text-muted"
                      ><i class="bi bi-arrow-left-square me-2"></i
                    ></a>
                    Profile
                  </h2>
                  <div class="hstack gap-3">
                    <button class="btn btn-light btn-sm btn-icon-text">
                      <i class="bi bi-x"></i> <span class="text">Annuler</span>
                    </button>
                    <button class="btn btn-primary btn-sm btn-icon-text">
                      <i class="bi bi-save"></i> <span class="text">Sauvegarder</span>
                    </button>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-8">
                    <div class="card mb-4">
                      <div class="card-body">
                        <h3 class="h6 mb-4">Information Personnelles</h3>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label class="form-label">Nom</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label class="form-label">Prénom</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label class="form-label">Age</label>
                              <input type="email" class="form-control" />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label class="form-label">Tel</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label class="form-label">Ville</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label class="form-label">ZIP code</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card mb-4">
                      <div class="card-body">
                        <h3 class="h6 mb-4">Informations Proffesionnelles</h3>
                        <div class="mb-3">
                          <label class="form-label">Niveau d/'étude</label>
                          <select
                            class="select2 form-control select2-hidden-accessible"
                            data-select2-placeholder="Select country"
                            data-select2-id="select2-data-1-gy14"
                            tabindex="-1"
                            aria-hidden="true"
                          >
                            <option data-select2-id="select2-data-3-ibs9"></option>
                            <option value="AF">Bac</option>
                            <option value="BS">Bac +1</option>
                            <option value="KH">Bac +2</option>
                            <option value="DK">Bac +3</option>
                            <option value="TL">Bac +4</option>
                            <option value="TL">Bac +5</option>
                            <option value="GM">Bac +8 ou plus</option>
                          </select>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label class="form-label">Poste</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label class="form-label">Date de disponibilité</label>
                              <input type="date" class="form-control" />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label class="form-label">Nature de Poste</label>
                              <select
                                class="select2 form-control select2-hidden-accessible"
                                data-select2-placeholder="Select city"
                                data-select2-id="select2-data-7-809c"
                                tabindex="-1"
                                aria-hidden="true"
                              >
                                <option data-select2-id="select2-data-9-k35n"></option>
                                <option value="b">À pleine temps</option>
                                <option value="d">À temps partiel</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label class="form-label">Salaire demandé</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="card mb-4">
                      <div class="card-body">
                        <h3 class="h6">Status</h3>
                        <select class="form-select">
                          <option value="draft" selected>Selectionner</option>
                          <option value="active">Employé(e)</option>
                          <option value="active">Indépendant(e)</option>
                          <option value="active">Sans emploi</option>
                          <option value="active">Etudiant(e)</option>
                        </select>
                      </div>
                    </div>

                    <div class="card mb-4">
                      <div class="card-body">
                        <h3 class="h6">Ajouter votre CV</h3>
                        <input class="form-control" type="file" />
                      </div>
                    </div>

                    <div class="card mb-4">
                      <div class="card-body">
                        <h3 class="h6">A propos de vous</h3>
                        <textarea class="form-control" rows="3"></textarea>
                      </div>
                    </div>

                    <div class="card mb-4">
                      <div class="card-body">
                        <h3 class="h6">Paramètres de notification</h3>
                        <ul class="list-group list-group-flush mx-n2">
                          <li
                            class="list-group-item px-0 d-flex justify-content-between align-items-start"
                          >
                            <div class="ms-2 me-auto">
                              <h6 class="mb-0">Actualités et mises à jour</h6>
                              <small
                                >Recevez des informations sur les mises à jour de
                                produits et de fonctionnalités.</small
                              >
                            </div>
                            <div class="form-check form-switch">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                role="switch"
                              />
                            </div>
                          </li>
                          <li
                            class="list-group-item px-0 d-flex justify-content-between align-items-start"
                          >
                            <div class="ms-2 me-auto">
                              <h6 class="mb-0">Conseils et tutoriels</h6>
                              <small
                                >Découvrez des astuces pour tirer le meilleur parti de
                                la plateforme.</small
                              >
                            </div>
                            <div class="form-check form-switch">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                role="switch"
                                checked
                              />
                            </div>
                          </li>
                          <li
                            class="list-group-item px-0 d-flex justify-content-between align-items-start"
                          >
                            <div class="ms-2 me-auto">
                              <h6 class="mb-0">Recherche utilisateur</h6>
                              <small>Participez à notre programme de tests bêta.</small>
                            </div>
                            <div class="form-check form-switch">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                role="switch"
                              />
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript"></script>
    </body>
    </html>
</x-app-layout>

