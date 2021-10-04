class Persona {
    constructor(nombre, apellido) {
        this._nombre = nombre;
        this._apellido = apellido;
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

    nombreCompleto() {
        return this._nombre + ' ' + this._apellido;
    }
}

class Aprendiz extends Persona {

    constructor(nombre, apellido, programa, Ficha) {
        super(nombre, apellido);
        this._programa = programa;
        this._ficha = Ficha;
    }

    get programa() {
        return this._programa;
    }

    set programa(programa) {
        this._programa = programa;
    }

    get ficha() {
        return this._ficha;
    }

    set ficha(ficha) {
        this._ficha = ficha;
    }

}

ap = new Aprendiz('juan', 'bautista', 'ADSI', '2142329');
console.log(ap)



var ob = new Persona('Sandra', 'mora');
console.log(ob.nombre);
ob.nombre = 'Marcela';
console.log(ob.nombre);
console.log(ob.apellido);
console.log(ob.nombreCompleto());