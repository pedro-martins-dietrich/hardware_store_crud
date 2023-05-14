(function(win, doc) {
    'use strict';

    // Realiza a deleção
    function confirmDeletion(event) {
        event.preventDefault();
        let token = doc.getElementsByName("_token")[0].value;   // Adquire o token CSRF
        if(confirm("Deletar este anúncio de hardware?")) {
            let ajax = new XMLHttpRequest();                    // Cria uma requisição XML
            ajax.open("DELETE", event.target.baseURI);          // Configura a requisição para o método DELETE e a URI da requisição
            ajax.setRequestHeader("X-CSRF-TOKEN", token);       // Configura o header da requisição com o token
            ajax.onreadystatechange = function() {
                if(ajax.readyState === 4 && ajax.status === 200) {  // Se a requisição for bem sucedida, redireciona o usuário para "/hardware"
                    win.location.href = "/hardware";
                }
            };
            ajax.send();    // Envia a requisição
        } else {
            return false;
        }
    }

    // Verifica se há um elemento de classe "js-delete", e cria o evento de deleção caso afirmativo
    if(doc.querySelector('.js-delete')) {
        let deleteButton = doc.querySelector('.js-delete');
        deleteButton.addEventListener('click', confirmDeletion, false);
    }
})(window, document);