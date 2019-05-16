# NPM

This porject uses Node.js for these tasks:

* Babel - Transpiles and minifies modern Javascript
* Sass - Compiles `.scss` to `.css`, adds vendor prefixes, minifies
* Copy - Moves unporcessed files into the `/dist` directory


## Packages

Project

    npm i -D del-cli
    https://github.com/sindresorhus/del-cli
    Destroy old directores

    npm i -D make-dir-cli
    https://github.com/sindresorhus/make-dir-cli
    Make new directores

    npm i -D cpy-cli
    https://github.com/sindresorhus/cpy-cli#readme
    Copy assets + unprocessed files from src to dist

    npm i -D npm-run-all
    https://github.com/mysticatea/npm-run-all
    Execute multiple scripts in sequence

Babel

    npm i -D @babel/core
    https://babeljs.io/docs/en/babel-core 
    The core runtime for processing JS files

    npm i -D @babel/cli
    https://babeljs.io/docs/en/babel-cli 
    Transpile ES6 into ES5
    
    npm i -D @babel/preset-env
    https://babeljs.io/docs/en/babel-preset-env
    Target specific browser versions with transpiled code

    npm i -D @babel/polyfill
    https://babeljs.io/docs/en/babel-polyfill
    Support older browsers

    npm i -D babel-preset-minify
    https://babeljs.io/docs/en/babel-preset-minify
    Better minification than the `minified: true` option

Sass

    npm i -D node-sass
    https://github.com/sass/node-sass
    The core runtime for processing `.scss` + minification

    npm i -D postcss-cli
    https://github.com/postcss/postcss-cli
    The cli required for Autoprefixer

    npm i -D autoprefixer
    https://github.com/postcss/autoprefixer
    Add vendor prefixes

