const apiKey = '0258bbf9a7e3c8d5b42210a28305d205';
const movieId = '19913';
const apiUrl = `https://api.themoviedb.org/3/movie/${movieId}?api_key=${apiKey}`;

function displayMovie(movieData) {
    const posterPath = movieData.poster_path ? `https://image.tmdb.org/t/p/w500${movieData.poster_path}` : 'Sem Imagem Disponível';

    const img = document.createElement('img');
    img.src = posterPath;
    img.id = 'movie-poster';

    const h2 = document.createElement('h2');
    h2.textContent = movieData.title;
    h2.id = 'movie-title';

    const resume = document.createElement('p');
    resume.textContent = movieData.overview;
    resume.id = 'movie-overview';

    const date = document.createElement('p');
    date.textContent = `Data de Lançamento: ${movieData.release_date}`;
    date.id = 'movie-release-date';

    const score = document.createElement('p');
    score.textContent = `Avaliação Média: ${movieData.vote_average}`;
    score.id = 'movie-vote-average';

    const container = document.createElement('div');
    container.id = 'movie-container';

    container.appendChild(img);
    container.appendChild(h2);
    container.appendChild(resume);
    container.appendChild(date);
    container.appendChild(score);

    document.getElementsByClassName('film-box')[0].appendChild(container);
}

function fetchMovie() {
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => displayMovie(data))
        .catch(error => console.error('Erro ao recuperar os detalhes do filme:', error));
}

fetchMovie();
fetchMovie();

const movieName = '500 dias com ela';
const searchUrl = `https://api.themoviedb.org/3/search/movie?api_key=${apiKey}&query=${encodeURIComponent(movieName)}`;

function searchMovieId() {
    fetch(searchUrl)
        .then(response => response.json())
        .then(data => {
            if (data.results && data.results.length > 0) {
                const movieId = data.results[0].id;
                console.log(`O ID do filme '${movieName}' é ${movieId}`);
            } else {
                console.error(`Nenhum filme encontrado com o nome '${movieName}'`);
            }
        })
        .catch(error => console.error('Erro ao buscar ID do filme:', error));
}

searchMovieId();
