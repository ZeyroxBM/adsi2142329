class Persona {
    constructor(nombre, apellido, numDoc) {
        this._nombre = nombre;
        this._apellido = apellido;
        this._numDoc = numDoc;
    }

    get nombre() {
        return this._nombre;
    }

    set nombre(nombre) {
        this._nombre = nombre;
    }

    get apellido() {
        return this._apellido;
    }

    set apellido(apellido) {
        this._apellido = apellido;
    }

    get numDoc() {
        return this._numDoc;
    }

    set numDoc(numDoc) {
        this._numDoc = numDoc;
    }
}

class Cliente extends Persona {
    constructor(nombre, apellido, numDoc, idCliente, correo, telefono) {
        super(nombre, apellido, numDoc);
        this._idCliente = idCliente;
        this._correo = correo;
        this._telefono = telefono;

    }

    get idCliente() {
        return this._idCliente;
    }

    set idCliente(idCliente) {
        this._idCliente = idCliente;
    }

    get correo() {
        return this._correo;
    }

    set correo(correo) {
        this._correo = correo;
    }

    get telefono() {
        return this._telefono;
    }

    set telefono(telefono) {
        this._telefono = telefono;
    }

}

var ob = new Persona('juan', 'castro', 1278931);
console.log(ob);

var clt = new Cliente('pedro', 'castillo', 1278931, 001, 'pedrito@gmail.com', 314);
console.log(clt);