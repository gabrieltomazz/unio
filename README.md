# unio
Projeto da Disciplina de Engenharia de Software, que visa integrar estudantes e professores com projetos de extensão.

## Preparando ambiente (baseado numa instalação em Windows 10 )

### Instalando Choco:
O Chocolatey é um gerenciador de pacotes open source para Windows, no estilo “apt-get”.
https://chocolatey.org/

1. Primeiro abra o **cmd** como **administrator**:
    - Click no botão **Iniciar**.
    - Pesquise pela palavra **cmd** e então pressione **CTRL+SHIFT+ENTER**.
    - Caso a caixa de diálogo Controle de Conta de Usuário apareça, clique em **Sim**.

2. Execute o comando abaixo no **cmd** como **administrador**:	

```sh
@"%SystemRoot%\System32\WindowsPowerShell\v1.0\powershell.exe" -NoProfile -InputFormat None -ExecutionPolicy Bypass -Command "iex ((New-Object System.Net.WebClient).DownloadString('https://chocolatey.org/install.ps1'))" && SET "PATH=%PATH%;%ALLUSERSPROFILE%\chocolatey\bin"
```
3. Aguarde alguns segundos para a instalação ser concluída.

4. Se você não ocorreu nenhum erro, você está pronto para usar  o Chocolatey. Basta digitar `choco` ou `choco -?`.

### Instalando programas necessários:

1. Execute no **cmd** como **administrador**:

```sh
choco install git mysql php mysql.workbench -y
```
2. Aguarde a instalação.

3. Execute no cmd para atualizar as variáveis de ambiente:

```sh
RefreshEnv
```

### Instalando Composer e Laravel

1. Execute o comando abaixo no cmd para instalar a ultima versão do Composer:
```sh
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

2. Para instalar o Laravel, execute no cmd:
```sh
composer global require "laravel/installer"
```

### Configurando php

1. Abra com um editor de texto o arquivo **php.ini** (Possivelmente estará na pasta C:\tools\php71).
2. Localize  a linha `;extension=php_pdo_mysql.dll`.
3. Apague o `;` do começo da linha, ficará assim  `extension=php_pdo_mysql.dll`.
4. Salve as alterações.

