<?php

try {
    $conection = mysqli_connect('localhost', 'root', 'root', 'root');
} catch (Exception $e) {
    echo "<script>console.error('Error connection with database not successful.')</script>";
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For u Hannah</title>
    <link rel="stylesheet" href="../../../css-global/index.css">
</head>
<body>
    <div class="box" id="box">
        <div style="flex-direction: column">
            <h1>For u Hannah</h1>
            <p>Movie List:</p>
        </div>
        <div id="dialog-hannah" class="dialog" style="display: none">
            <div class="dialog-content">
                <span class="close" id="close-dialog-hannah" style="width: 30px; height: 30px;">
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.207 6.207a1 1 0 0 0-1.414-1.414L12 10.586 6.207 4.793a1 1 0 0 0-1.414 1.414L10.586 12l-5.793 5.793a1 1 0 1 0 1.414 1.414L12 13.414l5.793 5.793a1 1 0 0 0 1.414-1.414L13.414 12l5.793-5.793z" fill="#000000">

                            </path>
                        </g>
                    </svg>
                </span>
                <p style="color: #000000">Hannah</p>
            </div>
        </div>
        <div id="dialog-illano" class="dialog" style="display: none">
            <div class="dialog-content">
                <span class="close" id="close-dialog-illano" style="width: 30px; height: 30px;">
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.207 6.207a1 1 0 0 0-1.414-1.414L12 10.586 6.207 4.793a1 1 0 0 0-1.414 1.414L10.586 12l-5.793 5.793a1 1 0 1 0 1.414 1.414L12 13.414l5.793 5.793a1 1 0 0 0 1.414-1.414L13.414 12l5.793-5.793z" fill="#000000">

                            </path>
                        </g>
                    </svg>
                </span>
                <p style="color: #000000">Illano</p>
            </div>
        </div>
        <div class="music-box" style="flex-direction: column; width: 95%; height: 80%">
            <div style="flex-direction: row; justify-content: space-around">
                <div>
                    <span>Hannah</span>
                </div>
                <div>
                    <span>Illano</span>
                </div>
            </div>
            <div style="flex-direction: row; width: 100%; height: 90%">
                <section class="section-list" style="background-color: #ffffff; height: 100%; width: 100%; justify-content: start">
                    <ul>

                    </ul>
                </section>
                <section class="section-list" style="background-color: #ffffff; height: 100%; width: 100%; justify-content: start">
                    <ul style="padding: 0; margin: 0;">
                        <li>Ate o Ultimo Homem</li>
                        <li>Um Sonho de Liberdade</li>
                        <li>Um Estranho no Ninho</li>
                        <li>Forrest Gump</li>
                        <li>Um Sonho Possivel</li>
                    </ul>
                </section>
            </div>
            <div class="buttons">
                <div id="add-hannah" style="border-radius: 50px">
<!--                    <div class="circle">-->
<!--                        <div class="secundary-circle">-->
                            <svg width="2.2em" height="2.5em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM16 12.75H12.75V16C12.75 16.41 12.41 16.75 12 16.75C11.59 16.75 11.25 16.41 11.25 16V12.75H8C7.59 12.75 7.25 12.41 7.25 12C7.25 11.59 7.59 11.25 8 11.25H11.25V8C11.25 7.59 11.59 7.25 12 7.25C12.41 7.25 12.75 7.59 12.75 8V11.25H16C16.41 11.25 16.75 11.59 16.75 12C16.75 12.41 16.41 12.75 16 12.75Z"
                                          fill="white"></path>
                                </g>
                            </svg>
<!--                        </div>-->
<!--                    </div>-->
                </div>
                <div id="add-illano" style="border-radius: 50px">
<!--                    <div class="circle">-->
<!--                        <div class="secundary-circle">-->
                            <svg width="2.2em" height="2.5em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM16 12.75H12.75V16C12.75 16.41 12.41 16.75 12 16.75C11.59 16.75 11.25 16.41 11.25 16V12.75H8C7.59 12.75 7.25 12.41 7.25 12C7.25 11.59 7.59 11.25 8 11.25H11.25V8C11.25 7.59 11.59 7.25 12 7.25C12.41 7.25 12.75 7.59 12.75 8V11.25H16C16.41 11.25 16.75 11.59 16.75 12C16.75 12.41 16.41 12.75 16 12.75Z"
                                          fill="white"></path>
                                </g>
                            </svg>
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>

        </div>
    </div>
    <script src="src/index.js"></script>
</body>
</html>