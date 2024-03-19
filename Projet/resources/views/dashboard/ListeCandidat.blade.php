<x-app-layout>
    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title>bs4 Contacts cards - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style type="text/css">
      body {
        background: #eee;
      }
      .page-container {
        margin-top: 40px;
      }
      figure.user-card {
        background: #ffffff;
        padding: 20px;
        border-top: 3px solid #f2f2f2;
        border: 1px solid #e1e5f1;
        text-align: center;
      }

      figure.user-card.red {
        border-top: 3px solid #fc6d4c;
      }

      figure.user-card.green {
        border-top: 3px solid #3ecfac;
      }

      figure.user-card.blue {
        border-top: 3px solid #5a99ee;
      }

      figure.user-card.yellow {
        border-top: 3px solid #ffc139;
      }

      figure.user-card.orange {
        border-top: 3px solid #ff5000;
      }

      figure.user-card.teal {
        border-top: 3px solid #47bcc7;
      }

      figure.user-card.pink {
        border-top: 3px solid #ff9fd0;
      }

      figure.user-card.brown {
        border-top: 3px solid #79574b;
      }

      figure.user-card.purple {
        border-top: 3px solid #904e95;
      }

      figure.user-card.fb {
        border-top: 3px solid #3b5998;
      }

      figure.user-card.gp {
        border-top: 3px solid #e02f2f;
      }

      figure.user-card .profile {
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        max-width: 72px;
        margin-bottom: 20px;
      }

      figure.user-card h5 {
        margin: 0 0 5px 0;
      }

      figure.user-card h6 {
        margin: 0 0 15px 0;
        color: #8796af;
        font-size: 14px;
      }

      figure.user-card p {
        margin: 0;
        padding: 0 0 15px 0;
        color: #8796af;
        line-height: 150%;
        font-size: 0.85rem;
      }

      figure.user-card ul.contacts {
        margin: 0;
        padding: 0 0 15px 0;
        line-height: 150%;
        font-size: 0.85rem;
      }

      figure.user-card ul.contacts li {
        padding: 0.2rem 0;
      }

      figure.user-card ul.contacts li a {
        color: #5a99ee;
      }

      figure.user-card ul.contacts li a i {
        min-width: 36px;
        float: left;
        font-size: 1rem;
      }

      figure.user-card ul.contacts li:last-child a {
        color: #ff5000;
      }

      ul li {
        list-style-type: none;
      }
    </style>
  </head>
  <body>
    <div class="container page-container">
      <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
          <figure class="user-card green">
            <figcaption>
              <img
                src="https://bootdey.com/img/Content/avatar/avatar1.png"
                alt="Milestone Admin"
                class="profile"
              />
              <h5>Amine abulfath</h5>
              <h6>@Ingénieur en informatique</h6>
              <p>
                Résout des problèmes complexes avec créativité et expertise.
              </p>
              <ul class="contacts">
                <li>
                  <a href="#">
                    <span
                      class="__cf_email__"
                      data-cfemail="82f7f1e7f0c2e0ededf6e6e7fbace1edef"
                      >amineabulfath@contact.com</span
                    >
                  </a>
                </li>

              </ul>

            </figcaption>
          </figure>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
          <figure class="user-card blue">
            <figcaption>
              <img
                src="https://bootdey.com/img/Content/avatar/avatar2.png"
                alt="Milestone Admin"
                class="profile"
              />
              <h5>Yahya Jbranne</h5>
              <h6>@Chef de cuisine </h6>
              <p>
                Crée des expériences gastronomiques exceptionnelles.
              </p>
              <ul class="contacts">
                <li>
                  <a href="#">
                    <span
                      class="__cf_email__"
                      data-cfemail="aadfd9cfd8eac8c5c5dececfd384c9c5c7"
                      >yahyajbranne@contact.com</span
                    >
                  </a>
                </li>

              </ul>

            </figcaption>
          </figure>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
          <figure class="user-card pink">
            <figcaption>
              <img
                src="https://bootdey.com/img/Content/avatar/avatar3.png"
                alt="Milestone Admin"
                class="profile"
              />
              <h5>Salwa Bouhra</h5>
              <h6>@Infirmière</h6>
              <p>
                Soigne les petits avec empathie et un sourire réconfortant.
              </p>
              <ul class="contacts">
                <li>
                  <a href="#">
                    <span
                      class="__cf_email__"
                      data-cfemail="bcc9cfd9cefcded3d3c8d8d9c592dfd3d1"
                      >salwabouhra@contact.com</span
                    >
                  </a>
                </li>

              </ul>

            </figcaption>
          </figure>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
          <figure class="user-card brown">
            <figcaption>
              <img
                src="https://bootdey.com/img/Content/avatar/avatar4.png"
                alt="Milestone Admin"
                class="profile"
              />
              <h5>Youssef Moutie</h5>
              <h6>@Architecte d'intérieur</h6>
              <p>
                Transforme les espaces en œuvres d'art pratiques et esthétiques.
              </p>
              <ul class="contacts">
                <li>
                  <a href="#">
                    <span
                      class="__cf_email__"
                      data-cfemail="f386809681b3919c9c8797968add909c9e"
                      >youssefmoutie@contact.com</span
                    >
                  </a>
                </li>

              </ul>

            </figcaption>
          </figure>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
          <figure class="user-card fb">
            <figcaption>
              <img
                src="https://bootdey.com/img/Content/avatar/avatar5.png"
                alt="Milestone Admin"
                class="profile"
              />
              <h5>Amine Ferhan</h5>
              <h6>@Psychologue</h6>
              <p>
                Guide les patients vers le bien-être mental avec empathie.
              </p>
              <ul class="contacts">
                <li>
                  <a href="#">
                    <span
                      class="__cf_email__"
                      data-cfemail="8cf9ffe9fecceee3e3f8e8e9f5a2efe3e1"
                      >amineferhan@contact.com</span
                    >
                  </a>
                </li>

              </ul>

            </figcaption>
          </figure>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
          <figure class="user-card green">
            <figcaption>
              <img
                src="https://bootdey.com/img/Content/avatar/avatar6.png"
                alt="Milestone Admin"
                class="profile"
              />
              <h5>Ismail El haddad</h5>
              <h6>@Pilote</h6>
              <p>
                Assure la sécurité dans les airs avec compétence impeccable.
              </p>
              <ul class="contacts">
                <li>
                  <a href="#">
                    <span
                      class="__cf_email__"
                      data-cfemail="a6d3d5c3d4e6c4c9c9d2c2c3df88c5c9cb"
                      >ismailelhaddad@contact.com</span
                    >
                  </a>
                </li>

              </ul>

            </figcaption>
          </figure>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
          <figure class="user-card red">
            <figcaption>
              <img
                src="https://bootdey.com/img/Content/avatar/avatar7.png"
                alt="Milestone Admin"
                class="profile"
              />
              <h5>Ayoub Laamloud</h5>
              <h6>@Développeur de jeux vidéo</h6>
              <p>
                Fusionne compétences techniques et imagination.
              </p>
              <ul class="contacts">
                <li>
                  <a href="#">
                    <span
                      class="__cf_email__"
                      data-cfemail="f580869087b5979a9a8191908cdb969a98"
                      >ayoublaamloud@contact.com</span
                    >
                  </a>
                </li>

              </ul>

            </figcaption>
          </figure>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
          <figure class="user-card orange">
            <figcaption>
              <img
                src="https://bootdey.com/img/Content/avatar/avatar1.png"
                alt="Milestone Admin"
                class="profile"
              />
              <h5>Ilyass chetti</h5>
              <h6>@Designer</h6>
              <p>
                Crée des tendances avec originalité et flair artistique.
              </p>
              <ul class="contacts">
                <li>
                  <a href="#">
                    <span
                      class="__cf_email__"
                      data-cfemail="097c7a6c7b496b66667d6d6c70276a6664"
                      >ilyasschetti@contact.com</span
                    >
                  </a>
                </li>

              </ul>

            </figcaption>
          </figure>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
          <figure class="user-card teal">
            <figcaption>
              <img
                src="https://bootdey.com/img/Content/avatar/avatar2.png"
                alt="Milestone Admin"
                class="profile"
              />
              <h5>Zakaria Draoui</h5>
              <h6>@Archéologue</h6>
              <p>
                Explore les fonds marins pour découvrir des vestiges culturels enfouis depuis des siècles.
              </p>
              <ul class="contacts">
                <li>
                  <a href="#">
                    <span
                      class="__cf_email__"
                      data-cfemail="ee9b9d8b9cae8c81819a8a8b97c08d8183"
                      >zakariadraoui@contact.com</span
                    >
                  </a>
                </li>

              </ul>

            </figcaption>
          </figure>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
          <figure class="user-card gp">
            <figcaption>
              <img
                src="https://bootdey.com/img/Content/avatar/avatar3.png"
                alt="Milestone Admin"
                class="profile"
              />
              <h5>Jamal Harkass</h5>
              <h6>@Ingénieur en IA</h6>
              <p>
                Crée des algorithmes innovants pour résoudre des problèmes complexes.
              </p>
              <ul class="contacts">
                <li>
                  <a href="#">
                    <span
                      class="__cf_email__"
                      data-cfemail="403533253200222f2f342425396e232f2d"
                      >jamalharkass@contact.com</span
                    >
                  </a>
                </li>

              </ul>

            </figcaption>
          </figure>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
          <figure class="user-card blue">
            <figcaption>
              <img
                src="https://bootdey.com/img/Content/avatar/avatar4.png"
                alt="Milestone Admin"
                class="profile"
              />
              <h5>Abdelah Haimoud</h5>
              <h6>@Pilote d'hélicoptère </h6>
              <p>
                Intervient courageusement dans des situations d'urgence pour sauver des vies.
              </p>
              <ul class="contacts">
                <li>
                  <a href="#">
                    <span
                      class="__cf_email__"
                      data-cfemail="2d585e485f6d4f424259494854034e4240"
                      >abdelahhaimoud@contact.com</span
                    >
                  </a>
                </li>

              </ul>

            </figcaption>
          </figure>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
          <figure class="user-card orange">
            <figcaption>
              <img
                src="https://bootdey.com/img/Content/avatar/avatar5.png"
                alt="Milestone Admin"
                class="profile"
              />
              <h5>Anas Serghat</h5>
              <h6>@Consultant en développement durable</h6>
              <p>
                Guide les entreprises vers des pratiques écoresponsables.
              </p>
              <ul class="contacts">
                <li>
                  <a href="#">
                    <span
                      class="__cf_email__"
                      data-cfemail="4e3b3d2b3c0e2c21213a2a2b37602d2123"
                      >anasserghat@contact.com</span
                    >
                  </a>
                </li>

              </ul>

            </figcaption>
          </figure>
        </div>
      </div>
    </div>
    <script
      data-cfasync="false"
      src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
  </body>
</html>

</x-app-layout>
