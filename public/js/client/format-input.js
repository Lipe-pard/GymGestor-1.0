function formatCpf(input) {
    const value = input.value.replace(/\D/g, '');
    if (value.length <= 11) {
        input.value = value.replace(/(\d{3})(\d)/, '$1.$2')
                            .replace(/(\d{3})(\d)/, '$1.$2')
                            .replace(/(\d{3})(\d{1,2})$/, '$1-$2');
    }
}

function formatCelular(input) {
    const value = input.value.replace(/\D/g, '');
    if (value.length <= 11) {
        if (value.length > 7) {
            input.value = `(${value.substring(0, 2)}) ${value.substring(2, 7)}-${value.substring(7)}`;
        } else if (value.length > 2) {
            input.value = `(${value.substring(0, 2)}) ${value.substring(2)}`;
        } else {
            input.value = value;
        }
    }
}

function formatCep(input) {
    const value = input.value.replace(/\D/g, '');
    if (value.length <= 8) {
        input.value = value.replace(/(\d{5})(\d)/, '$1-$2');
    }
}

function formatNumberHouse(input) {
    const value = input.value.replace(/\D/g, '');
    input.value = value;
}

document.addEventListener('DOMContentLoaded', function () {
});
