# XDebug

Se quiser integrar o XDebug com o VSCode siga os passos a seguir:

## 1 - Configure o VScode

Abra a guia Debug (a quarta de cima para baixo) e clique em **create a launch.json file** e escolha PHP.

Um arquivo será criado em **.vscode/lauch.json** a partir da raiz do projeto com o seguinte conteúdo:

```
{
  // Use IntelliSense to learn about possible attributes.
  // Hover to view descriptions of existing attributes.
  // For more information, visit: https://go.microsoft.com/fwlink/?linkid=830387
  "version": "0.2.0",
  "configurations": [
    {
      "name": "Listen for XDebug",
      "type": "php",
      "request": "launch",
      "port": 9000
    },
    {
      "name": "Launch currently open script",
      "type": "php",
      "request": "launch",
      "program": "${file}",
      "cwd": "${fileDirname}",
      "port": 9000
    }
  ]
}

```

Adicione os parâmetros a seguir em **Listen for XDebug**:

```
  "pathMappings": {
      "caminho-no-docker": "caminho-do-workdir"
  }
```

Ambos os parâmetros (**caminho-no-docker** e **caminho-do-workdir**) precisam apontar para a raiz do projeto PHP a partir da raiz do sistema operacional, o meu ficou assim:

```
{
    // Use IntelliSense to learn about possible attributes.
    // Hover to view descriptions of existing attributes.
    // For more information, visit: https://go.microsoft.com/fwlink/?linkid=830387
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for XDebug",
            "type": "php",
            "request": "launch",
            "port": 9000,
            "pathMappings": {
                "/var/www/src": "/home/webjump/dev/webjump/dt/backend/src"
            }
        },
        {
            "name": "Launch currently open script",
            "type": "php",
            "request": "launch",
            "program": "${file}",
            "cwd": "${fileDirname}",
            "port": 9000
        }
    ]
}
```

## Para iniciar o debug com XDebug

Tecle F5 ou na aba de Debug do VSCode, no botão verde em formato de play.

## Aviso importante

O Docker é conhecido por deixar o projeto um pouco lento, se isso acontecer com você em algum momento, apenas descomente as linhas 3 a 9 do arquivo **/usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini**, assim:

```
zend_extension=/usr/local/lib/php/extensions/no-debug-non-zts-20180731/xdebug.so

# xdebug.remote_enable=on
# xdebug.remote_handler=dbgp
# xdebug.remote_port=9000
# xdebug.remote_autostart=on
# xdebug.remote_connect_back=on
# xdebug.idekey=docker
# xdebug.default_enable=on

```
