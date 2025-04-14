// Seleciona todos os botões que possuem a classe "button-modal-confirm"
var buttons = document.querySelectorAll(".button-modal-confirm");

// Verifica se existem botões na página
if (buttons.length > 0) {
    // Itera sobre cada botão encontrado
    buttons.forEach(function(button) {
        // Adiciona um evento de clique a cada botão
        button.addEventListener("click", function(event) {
            // Previne o comportamento padrão do botão (como o envio do formulário)
            event.preventDefault();

            // Exibe uma mensagem de confirmação para o usuário
            var userConfirmed = confirm("Você tem certeza que deseja excluir este produto?");

            // Verifica se o usuário clicou em "OK" na mensagem de confirmação
            if (userConfirmed) {
                // Encontra o formulário mais próximo do botão clicado
                var form = this.closest("form");

                // Verifica se o formulário foi encontrado
                if (form) {
                    // Envia o formulário
                    form.submit();
                } else {
                    // Exibe um erro no console caso o formulário não seja encontrado
                    console.error("Nenhum formulário foi encontrado para este botão.");
                }
            } else {
                // Caso o usuário clique em "Cancelar", nenhuma ação é realizada
                console.log("Ação de exclusão cancelada pelo usuário.");
            }
        });
    });
} else {
    // Exibe um aviso no console caso nenhum botão seja encontrado
    console.warn("Nenhum botão com a classe 'button-modal-confirm' foi encontrado na página.");
}