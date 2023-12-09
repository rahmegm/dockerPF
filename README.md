### Passo a passo
Clone Repositório
```sh
git clone https://github.com/rahmegm/dockerPF.git
```

Entrar na pasta a qual foi clonado o Repositório usando o CMD

Entrar na pasta do docker usando o CMD
```sh
cd dockerPF
```

Crie o Arquivo .env
```sh
copy .env.example .env
```

Atualize a variável de ambiente do arquivo .env DB_USERNAME=laravel (vem como DB_USERNAME=root o que faz dar conflito na hora de rodar o banco de dados!)

Suba os containers do projeto
```sh
docker compose up -d --build
```

Acessar o container
```sh
docker exec -it dockerpf-app-1 /bin/bash
```

Instalar as dependências do projeto
```sh
composer install
```

Gerar a key do projeto Laravel
```sh
php artisan key:generate
```
Acessar o projeto
[http://localhost:8089](http://localhost:8089)

Acessar o database
[http://localhost:8090](http://localhost:8090)