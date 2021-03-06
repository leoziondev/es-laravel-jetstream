<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Curso de Laravel Jetstream by [EspecializaTI Academy](https://academy.especializati.com/)

Temas de estudo abordados no curso
- Instalação e configuração do Laravel Jetstream
- Gerenciar Perfis
- Times no Jetstream
- Configurações e recursos do Jetstream
- Configurações do Laravel Fortify
- Laravel Jetstream
    - Models
    - Views
    - Providers
    - Actions
- Upload de foto do perfil
- Confirmação de emails no Laravel
- Login único
- Teams
    - Entendendo mais sobre Times
    - Criar posts
    - Filtrar e inserir posts
    - Validar permissões

## Instalações
Laravel Jetstream
```
composer require laravel/jetstream
```

Configurar Stack a ser usada e habilitando teams
```
php artisan jetstream:install livewire --teams
```

Publicar views do Jetstream
```
php artisan vendor:publish --tag=jetstream-views
```

Criar link de storage em public para acessso as imagens
```
php artisan storage:link
```


### Autenticação Customizada
Caso seja necessário personalizar algumas opções de autenticação basta ir em app/config/fortify.php 

Em __features__ você pode comentar __Features::registration()__ caso sua aplicação não tenha cadastro entre outras opções.

__Mudar redirecionamento de view após o login__<br>
'home' => RouteServiceProvider::HOME

O RouteServiceProvider é quem gerencia a view, pode-se tanto criar uma nova constante como alterar a view de home


## Documentações
- [Laravel Jetstream](https://jetstream.laravel.com/2.x/introduction.html)
