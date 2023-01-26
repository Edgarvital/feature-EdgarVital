$(document).ready(function () {
    $('#cep').on('change', function(){
        var tamanhoDoCep = this.value.length;
        if(tamanhoDoCep == 8) {
            var cep = this.value;

            fetch(`https://viacep.com.br/ws/${cep}/json/`)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    $('#estado').val(data.uf);
                    $('#cidade').val(data.localidade);
                    $('#bairro').val(data.bairro);
                    $('#rua').val(data.logradouro);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    });
});

$(function (){
    $('.numeric').on('input', function (event) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
});
