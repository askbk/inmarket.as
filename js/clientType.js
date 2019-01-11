function bedriftClient() {
    localStorage.clientType = "bedrift";
}

function elevClient() {
    localStorage.clientType = "elev";
}

function studentClient() {
    localStorage.clientType = "student";
}

function getClientType() {
    return localStorage.clientType;
}
