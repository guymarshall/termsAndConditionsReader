function initialiseUrlTextChoice() {
    const urlOrText = document.getElementById('url-or-text');

    showHideUrlText(urlOrText.checked)

    urlOrText.addEventListener('change', (event) => {
        const switchOn = event.target.checked;

        showHideUrlText(switchOn);
    });
}

function showHideUrlText(switchOn) {
    const leftSection = document.querySelector('.left-section');
    const rightSection = document.querySelector('.right-section');
    const urlInput = document.getElementById('url-input');
    const text = document.getElementById('text');

    if (switchOn) {
        leftSection.style.display = 'none';
        urlInput.disabled = true;
        rightSection.style.display = 'block';
        text.disabled = false;
    } else {
        rightSection.style.display = 'none';
        text.disabled = true;
        leftSection.style.display = 'block';
        urlInput.disabled = false;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    initialiseUrlTextChoice();
});