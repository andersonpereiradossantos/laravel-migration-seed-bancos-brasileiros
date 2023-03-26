# Laravel - Migrations e Seeds das instituições bancárias do Brasil
[![NPM](https://img.shields.io/npm/l/react)](https://github.com/andersonpereiradossantos/laravel-migration-seed-bancos-brasileiros/blob/main/LICENSE) 
# Sobre o código
Arquivos de migração e inserção (migrations e seeds) Laravel de todas instituições bancárias do Brasil atualizados (26/03/2023) com dados extraídos do [FEBRABAN](https://portal.febraban.org.br/pagina/3164/12/pt-br/associados). Contém também a Model de Banco com todos os campos mapeados.

Na seguinte estrutura:

![DER](https://github.com/andersonpereiradossantos/assets/blob/main/laravel-migration-seeds-bancos-brasileiros-der.png?raw=true)
##### Banco
- Id (primary key)
- Código (codigo)
- Nome (nome)
- Site (site)

# Como executar o projeto
Pré-requisitos: Laravel 5.X, 6.X, 7.X, 8.x ou superior

```bash
# Clonar repositório
git clone https://github.com/andersonpereiradossantos/laravel-migration-seed-bancos-brasileiros.git

# Adicionar arquivos nas respectivas pastas

# Executar o comando de migração (Com bastante cautela para não perder os dados existentes no seu banco de dados)
php artisan migrate --seed
```

# Exemplos de utilização com o Eloquent
```php
// Obter todos os bancos ordenados por nome
$banco = Banco::all()->sortBy('nome');

// Obter banco específico através do código (341 - Itaú)
$banco_itau = Banco::where('codigo', '341')->first();
```
# Autor
Anderson Pereira dos Santos

[Linkedin](https://www.linkedin.com/in/andersonpereirasantos)

[Github](https://github.com/andersonpereiradossantos)
