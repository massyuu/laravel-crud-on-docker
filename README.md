# 概要
LaravelのCRUDサンプルを実装する。  
環境はDocker上に構築する。  

# コマンド  
コンテナ起動
> docker-compose up -d

コンテナ終了
> docker-compose down

# 確認
> http://localhost:8892/

# Laravelログ出力について
.env ファイルに LOG_FILE_PATH_APP を追加し、パスを指定する。

# Xdebugの設定について
vscodeを想定して設定を作成。
lunch.jsonのconfigurationsを以下のように修正する。
```
    {  
      "name": "XDebug on Docker",  
      "type": "php",  
      "request": "launch",  
      "port": 9000,  
      "pathMappings": {  
        "/var/www":"clone先のパス/laravel-crud-on-docker/server"  
      }  
    },
```
