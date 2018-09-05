# Projeto de acompanhamento das Aulas de Laravel

Esse será nosso pequeno código usado como exemplo em nossas aulas.
Não se esqueçam de sempre  verificar a documentação quando estiverem dúvidas: https://laravel.com/docs/5.7
Estamos usando como base a versão [5.7](https://laravel-news.com/laravel-5-7-is-now-released)
## Instruções para executar o projeto.

### PASSO 01:
Clone esse repositório e abra a pasta via terminal (Acho que não preciso explicar esse passo :wink:).
### PASSO 02:
Com a pasta aberta execute o comando do `composer` para instalar as dependências do projeto.
``` sh
composer install
```
Aguarde a enquanto o `composer` baixa e as dependências do projeto para a pasta `/Vendor`
#### PASSO 03:
Copie o exemplo do arquivo de configuração de  ambiente `.env.exemple` para `.env`:
```sh
cp .env.exemple .env
```
#### PASSO 04:

A próxima coisa  é definir sua chave de aplicação para uma `string` aleatória. Normalmente, essa sequência deve ter 32 caracteres. A chave pode ser definida no arquivo de configuração de ambiente `.env` .
`Se a chave do aplicativo não estiver definida, suas sessões de usuário e outros dados criptografados não serão seguros!`

Para gerar use o comando:
```sh
 php artisan key:generate
```
**Obs.:** O `Artisan` é a interface de linha de comando incluída no Laravel. Ele fornece vários comandos úteis que podem ajudá-lo enquanto você cria seu aplicativo. Para ver uma lista de todos os comandos Artisan disponíveis, você pode usar o comando `list`:
```sh
 php artisan list
```
Para saber mais sobre o Artisan consulte a documentação: https://laravel.com/docs/5.7/artisan

#### PASSO 05:
Para checarmos nosso projeto podemos usar o `Artisan` novamente para executar o um servidor para você acessar a aplicação. Para isso use o comando:
```sh
 php artisan serve
```
Isso fará subir um servidor em http://127.0.0.1 na porta 8000.

#### Passo 06:
Se não acorreu nenhum erro em algum passo anterior acesse pelo navegador o projeto http://127.0.0.1:8000/
