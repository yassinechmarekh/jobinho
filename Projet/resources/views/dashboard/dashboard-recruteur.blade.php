<x-app-layout>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />

    <title>bs4 Responsive Dashboard Menu Cards - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style type="text/css">
      body {
        background: #eee;
      }

      .card-box {
        position: relative;
        color: #fff;
        padding: 20px 10px 40px;
        margin: 20px 0px;
      }
      .card-box:hover {
        text-decoration: none;
        color: #f1f1f1;
      }
      .card-box:hover .icon i {
        font-size: 100px;
        transition: 1s;
        -webkit-transition: 1s;
      }
      .card-box .inner {
        padding: 5px 10px 0 10px;
      }
      .card-box h3 {
        font-size: 27px;
        font-weight: bold;
        margin: 0 0 8px 0;
        white-space: nowrap;
        padding: 0;
        text-align: left;
      }
      .card-box p {
        font-size: 15px;
      }
      .card-box .icon {
        position: absolute;
        top: auto;
        bottom: 5px;
        right: 5px;
        z-index: 0;
        font-size: 72px;
        color: rgba(0, 0, 0, 0.15);
      }
      .card-box .card-box-footer {
        position: absolute;
        left: 0px;
        bottom: 0px;
        text-align: center;
        padding: 3px 0;
        color: rgba(255, 255, 255, 0.8);
        background: rgba(0, 0, 0, 0.1);
        width: 100%;
        text-decoration: none;
      }
      .card-box:hover .card-box-footer {
        background: rgba(0, 0, 0, 0.3);
      }
      .bg-blue {
        background-color: #00c0ef !important;
      }
      .bg-green {
        background-color: #00a65a !important;
      }
      .bg-orange {
        background-color: #f39c12 !important;
      }
      .bg-red {
        background-color: #d9534f !important;
      }
    </style>
  </head>
    </head>
    <body>
        <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                  <div class="col-lg-3 col-sm-6">
                    <div class="card-box bg-blue">
                      <div class="inner">
                        <h3>1</h3>
                        <p>Profile</p>
                      </div>
                      <div class="icon">
                        <i class="bi bi-person-circle" aria-hidden="true"></i>
                      </div>
                      <a href="/dashboard-recruteur/ProfileRecruteur" class="card-box-footer"
                        >Voir <i class="fa fa-arrow-circle-right"></i
                      ></a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="card-box bg-green">
                      <div class="inner">
                        <h3>18</h3>
                        <p>Candidats</p>
                      </div>
                      <div class="icon">
                        <i class="fa fa-users" aria-hidden="true"></i>
                      </div>
                      <a href="/dashboard-recruteur/ListeCandidat" class="card-box-footer"
                        >Voir<i class="fa fa-arrow-circle-right"></i
                      ></a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="card-box bg-orange">
                      <div class="inner">
                        <h3>+</h3>
                        <p>Créer Annonces</p>
                      </div>
                      <div class="icon">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                      </div>
                      <a href="/dashboard-recruteur/CreateAnnonce" class="card-box-footer"
                        >Voir <i class="fa fa-arrow-circle-right"></i
                      ></a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="card-box bg-red">
                      <div class="inner">
                        <h3>4</h3>
                        <p>Vos Annonces</p>
                      </div>
                      <div class="icon">
                        <i class="bi bi-list-ul"></i>
                      </div>
                      <a href="/dashboard-recruteur/ListeAnnonce" class="card-box-footer"
                        >Voir <i class="fa fa-arrow-circle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>

              </div>
              <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
              <script type="text/javascript"></script>
    </body>
    </html>
</x-app-layout>


