# Projeto Experimental

## Objetivo

Desenvolver uma aplicação responsiva para ser disponibilizada em TVS FullHD (1920 x 1080) via navegador.

### Estrutura criada

- Docker
- NGINX
- PHP 7.1

1. [Framework Laravel 5.4](https://laravel.com/)
2. [Bootstrap](http://getbootstrap.com/)
3. [Widgtet tempo.com](https://www.tempo.com/)
### Requisitos para rodar o teste

- [git](https://git-scm.com/)
##### Opcional
- [docker 17.04 >= (atual)](https://www.docker.com/)
- [docker-compose 1.11 >= (atual)](https://docs.docker.com/compose/)

### Instalando e rodando

1 - Clone o projeto:
```bash
$ mkdir ~/projects
$ cd ~/projects
$ git clone git@github.com:alexsantossilva/comerc.git
```

2 - Ambiente de desenvolvimento:
```bash
$ cd ~/projects/comerc
$ docker-compose build
$ docker-compose up -d
```

4 - Instalando dependências com Composer:
```bash
$ docker exec -i comerc_php_1 composer install
```
5 - Acesse:  `localhost:8080`.

* Caso ficar tudo "branco no Browser", verifique as permissões, ou simplesmente:
```bash
$ docker exec -i comerc_nginx_1 chmod 777 -R /var/www
```

### Entendendo

1. Usei as cores principais da marca para o projeto.
2. Resolvi usar o Widget do tempo.com, ao invés da API.
3. Segmentei o blade para facilitar a manutenção do Layout, como é uma página simples, não separei os assets.
4. Adicionei a diretiva de configuração de RSS para o config do Laravel, a fim deixar um código limpo, boas práticas.
5. Se não quiser utilizar o Docker, só clonar o projeto, rodar o composer e criar um HOST no Nginx ou Apache que funciona.
6. Feedbacks serão bem-vindos. Obrigado ;)

OBS.: O link para consumir o RSS [http://www.panoramacomerc.com.br/?feed=rss2](http://www.panoramacomerc.com.br/?feed=rss2)
 está montando o XML com espaços em branco, o que acaba quebrando a formatação. Para conseguir consumir, eu usei `ltrim` e
 armazenei o conteúdo com formatação irregular em uma `string` para conseguir transformar em um Objeto `SimpleXMLElement`.