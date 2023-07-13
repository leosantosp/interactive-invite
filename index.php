<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convite Interativo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body data-theme="buzzLightyear">
    <main class="container" >
        <div class="row">
            <section class="event-main-information col-12">
                <h1 class="event-title">
                    Aniversário do <br> <strong>Melquisedeque</strong>
                </h1>
            </section>
            <section class="event-theme col-12">
                <img class="img-fluid" src="assets/images/buzz-lightyear.png" alt="Buzz Lightyear">
            </section>
            <section class="event-schedule-informations col-12">
                <h2 class="event-day">30</h2>
                <h4 class="event-month">JULHO</h4>
                <hr class="event-hr">
                <h5 class="event-hour">18:00</h5>
                <h6 class="event-hour-desc">HORAS</h6>
            </section>
            <section class="event-btn-actions col-12">
                <div class="row no-gutters">

                    <div class="event-btn-item col-4">
                        <button class="btnAction">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                                <path class="svgPath" d="M83.3333 50V91.6667H16.6667V50" stroke="#3B0581" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="svgPath" d="M91.6667 29.1665H8.33333V49.9998H91.6667V29.1665Z" stroke="#3B0581" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="svgPath" d="M50 91.6665V29.1665" stroke="#3B0581" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="svgPath" d="M50 29.1668H31.25C28.4873 29.1668 25.8378 28.0694 23.8843 26.1159C21.9308 24.1624 20.8333 21.5128 20.8333 18.7502C20.8333 15.9875 21.9308 13.338 23.8843 11.3845C25.8378 9.43096 28.4873 8.3335 31.25 8.3335C45.8333 8.3335 50 29.1668 50 29.1668Z" stroke="#3B0581" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="svgPath" d="M50 29.1668H68.75C71.5127 29.1668 74.1622 28.0694 76.1157 26.1159C78.0692 24.1624 79.1667 21.5128 79.1667 18.7502C79.1667 15.9875 78.0692 13.338 76.1157 11.3845C74.1622 9.43096 71.5127 8.3335 68.75 8.3335C54.1667 8.3335 50 29.1668 50 29.1668Z" stroke="#3B0581" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <p class="btnActionDesc">Lista de Presentes</p>
                    </div>

                    <div class="event-btn-item col-4">
                        <button class="btnAction" type="button" data-bs-toggle="modal" data-bs-target="#confirmPresence">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                                <path d="M83.3333 25L37.5 70.8333L16.6667 50" stroke="#3B0581" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <p class="btnActionDesc">Confirmar Presença</p>

                    </div>
                    
                    <div class="event-btn-item col-4">
                        <button class="btnAction">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                                <g clip-path="url(#clip0_34_35)">
                                    <path d="M87.5 41.6665C87.5 70.8332 50 95.8332 50 95.8332C50 95.8332 12.5 70.8332 12.5 41.6665C12.5 31.7209 16.4509 22.1826 23.4835 15.15C30.5161 8.11738 40.0544 4.1665 50 4.1665C59.9456 4.1665 69.4839 8.11738 76.5165 15.15C83.5491 22.1826 87.5 31.7209 87.5 41.6665Z" stroke="#3B0581" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M50 54.1665C56.9036 54.1665 62.5 48.5701 62.5 41.6665C62.5 34.7629 56.9036 29.1665 50 29.1665C43.0964 29.1665 37.5 34.7629 37.5 41.6665C37.5 48.5701 43.0964 54.1665 50 54.1665Z" stroke="#3B0581" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_34_35">
                                    <rect width="100" height="100" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </button>
                        <p class="btnActionDesc">Onde vai ser?</p>
                    </div>
                </div>
            </section>
        </div>
    </main>

    
    <footer class='footer'> 
        <p class='copyright'>2023. Todos os Direitos Reservados. Desenvolvido por: <strong> Leonardo Santos </strong></p>
    </footer>

    <!-- Modal -->
<div class="modal fade" id="confirmPresence" tabindex="-1" aria-labelledby="confirmPresenceLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="confirmPresenceLabel">CONFIRMANDO PRESENÇA</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="confirmPresenceForm">
            <div class="form-group">
                <label for="fullname">Nome Completo</label>
                <input class="form-control" type="text" name="fullname" id="fullname" placeholder="Ex: Fulano de Tal">
            </div>
            <div class="form-group">
                <label for="phone">WhatsApp</label>
                <input class="form-control" type="text" name="phone" id="phone" placeholder="Ex: 11912345678">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="button" name="addEscort" id="addEscort">+ Adicionar acompanhante</button>
            </div>
            <div class="form-group">
                <ul id="escort">

                </ul>
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Próximo</button>
        </form>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="assets/js/app.js"></script>

</body>
</html>