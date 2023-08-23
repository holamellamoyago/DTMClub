
const { src, dest, watch, parallel } = require("gulp")

// CSS
const sass = require("gulp-sass")(require('sass'))
const plumber = require('gulp-plumber')

// Imagenes
const cache = require('gulp-cache')
const imagemin = require('gulp-imagemin')
const webp = require('gulp-webp')
const avif = require('gulp-avif')


function css(done){
    // Identificar el archivo de SASS
    // Compilar el archivo 
    //Almacenarla 

    src('src/scss/**/*.scss')
    .pipe( plumber())
    .pipe( sass() )
    .pipe(dest("build/css"))

    done() // Callback que avisa a Gulp cuando llegamos al final. 
}

function imagenes(done){

    const opciones = {
        optimizationLevel:3
    }

    src('src/img/**/*.{png,jpg,jpeg}')
    .pipe( cache( imagemin(opciones) ))
    .pipe(dest('build/img'))

    done()
}


function versionwebp(done){

    const opciones = {
        quality: 50
    };

    src('src/img/**/*.{png,jpg,jpeg}')
    .pipe( webp(opciones))
    .pipe( dest('build/img'))

    done()
}

function versionAvif(done){

    const opciones = {
        quality: 50
    };

    src('src/img/**/*.{png,jpg,jpeg}')
    .pipe( avif(opciones))
    .pipe( dest('build/img'))

    done()
}

function javascript(done){
    src('src/js/**/*.js')
        .pipe(dest('build/js'));

        done()
}


function dev(done){

    watch('src/scss/**/*.scss', css)
    watch('src/js/**/*.js', javascript)
    done()
}




exports.css = css;
exports.js = javascript;
exports.imagenes = imagenes;
exports.versionwebp = versionwebp;
exports.versionAvif = versionAvif;
exports.dev = parallel(imagenes, dev, versionAvif);
//exports.dev = parallel(imagenes, versionwebp, versionAvif, javascript, dev);


// exports.dev = parallel(versionAvif, versionwebp, imagenes, javascript, dev);