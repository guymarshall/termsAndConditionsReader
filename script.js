document.querySelector('form').addEventListener('submit', (event) => {
    event.preventDefault();
    const url = document.getElementById('urlInput').value;
    const text = document.getElementById('exampleTextarea').value;
    console.log('URL:', url);
    console.log('Text:', text);
});