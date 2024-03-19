const CLIENT_ID="0bdcc95f4f324c06b5714be7ae605c27"
const CLIENT_SECRET="6cb7b10c9f7a457e9c8f8ef8f163d975"

const iframe = document.getElementById('iframe');
const next = document.getElementById('next');
const prev = document.getElementById('prev');

let urls = [  
    'https://open.spotify.com/embed/track/736PP5LTtREkDgktNmX3Gu?utm_source=generator'
];

let index = 0;

window.onload = () => {
    iframe.src = urls[index];
    getSpotifyMusic();
};

next.addEventListener('click', () => {
    if (index < urls.length - 1) index++;
    else index = 0;  
    iframe.classList.add('fade-in');
    iframe.src = urls[index];
    setTimeout(() => {
        iframe.classList.remove('fade-in');
    }, 1500);
});

prev.addEventListener('click', () => {
    if (index > 0) index--;
    else index = urls.length - 1;
    iframe.classList.add('fade-in');
    iframe.src = urls[index];
    setTimeout(() => {
        iframe.classList.remove('fade-in');
    }, 1500);
});


async function findMusicByName(name) {
    const tokenResponse = await fetch('https://accounts.spotify.com/api/token', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
            'Authorization': 'Basic ' + btoa(CLIENT_ID + ':' + CLIENT_SECRET),
        },
        body: 'grant_type=client_credentials',
    });

    if (!tokenResponse.ok) {
        throw new Error('failed to get access token');
    }

    const tokenData = await tokenResponse.json();
    const accessToken = tokenData.access_token;

    const searchResponse = await fetch(`https://api.spotify.com/v1/search?q=${name}&type=track&limit=6`, {
        headers: {
            'Authorization': 'Bearer ' + accessToken,
        },
    });

    if (!searchResponse.ok) {
        throw new Error('failed to get search results');
    }

    const searchData = await searchResponse.json();
    const searchResults = searchData.tracks.items;

    const uris = searchResults.map(track => track.uri);

    urls = [];

    for (let i = 0; i < uris.length; i++) {
        urls.push(`https://open.spotify.com/embed/track/${uris[i].split(':')[2]}?utm_source=generator`);
    }

    iframe.src = urls[index];
}


async function getSpotifyMusic(){
    const tokenResponse = await fetch('https://accounts.spotify.com/api/token', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
            'Authorization': 'Basic ' + btoa(CLIENT_ID + ':' + CLIENT_SECRET),
        },
        body: 'grant_type=client_credentials',
    });

    if (!tokenResponse.ok) {
        throw new Error('failed to get access token');
    }

    const tokenData = await tokenResponse.json();
    const accessToken = tokenData.access_token;

    const recommendationsResponse = await fetch(`https://api.spotify.com/v1/recommendations?seed_tracks=736PP5LTtREkDgktNmX3Gu&limit=6`, {
            headers: {
                'Authorization': 'Bearer ' + accessToken,
            },
        });

        if (!recommendationsResponse.ok) {
            throw new Error('failed to get recommended tracks');
        }
    
        const recommendationsData = await recommendationsResponse.json();
        const recommendedTracks = recommendationsData.tracks;

        const uris = recommendedTracks.map(track => track.uri);

        for (let i = 0; i < uris.length; i++) {
            urls.push(`https://open.spotify.com/embed/track/${uris[i].split(':')[2]}?utm_source=generator`);
        }        
}



document.addEventListener('keydown', (e) => {
    if (e.key === "Enter" && document.activeElement.id === 'search' && document.getElementById('search').value !== ''){
        const name = document.getElementById('search').value;
        findMusicByName(name);
    }
});

document.getElementById('mirror').addEventListener('click', () => {
    document.getElementById('mirror').style.display = 'none';
    document.getElementById('mirror-p').style.display = 'none';
    
    const img = document.createElement('img');
    img.src = Math.round(Math.random()) > 0.5 ? '../../img/gato.jpeg' : '../../img/gato2.jpeg';
    img.id = 'nerd-img';
    img.style.width = '300px';

    document.getElementById('mirror-box').appendChild(img);

    setTimeout(() => {
        document.getElementById('mirror-box').removeChild(img);
        document.getElementById('mirror').style.display = 'block';
        document.getElementById('mirror-p').style.display = 'block';
    }, 1500);
});

document.getElementById('button').addEventListener("click", () => {
    document.getElementById('movie-list-form').submit();
    console.log('ok')
})




