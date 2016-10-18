const elixir = require('laravel-elixir');
const bourbon = require('bourbon').includePaths;

require('laravel-elixir-vue-2');
require('laravel-elixir-webpack-official');


elixir(mix => {
    mix.sass('site/app.scss',null,null, { includePaths: bourbon })
       .sass('admin/admin.scss',null,null, { includePaths: bourbon })
       .webpack('site/app.js')
       .webpack('admin/admin.js');
});
