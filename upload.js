const url = 'upload.php';
const form = document.querySelector('form');

form.addEventListener('submit', e => {
    e.preventDefault();

    const files = document.querySelector('[type=file]').files; //gather the files from the form
    const formData = new FormData();  // interface / array

    for (let i = 0; i < files.length; i++) {
        let file = files[i];

        formData.append('files[]', file);  //append files to file[]
    }

    fetch(url, {
        method: 'POST',
        body: formData
    }).then(response => {
        console.log(response);
    });
});