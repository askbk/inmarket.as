function bedriftClient() {
    localStorage.clientType = "bedrift";
}

function elevClient() {
    localStorage.clientType = "elev";
}

function studentClient() {
    localStorage.clientType = "student";
}

function arbeidssokerClient() {
    localStorage.clientType = "arbeidssokere";
}
function ansattClient() {
    localStorage.clientType = "ansatt";
}

function getClientType() {
    return localStorage.clientType;
}
