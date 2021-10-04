// atributos = propiedades
// esto = esta clase
// segunda forma de generar objetos con java
// JSON = Objeto de script Java Notation-clave = Valor
var alumno = {
        nombre: 'Pedro',
        apellido: 'Diaz',
        nombreCompleto: function() {
            return 'esto'.nombre + '' + 'esto'.apellido;
        }
    }
    // esto es para adicionar atributos //
alumno.telefono = '3115880008';
consola.log(alumno);
// acceso por operador punto 
consola.log(alumno.nombreCompleto());
consola.log(alumno.nombre);
consola.log(alumno.apellido);


// tarea suma, resta, multiplicacion y division //
var frac = {
    n1: 1,
    n2: 2,
    d1: 2,
    d2: 3,
    suma: function() {
        numeradorS1 = this.n1 * this.d2;
        numeradorS2 = this.n2 * this.d1;
        numeradorSF = numeradorS1 + numeradorS2;
        denominadorS = this.d1 * this.d2;
        return 'el resultado de la suma es ' + numeradorSF + ' / ' + denominadorS;
    },
    resta: function() {
        numeradorR1 = this.n1 * this.d2;
        numeradorR2 = this.n2 * this.d1;
        numeradorRF = numeradorS1 - numeradorS2;
        denominadorR = this.d1 * this.d2;
        return 'el resultado de la resta es ' + numeradorRF + ' / ' + denominadorR;
    },
    multi: function() {
        numeradorM1 = this.n1 * this.n2;
        numeradorM2 = this.d1 * this.d2;
        return 'el resultado de la multiplicacion es ' + numeradorM1 + ' / ' + numeradorM2;
    },
    divi: function() {
        numeradorD1 = this.n1 * this.d2;
        numeradorD2 = this.n2 * this.d1;
        return 'el resultado de la division es ' + numeradorD1 + ' / ' + numeradorD2;
    }
}

console.log(frac.suma());

console.log(frac.resta());

console.log(frac.multi());

console.log(frac.divi());