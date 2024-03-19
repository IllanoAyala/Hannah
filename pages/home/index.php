<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For u Hannah</title>
    <link rel="stylesheet" href="../../css-global/index.css">
</head>
<body>
    <div class="box" id="box">
        <div style="flex-direction: column">
            <h1>For u Hannah</h1>
            <p>I hope you like these songs.</p>
        </div>
        <div class="music-box">
            <iframe
                    id="iframe"
                    style="border-radius:12px;"
                    src=""
                    width="98%"
                    height="100"
                    frameborder="0"
                    allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"

            >
            </iframe>
            <div style="position: relative; top: -10px; width: 100%; justify-content: center; align-items: center">
                <svg fill="white" height="45px" width="45px" version="1.1" id="prev" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330" xml:space="preserve" transform="matrix(-1, 0, 0, 1, 0, 0)" style="cursor: pointer; margin: 4px">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path id="XMLID_2_" d="M165,0C74.019,0,0,74.019,0,165s74.019,165,165,165s165-74.019,165-165S255.981,0,165,0z M225.606,175.605 l-80,80.002C142.678,258.535,138.839,260,135,260s-7.678-1.464-10.606-4.394c-5.858-5.857-5.858-15.355,0-21.213l69.393-69.396 l-69.393-69.392c-5.858-5.857-5.858-15.355,0-21.213c5.857-5.858,15.355-5.858,21.213,0l80,79.998 c2.814,2.813,4.394,6.628,4.394,10.606C230,168.976,228.42,172.792,225.606,175.605z"></path>
                    </g>
                </svg>
                <input type="text" id="search" autocomplete="off" value="" style="width: 100%; margin: 3px; text-align: center" placeholder="Digite uma palavra">
                <svg fill="white" height="45px" width="45px" version="1.1" id="next" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330" xml:space="preserve" style="cursor: pointer; margin: 4px">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path id="XMLID_2_" d="M165,0C74.019,0,0,74.019,0,165s74.019,165,165,165s165-74.019,165-165S255.981,0,165,0z M225.606,175.605 l-80,80.002C142.678,258.535,138.839,260,135,260s-7.678-1.464-10.606-4.394c-5.858-5.857-5.858-15.355,0-21.213l69.393-69.396 l-69.393-69.392c-5.858-5.857-5.858-15.355,0-21.213c5.857-5.858,15.355-5.858,21.213,0l80,79.998 c2.814,2.813,4.394,6.628,4.394,10.606C230,168.976,228.42,172.792,225.606,175.605z"></path>
                    </g>
                </svg>
            </div>
        </div>
        <div style="flex-direction: row; margin-top: 30px; margin-bottom: 0; height: 50%; justify-content: center; align-items: center;">
<!--            <section class="section-music">-->

<!--            </section>-->
            <section class="section-music" id="mirror-box">
                <div>
                    <img src="../../img/mirror.png" alt="" style="height: 400px; width: 190px;" id="mirror">
                </div>
                <p id="mirror-p">Olha essa gatinha (você).</p>
            </section>
<!--            <section class="section-music">-->

<!--            </section>-->
        </div>
        <div style="justify-content: center; align-items: center">
            <div class="circle" id="button">
                <div class="secundary-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="currentColor" d="m19.65 6.5l-2.74-3.54l3.93-.78l.78 3.92zm-2.94.57l-2.74-3.53l-1.97.39l2.75 3.53zM19 13c1.1 0 2.12.3 3 .81V10H2v10a2 2 0 0 0 2 2h9.81c-.51-.88-.81-1.9-.81-3c0-3.31 2.69-6 6-6m-7.19-4.95L9.07 4.5l-1.97.41l2.75 3.53zM4.16 5.5l-.98.19a2.008 2.008 0 0 0-1.57 2.35L2 10l4.9-.97zM20 18v-3h-2v3h-3v2h3v3h2v-3h3v-2z"/></svg>
                </div>
                <form action="../../routes.php" method="post" id="movie-list-form" style="display: none">
                    <input type="hidden" name="routes" value="movie/list"> <!-- name is attribute value for change the route -->
                </form>
            </div>
            <div class="circle" id="button">
                <div class="secundary-circle">
                    <svg fill="white" height="25px" width="25px" version="1.1" id="movie-list" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 487.3 487.3" xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <g>
                                    <path d="M487.2,69.7c0,12.9-10.5,23.4-23.4,23.4h-322c-12.9,0-23.4-10.5-23.4-23.4s10.5-23.4,23.4-23.4h322.1 C476.8,46.4,487.2,56.8,487.2,69.7z M463.9,162.3H141.8c-12.9,0-23.4,10.5-23.4,23.4s10.5,23.4,23.4,23.4h322.1 c12.9,0,23.4-10.5,23.4-23.4C487.2,172.8,476.8,162.3,463.9,162.3z M463.9,278.3H141.8c-12.9,0-23.4,10.5-23.4,23.4 s10.5,23.4,23.4,23.4h322.1c12.9,0,23.4-10.5,23.4-23.4C487.2,288.8,476.8,278.3,463.9,278.3z M463.9,394.3H141.8 c-12.9,0-23.4,10.5-23.4,23.4s10.5,23.4,23.4,23.4h322.1c12.9,0,23.4-10.5,23.4-23.4C487.2,404.8,476.8,394.3,463.9,394.3z M38.9,30.8C17.4,30.8,0,48.2,0,69.7s17.4,39,38.9,39s38.9-17.5,38.9-39S60.4,30.8,38.9,30.8z M38.9,146.8 C17.4,146.8,0,164.2,0,185.7s17.4,38.9,38.9,38.9s38.9-17.4,38.9-38.9S60.4,146.8,38.9,146.8z M38.9,262.8 C17.4,262.8,0,280.2,0,301.7s17.4,38.9,38.9,38.9s38.9-17.4,38.9-38.9S60.4,262.8,38.9,262.8z M38.9,378.7 C17.4,378.7,0,396.1,0,417.6s17.4,38.9,38.9,38.9s38.9-17.4,38.9-38.9C77.8,396.2,60.4,378.7,38.9,378.7z"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <form action="../../routes.php" method="post" id="movie-list-form" style="display: none">
                    <input type="hidden" name="routes" value="movie-list"> <!-- name is attribute value for change the route -->
                </form>
            </div>
            <div class="circle" id="button">
                <div class="secundary-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="currentColor" d="m12 21.35l-1.45-1.32C5.4 15.36 2 12.27 2 8.5C2 5.41 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.08C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.41 22 8.5c0 3.77-3.4 6.86-8.55 11.53z"/></svg>
                </div>
                <form action="../../routes.php" method="post" id="movie-list-form" style="display: none">
                    <input type="hidden" name="routes" value="movie-list"> <!-- name is attribute value for change the route -->
                </form>
            </div>
        </div>
    </div>
    <script src="src/index.js"></script>
</body>
</html>