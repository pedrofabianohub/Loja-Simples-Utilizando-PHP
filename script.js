/*const forms = document.querySelectorAll('form[name="adicionarForm"]')

let itensNoCarrinho = 0

forms.forEach(form => {

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(this);

        formData.append('adicionar', true); 

        fetch('adicionarItemAoCarrinho.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            console.log(data);
        })
        .catch(error => console.error('Erro:', error));

        window.location.reload(true);
    });

})
*/

const buttons = document.querySelectorAll('button[name="adicionar"]')

buttons.forEach(button =>
    button.addEventListener('click', async (e) => {
        let notification = await document.getElementById('notification');
    
        // Exibir a mensagem
        notification.style.display = 'block';
    
        setTimeout(function() {
            notification.style.display = 'none';
        }, 3000);
    })
)

const buttonsCart = document.querySelectorAll('button[name="remover"]')

buttonsCart.forEach(button =>
    button.addEventListener('click', async (e) => {
        let notificationRemove = await document.getElementById('notificationRemove');
    
        // Exibir a mensagem
        notificationRemove.style.display = 'block';
    
        setTimeout(function() {
            notificationRemove.style.display = 'none';
        }, 3000);
    })
)

