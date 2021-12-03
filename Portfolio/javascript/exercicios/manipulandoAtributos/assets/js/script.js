function changePhoto(fileName, carName) {
    document.querySelector('img').setAttribute('src', 'assets/images/'+fileName);
    document.querySelector('img').setAttribute('alt', carName);
}