const formulario = document.querySelector('.form_task');
const msg = document.querySelector('.msg');

formulario.addEventListener('submit', async(e) =>{
    e.preventDefault();

    const datos = new FormData(formulario);

    try{
        const respuesta = await fetch('/task', {
            method: 'POST',

            headers: {
                'X-CSRF-TOKEN':
                document.querySelector('meta[name="csrf-token"]').content
                },

                body: datos
        });

        const resultado = await respuesta.json();

        msg.innerText = resultado.message;
        formulario.reset();
    }catch(error){
        console.error(error);
    }
});


/*
const formulario = document.querySelector('.form_task');
const msg = document.querySelector('.msg');

formulario.addEventListener('submit', async(e) => {
    e.preventDefault();

    const datos = new FormData(formulario);

    try {
        const respuesta = await fetch('/task', {
            method: 'POST',

            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json'
            },

            body: datos
        });

        const texto = await respuesta.text();

        console.log(texto);

    } catch(error) {
        console.error(error);
    }
});
*/